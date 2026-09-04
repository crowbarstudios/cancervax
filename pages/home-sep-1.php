<?php
$videos = include __DIR__ . '/../data/carousel-videos.php';
$news = include __DIR__ . '/../data/news-data.php'; ?>

<style>
    .home-aug-28-a-hero-title {
        font-size: 40.8px !important;
    }

    @media (min-width: 640px) {
        .home-aug-28-a-hero-title {
            font-size: 61.2px !important;
        }
    }

    @media (min-width: 1280px) {
        .home-aug-28-a-hero-title {
            font-size: 78.54px !important;
        }
    }

    .home-aug-28-a-hero-title-line {
        display: block;
        white-space: nowrap;
    }

    @media (min-width: 768px) {
        body > .sticky > .bg-custom-teal-100 .theme-btn.orange-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: 0;
            transform: translate(-50%, -50%);
        }

        body > .sticky > .bg-custom-teal-100 .container-fluid > .relative {
            transform: translateY(9px);
        }
    }

    .home-aug-28-a-hero-video-block {
        top: 28px;
    }

    .home-aug-28-a-mobile-video {
        margin-bottom: 48px;
    }

    .home-aug-28-a-mobile-video img {
        display: block;
        width: 100%;
        height: auto;
    }

    .home-aug-28-c-card-label-wrap {
        display: flex;
        flex: 0 0 auto;
        align-items: center;
        justify-content: center;
        padding-top: 12px;
        padding-bottom: 28px;
    }

    @media (max-width: 767px) {
        .home-aug-28-a-hero-title {
            font-size: 32px !important;
            transform: translateY(8px);
        }

        .home-aug-28-a-mobile-hero {
            height: 320px !important;
            background-image: url("<?php echo $full_url; ?>assets/images/home-banner-mobile-grandma.png") !important;
            background-size: cover;
            background-position: center 50px;
        }

        .home-aug-31-grandma-mobile-hero::before {
            position: absolute;
            inset: 0 0 auto;
            z-index: 0;
            height: 140px;
            background: linear-gradient(to bottom, #ffffff 0%, rgba(255, 255, 255, 0.88) 35%, rgba(255, 255, 255, 0.38) 70%, rgba(255, 255, 255, 0) 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-31-grandma-mobile-hero::after {
            position: absolute;
            inset: auto 0 0;
            z-index: 0;
            height: 16px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-31-grandma-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        .home-aug-31-grandma-mobile-content {
            display: flex;
            flex-direction: column;
            padding-top: 16px;
        }

        .home-aug-31-grandma-mobile-bullets {
            order: 1;
            margin-bottom: 32px;
        }

        .home-aug-31-grandma-mobile-video {
            order: 2;
        }

        .home-aug-28-a-hero-video-block {
            display: none;
        }

        .home-aug-28-a-mobile-video .theme-btn {
            top: 50%;
            bottom: auto;
            left: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            max-width: calc(100% - 24px);
            padding: 9px 14px;
            border-radius: 9999px;
            font-size: 12px !important;
            line-height: 1.1;
            white-space: nowrap;
            transform: translate(-50%, -50%);
        }

        .home-aug-28-a-mobile-video .theme-btn span {
            white-space: nowrap;
        }
    }

    @media (min-width: 768px) and (max-width: 1279px) {
        .home-aug-28-a-mobile-hero {
            height: auto !important;
            min-height: 850px;
        }
    }

    @media (min-width: 768px) {
        .home-aug-28-a-hero-video-block {
            width: 225.25px;
            max-width: 225.25px;
            margin-top: 68px;
        }

        .home-aug-28-a-hero-video-block h2 {
            font-size: 18px !important;
            line-height: 1.25;
            margin-bottom: 8px;
        }

        .home-aug-28-a-hero-video-block > div {
            width: 100%;
            max-width: 100%;
        }

        .home-aug-28-a-hero-video-block > div > .theme-btn {
            top: 50%;
            bottom: auto;
            left: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transform: translate(-50%, -50%);
        }
    }

    @media (min-width: 1024px) {
        .home-aug-28-a-hero-video-block {
            width: 364.89px;
            max-width: 364.89px;
        }
    }

    @media (min-width: 1024px) and (max-width: 1279px) {
        .home-aug-31-grandma-mobile-hero {
            background-image: url("<?php echo $full_url; ?>assets/images/home-banner.jpg") !important;
            background-size: auto 92% !important;
            background-position: right top !important;
            background-repeat: no-repeat;
            background-color: #ffffff;
        }

        .home-aug-31-grandma-mobile-hero::after {
            position: absolute;
            inset: auto 0 0;
            z-index: 0;
            height: 125px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.72) 58%, #ffffff 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-31-grandma-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        .home-aug-31-grandma-mobile-hero > .container > div:first-child {
            transform: translateY(-16px);
        }

        .home-sep-1-team-layout .container {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            align-items: start;
            gap: 24px;
        }

        .home-sep-1-team-layout .home-sep-1-team-group,
        .home-sep-1-team-layout .home-sep-1-team-grid {
            display: contents;
        }

        .home-sep-1-team-layout .container > .text-center {
            grid-column: 1 / -1;
        }

        .home-sep-1-team-layout .team-box {
            grid-column: span 1 !important;
            margin-right: auto;
            margin-left: auto;
        }

        .home-sep-1-development-partners-bottom > article:last-child {
            grid-column: 1 / -1;
            width: calc(50% - 0.625rem);
            justify-self: center;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .home-aug-28-a-hero-title {
            font-size: 48px !important;
        }

        .home-aug-28-a-hero-video-block > div > .theme-btn {
            width: max-content;
            max-width: calc(100% - 20px);
            padding: 8px 16px;
            border-radius: 9999px;
            font-size: 11px !important;
            line-height: 1.15;
            letter-spacing: 0.08em;
            white-space: nowrap;
            background-color: #ff1f24 !important;
            border-color: #ff1f24 !important;
            color: #ffffff !important;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
        }

        .home-aug-28-a-hero-video-block > div > .theme-btn span {
            white-space: nowrap;
        }

        .home-aug-28-c-card-grid {
            gap: 16px;
        }

        .home-aug-28-c-card-grid > a > div > div {
            padding: 8px;
        }

        .home-aug-28-c-card-grid > a > div > div > div {
            aspect-ratio: 1 / 1;
            padding: 12px;
            border-radius: 18px;
        }

        .home-aug-28-c-card-grid .home-aug-28-c-card-label-wrap {
            padding-top: 0;
            padding-bottom: 12px;
        }

        .home-aug-28-c-card-grid .home-aug-28-c-card-label-wrap span {
            transform: none !important;
            padding: 8px 16px;
            font-size: 11px;
            line-height: 1.15;
            letter-spacing: 0.08em;
            background-color: #ff1f24 !important;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
        }

        .home-aug-28-c-card-grid .home-aug-29-mobile-card-copy {
            transform: none !important;
            font-size: 12px !important;
            line-height: 1.2 !important;
        }

        .home-aug-28-c-card-grid > a:nth-child(1) img {
            max-width: 82%;
            max-height: 74%;
        }

        .home-aug-28-c-card-grid > a:nth-child(3) img {
            width: 82%;
            max-height: 65%;
            transform: none !important;
        }

        .home-sep-1-team-layout .container {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            align-items: start;
            gap: 24px;
        }

        .home-sep-1-team-layout .home-sep-1-team-group,
        .home-sep-1-team-layout .home-sep-1-team-grid {
            display: contents;
        }

        .home-sep-1-team-layout .container > .text-center {
            grid-column: 1 / -1;
        }

        .home-sep-1-team-layout .team-box {
            grid-column: span 1 !important;
            margin-right: auto;
            margin-left: auto;
        }

        .home-sep-1-development-partners-bottom > article:last-child {
            grid-column: 1 / -1;
            width: calc(50% - 0.625rem);
            justify-self: center;
        }

        .home-aug-28-a-mobile-hero {
            height: 440px !important;
            min-height: 0 !important;
            background-image: url("<?php echo $full_url; ?>assets/images/home-banner-tablet-portrait-grandma.png") !important;
            background-size: cover;
            background-position: center 58px !important;
        }

        .home-aug-31-grandma-mobile-hero::before {
            position: absolute;
            inset: 0 0 auto;
            z-index: 0;
            height: 170px;
            background: linear-gradient(to bottom, #ffffff 0%, rgba(255, 255, 255, 0.86) 38%, rgba(255, 255, 255, 0.3) 72%, rgba(255, 255, 255, 0) 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-31-grandma-mobile-hero::after {
            position: absolute;
            inset: auto 0 0;
            z-index: 0;
            height: 28px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.35) 55%, rgba(255, 255, 255, 0.9) 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-31-grandma-mobile-hero > .container > div:first-child {
            padding-top: 36px !important;
        }

        .home-aug-28-a-hero-title {
            transform: translateY(-30px) !important;
        }

        .home-aug-31-grandma-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        .home-aug-31-grandma-mobile-hero .home-aug-28-a-diamond-list,
        .home-aug-31-grandma-mobile-hero .home-aug-28-a-hero-video-block {
            display: none !important;
        }

        .home-sep-1-responsive-content {
            display: block !important;
        }

        .home-sep-1-responsive-content .home-aug-31-grandma-mobile-content {
            display: flex;
            flex-direction: column;
            padding-top: 32px;
        }

        .home-sep-1-responsive-content .home-aug-31-grandma-mobile-bullets {
            order: 1;
            max-width: 100%;
            margin-bottom: 32px;
        }

        .home-sep-1-responsive-content .home-aug-31-grandma-mobile-video {
            order: 2;
            margin-bottom: 48px;
        }

        .home-sep-1-responsive-content .home-aug-31-grandma-mobile-video > div {
            width: 85%;
            max-width: none;
            margin-right: auto;
            margin-left: auto;
        }

        .home-sep-1-responsive-content .home-aug-28-a-mobile-video img {
            display: block;
            width: 100%;
            height: auto;
        }

        .home-sep-1-responsive-content .home-aug-28-a-mobile-video .theme-btn {
            top: 50%;
            bottom: auto;
            left: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            padding: 9px 14px;
            border-radius: 9999px;
            font-size: 12px !important;
            line-height: 1.1;
            letter-spacing: normal;
            white-space: nowrap;
            transform: translate(-50%, -50%);
        }

        .home-sep-1-responsive-content .home-aug-28-a-mobile-video .theme-btn span {
            white-space: nowrap;
        }
    }

    @media (min-width: 1280px) {
        .home-aug-28-a-hero-video-block {
            width: 435px;
            max-width: 435px;
        }
    }

    @media (max-width: 639px) {
        .home-aug-28-a-hero-title-line {
            letter-spacing: -0.03em;
        }
    }

    .home-aug-28-a-diamond-list > li {
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
    }

    .home-aug-31-grandma-hero-copy-list {
        margin-left: -6px;
    }

    @media (min-width: 768px) {
        .home-aug-31-grandma-hero-copy-list {
            max-width: 42.5%;
        }
    }

    @media (min-width: 1024px) {
        .home-aug-31-grandma-hero-copy-list {
            max-width: 68.85%;
        }
    }

    @media (min-width: 1280px) {
        .home-aug-31-grandma-hero-copy-list {
            max-width: 83.3%;
        }
    }

    @media (min-width: 1280px) {
        .home-aug-28-a-mobile-hero {
            background-position: center 68px !important;
        }

        .home-aug-28-a-mobile-hero::before {
            position: absolute;
            inset: 0 0 auto;
            z-index: 0;
            height: 220px;
            background: linear-gradient(to bottom, #ffffff 0%, rgba(255, 255, 255, 0.92) 34%, rgba(255, 255, 255, 0) 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-28-a-mobile-hero::after {
            position: absolute;
            inset: auto 0 0;
            z-index: 0;
            height: 180px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 100%);
            content: "";
            pointer-events: none;
        }

        .home-aug-28-a-mobile-hero > .container {
            position: relative;
            z-index: 1;
        }

        .home-sep-1-development-partners article {
            height: 280px;
            min-height: 280px;
        }

        .home-sep-1-development-partners-bottom {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            max-width: 1220px !important;
        }

        .home-sep-1-development-partners-bottom > article {
            width: calc((100% - 60px) / 4);
            flex: 0 0 calc((100% - 60px) / 4);
        }
    }

    .home-aug-28-a-diamond-bullet {
        display: block;
        flex: 0 0 14px;
        width: 14px;
        height: 14px;
        margin-top: 8px;
        border-radius: 50%;
        background-color: #1D8F97;
        font-size: 0;
        line-height: 1;
    }
</style>

<!-- <section class="bg-coming-soon-bg bg-repeat bg-center bg-cover py-16 md:py-32 bg-[#39757c]">
    <div class="container">
        <div class="text-5xl md:text-[64px] text- text-center text-white leading-none font-bold">Webinar Coming Soon </div>
        <div class="text-center text-white leading-[1.3] font-semibold text-2xl md:text-4xl my-4 md:my-6">The Future of Cancer Treatment
        <br class="d-none d-md-inline-block" /> A Live Investor Briefing from CancerVax
        </div>
        <p class="text-lg md:text-2xl text-center text-white leading-none font-medium">April 9, 2026
        4:00 PM Pacific Time
        </p>
        <form action="https://submit.jotform.com/submit/250306574577058/" method="POST" autocomplete="off" class="relative max-w-[420px] mt-[18px] mx-auto">
            <input type="hidden" name="formID" value="250306574577058">
            <input type="email" id="webinar-email" name="q3_webinaremail" placeholder="Enter email address" required class="w-full h-[50px] rounded-xl py-1 pl-4 pr-32 text-base border-0">

            <button type="submit" class="bg-[#f2a743] text-black px-6 py-2.5 rounded-xl text-base font-semibold leading-[20px] absolute right-0 top-0 h-[50px] border-0">Sign up!</button>
        </form>
    </div>
</section> -->

<section class="pt-11 md:pt-0">
    <div class="home-aug-31-grandma-mobile-hero home-aug-28-a-mobile-hero bg-banner-mobile md:bg-banner bg-white bg-no-repeat bg-[top_center] bg-cover h-[245px] sm:h-[480px] md:h-[850px] xl:!h-auto xl:min-h-[900px] banner-home-up relative">
        <div class="container">
            <div class="w-full max-w-[1200px] text-center mx-auto sm:pt-14 -top-7 sm:top-0 relative">
                <h1 style="color: #295d6e" class="home-aug-28-a-hero-title text-[48px] sm:text-[72px] xl:text-[92.4px] font-medium"><span class="home-aug-28-a-hero-title-line">Developing A Revolutionary</span><span class="home-aug-28-a-hero-title-line">Cancer Treatment</span></h1>
            </div>
            <div class="relative top-12 pt-[50px] xl:pt-4 max-w-[530px] xl:max-w-[615px]">
                <ul class="home-aug-28-a-diamond-list home-aug-31-grandma-hero-copy-list hidden md:block list-none pl-0 max-w-[50%] lg:max-w-[81%] xl:max-w-[98%] space-y-6 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-2xl [&>li]:leading-tight">
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>Last year, 10 million people died because the body does not easily recognize and kill cancer cells.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>However, the body is very good at killing diseases that it recognizes, such as measles.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>Our breakthrough technology disguises cancer cells to look like measles and “tricks” the body into killing them.</span></li>
                </ul>
            </div>
            <div class="home-aug-28-a-hero-video-block relative mt-8 max-w-[450px]">
                <h2 class="text-custom-teal-300 text-2xl text-center font-semibold mb-4 hidden md:block">See How We Do It</h2>
                <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden md:block">
                    <div>
                        <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                    </div>
                    <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                        <i class="far fa-play-circle"></i>
                        <span>WATCH SHORT VIDEO</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Banner text -->
    <div class="home-sep-1-responsive-content shadow-[0px_-3px_20px_11px_#fff] sm:shadow-[0px_-20px_20px_20px_#fff] md:shadow-none md:hidden">
        <div class="container pt-12 home-aug-31-grandma-mobile-content">
            <div class="home-aug-28-a-mobile-video home-aug-31-grandma-mobile-video">
                <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4">See How We Do It</h2>
                <div class="border-[10px] border-custom-teal-100 rounded-xl relative max-w-full">
                    <div>
                        <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="CancerVax explainer video thumbnail">
                    </div>
                    <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                        <i class="far fa-play-circle"></i>
                        <span>WATCH SHORT VIDEO</span>
                    </a>
                </div>
            </div>
            <div class="max-w-[530px] home-aug-31-grandma-mobile-bullets">
                <ul class="home-aug-28-a-diamond-list list-none pl-0 max-w-1/2 space-y-6 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-[25px]">
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>Last year, 10 million people died because the body does not easily recognize and kill cancer cells.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>However, the body is very good at killing diseases that it recognizes, such as measles.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true"></span><span>Our breakthrough technology disguises cancer cells to look like measles and “tricks” the body into killing them.</span></li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="h-auto relative overflow-hidden bg-white py-6 sm:py-[70px]">
    <div class="container !max-w-[1600px]">
        <div class="relative max-w-[1600px] mx-auto">
            <div class="pointer-events-none absolute left-[12%] right-[12%] top-1/2 hidden h-px bg-gradient-to-r from-transparent via-custom-teal-400/50 to-transparent md:block" aria-hidden="true"></div>
            <div class="pointer-events-none absolute left-1/2 top-1/2 hidden h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-custom-orange-100/60 ring-8 ring-white md:block" aria-hidden="true"></div>

            <div class="home-aug-28-c-card-grid relative grid grid-cols-1 md:grid-cols-3 gap-3 items-stretch">
                <a href="/lifescience-review" class="relative">
                    <div class="relative rounded-[26px] bg-transparent p-[2px]">
                        <div class="rounded-[24px] bg-white p-3 sm:p-4">
                            <div class="flex aspect-[4/3] items-center justify-center overflow-hidden rounded-[18px] p-4" style="background-color: #f1f1f1;">
                                <img src="<?php echo $full_url; ?>assets/images/cancervax-top-preclinical-biotech-2026-v2.png" alt="CancerVax named a Top Pre-Clinical Biotech Company of 2026" class="block h-auto w-auto max-h-[85%] max-w-[85%] object-contain">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/single-news.php?id=52" class="relative">
                    <div class="relative rounded-[26px] bg-transparent p-[2px]">
                        <div class="rounded-[24px] bg-white p-3 sm:p-4">
                            <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-color: #f1f1f1;">
                                <div class="home-aug-28-c-card-label-wrap">
                                    <span class="pointer-events-none relative z-10 shrink-0 scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">BREAKING NEWS</span>
                                </div>
                                <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                                    <div class="home-aug-29-mobile-card-copy w-full text-center text-black" style="font-family: 'Montserrat', sans-serif; font-size: clamp(0.9rem, 1.35vw, 1.15rem); font-weight: 600; line-height: 1.25; transform: translateY(-20px);">
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
                                    <img src="<?php echo $full_url; ?>assets/images/home-aug-30-webinar-thumbnail.jpg" alt="CancerVax webinar about the successful activation of killer T-cells" class="block h-auto w-[84%] max-w-[310px] rounded-[10px] object-contain" style="max-height: 70%; transform: scale(1.3); transform-origin: center;">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php if (false): ?>
<section class="h-auto relative overflow-hidden bg-white">
    <div class="h-full flex items-center py-6 sm:py-[70px] w-full">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="lg:col-span-7">
                    <h2 class="text-custom-teal-100 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">See How We Do It</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <h2 class="text-custom-teal-100 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">Webinar: Exciting Update on <br> our
                        Revolutionary Cancer Treatment</h2> -->
                    <!-- <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div> -->
                    <h2 class="bg-[#ff0000] text-white p-2 mx-auto max-w-[300px] text-4xl font-semibold mb-4 uppercase lg:hidden">Breaking News</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <a href="/single-news.php?id=52"><img src="./assets/images/zozozo1.png" class="w-full" alt="news-thumbnail"></a>
                    </div>
                    <h2 class="bg-[#ff0000] text-white py-2 px-3 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">Scientific Team Discusses the Breakthrough</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="//img.youtube.com/vi/gP-LNnxOmYA/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="https://www.youtube.com/watch?v=gP-LNnxOmYA" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <div class="space-y-4 [&>p]:tracking-normal [&>p]:text-xl [&>p]:leading-normal [&>p]:max-w-[630px] [&>p]:font-normal">
                        <p>

                            <strong> CancerVax is a pre-clinical biotech company</strong> developing a novel Universal Cancer Treatment Platform that will be customizable as an injection, to treat many types of cancer.
                        </p>

                        <p> Powered by artificial intelligence, our revolutionary approach <strong>DETECTS, MARKS, and KILLS</strong> only cancer cells using the body’s own immune system. Other immunotherapies have had very limited success trying to teach the immune system how to recognize cancer cells. Instead, we intend to make cancer cells look like a common disease that it already recognizes, such as measles, and “trick” the body into killing these “disguised” cancer cells with strength.</p>


                        <p> We look forward to the day when treating cancer will be as simple as getting a shot.
                        </p>

                    </div>
                </div>
                <div class="lg:col-span-5">
                    <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4 hidden lg:block xl:hidden">See How We Do It</h2>
                    <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block xl:hidden">
                        <div>
                            <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4 hidden lg:block">Webinar: Exciting Update on <br> our
                        Revolutionary Cancer Treatment</h2>
                    <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <div>
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div> -->
                    <h2 class="bg-[#ff0000] text-white p-2 mx-auto max-w-[300px] text-4xl font-semibold mb-4 hidden uppercase lg:block">Breaking News</h2>
                    <div class="mb-9 mx-auto border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <a href="/single-news.php?id=52"><img src="./assets/images/zozozo1.png" class="w-full" alt="news-thumbnail"></a>
                    </div>
                    <h2 class="bg-[#ff0000] text-white py-2 px-3 text-2xl text-center font-semibold mb-4 hidden lg:block">Scientific Team Discusses the Breakthrough</h2>
                    <div class="mb-9 mx-auto border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <div>
                            <img src="//img.youtube.com/vi/gP-LNnxOmYA/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="https://www.youtube.com/watch?v=gP-LNnxOmYA" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <div class="bg-custom-gray-100 rounded-2xl p-6 border-[10px] sm:border-[16px] border-custom-teal-100 relative lg:max-w-[500px] sm:mt-9 text-center">
                        <h4 class="text-[#ff0000] font-semibold mb-2 text-[23px] md:text-[30px]">Breaking News</h4>
                        <p class="text-custom-dark-100 text-xl text-center font-medium">CancerVax Announces Successful Tests of its Smart mRNA Technology</p>
                        <a href="cancervax-announces-successful-tests-of-its-smart-mrna-technology.php" class="theme-btn px-[30px] py-[15px] mt-4 text-base leading-none bg-custom-teal-100 border-custom-teal-100 rounded-[10px] hover:bg-custom-teal-100 hover:border-custom-teal-100 hover:text-white">Learn More</a>
                    </div> -->


                </div>
            </div>

        </div>
    </div>

</section>
<?php endif; ?>

<section class="bg-team-first bg-white bg-no-repeat bg-center bg-cover py-10">
    <div class="container">
        <h2 class="text-center text-4xl leading-none sm:text-[54px] text-custom-teal-300 font-medium">We have assembled a world-class team of
            experienced cancer scientists and advisors to help
            develop our revolutionary cancer treatment.</h2>
    </div>
</section>

<?php
ob_start();
include __DIR__ . '/../components/team-heads.php';
$teamMarkup = ob_get_clean();
$teamMarkup = str_replace(
    [
        'w-[307px] xl:w-[224px] rounded-lg object-cover',
        'w-[307px] xl:w-[224px] h-auto rounded-lg object-cover',
    ],
    [
        'w-[307px] xl:w-[224px] h-[307px] xl:h-[224px] rounded-lg object-cover',
        'w-[307px] xl:w-[224px] h-[307px] xl:h-[224px] rounded-lg object-cover',
    ],
    $teamMarkup
);
$teamMarkup = str_replace('assets/images/', 'assets/images/home-aug-28-a/', $teamMarkup);
$teamMarkup = str_replace(
    [
        'assets/images/home-aug-28-a/george.png',
        'assets/images/home-aug-28-a/adam-grant.png',
        'assets/images/home-aug-28-a/sumant-ramachandra.png',
        'assets/images/home-aug-28-a/gordon-ringold.png',
        'assets/images/home-aug-28-a/mark-davis.png',
        'assets/images/home-aug-28-a/george-kemble.png',
        'assets/images/home-aug-28-a/lakey.png',
        'assets/images/home-aug-28-a/steven-warner.png',
        'assets/images/home-aug-28-a/matthew-spear.png',
        'assets/images/home-aug-28-a/amit-indap.png',
    ],
    [
        'assets/images/home-aug-28-a/george.jpg',
        'assets/images/home-aug-28-a/adam-grant.jpg',
        'assets/images/home-aug-28-a/sumant-ramachandra.jpg',
        'assets/images/home-aug-28-a/gordon-ringold.jpg',
        'assets/images/home-aug-28-a/mark-davis.jpg',
        'assets/images/home-aug-28-a/george-kemble.jpg',
        'assets/images/home-aug-28-a/lakey.jpg',
        'assets/images/home-aug-28-a/steven-warner.jpg',
        'assets/images/home-aug-28-a/matthew-spear.jpg',
        'assets/images/home-aug-28-a/amit-indap.jpg',
    ],
    $teamMarkup
);
$teamMarkup = str_replace(
    [
        'class="max-w-[970px] mx-auto"',
        'class="w-full md:max-w-[720px] xl:max-w-[470px] mx-auto"',
    ],
    [
        'class="max-w-[970px] mx-auto home-sep-1-team-group"',
        'class="w-full md:max-w-[720px] xl:max-w-[470px] mx-auto home-sep-1-team-group"',
    ],
    $teamMarkup
);
$teamMarkup = str_replace(
    [
        'class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto"',
        'class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto my-6"',
        'class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center my-6"',
    ],
    [
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto"',
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto my-6"',
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 gap-6 justify-center my-6"',
    ],
    $teamMarkup
);
echo '<div class="home-sep-1-team-layout">' . $teamMarkup . '</div>';
?>

<?php
$developmentPartners = [
    [
        'name' => 'IQVIA',
        'image' => 'assets/images/home-aug-28-a/iqvia.jpg',
        'description' => 'Global leader in clinical research, real-world evidence and healthcare data science.',
    ],
    [
        'name' => 'Axis Bio',
        'image' => 'assets/images/axisbio.png',
        'description' => 'Preclinical CRO delivering expertise in pharmacology, efficacy and safety evaluation.',
    ],
    [
        'name' => 'RoukenBio',
        'image' => 'assets/images/roukenbio.png',
        'description' => 'Specialists in antibody analytics and characterization for biologics development.',
    ],
    [
        'name' => 'Champions Oncology',
        'image' => 'assets/images/champions-oncology.png',
        'description' => 'Oncology CRO advancing clinical development and patient-focused therapies.',
    ],
    [
        'name' => 'Cytiva',
        'image' => 'assets/images/cytiva.png',
        'description' => 'Enabling the development and manufacture of advanced therapies and biologics.',
    ],
    [
        'name' => 'TriLink',
        'image' => 'assets/images/trilink.png',
        'description' => 'Delivering innovative tools and services for nucleic acid and bioconjugate development.',
    ],
    [
        'name' => 'VectorBuilder',
        'image' => 'assets/images/vectorbuilder.png',
        'description' => 'Custom vector design and molecular cloning solutions for research and development.',
    ],
];
?>
<section class="home-sep-1-development-partners bg-white py-[50px] sm:py-[70px]">
    <div class="container">
        <div class="mx-auto max-w-[1220px]">
            <h2 class="mb-10 text-center text-[clamp(2rem,5vw,3rem)] font-normal uppercase leading-tight text-black sm:mb-12">Our Development Partners</h2>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach (array_slice($developmentPartners, 0, 4) as $partner): ?>
                    <article class="flex min-h-[270px] flex-col items-center rounded-2xl border border-[#e7ebef] bg-white px-6 py-6 text-center shadow-[0_4px_14px_rgba(25,45,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_24px_rgba(25,45,65,0.13)]">
                        <div class="flex h-[90px] w-full items-center justify-center">
                            <img src="<?php echo $full_url . $partner['image']; ?>" alt="<?php echo htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8'); ?>" class="max-h-[82px] max-w-[230px] w-auto object-contain">
                        </div>
                        <h3 class="mt-5 text-[17px] font-semibold leading-tight text-[#14213d]"><?php echo $partner['name']; ?></h3>
                        <p class="home-sep-1-partner-description mt-3 text-center text-[14px] leading-[1.45] text-[#526071]"><?php echo $partner['description']; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="home-sep-1-development-partners-bottom mx-auto mt-5 grid max-w-[930px] grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                <?php foreach (array_slice($developmentPartners, 4) as $partner): ?>
                    <article class="flex min-h-[270px] flex-col items-center rounded-2xl border border-[#e7ebef] bg-white px-6 py-6 text-center shadow-[0_4px_14px_rgba(25,45,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_24px_rgba(25,45,65,0.13)]">
                        <div class="flex h-[90px] w-full items-center justify-center">
                            <img src="<?php echo $full_url . $partner['image']; ?>" alt="<?php echo htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8'); ?>" class="max-h-[82px] max-w-[230px] w-auto object-contain">
                        </div>
                        <h3 class="mt-5 text-[17px] font-semibold leading-tight text-[#14213d]"><?php echo $partner['name']; ?></h3>
                        <p class="home-sep-1-partner-description mt-3 text-center text-[14px] leading-[1.45] text-[#526071]"><?php echo $partner['description']; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php if (false): ?>
<section class="pb-[70px]">
    <div class="container">

        <h2 class="text-center text-[40px] font-normal uppercase mb-[35px] text-black">Our Development Partners</h2>
        <div class="space-y-12">
            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/cytiva.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Cytiva, owned by Danaher (NYSE: DHR, ~$170B+ market cap), formerly Precision NanoSystems, is a global leader in advancing and accelerating therapeutics. With a strong presence in life sciences research and bioprocessing, Cytiva provides innovative technologies and expertise to help companies bring life-changing treatments to market. The company specializes in biomanufacturing solutions, lipid nanoparticle (LNP) development, and cutting-edge analytical tools. CancerVax is working with Cytiva to leverage its clinically proven LNPs to to create a complete CancerVax therapeutic nanoparticle.
                    </p>
                </div>
            </div>

            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/charles-river.png" class="block mx-auto" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Charles River (NYSE: CRL, ~$10B+ market cap) provides essential products and services to help pharmaceutical and biotechnology companies, government agencies and leading academic institutions around the globe accelerate their research and drug development efforts. Our dedicated employees are focused on providing clients with exactly what they need to improve and expedite the discovery, early-stage development and safe manufacture of new therapies for the patients who need them.
                    </p>
                </div>
            </div>

            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/trilink.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">TriLink BioTechnologies, a Maravai LifeSciences company (NASDAQ: MRVI, ~$1-2B) is a global leader in nucleic acid and mRNA solutions. TriLink delivers unrivaled chemical and biological experience, CDMO services, and high-quality readymade and custom materials, including its patented CleanCap® mRNA capping technology. Pharmaceutical leaders, biotech disruptors, and world governments depend on TriLink to meet their greatest challenges, from delivering the COVID-19 vaccine at warp speed to empowering innovative treatments in oncology, infectious diseases, cardiology, and neurological disorders to enabling future pandemic response plans.
                    </p>
                </div>
            </div>

            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/crown-bioscience.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Founded in 2006 and headquartered in San Diego, California, Crown Bioscience operates 13 facilities across the US, Europe, and Asia-Pacific. The company maintains the world's largest commercially available patient-derived xenograft (PDX) collection and offers over 600 tumor organoid models powered by Hubrecht Organoid Technology (HUB) across 22 cancer indications. Crown Bioscience's platforms span in vivo, in vitro, ex vivo, and in silico preclinical models, complemented by advanced biomarker analysis, bioinformatics, and an extensive biobank of liquid and human biospecimens with clinical histories. Crown Bioscience was named Best Preclinical Oncology CRO in the 2025 Healthcare and Pharmaceutical Awards and received the Fierce CRO Award for Excellence in Global Operations
                    </p>
                </div>
            </div>

            <!-- <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/flashpoint.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">

                    <p class="text-black text-[18px] leading-6">Flashpoint was founded on nanotechnology developed over the past 10 years in the laboratory of Chad Mirkin, Director of the International Institute for Nanotechnology at Northwestern University and 2024 winner of the prestigious Kavli Prize in Nanoscience. <strong>Flashpoint’s groundbreaking nanotechnology discovery platform</strong> enables the development of therapeutic candidates with superior product profiles. Validated in numerous in-vivo models, this technology has transformed components that are ineffective in conventional formulations into curative cancer immunotherapies. CancerVax is working with Flashpoint to deliver its novel Universal Cancer Treatment therapies using Flashpoint’s nanoparticle technology.
                    </p>
                </div>
            </div> -->

            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/axisbio.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Axis Bio, a division of QIMA Life Sciences, is a preclinical contract research organisation with specialist capabilities in oncology, inflammation and respiratory diseases. Services range from in vitro efficacy and mechanistic studies, to in vivo target engagement, with each study tailored to the unique requirements of the client. Our clients are spread across the globe and include pharmaceutical and biotech businesses, university-based research organisations and virtual/semi-virtual development companies. We listen, guide and advise clients through every step of the preclinical efficacy testing process, to deliver clear and robust results in a timely and cost-effective manner. This approach applies whether we are simply carrying out the in-life phase of a study or providing a complete package of analysis including flow cytometry analysis, bioanalysis and blood analysis, along with a detailed interpretation of results and recommendations.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>

<?php if (false): ?>
<section class="bg-white py-[50px]">
    <div class="container">
        <div class="bg-custom-teal-100 rounded-md p-8 sm:p-10">
            <div class="mb-5">
                <h3 class="text-white text-[38px] font-medium break-words mb-0 text-center max-w-[740px] mx-auto line-height-[1.36em]">Massive Market Opportunity</h3>
            </div>
            <div class="market-opp">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center pt-4 md:pt-12">
                    <div class="lg:col-span-8">
                        <h4 class="mb-4 leading-snug text-[26px] sm:text-[30px] text-white font-medium">How big is the biotechnology market?</h4>
                        <p class="text-[18px] leading-snug text-white">According to Precedence Research, the global biotechnology market is projected to grow from $1.3 trillion in 2023 to <span>$3.2 trillion by 2030</span>.
                        </p>
                    </div>
                    <div class="lg:col-span-4 text-center">

                        <div class="bg-white block sm:inline-block px-8 py-4 text-black text-center rounded-md">
                            <span>Biotech <br>
                                $3.2 trillion</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center pt-4 md:pt-6">
                    <div class="lg:col-span-8">
                        <h4 class="mb-4 leading-snug text-[26px] sm:text-[30px] text-white font-medium">How big is the cancer drug development market?</h4>
                        <p class="text-[18px] leading-snug text-white">According to Fortune Business Insights, the global oncology drugs market is projected to grow from $205 billion in 2023 to <span>$484 billion by 2030</span>.
                        </p>
                    </div>
                    <div class="lg:col-span-4 text-center">
                        <div class="bg-white block sm:inline-block px-8 py-4 text-black text-center rounded-md">
                            <span>Cancer <br>
                                $484 billion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="bg-white pt-[70px]">
    <div class="container">
        <h4 class="mb-9 text-xl font-medium text-black">News Highlights</h4>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-7">
            <?php
            $filteredPressleaseNews = array_filter($news, function ($item) {
                return $item['category'] === 'pressrelease';
            });

            // Take the latest 4 industry news articles
            $latestIndustryNews = array_slice($filteredPressleaseNews, 0, 4);
            foreach ($latestIndustryNews as $item) {
                echo "<div class=\"bg-custom-gray-200 min-h-full p-4 sm:p-10 relative \">
                        <a href=\"single-news.php?id={$item['id']}\" class=\"absolute inset-0 w-full h-full\"></a>
                        <span class=\"text-custom-teal-300 text-sm uppercase font-medium tracking-widest block\">{$item['date']}</span>
                        <h3 class=\"text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight\">{$item['title']}</h3>
                        <p class=\"text-black text-xl sm:text-base leading-normal\">{$item['excerpt']}</p>
                    </div>";
            } ?>
        </div>
    </div>
</section>

<section class="bg-white text-center py-[50px]">
    <div class="container">
        <div class="max-w-[600px] mx-auto">
            <h2 class="text-[51px] font-normal uppercase text-black mb-2">SUBSCRIBE</h2>
            <p class="text-black pt-2.5 mb-6 text-[17px] tracking-[0.78px] text-center">Keep up with our progress by subscribing to our email newsletter!</p>
            <form action="https://submit.jotform.com/submit/242775392698071/" method="POST" class="relative">
                <input type="hidden" name="formID" value="242775392698071" />
                <input type="email" id="input_3" name="q3_email" class="bg-custom-gray-200 text-black text-[17px] rounded-[30px] h-[60px] border-0 px-[30px] block w-full font-normal leading-normal focus:outline-none focus:ring-0 focus:shadow-none" placeholder="Your email address...">

                <div class="form-line control-formnew mt-2 jf-required text-left" data-type="control_captcha" id="id_4">
                    <label class="block text-black text-[15px] font-normal leading-relaxed text-center" id="label_4" for="input_4" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>

                    <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                        <section data-wrapper-react="true" class="flex justify-center">
                            <div id="hcaptcha_input_4" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="onCaptchaSuccess" data-expired-callback="onCaptchaExpired"></div><input type="hidden" id="input_4" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                            <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                        </section>
                    </div>
                </div>
                <button type="submit" id="submitNewsletterButton" class="bg-custom-green-100 text-white border-0 text-center text-[17px] p-0 h-[60px] mb-0 rounded-[30px] font-bold w-[133px] absolute right-0 top-0" disabled>Subscribe</button>
            </form>
            <script>
                const submitNewsletterButton = document.getElementById('submitNewsletterButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_4').value = token;
                    submitNewsletterButton.disabled = false;
                }

                function onCaptchaExpired() {
                    document.getElementById('input_4').value = '';
                    submitNewsletterButton.disabled = true;
                }
            </script>
        </div>
    </div>
</section>