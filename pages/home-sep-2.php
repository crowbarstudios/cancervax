<?php
// September 2 clone of the September 1 homepage.
ob_start();
require __DIR__ . '/home-sep-1.php';
$homeSep2Page = ob_get_clean();

$breakingNewsHeadlineText = 'CancerVax Achieves Major<br>
                                        Milestone in Activating Human<br>
                                        Killer T-Cells Against Cancer<br>';
$breakingNewsHeadlineReplacement = 'Moderna and Merck Cancer Vaccine Success Is Good News for CancerVax<br>';
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
$breakingNewsLinkReplacement = '<a href="/single-news.php?id=53" class="relative">';
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
?>
<?php echo $homeSep2Page; ?>
<style>
    body.home-sep-2-page .home-aug-29-mobile-card-copy {
        font-size: clamp(1rem, 1.6vw, 1.4rem) !important;
        line-height: 1.35 !important;
    }

    body.home-sep-2-page .home-sep-2-read-more {
        display: block;
        margin-top: 0.75em;
        font-size: 80% !important;
        color: #ff1f24 !important;
    }

    body.home-sep-2-page .home-sep-1-partner-description {
        color: #000 !important;
        font-size: 15px !important;
    }

    @media (min-width: 1024px) and (max-width: 1279px) {
        body.home-sep-2-page .home-aug-31-grandma-mobile-hero::before {
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

        body.home-sep-2-page .home-aug-31-grandma-mobile-hero {
            background-position: 82% top !important;
        }

        body.home-sep-2-page .home-aug-31-grandma-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        body.home-sep-2-page .home-aug-31-grandma-mobile-hero > .container > div:first-child {
            max-width: 56%;
            margin-right: auto;
            margin-left: 0;
            text-align: left;
        }

        body.home-sep-2-page .home-aug-28-a-hero-title {
            font-size: 50px !important;
            line-height: 1.08;
        }

        body.home-sep-2-page .home-aug-28-a-hero-title-line {
            white-space: normal;
        }

        body.home-sep-2-page .home-aug-31-grandma-hero-copy-list {
            max-width: 60% !important;
        }
    }

    @media (min-width: 1024px) and (max-width: 1099px) {
        body.home-sep-2-page .home-aug-31-grandma-mobile-hero {
            background-position: 70% top !important;
        }

        body.home-sep-2-page .home-aug-31-grandma-hero-copy-list {
            max-width: 52% !important;
        }
    }
</style>