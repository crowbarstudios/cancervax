<?php
// September 2 clone of the September 1 homepage.
ob_start();
require __DIR__ . '/home-sep-1.php';
$homeSep2Page = ob_get_clean();

$breakingNewsHeadlineText = 'CancerVax Achieves Major<br>
                                        Milestone in Activating Human<br>
                                        Killer T-Cells Against Cancer<br>';
$breakingNewsHeadlineReplacement = 'CancerVax Successfully Kills Cancer Cells in Landmark Test<br>';
$breakingNewsHeadlineReplacementCount = substr_count($homeSep2Page, $breakingNewsHeadlineText);

if ($breakingNewsHeadlineReplacementCount !== 1) {
    throw new RuntimeException('Unable to update the home-sep-2 breaking-news headline.');
}

$homeSep2Page = str_replace($breakingNewsHeadlineText, $breakingNewsHeadlineReplacement, $homeSep2Page);

$readMoreText = '<br>
                                        CLICK HERE TO READ MORE';
$readMoreReplacement = '<br><span class="home-sep-2-read-more">CLICK HERE TO READ MORE</span>';
$readMoreReplacementCount = substr_count($homeSep2Page, $readMoreText);

if ($readMoreReplacementCount !== 1) {
    throw new RuntimeException('Unable to isolate the home-sep-2 read-more label.');
}

$homeSep2Page = str_replace($readMoreText, $readMoreReplacement, $homeSep2Page);

$headlineText = 'Developing A Revolutionary';
$headlineReplacement = 'Developing a Revolutionary';
$headlineReplacementCount = substr_count($homeSep2Page, $headlineText);

if ($headlineReplacementCount !== 1) {
    throw new RuntimeException('Unable to update the home-sep-2 headline capitalization.');
}

$homeSep2Page = str_replace($headlineText, $headlineReplacement, $homeSep2Page);

$breakingNewsLink = '<a href="/single-news.php?id=52" class="relative">';
$breakingNewsLinkReplacement = '<a href="/single-news.php?id=54" class="relative">';
$breakingNewsLinkReplacementCount = substr_count($homeSep2Page, $breakingNewsLink);

if ($breakingNewsLinkReplacementCount !== 1) {
    throw new RuntimeException('Unable to update the home-sep-2 breaking-news link.');
}

$homeSep2Page = str_replace($breakingNewsLink, $breakingNewsLinkReplacement, $homeSep2Page);

$developmentPartnersHeading = '<h2 class="mb-10 text-center text-[clamp(2rem,5vw,3rem)] font-normal uppercase leading-tight text-black sm:mb-12">Our Development Partners</h2>';
$developmentPartnersHeadingReplacement = '<div class="text-center max-w-4xl mx-auto mb-[30px]"><h3 class="text-black font-medium">Our Development Partners</h3></div>';
$developmentPartnersHeadingCount = substr_count($homeSep2Page, $developmentPartnersHeading);

if ($developmentPartnersHeadingCount !== 1) {
    throw new RuntimeException('Unable to match the home-sep-2 development partners heading to the scientific team style.');
}

$homeSep2Page = str_replace($developmentPartnersHeading, $developmentPartnersHeadingReplacement, $homeSep2Page);

$newsHighlightsHeading = '<h4 class="mb-9 text-xl font-medium text-black">News Highlights</h4>';
$newsHighlightsHeadingReplacement = '<div class="text-center max-w-4xl mx-auto mb-[30px]"><h3 class="text-black font-medium">News Highlights</h3></div>';
$newsHighlightsHeadingCount = substr_count($homeSep2Page, $newsHighlightsHeading);

if ($newsHighlightsHeadingCount !== 1) {
    throw new RuntimeException('Unable to match the home-sep-2 news highlights heading to the development partners style.');
}

$homeSep2Page = str_replace($newsHighlightsHeading, $newsHighlightsHeadingReplacement, $homeSep2Page);

// Keep September 1 untouched. Its reusable markup is adapted only inside this
// homepage's below-banner boundary; no reference rule may reach the webinar.
$homeSep2Page = str_replace(
    'class="team-intro-copy text-center text-custom-teal-300 font-medium"',
    'class="text-center text-4xl leading-none sm:text-[54px] text-custom-teal-300 font-medium"',
    $homeSep2Page
);
$homeSep2Page = str_replace('<a href="#">', '<a href="/team">', $homeSep2Page);
// The reusable legacy template classifies these as captions; the authoritative
// homepage uses its own partner-description treatment instead.
$homeSep2Page = str_replace(
    'class="caption-text mt-3 text-center text-[14px] leading-[1.45] text-[#526071]"',
    'class="home-sep-1-partner-description mt-3 text-center text-[14px] leading-[1.45] text-[#526071]"',
    $homeSep2Page
);
$homeSep2Page = preg_replace_callback('/<style>(.*?)<\/style>/s', static function ($match) {
    $css = preg_replace_callback('/(^|(?<=[{}]))\s*([^{}]+)\{/', static function ($rule) {
        $selector = trim($rule[2]);
        if (str_starts_with($selector, '@')) {
            return $rule[1] . "\n" . $selector . ' {';
        }
        $selectors = array_map(static fn ($part) => '#cvax-home-reference ' . trim($part), explode(',', $selector));
        return $rule[1] . "\n" . implode(",\n", $selectors) . ' {';
    }, $match[1]);
    return '<style>' . $css . '</style>';
}, $homeSep2Page);
// Freeze the four authoritative reference articles, independent of later news.
$newsStart = strpos($homeSep2Page, '<section class="bg-white pt-[70px]">');
if ($newsStart === false) {
    throw new RuntimeException('Unable to locate homepage reference news section.');
}
ob_start();
require __DIR__ . '/home-reference-news.php';
$homeSep2Page = substr($homeSep2Page, 0, $newsStart) . ob_get_clean();
?>
<section class="home-sep-2-webinar-banner" aria-labelledby="home-sep-2-webinar-title">
    <div class="container">
        <div class="home-sep-2-webinar-content">
            <h2 id="home-sep-2-webinar-title">CancerVax Successfully Kills Cancer Cells in Landmark Test</h2>
            <a class="home-sep-2-webinar-button" href="/single-news.php?id=54">
                <span>READ MORE</span>
                <svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
                    <path d="M5 12h13M13 6l6 6-6 6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<div id="cvax-home-reference">
<?php echo $homeSep2Page; ?>
<link rel="stylesheet" href="<?php echo $full_url; ?>assets/css/homepage-reference.css?v=1">
<?php // Newsletter is rendered once by includes/shared-footer.php. ?>
<style>
    body.home-sep-2-page .home-sep-2-webinar-banner {
        position: relative;
        overflow: hidden;
        padding: clamp(52px, 7vw, 96px) 20px;
        color: #ffffff;
        text-align: center;
        background-color: #173e45;
        background-image:
            linear-gradient(rgba(7, 48, 54, 0.18), rgba(7, 48, 54, 0.18)),
            url("<?php echo $full_url; ?>assets/images/home-webinar-glass-facets.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    body.home-sep-2-page .home-sep-2-webinar-content {
        position: relative;
        z-index: 1;
        max-width: 980px;
        margin: 0 auto;
    }

    body.home-sep-2-page .home-sep-2-webinar-content h2 {
        margin: 0 auto 18px;
        color: #ffffff;
        font-size: clamp(1.68rem, 4.16vw, 3.52rem);
        font-weight: 700;
        line-height: 1.08;
        letter-spacing: 0.01em;
        text-wrap: balance;
    }

    body.home-sep-2-page .home-sep-2-webinar-content p {
        max-width: 760px;
        margin: 0 auto 32px;
        color: #ffffff;
        font-size: clamp(1.05rem, 2vw, 1.45rem);
        line-height: 1.5;
        letter-spacing: 0.01em;
    }

    @media (max-width: 767px) {
        body.home-sep-2-page .home-sep-2-webinar-content p {
            text-align: center;
        }
    }

    body.home-sep-2-page .home-sep-2-webinar-button {
        display: inline-flex;
        position: relative;
        isolation: isolate;
        overflow: hidden;
        min-width: 190px;
        min-height: 64px;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 16px 30px;
        border: 1px solid rgba(255, 255, 255, 0.45);
        border-radius: 9999px;
        background: linear-gradient(135deg, #ff6265 0%, #ff252c 45%, #d70e19 100%);
        color: #ffffff;
        font-size: 1.25rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-decoration: none;
        box-shadow: 0 9px 24px rgba(181, 12, 24, 0.38), inset 0 1px 0 rgba(255, 255, 255, 0.38);
        transition: transform 180ms ease, box-shadow 180ms ease, filter 180ms ease;
    }

    body.home-sep-2-page .home-sep-2-webinar-button::before {
        position: absolute;
        z-index: 0;
        top: 0;
        left: -45%;
        width: 38%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        content: "";
        transform: skewX(-22deg);
        transition: left 420ms ease;
    }

    body.home-sep-2-page .home-sep-2-webinar-button span,
    body.home-sep-2-page .home-sep-2-webinar-button svg {
        position: relative;
        z-index: 1;
    }

    body.home-sep-2-page .home-sep-2-webinar-button svg {
        width: 20px;
        height: 20px;
        fill: none;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 2;
        transition: transform 180ms ease;
    }

    body.home-sep-2-page .home-sep-2-webinar-button:hover {
        transform: translateY(-3px);
        filter: saturate(1.08);
        box-shadow: 0 13px 30px rgba(181, 12, 24, 0.48), inset 0 1px 0 rgba(255, 255, 255, 0.48);
    }

    body.home-sep-2-page .home-sep-2-webinar-button:hover::before {
        left: 115%;
    }

    body.home-sep-2-page .home-sep-2-webinar-button:hover svg {
        transform: translateX(3px);
    }

    body.home-sep-2-page .home-sep-2-webinar-button:focus-visible {
        outline: 3px solid #ffffff;
        outline-offset: 4px;
    }

    @media (prefers-reduced-motion: reduce) {
        body.home-sep-2-page .home-sep-2-webinar-button,
        body.home-sep-2-page .home-sep-2-webinar-button::before,
        body.home-sep-2-page .home-sep-2-webinar-button svg {
            transition: none;
        }
    }

    #cvax-home-reference .home-sep-2-watch-short-video,
    #cvax-home-reference .home-aug-28-a-mobile-video .home-sep-2-watch-short-video {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: max-content;
        max-width: calc(100% - 24px);
        padding: 12px 22px !important;
        font-size: clamp(13px, 1.35vw, 18px) !important;
        line-height: 1.2 !important;
        letter-spacing: 0.08em !important;
        white-space: nowrap !important;
        border-radius: 9999px !important;
    }

    #cvax-home-reference .home-sep-2-watch-short-video i {
        flex: 0 0 auto;
        margin-right: 0 !important;
    }

    #cvax-home-reference .home-sep-2-watch-short-video:hover,
    #cvax-home-reference .home-sep-2-watch-short-video:focus-visible {
        background-color: #ff0000 !important;
        border-color: #ff0000 !important;
        color: #ffffff !important;
        box-shadow: none !important;
        filter: none !important;
    }

    #cvax-home-reference .home-aug-28-c-card-grid .home-aug-29-mobile-card-copy {
        font-size: clamp(1rem, 1.6vw, 1.4rem) !important;
        line-height: 1.35 !important;
    }

    #cvax-home-reference .home-sep-2-read-more {
        display: block;
        margin-top: 0.75em;
        font-size: 80% !important;
        color: #ff1f24 !important;
    }

    #cvax-home-reference .home-sep-1-partner-description {
        color: #000 !important;
        font-size: 15px !important;
    }

    @media (min-width: 1024px) and (max-width: 1279px) {
        #cvax-home-reference .home-aug-31-grandma-mobile-hero::before {
            position: absolute;
            inset: 0 auto 0 0;
            z-index: 0;
            width: 45%;
            background: linear-gradient(
                to right,
                #ffffff 0%,
                #ffffff 55%,
                rgba(255, 255, 255, 0) 100%
            );
            content: "";
            pointer-events: none;
        }

        #cvax-home-reference .home-aug-31-grandma-mobile-hero {
            background-position: 82% top !important;
        }

        #cvax-home-reference .home-aug-31-grandma-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        #cvax-home-reference .home-aug-31-grandma-mobile-hero > .container > div:first-child {
            max-width: 56%;
            margin-right: auto;
            margin-left: 0;
            text-align: left;
        }

        #cvax-home-reference .home-aug-28-a-hero-title {
            font-size: 50px !important;
            line-height: 1.08;
        }

        #cvax-home-reference .home-aug-28-a-hero-title-line {
            white-space: normal;
        }

        #cvax-home-reference .home-aug-31-grandma-hero-copy-list {
            max-width: 60% !important;
        }
    }

    @media (min-width: 1024px) and (max-width: 1099px) {
        #cvax-home-reference .home-aug-31-grandma-mobile-hero {
            background-position: 70% top !important;
        }

        #cvax-home-reference .home-aug-31-grandma-hero-copy-list {
            max-width: 52% !important;
        }
    }
</style>