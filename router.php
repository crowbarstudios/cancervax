<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Keep non-production hosts out of search results and prevent their content
// from being served directly. This runs before static-file handling so the
// policy covers assets and routed pages alike.
$host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? ''));
$restrictedHosts = ['staging.cancervax.com', 'upgrade.cancervax.com'];

if (in_array($host, $restrictedHosts, true)) {
    header('X-Robots-Tag: noindex, nofollow, noarchive', true);
    header('Cache-Control: no-store, max-age=0', true);

    // Let crawlers explicitly know that the staging host has no public pages.
    if ($host === 'staging.cancervax.com' && $uri === '/robots.txt') {
        header('Content-Type: text/plain; charset=UTF-8', true);
        echo "User-agent: *\nDisallow: /\n";
        exit;
    }

    // Preserve legacy links while moving the upgrade host to production.
    if ($host === 'upgrade.cancervax.com') {
        $query = $_SERVER['QUERY_STRING'] ?? '';
        $destination = 'https://www.cancervax.com' . ($uri === '' ? '/' : $uri);
        if ($query !== '') {
            $destination .= '?' . $query;
        }
        header('Location: ' . $destination, true, 301);
        exit;
    }

    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8', true);
    echo "Not Found";
    exit;
}

// Serve existing static files directly (CSS, JS, images, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Route everything else to index.php
include __DIR__ . '/index.php';
