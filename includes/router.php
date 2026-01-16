
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost') {
    $basePath = '/cancervax'; 
} else {
    $basePath = '';
}

// Get the requested URI and clean it
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');

// Extract path segments
$pathParts = explode('/', $path);
$page = $pathParts[0] ?? '';

// Define valid static pages
$validPages = ['home', 'team', 'prep', 'progress', 'immunotherapy', 'market', 'invest', 'contact', 'technology', 'news', 'videos', '200-billion-reached-in-cancer-treatment-spending', 'a-really-big-deal-universal-car-t-cell-platform', 'a-run-to-remember', 'allstar-joins-board-of-advisors', 'best-medical-center-joins-fight', 'bonus-shares-available-closing-soon', 'breakthrough-universal-cancer-vaccine', 'bringing-hope-to-the-masses', 'cancer-drug-shortage', 'cancer-epidemic-has-a-viable-solution', 'ceo-update-about-bonus-shares', 'closing-soon-only-3-weeks-left', 'cnn-reports-rise-of-cancer-in-women', 'critical-progress-in-children-cancer', 'do-not-miss-out-on-bonus-share', 'enjoy-the-perks', 'event', 'expanded-ucla-pipeline', 'explainer', 'explosion-of-attention-as-ceo-explains-the-mission', 'explosive-market-growth-affirmed', 'faqs', 'filings', 'going-viral-in-the-fight-against-cancer', 'harmful-side-effects-unnecessary', 'heartbreaking-stories-highlight-the-need-for-change', 'hope-for-pediatric-cancer', 'important-cancervax-team-meeting', 'important-ceo-update-about-bonus-shares', 'major-news-outlet-sounds-alaram', 'massive-market-opportunity', 'offering', 'oppenheimer-moment-a-pivotal-meeting-at-ucla', 'perks', 'privacy-policy', 'recognized-by-leading-european-media-outlet', 'regainvest-backup-for-blank', 'research-progress-childrens-cancer', 'research-progress-expanded-pipeline-with-ucla', 'side-effects-unnecessary', 'stragtegy-for-success-detailed-by-ceo', 'subscriber-thankyou', 'taking-the-fight-to-cancer', 'taking-the-fight-to-children-cancer', 'terms-of-use', 'thank-you', 'troubling-cancer-increase-in-younger-americans', 'update-video-august-5-2025', 'webinar-feb-25-2025', 'webinar-may-31-2025', 'webinar', 'white-house-joins-cancer-fight', 'who-shares-important-breast-cancer-info', 'winning-research-arms-race'];

// Dynamic video categories
$videoCategories = ['news-commentary', 'ceo-podcast', 'short-videos'];


if (strpos($requestUri, 'single-news.php') !== false && isset($_GET['id'])) {
    include __DIR__ . '/../pages/single-news.php';
    exit;
}

// Handle homepage request
if ($page === '') {
    include __DIR__ . '/../pages/home.php';
} 

// Handle dynamic video category pages (e.g., /videos/news-commentary/slug)
elseif ($page === 'videos' && isset($pathParts[1]) && in_array($pathParts[1], $videoCategories) && isset($pathParts[2])) {
    $category = $pathParts[1];
    $_GET['slug'] = $pathParts[2];
    include __DIR__ . '/../pages/videos/' . $category . '/index.php';
} 

// Serve static pages
elseif (in_array($page, $validPages)) {
    include __DIR__ . '/../pages/' . $page . '.php';
} 

// Serve 404 page for invalid routes
else {
    include __DIR__ . '/../pages/404.php';
}