
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
$validPages = ['home.php', 'team.php', 'prep.php', 'progress.php', 'immunotherapy.php', 'market.php', 'invest.php', 'contact.php', 'technology.php', 'news.php', 'videos.php', '200-billion-reached-in-cancer-treatment-spending.php', 'a-really-big-deal-universal-car-t-cell-platform.php', 'a-run-to-remember.php', 'allstar-joins-board-of-advisors.php', 'best-medical-center-joins-fight.php', 'bonus-shares-available-closing-soon.php', 'breakthrough-universal-cancer-vaccine.php', 'bringing-hope-to-the-masses.php', 'cancer-drug-shortage.php', 'cancer-epidemic-has-a-viable-solution.php', 'ceo-update-about-bonus-shares.php', 'closing-soon-only-3-weeks-left.php', 'cnn-reports-rise-of-cancer-in-women.php', 'critical-progress-in-children-cancer.php', 'do-not-miss-out-on-bonus-share.php', 'enjoy-the-perks.php', 'event.php', 'expanded-ucla-pipeline.php', 'explainer.php', 'explosion-of-attention-as-ceo-explains-the-mission.php', 'explosive-market-growth-affirmed.php', 'faqs.php', 'filings.php', 'going-viral-in-the-fight-against-cancer.php', 'harmful-side-effects-unnecessary.php', 'heartbreaking-stories-highlight-the-need-for-change.php', 'hope-for-pediatric-cancer.php', 'important-cancervax-team-meeting.php', 'important-ceo-update-about-bonus-shares.php', 'major-news-outlet-sounds-alaram.php', 'massive-market-opportunity.php', 'news-archive.php', 'news-commentary.php', 'offering.php', 'oppenheimer-moment-a-pivotal-meeting-at-ucla.php', 'perks.php', 'privacy-policy.php', 'recognized-by-leading-european-media-outlet.php', 'regainvest-backup-for-blank.php', 'research-progress-childrens-cancer.php', 'research-progress-expanded-pipeline-with-ucla.php', 'side-effects-unnecessary.php', 'single-news.php', 'single-video.php', 'stragtegy-for-success-detailed-by-ceo.php', 'subscriber-thankyou.php', 'taking-the-fight-to-cancer.php', 'taking-the-fight-to-children-cancer.php', 'terms-of-use.php', 'thank-you.php', 'troubling-cancer-increase-in-younger-americans.php', 'update-video-august-5-2025.php', 'webinar-feb-25-2025.php', 'webinar-may-31-2025.php', 'webinar.php', 'white-house-joins-cancer-fight.php', 'who-shares-important-breast-cancer-info.php', 'winning-research-arms-race'];

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
    include __DIR__ . '/../pages/' . $page;
} 

// Serve 404 page for invalid routes
else {
    include __DIR__ . '/../pages/404.php';
}