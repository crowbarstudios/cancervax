<?php

// Only show errors in development
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
$isDev = true; // Always show errors in dev on Replit
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

$basePath = '';

// Get the requested URI and clean it
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestUri = parse_url($requestUri, PHP_URL_PATH);
$requestUri = $requestUri !== null ? $requestUri : '/';

$path = trim($requestUri, '/');

// Extract path segments
$pathParts = explode('/', $path);
$page = $pathParts[0] ?? '';

// Define valid static pages
$validPages = ['home', 'home-aug-28-a', 'home-aug-28-b', 'home-aug-28-c', 'home-aug-29', 'home-aug-30', 'home-aug-31', 'home-aug-31-grandma', 'home-sep-1', 'home-sep-2', 'team', 'prep', 'progress', 'progress2', 'progress-sep-8', 'immunotherapy', 'market', 'invest', 'contact', 'technology', 'technology-sep-10', 'news', 'videos', '$200-billion-reached-in-cancer-treatment-spending', 'a-really-big-deal-universal-car-t-cell-platform', 'a-run-to-remember', 'allstar-joins-board-of-advisors', 'best-medical-center-joins-fight', 'bonus-shares-available-closing-soon', 'breakthrough-universal-cancer-vaccine', 'bringing-hope-to-the-masses', 'cancer-drug-shortage', 'cancer-epidemic-has-a-viable-solution', 'cancer-survivor-stories', 'ceo-podcast', 'ceo-update-about-bonus-shares', 'closing-soon-only-3-weeks-left', 'cnn-reports-rise-of-cancer-in-women', 'critical-progress-in-children-cancer', 'do-not-miss-out-on-bonus-share', 'enjoy-the-perks', 'event', 'expanded-ucla-pipeline', 'explainer', 'explosion-of-attention-as-ceo-explains-the-mission', 'explosive-market-growth-affirmed', 'faqs', 'filings', 'going-viral-in-the-fight-against-cancer', 'harmful-side-effects-unnecessary', 'heartbreaking-stories-highlight-the-need-for-change', 'hope-for-pediatric-cancer', 'important-cancervax-team-meeting', 'important-ceo-update-about-bonus-shares', 'major-news-outlet-sounds-alaram', 'massive-market-opportunity', 'news-archive', 'news-commentary', 'offering', 'oppenheimer-moment-a-pivotal-meeting-at-ucla', 'perks', 'privacy-policy', 'recognized-by-leading-european-media-outlet', 'regainvest-backup-for-blank', 'research-progress-childrens-cancer', 'research-progress-expanded-pipeline-with-ucla', 'short-videos', 'side-effects-unnecessary', 'single-news', 'single-video', 'stragtegy-for-success-detailed-by-ceo', 'subscriber-thankyou', 'taking-the-fight-to-cancer', 'taking-the-fight-to-children-cancer', 'terms-of-use', 'thank-you', 'troubling-cancer-increase-in-younger-americans', 'update-video-august-5-2025', 'webinar-feb-25-2025', 'webinar-may-31-2025', 'webinar-august-6-2026', 'lifescience-review', 'webinar', 'white-house-joins-cancer-fight', 'who-shares-important-breast-cancer-info', 'winning-research-arms-race'];

// Dynamic video categories
$validPages = array_values(array_diff($validPages, ['immunotherapy']));
$videoCategories = ['news-commentary', 'ceo-podcast', 'short-videos'];


if ($path === 'single-news.php' && isset($_GET['id'])) {
    include __DIR__ . '/../pages/single-news.php';
    return;
}

// Reject extra segments rather than serving a valid page for an invalid URL.
if (count($pathParts) > 1 && !($page === 'videos' && count($pathParts) === 3 && in_array($pathParts[1], $videoCategories, true))) {
    include __DIR__ . '/../pages/404.php';
    return;
}

// Handle homepage request
if ($page === '') {
    include __DIR__ . '/../pages/home-sep-2.php';
} 


// Preserve the August 28 homepage as a separately addressable page while
// reusing the exact homepage markup and behavior.
elseif ($page === 'home-aug-28-a') {
    include __DIR__ . '/../pages/home-aug-28-a.php';
}

// Keep the B copy independently editable from the A homepage.
elseif ($page === 'home-aug-28-b') {
    include __DIR__ . '/../pages/home-aug-28-b.php';
}

// Keep the C copy independently editable from the A homepage.
elseif ($page === 'home-aug-28-c') {
    include __DIR__ . '/../pages/home-aug-28-c.php';
}

// Keep the August 29 copy independently editable from the C homepage.
elseif ($page === 'home-aug-29') {
    include __DIR__ . '/../pages/home-aug-29.php';
}

// Keep the August 30 copy independently editable from the August 29 homepage.
elseif ($page === 'home-aug-30') {
    include __DIR__ . '/../pages/home-aug-30.php';
}

// Keep the August 31 copy independently editable from the August 30 homepage.
elseif ($page === 'home-aug-31') {
    include __DIR__ . '/../pages/home-aug-31.php';
}

// Keep the September 1 impact clone independently addressable from the August 31 homepage.
elseif ($page === 'home-sep-1-impact') {
    include __DIR__ . '/../pages/home-sep-1-impact.php';
}

// Keep the people clone separately addressable while matching the impact page.
elseif ($page === 'home-sep-1-impact-people') {
    include __DIR__ . '/../pages/home-sep-1-impact-people.php';
}

// Keep the alternate people clone separately addressable.
elseif ($page === 'home-sep-1-impact-people-alternate') {
    include __DIR__ . '/../pages/home-sep-1-impact-people-alternate.php';
}

// Keep the Adrian copy separately addressable while matching the impact page.
elseif ($page === 'home-sep-1-adrian') {
    include __DIR__ . '/../pages/home-sep-1-adrian.php';
}

// Keep the September 2 clone independently addressable from the September 1 homepage.
elseif ($page === 'home-sep-2') {
    include __DIR__ . '/../pages/home-sep-2.php';
}

// Keep the grandma copy independently editable from the August 28 A homepage.
elseif ($page === 'home-aug-31-grandma') {
    include __DIR__ . '/../pages/home-aug-31-grandma.php';
}

// Canonical reference Technology page; retain the September design separately.
elseif ($page === 'technology') {
    include __DIR__ . '/../pages/technology.php';
}

// Promote the approved design while retaining /progress2 as an alias.
elseif ($page === 'progress') {
    include __DIR__ . '/../pages/progress2.php';
}

// Handle dynamic video category pages (e.g., /videos/news-commentary/slug)
elseif ($page === 'videos' && isset($pathParts[1]) && in_array($pathParts[1], $videoCategories) && isset($pathParts[2])) {
    $category = $pathParts[1];
    $_GET['slug'] = rawurldecode($pathParts[2]);
    $catalog = include __DIR__ . '/../data/podcast-data.php';
    $matches = array_filter($catalog, function ($entry) use ($category) {
        return ($entry['category'] ?? '') === $category
            && strcasecmp($entry['slug'] ?? '', $_GET['slug']) === 0;
    });
    if (!$matches) {
        include __DIR__ . '/../pages/404.php';
        return;
    }
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
