<?php
/**
 * Manual staging deployment only. Never mirrors directories or modifies Git.
 * Manifest paths recursively cover the approved website, not the repository.
 */
if (PHP_SAPI !== 'cli') { http_response_code(403); exit; }
umask(0077);
const STAGING_ROOT = '/home/up51j258kry3/staging.cancervax.com';
const REPOSITORY_ROOT = '/home/up51j258kry3/cancervax-staging-deploy';
const BACKUP_ROOT = '/home/up51j258kry3/cancervax-staging-backups';

function stopDeployment($message) { throw new RuntimeException($message); }
function readJson($file) {
    if (!is_file($file) || is_link($file)) stopDeployment('Missing or unsafe metadata file');
    $data = json_decode(file_get_contents($file), true);
    if (!is_array($data)) stopDeployment('Invalid JSON metadata');
    return $data;
}
function validHash($hash) { return is_string($hash) && preg_match('/^[a-f0-9]{64}$/D', $hash); }
function allowedPath($root, $relative) {
    if (is_link($root)) stopDeployment('Symlinked path root refused');
    if (!is_string($relative)
        || !preg_match('~^(?:assets/|components/|data/|includes/|pages/|index\.php$|router\.php$|logo\.png$)~', $relative)
        || preg_match('~(?:^|/)\.|[\x00-\x1f\\\\]|//|/$~', $relative)
        || preg_match('~(?:^|/)(?:node_modules|vendor|credentials|secrets|backups?|auth(?:entication)?|server-config)(?:/|$)~i', $relative)
        || preg_match('~(?:^|/)(?:config(?:uration)?|server[-_]config|credentials|secrets|auth|passwd|passwords?)(?:[.-]|$)|\.(?:env|pem|key|p12|pfx|sql|bak|log|ini|cnf)$~i', $relative)) {
        stopDeployment('Disallowed manifest path');
    }
    $path = $root;
    foreach (explode('/', $relative) as $part) {
        $path .= '/' . $part;
        if (is_link($path)) stopDeployment('Symlink refused: ' . $relative);
    }
    return $path;
}
function hashRegularFile($file) {
    if (is_link($file)) stopDeployment('Symlink refused');
    if (!file_exists($file)) return null;
    if (!is_file($file)) stopDeployment('Expected a regular file');
    $hash = hash_file('sha256', $file);
    if ($hash === false) stopDeployment('Cannot read file');
    return $hash;
}
function writeJournal($path, $value) {
    $temp = tempnam(dirname($path), '.journal-');
    if ($temp === false) stopDeployment('Cannot create journal');
    try {
        if (file_put_contents($temp, json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) === false
            || !chmod($temp, 0600) || !rename($temp, $path)) stopDeployment('Cannot save journal');
    } finally {
        if (file_exists($temp)) unlink($temp);
    }
}
function createParents($dir, $mode) {
    $missing = [];
    for ($p = $dir; !is_dir($p); $p = dirname($p)) {
        if (file_exists($p) || is_link($p)) stopDeployment('Parent path is not a directory');
        $missing[] = $p;
    }
    foreach (array_reverse($missing) as $p) {
        if (!mkdir($p, $mode) || !chmod($p, $mode)) stopDeployment('Cannot create directory');
    }
}
function replaceFile($source, $destination, $mode, $expectedHash) {
    createParents(dirname($destination), 0755);
    $temp = tempnam(dirname($destination), '.cvax-staging-');
    if ($temp === false) stopDeployment('Cannot create replacement file');
    try {
        if (!copy($source, $temp) || hashRegularFile($temp) !== $expectedHash) stopDeployment('Replacement integrity check failed');
        if (!chmod($temp, $mode) || !rename($temp, $destination)) stopDeployment('Atomic replacement failed');
    } finally {
        if (file_exists($temp)) unlink($temp);
    }
}

try {
    $command = $argv[1] ?? 'check';
    if (!in_array($command, ['check', 'deploy', 'rollback'], true)) stopDeployment('Use check, deploy or rollback');
    $source = realpath(__DIR__ . '/..');
    if ($source !== REPOSITORY_ROOT || realpath(REPOSITORY_ROOT) !== REPOSITORY_ROOT
        || getcwd() !== REPOSITORY_ROOT) stopDeployment('Run only from the confirmed isolated staging repository');
    if (!is_dir(REPOSITORY_ROOT . '/.git') || is_link(REPOSITORY_ROOT . '/.git')
        || is_link(REPOSITORY_ROOT . '/.git/HEAD')
        || trim((string) @file_get_contents(REPOSITORY_ROOT . '/.git/HEAD')) !== 'ref: refs/heads/dev-fixed') {
        stopDeployment('Source must be a normal clone checked out on dev-fixed');
    }
    if (realpath(STAGING_ROOT) !== STAGING_ROOT || !is_dir(STAGING_ROOT)
        || strpos(STAGING_ROOT . '/', $source . '/') === 0
        || strpos($source . '/', STAGING_ROOT . '/') === 0) stopDeployment('Incorrect or symlinked staging destination');
    if (!is_file(STAGING_ROOT . '/.htaccess') || is_link(STAGING_ROOT . '/.htaccess')) {
        stopDeployment('Existing staging .htaccess is required and will be preserved');
    }
    // The installed protection is never copied, rewritten, disabled or backed up into public space.
    $protectionHash = hashRegularFile(STAGING_ROOT . '/.htaccess');
    if (is_link(BACKUP_ROOT)) stopDeployment('Unsafe backup directory');
    if (!is_dir(BACKUP_ROOT) && !mkdir(BACKUP_ROOT, 0700)) stopDeployment('Cannot create private backup directory');
    if (realpath(BACKUP_ROOT) !== BACKUP_ROOT || !chmod(BACKUP_ROOT, 0700)) stopDeployment('Unsafe backup directory');
    $lockPath = BACKUP_ROOT . '/deployment.lock';
    if (is_link($lockPath)) stopDeployment('Unsafe lock file');
    $lock = fopen($lockPath, 'c');
    if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) stopDeployment('Another staging deployment or rollback is running');
    if (!chmod($lockPath, 0600)) stopDeployment('Cannot protect lock file');

    if ($command === 'rollback') {
        $name = $argv[2] ?? '';
        if (count($argv) !== 3 || !preg_match('/^release-[0-9TZ-]+-[a-f0-9]{8}$/D', $name)) stopDeployment('Provide the exact backup name printed by deployment');
        $backup = BACKUP_ROOT . '/' . $name;
        if (realpath($backup) !== $backup || !is_dir($backup)) stopDeployment('Backup missing or symlinked');
        $journal = readJson($backup . '/journal.json');
        if (($journal['version'] ?? null) !== 1 || ($journal['target'] ?? null) !== STAGING_ROOT
            || ($journal['repository'] ?? null) !== REPOSITORY_ROOT
            || !in_array($journal['state'] ?? '', ['backed_up', 'deployed', 'rolled_back'], true)
            || !is_array($journal['changes'] ?? null)) stopDeployment('Backup identity or state mismatch');
        $seen = [];
        foreach ($journal['changes'] as $change) {
            $path = $change['path'];
            $dest = allowedPath(STAGING_ROOT, $path);
            if (isset($seen[$path]) || !validHash($change['after'])
                || ($change['before'] !== null && !validHash($change['before']))
                || !is_int($change['mode']) || $change['mode'] < 0 || $change['mode'] > 0777) stopDeployment('Invalid rollback entry');
            $seen[$path] = true;
            $now = hashRegularFile($dest);
            if ($now !== $change['after'] && $now !== $change['before']) stopDeployment('Newer server edit blocks rollback: ' . $path);
            if ($change['before'] !== null && hashRegularFile(allowedPath($backup . '/files', $path)) !== $change['before']) stopDeployment('Backup integrity mismatch');
        }
        foreach (array_reverse($journal['changes']) as $change) {
            $dest = allowedPath(STAGING_ROOT, $change['path']);
            $now = hashRegularFile($dest);
            if ($now === $change['before']) continue;
            if ($now !== $change['after']) stopDeployment('Server file changed during rollback');
            if ($change['before'] === null) {
                if (!unlink($dest)) stopDeployment('Cannot remove release-added file');
            } else {
                replaceFile(allowedPath($backup . '/files', $change['path']), $dest, $change['mode'], $change['before']);
            }
        }
        if (hashRegularFile(STAGING_ROOT . '/.htaccess') !== $protectionHash) stopDeployment('Protection changed externally during rollback');
        $journal['state'] = 'rolled_back';
        writeJournal($backup . '/journal.json', $journal);
        echo "Staging rollback complete. Configuration, Git metadata and unrelated files were not modified.\n";
        exit(0);
    }
    if (count($argv) > 2) stopDeployment('Destination overrides are not permitted');
    $manifest = readJson(__DIR__ . '/staging-manifest.json');
    if (($manifest['version'] ?? null) !== 1 || ($manifest['repository'] ?? null) !== REPOSITORY_ROOT
        || ($manifest['target'] ?? null) !== STAGING_ROOT || !is_array($manifest['files'] ?? null)
        || count($manifest['files']) !== ($manifest['file_count'] ?? null)) stopDeployment('Invalid staging manifest');
    $changes = []; $seen = [];
    foreach ($manifest['files'] as $entry) {
        $path = $entry['path'];
        $src = allowedPath($source, $path);
        $dest = allowedPath(STAGING_ROOT, $path);
        if (isset($seen[$path]) || !validHash($entry['sha256'])
            || !array_key_exists('previous_sha256', $entry)
            || ($entry['previous_sha256'] !== null && !validHash($entry['previous_sha256']))) stopDeployment('Invalid or duplicate manifest entry');
        $seen[$path] = true;
        if (hashRegularFile($src) !== $entry['sha256']) stopDeployment('Candidate integrity mismatch: ' . $path);
        $before = hashRegularFile($dest);
        if ($before === $entry['sha256']) continue;
        if ($before !== null && (($entry['preserve_existing'] ?? false) || $before !== $entry['previous_sha256'])) {
            stopDeployment('Unrecognized server edit or protected-file collision: ' . $path);
        }
        $changes[] = ['path' => $path, 'before' => $before, 'after' => $entry['sha256'],
            'mode' => $before === null ? 0644 : (fileperms($dest) & 0777)];
    }
    echo count($manifest['files']) . ' candidate files verified; ' . count($changes) . " changes needed.\n";
    echo "Preserving .htaccess, .env, authentication/configuration files, old .git metadata and all unlisted paths.\n";
    if ($command === 'check' || !$changes) exit(0);
    $backup = BACKUP_ROOT . '/release-' . gmdate('Y-m-d\TH-i-s\Z') . '-' . bin2hex(random_bytes(4));
    if (!mkdir($backup, 0700)) stopDeployment('Cannot create backup');
    $journal = ['version' => 1, 'state' => 'preparing', 'repository' => REPOSITORY_ROOT, 'target' => STAGING_ROOT,
        'approved_commit' => $manifest['approved_commit'], 'changes' => $changes];
    writeJournal($backup . '/journal.json', $journal);
    // All originals are verified and backed up BEFORE the first website write.
    foreach ($changes as $change) {
        if ($change['before'] === null) continue;
        $dest = allowedPath($backup . '/files', $change['path']);
        createParents(dirname($dest), 0700);
        if (!copy(allowedPath(STAGING_ROOT, $change['path']), $dest)
            || hashRegularFile($dest) !== $change['before'] || !chmod($dest, 0600)) stopDeployment('Backup failed; no website files changed');
    }
    $journal['state'] = 'backed_up';
    writeJournal($backup . '/journal.json', $journal);
    echo 'Backup: ' . basename($backup) . "\n";
    foreach ($changes as $change) {
        $dest = allowedPath(STAGING_ROOT, $change['path']);
        if (hashRegularFile($dest) !== $change['before']) stopDeployment('Server file changed during deployment; backup retained');
        replaceFile(allowedPath($source, $change['path']), $dest, $change['mode'], $change['after']);
    }
    if (hashRegularFile(STAGING_ROOT . '/.htaccess') !== $protectionHash) stopDeployment('Protection changed externally during deployment');
    $journal['state'] = 'deployed';
    writeJournal($backup . '/journal.json', $journal);
    echo "Staging deployment complete. Verify the site and retain the private backup.\n";
} catch (Throwable $error) {
    fwrite(STDERR, 'STOP: ' . $error->getMessage() . "\n");
    exit(1);
}
