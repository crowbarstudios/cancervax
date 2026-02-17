<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

// Defensive: prevent undefined index errors on some servers (e.g. behind proxy/load balancer)
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestUriPath = parse_url($requestUri, PHP_URL_PATH);
$requestUriPath = $requestUriPath !== null ? $requestUriPath : '/';

$basePath = (strpos($host, 'localhost') !== false || $host === '127.0.0.1') ? '/cancervax' : '';
$baseUrl = $basePath; // For building links in pages (e.g. /team or /cancervax/team)
$path = trim(str_replace($basePath, '', $requestUriPath), '/');
$page = $path === '' ? 'home' : $path;

// For load Assets - handle HTTPS behind proxy (X-Forwarded-Proto)
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
$protocol = $isHttps ? 'https' : 'http';
$current_url = $protocol . '://' . $host;

$full_url = (strpos($host, 'localhost') !== false || $host === '127.0.0.1')
    ? $current_url . '/cancervax/'
    : $current_url . '/';


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/router.php';
include __DIR__ . '/includes/footer.php';
