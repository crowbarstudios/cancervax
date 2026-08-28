<?php
$videos = include __DIR__ . '/../data/carousel-videos.php';
$news = include __DIR__ . '/../data/news-data.php'; ?>

<style>
    .home-aug-28-a-diamond-list > li {
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
    }

    .home-aug-28-a-diamond-bullet {
        flex: 0 0 auto;
        color: #1D8F97;
        font-size: 1.1em;
        line-height: 1;
        margin-top: 0.08em;
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
    <div class="bg-banner-mobile md:bg-banner bg-white bg-no-repeat bg-[top_center] bg-cover h-[245px] sm:h-[480px] md:h-[850px] xl:!h-auto xl:min-h-[900px] banner-home-up relative">
        <div class="container">
            <div class="max-w-screen-sm text-center mx-auto sm:pt-14 -top-7 sm:top-0 relative">
                <h1 style="color: #295d6e" class="text-[33px] sm:text-[50px] xl:text-[64px] font-medium">A Revolutionary Cancer Treatment</h1>
            </div>
            <div class="relative top-12 pt-[50px] xl:pt-4 max-w-[530px] xl:max-w-[615px]">
                <ul class="home-aug-28-a-diamond-list hidden md:block list-none pl-0 max-w-[50%] lg:max-w-[81%] xl:max-w-[98%] space-y-6 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-2xl [&>li]:leading-tight">
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>Last year, 10 million people died because the body does not easily recognize and kill cancer cells.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>However, the body is very good at killing diseases that it recognizes, such as measles.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>Our breakthrough technology disguises cancer cells to look like measles and “tricks” the body into killing them.</span></li>
                </ul>
            </div>
            <div class="relative top-14 mt-8 max-w-[450px]">
                <h2 class="text-custom-teal-300 text-2xl text-center font-semibold mb-4 hidden xl:block">See How We Do It</h2>
                <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden xl:block">
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
    <div class=" shadow-[0px_-3px_20px_11px_#fff] sm:shadow-[0px_-20px_20px_20px_#fff] md:shadow-none md:hidden">
        <div class="container relative top-12">
            <div class="max-w-[530px]">
                <ul class="home-aug-28-a-diamond-list list-none pl-0 max-w-1/2 space-y-6 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-[25px]">
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>Last year, 10 million people died because the body does not easily recognize and kill cancer cells.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>However, the body is very good at killing diseases that it recognizes, such as measles.</span></li>
                    <li><span class="home-aug-28-a-diamond-bullet" aria-hidden="true">❖</span><span>Our breakthrough technology disguises cancer cells to look like measles and “tricks” the body into killing them.</span></li>
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

            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-3 items-stretch">
                <a href="/lifescience-review" class="relative">
                    <div class="relative rounded-[26px] bg-transparent p-[2px]">
                        <div class="rounded-[24px] bg-white p-3 sm:p-4">
                            <div class="flex aspect-[4/3] items-center justify-center overflow-hidden rounded-[18px] bg-custom-teal-300 p-4">
                                <img src="<?php echo $full_url; ?>assets/images/cancervax-top-preclinical-biotech-2026-v2.png" alt="CancerVax named a Top Pre-Clinical Biotech Company of 2026" class="block h-auto w-auto max-h-[85%] max-w-[85%] object-contain">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/single-news.php?id=52" class="relative">
                    <div class="relative rounded-[26px] bg-transparent p-[2px]">
                        <div class="rounded-[24px] bg-white p-3 sm:p-4">
                            <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-image: radial-gradient(circle at 18% 18%, rgba(120,199,201,0.20) 0, transparent 34%), radial-gradient(circle at 82% 78%, rgba(42,186,194,0.24) 0, transparent 38%), linear-gradient(135deg, #2a5c6e 0%, #226f7a 38%, #1d8f97 70%, #2abac2 100%);">
                                <span class="pointer-events-none relative z-10 mb-2 shrink-0 translate-y-[6px] scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">BREAKING NEWS</span>
                                <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                                    <img src="<?php echo $full_url; ?>assets/images/zozozo1.png" alt="CancerVax achieves major milestone in activating human killer T-cells against cancer" class="block h-auto w-auto max-h-full max-w-full object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/webinar-august-6-2026" class="relative">
                    <div class="relative rounded-[26px] bg-transparent p-[2px]">
                        <div class="rounded-[24px] bg-white p-3 sm:p-4">
                            <div class="relative flex aspect-[4/3] flex-col items-center justify-start overflow-hidden rounded-[18px] p-4" style="background-image: radial-gradient(circle at 16% 20%, rgba(120,199,201,0.18) 0, transparent 34%), radial-gradient(circle at 84% 78%, rgba(20,83,120,0.32) 0, transparent 40%), linear-gradient(135deg, #2a5c6e 0%, #1d5063 36%, #102b43 68%, #061126 100%);">
                                <span class="pointer-events-none relative z-10 mb-2 shrink-0 translate-y-[6px] scale-[1.3] rounded-full bg-[#ff1f24] px-4 py-2 text-[11px] font-bold uppercase tracking-[0.12em] text-white shadow-[0_5px_14px_rgba(0,0,0,0.28)]">Watch Video</span>
                                <div class="flex min-h-0 w-full flex-1 items-center justify-center">
                                    <img src="<?php echo $full_url; ?>assets/images/home-aug-28-a/feature-video-hd.jpg?v=20260828-1" alt="CancerVax successful activation of human killer T-cells announcement" class="block h-auto w-auto max-h-full max-w-full object-contain">
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
echo $teamMarkup;
?>

<section class="bg-white pb-[70px]">
    <div class="container">
        <div class="relative overflow-hidden rounded-[28px] bg-gradient-to-br from-custom-teal-300 via-custom-teal-100 to-custom-teal-200 p-[1px] shadow-[0_22px_55px_rgba(29,143,151,0.18)]">
            <div class="relative overflow-hidden rounded-[27px] bg-custom-teal-100 px-5 py-9 sm:px-10 sm:py-12">
                <div class="pointer-events-none absolute inset-0 opacity-15" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.20) 1px, transparent 0); background-size: 26px 26px;" aria-hidden="true"></div>
                <svg class="pointer-events-none absolute inset-0 h-full w-full opacity-15" viewBox="0 0 1200 520" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M-50 130C120 30 240 255 420 135S735 35 900 145 1080 250 1250 105" fill="none" stroke="#d2f6f8" stroke-width="2" stroke-linecap="round"/>
                    <path d="M-70 390C115 275 285 475 475 340S790 235 965 360 1115 435 1260 300" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M80 -30C170 75 85 155 175 245S255 425 150 550" fill="none" stroke="#78c7c9" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M1040 -30C945 80 1085 150 990 245S930 425 1050 550" fill="none" stroke="#d2f6f8" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M300 530C430 440 465 465 585 520S790 560 900 470" fill="none" stroke="#78c7c9" stroke-width="1" stroke-linecap="round"/>
                    <g opacity="0.7" fill="none" stroke="#d2f6f8" stroke-width="1" stroke-linecap="round">
                        <path d="M-60 175C105 75 230 295 405 185S700 80 855 185"/>
                        <path d="M-55 205C110 105 235 325 410 215S705 110 860 215"/>
                        <path d="M340 505C475 420 545 475 670 510S885 535 1010 425"/>
                        <path d="M365 475C500 390 570 445 695 480S910 505 1035 395"/>
                    </g>
                    <g opacity="0.5" fill="none" stroke="#78c7c9" stroke-width="1" stroke-linecap="round">
                        <path d="M-70 85C80 10 195 170 345 90S610 20 770 95 1040 195 1260 55"/>
                        <path d="M-75 105C75 30 190 190 340 110S605 40 765 115 1035 215 1265 75"/>
                        <path d="M-55 285C105 205 225 390 380 300S650 220 810 305 1080 400 1260 270"/>
                        <path d="M-50 310C110 230 230 415 385 325S655 245 815 330 1085 425 1265 295"/>
                        <path d="M245 -25C345 55 300 145 395 225S480 400 370 545"/>
                        <path d="M270 -30C370 50 325 140 420 220S505 395 395 550"/>
                    </g>
                    <g opacity="0.35" fill="none" stroke="#d2f6f8" stroke-width="2" stroke-linecap="round">
                        <path d="M740 -30C650 50 700 135 610 215S535 390 640 550"/>
                        <path d="M765 -25C675 55 725 140 635 220S560 395 665 545"/>
                    </g>
                    <circle cx="420" cy="135" r="5" fill="#d2f6f8"/>
                    <circle cx="900" cy="145" r="5" fill="#d2f6f8"/>
                    <circle cx="475" cy="340" r="5" fill="#78c7c9"/>
                    <circle cx="965" cy="360" r="5" fill="#d2f6f8"/>
                </svg>
                <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full border border-white/10"></div>
                <div class="pointer-events-none absolute -right-6 -top-10 h-44 w-44 rounded-full border border-white/5"></div>
                <div class="pointer-events-none absolute -bottom-28 -left-24 h-72 w-72 rounded-full border border-white/5"></div>

                <div class="relative mb-8 text-center">
                    <h2 class="text-center text-6xl leading-none font-medium text-white">Our Development Partners</h2>
                </div>

                <div class="relative max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-6 gap-4 sm:gap-6 items-stretch">
                    <div class="group relative min-h-[125px] rounded-2xl border border-white/70 bg-gradient-to-br from-white via-white to-[#e9f8f8] p-5 shadow-[0_10px_22px_rgba(2,40,61,0.12)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_28px_rgba(2,40,61,0.18)] flex items-center justify-center md:col-span-2">
                        <img src="<?php echo $full_url; ?>assets/images/cytiva.png" alt="Cytiva" class="max-h-[70px] w-auto transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="group relative min-h-[125px] rounded-2xl border border-white/70 bg-gradient-to-br from-white via-white to-[#e9f8f8] p-5 shadow-[0_10px_22px_rgba(2,40,61,0.12)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_28px_rgba(2,40,61,0.18)] flex items-center justify-center md:col-span-2">
                        <img src="<?php echo $full_url; ?>assets/images/home-aug-28-a/iqvia.jpg" alt="IQVIA" class="max-h-[70px] w-auto transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="group relative min-h-[125px] rounded-2xl border border-white/70 bg-gradient-to-br from-white via-white to-[#e9f8f8] p-5 shadow-[0_10px_22px_rgba(2,40,61,0.12)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_28px_rgba(2,40,61,0.18)] flex items-center justify-center md:col-span-2">
                        <img src="<?php echo $full_url; ?>assets/images/trilink.png" alt="TriLink" class="max-h-[70px] w-auto transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="group relative min-h-[125px] rounded-2xl border border-white/70 bg-gradient-to-br from-white via-white to-[#e9f8f8] p-5 shadow-[0_10px_22px_rgba(2,40,61,0.12)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_28px_rgba(2,40,61,0.18)] flex items-center justify-center md:col-start-2 md:col-span-2">
                        <img src="<?php echo $full_url; ?>assets/images/axisbio.png" alt="Axis Bio" class="max-h-[70px] w-auto transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="group relative col-span-2 w-[calc(50%_-_0.5rem)] justify-self-center min-h-[125px] rounded-2xl border border-white/70 bg-gradient-to-br from-white via-white to-[#e9f8f8] p-5 shadow-[0_10px_22px_rgba(2,40,61,0.12)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_16px_28px_rgba(2,40,61,0.18)] flex items-center justify-center md:col-start-4 md:col-span-2 md:w-auto">
                        <img src="<?php echo $full_url; ?>assets/images/crown-bioscience.png" alt="Crown Bioscience" class="max-h-[70px] w-auto transition-transform duration-300 group-hover:scale-105">
                    </div>
                </div>
                </div>
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