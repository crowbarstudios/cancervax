<?php
/**
 * CancerVax guarded, allowlisted deployment. CLI only.
 * Run from a dedicated Git checkout OUTSIDE every public document root.
 * No directory mirroring, recursive copying, or broad deletion is used.
 */
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit;
}
umask(0077);
const LIVE_ROOT = '/home/up51j258kry3/public_html';
const REPOSITORY_ROOT = '/home/up51j258kry3/cancervax-production-deploy';
const BACKUP_ROOT = '/home/up51j258kry3/cancervax-production-backups';

function fail($message) { throw new RuntimeException($message); }
function jsonRead($path) {
    $value = json_decode(file_get_contents($path), true);
    if (!is_array($value)) fail('Invalid manifest: ' . basename($path));
    return $value;
}
function fileHash($path) {
    if (!file_exists($path)) return null;
    if (!is_file($path) || is_link($path)) fail('Not a regular file: ' . $path);
    return hash_file('sha256', $path);
}
function safePath($root, $relative) {
    if (!preg_match('~^(?:assets/|components/|data/|includes/|pages/|index\.php$|router\.php$|logo\.png$)~', $relative)
        || preg_match('~(?:^|/)\.|[\x00-\x1f\\\\]~', $relative)
        || preg_match('~(?:^|/)(?:node_modules|vendor|credentials|secrets)(?:/|$)~i', $relative)) {
        fail('Disallowed path in manifest');
    }
    $path = $root;
    foreach (explode('/', $relative) as $part) {
        $path .= '/' . $part;
        if (is_link($path)) fail('Symlink refused: ' . $relative);
    }
    return $path;
}
function writeJson($path, $value) {
    if (file_put_contents($path, json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) === false) fail('Cannot write deployment journal');
}
function installFile($source, $destination, $mode) {
    $dir = dirname($destination);
    $missing = [];
    for ($p = $dir; !is_dir($p); $p = dirname($p)) $missing[] = $p;
    foreach (array_reverse($missing) as $p) {
        if (!mkdir($p, 0755) || !chmod($p, 0755)) fail('Cannot create target directory');
    }
    $temp = tempnam($dir, '.cvax-release-');
    if ($temp === false) fail('Cannot create temporary target');
    try {
        if (!copy($source, $temp) || !chmod($temp, $mode) || !rename($temp, $destination)) fail('Atomic file replacement failed');
    } finally {
        if (file_exists($temp)) unlink($temp);
    }
}

try {
    $command = $argv[1] ?? 'check';
    if (!in_array($command, ['check', 'deploy', 'rollback'], true)) fail('Use check, deploy, or rollback');
    $target = $argv[2] ?? LIVE_ROOT;
    // Intentionally no environment-variable override of the production target.
    if ($target !== LIVE_ROOT || realpath($target) !== LIVE_ROOT) fail('Unexpected or symlinked live document root');
    $source = realpath(__DIR__ . '/..');
    if (!$source || $source === $target || strpos($source . '/', $target . '/') === 0
        || strpos($target . '/', $source . '/') === 0) {
        fail('Repository must be outside public_html and cannot contain the deployment target. Do not Update from Remote in the live directory.');
    }
    if (!is_file($target . '/.htaccess') || is_link($target . '/.htaccess')) fail('Production .htaccess must be verified and already exist; it will not be copied');
    if ($source !== REPOSITORY_ROOT || realpath(REPOSITORY_ROOT) !== REPOSITORY_ROOT) {
        fail('Only the confirmed cancervax-production-deploy repository may deploy');
    }
    $manifest = jsonRead(__DIR__ . '/manifest.json');
    if (is_link(BACKUP_ROOT)) fail('Backup directory cannot be a symlink');
    if (!is_dir(BACKUP_ROOT) && !mkdir(BACKUP_ROOT, 0700, true)) fail('Cannot create private backup directory');
    if (realpath(BACKUP_ROOT) !== BACKUP_ROOT) fail('Unexpected backup directory');
    $lock = fopen(BACKUP_ROOT . '/deployment.lock', 'c');
    if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) fail('Another deployment or rollback is running');

    if ($command === 'rollback') {
        $name = $argv[3] ?? '';
        if (!preg_match('/^release-[0-9TZ-]+-[a-f0-9]{8}$/', $name)) fail('Provide the backup name printed by deployment');
        $backup = BACKUP_ROOT . '/' . $name;
        if (!is_dir($backup) || is_link($backup)) fail('Backup not found');
        $journal = jsonRead($backup . '/journal.json');
        if ($journal['target'] !== $target) fail('Backup target mismatch');
        // Preflight EVERYTHING before restoring anything.
        foreach ($journal['changes'] as $change) {
            $dest = safePath($target, $change['path']);
            $now = fileHash($dest);
            if ($now !== $change['after'] && $now !== $change['before']) fail('File changed since deployment; manual review required: ' . $change['path']);
            if ($change['before'] !== null && fileHash(safePath($backup . '/files', $change['path'])) !== $change['before']) fail('Backup integrity check failed');
        }
        foreach (array_reverse($journal['changes']) as $change) {
            $dest = safePath($target, $change['path']);
            if (fileHash($dest) === $change['before']) continue;
            if ($change['before'] === null) {
                if (is_file($dest) && !unlink($dest)) fail('Cannot remove release-added file');
            } else {
                installFile(safePath($backup . '/files', $change['path']), $dest, $change['mode']);
            }
        }
        $journal['state'] = 'rolled_back';
        writeJson($backup . '/journal.json', $journal);
        echo "Rollback complete. Production configuration and unrelated files were untouched.\n";
        exit(0);
    }

    $changes = [];
    foreach ($manifest['files'] as $entry) {
        $src = safePath($source, $entry['path']);
        $dest = safePath($target, $entry['path']);
        if (fileHash($src) !== $entry['sha256']) fail('Candidate integrity mismatch: ' . $entry['path']);
        $before = fileHash($dest);
        if ($before === $entry['sha256']) continue;
        // Existing server edits and collisions must never be silently overwritten.
        if ($before !== null && $before !== $entry['previous_sha256']) fail('Production-only edit or file collision: ' . $entry['path']);
        $changes[] = ['path' => $entry['path'], 'before' => $before, 'after' => $entry['sha256'],
            'mode' => $before === null ? 0644 : (fileperms($dest) & 0777)];
    }
    foreach ($manifest['retired'] as $entry) {
        $dest = safePath($target, $entry['path']);
        $before = fileHash($dest);
        if ($before === null) continue;
        if ($before !== $entry['previous_sha256']) fail('Retired file contains server edits; manual review required: ' . $entry['path']);
        $changes[] = ['path' => $entry['path'], 'before' => $before, 'after' => null, 'mode' => fileperms($dest) & 0777];
    }
    echo count($manifest['files']) . " candidate files verified; " . count($changes) . " changes needed.\n";
    echo "Preserving .htaccess, environment files, authentication files, and all unlisted files/directories.\n";
    if ($command === 'check' || !$changes) exit(0);
    $backup = BACKUP_ROOT . '/release-' . gmdate('Y-m-d\TH-i-s\Z') . '-' . bin2hex(random_bytes(4));
    if (!mkdir($backup, 0700)) fail('Cannot create backup');
    $journal = ['state' => 'preparing', 'target' => $target, 'stage_commit' => $manifest['stage_commit'], 'changes' => $changes];
    writeJson($backup . '/journal.json', $journal);
    // Back up every replaced/retired file before any live file is changed.
    foreach ($changes as $change) {
        if ($change['before'] === null) continue;
        $dest = safePath($backup . '/files', $change['path']);
        if (!is_dir(dirname($dest)) && !mkdir(dirname($dest), 0700, true)) fail('Cannot create backup subdirectory');
        if (!copy(safePath($target, $change['path']), $dest) || fileHash($dest) !== $change['before']) fail('Backup failed; no live files changed');
        chmod($dest, 0600);
    }
    $journal['state'] = 'backed_up';
    writeJson($backup . '/journal.json', $journal);
    echo "Backup: " . basename($backup) . "\n";
    foreach ($changes as $change) {
        $dest = safePath($target, $change['path']);
        if (fileHash($dest) !== $change['before']) fail('Live file changed during deployment; stop and use the backup journal');
        if ($change['after'] === null) {
            if (!unlink($dest)) fail('Could not retire file');
        } else {
            installFile(safePath($source, $change['path']), $dest, $change['mode']);
        }
    }
    $journal['state'] = 'deployed';
    writeJson($backup . '/journal.json', $journal);
    echo "Deployment complete. Retain the backup and verify the website before declaring launch complete.\n";
} catch (Throwable $e) {
    fwrite(STDERR, "STOP: " . $e->getMessage() . "\n");
    exit(1);
}
