<?php
$videos = include __DIR__ . '/../data/podcast-data.php';
?>
<section class="py-24 md:py-28 bg-top bg-cover text-center relative bg-video-bg bg-black bg-opacity-50 after:content-[''] after:absolute after:inset-0 after:bg-black after:bg-opacity-70">
    <div class="container">
        <h1 class="relative z-10 text-white font-medium">Videos</h1>
    </div>
</section>

<div class="pt-36">
    <div class="container">
        <div class="mb-16">
            <div class="max-w-[640px] mx-auto">
                <div class="flex justify-center items-center flex-col rounded-2xl overflow-hidden relative">
                    <h3 class="text-custom-teal-300 text-2xl text-center mb-4 font-semibold">Short Explainer Video</h3>
                    <div class="relative rounded-xl border-[12px] border-custom-teal-100">
                        <a href="https://www.youtube.com/watch?v=PXBNJe3nHp0" class="popup-youtube">
                            <img src="https://i.ytimg.com/vi/PXBNJe3nHp0/maxresdefault.jpg" alt="hero" class="max-w-full h-auto">
                            <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="py-24" id="webinars">
    <div class="container">
        <div>
            <h3 class="text-black text-xl sm:text-[40px] leading-10 font-medium mb-12">Webinars</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://img.youtube.com/vi/gP-LNnxOmYA/maxresdefault.jpg" alt="Scientific Team Discusses the Breakthrough" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="https://www.youtube.com/watch?v=gP-LNnxOmYA" class="popup-youtube absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">Scientific Team Discusses the Breakthrough</p>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://img.youtube.com/vi/QMlV134WoE8/maxresdefault.jpg" alt="CancerVax Webinar June 18, 2026" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="https://www.youtube.com/watch?v=QMlV134WoE8" class="popup-youtube absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">CancerVax Webinar June 18, 2026</p>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://img.youtube.com/vi/UBFD7bfsCc0/maxresdefault.jpg" alt="CancerVax Webinar April 23, 2026" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="https://www.youtube.com/watch?v=UBFD7bfsCc0" class="popup-youtube absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">CancerVax Webinar April 23, 2026</p>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://img.youtube.com/vi/0yKU2auecv4/maxresdefault.jpg" alt="CancerVax Webinar April 9, 2026" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="https://www.youtube.com/watch?v=0yKU2auecv4" class="popup-youtube absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">CancerVax Webinar April 9, 2026</p>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://vumbnail.com/1088764643/6170b7e696.jpg" alt="May 31, 2025 Webinar" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="<?php echo $baseUrl ?? ''; ?>/webinar-may-31-2025" class="absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">May 31, 2025 – Successfully Made Cell Targeting LNP</p>
            </div>
            <div class="mb-4">
                <div class="relative">
                    <div class="relative aspect-video">
                        <img src="https://vumbnail.com/1074009289.jpg" alt="February 25, 2025 Webinar" class="w-full h-full object-cover">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                    <a href="<?php echo $baseUrl ?? ''; ?>/webinar-feb-25-2025" class="absolute inset-0 z-10"></a>
                </div>
                <p class="text-lg font-bold mt-3 text-black">February 25, 2025 – Smart mRNA Works!</p>
            </div>
        </div>
    </div>
</section>
