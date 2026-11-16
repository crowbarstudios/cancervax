<?php
/**
 * Presentation-only allowlist for older PUBLIC pages.
 * Do not use this to dispatch requests, redirect, or change status codes.
 * Header and footer deliberately remain outside the content boundary.
 */
$cvPublicRoute = trim((string) $requestUriPath, '/');
$cvPublicParts = explode('/', $cvPublicRoute);
$cvPublicFirst = $cvPublicParts[0];
$cvPublicGroup = null;
$cvPublicGroups = [
    'legal' => ['privacy-policy', 'terms-of-use'],
    'collection' => ['ceo-podcast', 'news-commentary', 'short-videos', 'cancer-survivor-stories'],
    'faq' => ['faqs'],
    'filings' => ['filings'],
    'utility' => ['perks', 'offering', 'prep', 'subscriber-thankyou'],
    'video' => [
        'single-video', 'event', 'explainer', 'webinar', 'expanded-ucla-pipeline',
        'update-video-august-5-2025', 'webinar-feb-25-2025',
        'webinar-may-31-2025', 'webinar-august-6-2026',
    ],
    'campaign' => [
        '$200-billion-reached-in-cancer-treatment-spending',
        'a-really-big-deal-universal-car-t-cell-platform', 'a-run-to-remember',
        'allstar-joins-board-of-advisors', 'best-medical-center-joins-fight',
        'bonus-shares-available-closing-soon', 'breakthrough-universal-cancer-vaccine',
        'bringing-hope-to-the-masses', 'cancer-drug-shortage',
        'cancer-epidemic-has-a-viable-solution', 'ceo-update-about-bonus-shares',
        'closing-soon-only-3-weeks-left', 'cnn-reports-rise-of-cancer-in-women',
        'critical-progress-in-children-cancer', 'do-not-miss-out-on-bonus-share',
        'enjoy-the-perks', 'explosion-of-attention-as-ceo-explains-the-mission',
        'explosive-market-growth-affirmed', 'going-viral-in-the-fight-against-cancer',
        'harmful-side-effects-unnecessary', 'heartbreaking-stories-highlight-the-need-for-change',
        'hope-for-pediatric-cancer', 'important-cancervax-team-meeting',
        'important-ceo-update-about-bonus-shares', 'major-news-outlet-sounds-alaram',
        'massive-market-opportunity', 'oppenheimer-moment-a-pivotal-meeting-at-ucla',
        'recognized-by-leading-european-media-outlet', 'research-progress-childrens-cancer',
        'research-progress-expanded-pipeline-with-ucla', 'side-effects-unnecessary',
        'stragtegy-for-success-detailed-by-ceo', 'taking-the-fight-to-cancer',
        'taking-the-fight-to-children-cancer', 'troubling-cancer-increase-in-younger-americans',
        'white-house-joins-cancer-fight', 'who-shares-important-breast-cancer-info',
        'winning-research-arms-race',
    ],
];

foreach ($cvPublicGroups as $cvGroup => $cvRoutes) {
    if (in_array($cvPublicFirst, $cvRoutes, true)) {
        $cvPublicGroup = $cvGroup;
        break;
    }
}

if ($cvPublicFirst === 'videos'
    && isset($cvPublicParts[1], $cvPublicParts[2])
    && in_array($cvPublicParts[1], ['news-commentary', 'ceo-podcast', 'short-videos'], true)) {
    $cvPublicGroup = 'video';
}

/*
 * Exclusions are explicit, including drafts. Unknown paths receive only the
 * 404 presentation; this does not change the router's existing fallthrough.
 * Checking the first segment mirrors the router's static-page behavior.
 */
$cvPublicProtected = [
    '', 'team', 'technology', 'progress', 'progress2', 'market', 'news', 'news-archive',
    'videos', 'invest', 'contact', 'thank-you', 'single-news', 'single-news.php',
    'progress-sep-8', 'technology-sep-10', 'regainvest-backup-for-blank', 'lifescience-review',
    'immunotherapy', 'immunotherapy-nov14z',
];
$cvPublicIsSingleNews = strpos($cvPublicRoute, 'single-news.php') !== false && isset($_GET['id']);
$cvPublicIsProtected = in_array($cvPublicFirst, $cvPublicProtected, true)
    || strpos($cvPublicFirst, 'home') === 0;
if ($cvPublicIsSingleNews || ($cvPublicIsProtected && $cvPublicGroup !== 'video')) {
    $cvPublicGroup = null;
} elseif (!$cvPublicIsProtected && $cvPublicGroup === null) {
    $cvPublicGroup = 'not-found';
}

$cvPublicClasses = $cvPublicGroup === null ? '' : 'cv-public--' . $cvPublicGroup;
if ($cvPublicFirst === 'prep') {
    $cvPublicClasses .= ' cv-public--prep';
}
