<?php
// Dedicated Adrian copy of the current impact page.
ob_start();
require __DIR__ . '/home-sep-1-impact.php';
$adrianPage = ob_get_clean();

$adrianTeamPortraits = [
    'george.jpg',
    'adam-grant.jpg',
    'sumant-ramachandra.jpg',
    'gordon-ringold.jpg',
    'mark-davis.jpg',
    'george-kemble.jpg',
    'lakey.jpg',
    'steven-warner.jpg',
    'matthew-spear.jpg',
    'amit-indap.jpg',
];

foreach ($adrianTeamPortraits as $portraitFilename) {
    $portraitStem = pathinfo($portraitFilename, PATHINFO_FILENAME);
    $adrianPage = str_replace(
        'assets/images/home-aug-28-a/' . $portraitFilename,
        'assets/images/home-sep-1-adrian-team/' . $portraitStem . '-gray.png',
        $adrianPage
    );
}

$homeAug29CardGrid = <<<HTML
<div class="home-aug-28-c-card-grid relative grid grid-cols-1 md:grid-cols-3 gap-3 items-stretch">
    <a href="/lifescience-review" class="relative">
        <div class="relative rounded-[26px] bg-transparent p-[2px]">
            <div class="rounded-[24px] bg-white p-3 sm:p-4">
                <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-color: #f1f1f1;">
                    <div class="home-aug-28-c-card-label-wrap">
                        <span class="pointer-events-none relative z-10 shrink-0 scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">Learn More</span>
                    </div>
                    <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                        <div class="home-aug-29-mobile-card-copy w-full text-center text-black" style="font-family: 'Public Sans', sans-serif; font-size: clamp(0.85rem, 1.35vw, 1.15rem); font-weight: 600; line-height: 1.25; transform: translateY(-20px);">
                            CancerVax Named a Top<br>
                            Preclinical Biotech Company<br>
                            of 2026 by Life Sciences<br>
                            Review
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="/single-news.php?id=52" class="home-aug-28-c-short-video-card relative">
        <div class="relative rounded-[26px] bg-transparent p-[2px]">
            <div class="rounded-[24px] bg-white p-3 sm:p-4">
                <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-color: #f1f1f1;">
                    <div class="home-aug-28-c-card-label-wrap">
                        <span class="pointer-events-none relative z-10 shrink-0 scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">BREAKING NEWS</span>
                    </div>
                    <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                        <div class="home-aug-29-mobile-card-copy w-full text-center text-black" style="font-family: 'Public Sans', sans-serif; font-size: clamp(0.9rem, 1.35vw, 1.15rem); font-weight: 600; line-height: 1.25; transform: translateY(-20px);">
                            CancerVax Achieves Major<br>
                            Milestone in Activating Human<br>
                            Killer T-Cells Against Cancer<br>
                            CLICK HERE TO READ MORE
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="https://www.youtube.com/watch?v=gP-LNnxOmYA" class="relative popup-youtube">
        <div class="relative rounded-[26px] bg-transparent p-[2px]">
            <div class="rounded-[24px] bg-white p-3 sm:p-4">
                <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-color: #f1f1f1;">
                    <div class="home-aug-28-c-card-label-wrap">
                        <span class="pointer-events-none relative z-10 shrink-0 scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">Watch Video</span>
                    </div>
                    <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                        <div class="home-aug-29-mobile-card-copy w-full text-center text-black" style="font-family: 'Public Sans', sans-serif; font-size: clamp(0.85rem, 1.45vw, 1.15rem); font-weight: 600; line-height: 1.25; transform: translateY(-20px);">
                            LIVE WEBINAR<br>
                            CancerVax Announces<br>
                            Successful Activation of Killer T&#8209;Cells<br>
                            THURSDAY AUGUST 6TH, 2026
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
HTML;

$adrianPage = preg_replace(
    '/<div class="home-aug-28-c-card-grid relative grid grid-cols-1 md:grid-cols-3 gap-3 items-stretch">.*?(?=\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/section>)/s',
    $homeAug29CardGrid,
    $adrianPage,
    1,
    $cardGridReplacementCount
);

if ($cardGridReplacementCount !== 1) {
    throw new RuntimeException('Unable to replace the Adrian card grid with the home-aug-29 version.');
}

// Newsletter removal is no longer a page-specific transform: the source
// templates now defer to the single shared footer on every route.

$adrianPage = str_replace(
    'Developing A Revolutionary<br><span class="home-aug-28-c-story-title-second-line">Cancer Treatment</span>',
    'Developing a Revolutionary<br><span class="home-aug-28-c-story-title-second-line">Cancer Treatment</span>',
    $adrianPage
);

$adrianPage .= <<<'HTML'
<style>
    @import url("https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap");

    body.home-sep-1-adrian-page > .sticky > .bg-custom-teal-100 {
        display: none;
    }

    body.home-sep-1-adrian-page > .sticky {
        border-bottom-width: 0;
    }

    body.home-sep-1-adrian-page > .sticky img[alt="Cancervax"] {
        filter: brightness(0);
    }

    body.home-sep-1-adrian-page > .sticky a[href="/"] {
        max-width: 152px !important;
    }

    body.home-sep-1-adrian-page .home-aug-29-story-body-layout {
        grid-template-columns: minmax(0, 1fr);
    }

    body.home-sep-1-adrian-page .home-aug-29-story-body-media {
        display: none;
    }

    body.home-sep-1-adrian-page .home-aug-29-story-body-layout > ul {
        width: 85%;
    }

    body.home-sep-1-adrian-page,
    body.home-sep-1-adrian-page *:not(i[class*="fa-"]) {
        font-family: "Public Sans", sans-serif !important;
    }

    body.home-sep-1-adrian-page .home-aug-28-c-story-title {
        background-color: #FFFFFF;
        background-image: none;
        min-height: 571.3px;
        padding-left: 44px !important;
    }

    body.home-sep-1-adrian-page .home-aug-28-c-story-title h1 {
        color: #000000 !important;
        font-size: clamp(2.652rem, 5.7035vw, 5.967rem) !important;
        font-weight: 400 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        text-align: left !important;
    }

    body.home-sep-1-adrian-page .home-aug-28-c-story-body {
        background: #000000 !important;
        padding-left: 44px !important;
    }

    body.home-sep-1-adrian-page .home-aug-28-c-story-body .home-aug-29-story-body-layout > ul {
        width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    body.home-sep-1-adrian-page section.bg-team-first {
        background-image: none !important;
    }

    body.home-sep-1-adrian-page section.bg-team-first h2 {
        color: #000000 !important;
        font-size: clamp(1.5rem, 4vw, 2.7rem) !important;
    }

    body.home-sep-1-adrian-page .home-sep-1-development-partners h2 {
        text-transform: lowercase !important;
    }

    @media (max-width: 767px) {
        body.home-sep-1-adrian-page .home-aug-28-c-story-title {
            min-height: 462.9px;
        }

        body.home-sep-1-adrian-page .home-aug-28-c-story-title h1 {
            font-size: clamp(2.0825rem, 8.925vw, 3.179rem) !important;
        }
    }

    @media (max-width: 639px) {
        body.home-sep-1-adrian-page .home-aug-28-c-story-title,
        body.home-sep-1-adrian-page .home-aug-28-c-story-body {
            padding-left: 22px !important;
        }
    }

    @media (min-width: 640px) {
        body.home-sep-1-adrian-page > .sticky a[href="/"] {
            max-width: 220px !important;
        }
    }
</style>
HTML;

echo $adrianPage;