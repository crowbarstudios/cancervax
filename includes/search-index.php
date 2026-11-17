<?php
// Canonical public URLs only: omit preview copies, retired pages and confirmations.
$canonicalOrigin = 'https://cancervax.com';
if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=UTF-8');
    echo "User-agent: *\nAllow: /\n\nSitemap: {$canonicalOrigin}/sitemap.xml\n";
    return;
}
header('Content-Type: application/xml; charset=UTF-8');
$urls = ['/', '/team', '/technology', '/progress', '/market', '/news', '/news-archive',
    '/videos', '/invest', '/contact', '/privacy-policy', '/terms-of-use'];
foreach (['news-data.php', 'news-data-old.php'] as $source) {
    foreach (include __DIR__ . '/../data/' . $source as $item) {
        $urls[] = '/single-news.php?id=' . rawurlencode($item['id']);
    }
}
foreach (include __DIR__ . '/../data/podcast-data.php' as $item) {
    if (!empty($item['slug']) && in_array($item['category'] ?? '', ['news-commentary', 'ceo-podcast', 'short-videos'], true)) {
        $urls[] = '/videos/' . $item['category'] . '/' . str_replace('%21', '!', rawurlencode($item['slug']));
    }
}
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach (array_unique($urls) as $url) {
    echo '  <url><loc>' . htmlspecialchars($canonicalOrigin . $url, ENT_XML1 | ENT_QUOTES, 'UTF-8') . "</loc></url>\n";
}
echo "</urlset>\n";
