<?php
$videos = include "./data/podcast-data.php";
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
                    <h3 class="text-custom-teal-100 text-2xl text-center mb-4 font-semibold">Short Explainer Video</h3>
                    <div class="relative rounded-xl border-[12px] border-custom-teal-100">
                        <a href="https://www.youtube.com/watch?v=PXBNJe3nHp0" class="popup-youtube">
                            <img src="https://i.ytimg.com/vi/PXBNJe3nHp0/maxresdefault.jpg" alt="hero" class="max-w-full h-auto">
                            <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-6 mb-6">
            <div class="relative border-[3px] border-custom-teal-500 w-full mx-auto">
                <a href="#news-commentary">
                    <div class="h-[278px] relative">
                        <img src="./assets/images/news-commentary.png" alt="video" class="w-full h-full object-cover">
                    </div>
                    <span class="bg-custom-teal-500 bg-opacity-70 text-white absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-[27px] leading-tight text-center font-bold w-full min-h-[90px] flex items-center justify-center">News Commentary</span>
                </a>
            </div>

            <div class="relative border-[3px] border-custom-teal-500 w-full mx-auto">
                    <a href="#short-videos">
                        <div class="h-[278px] relative">
                            <img src="./assets/images/short-videos.png" alt="video" class="w-full h-full object-cover">
                        </div>
                        <span class="bg-custom-teal-500 bg-opacity-70 text-white absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-[27px] leading-tight text-center font-bold w-full min-h-[90px] flex items-center justify-center">Short
                            Videos
                        </span>
                    </a>
            </div>

            <div class="relative col-span-1 md:col-span-2 lg:col-span-1 border-[3px] border-custom-teal-500 w-full md:w-[336px] lg:w-full mx-auto">
                    <a href="#webinars">
                        <div class="h-[278px] relative">
                            <img src="./assets/images/webinars.png" alt="video" class="w-full h-full object-cover">
                        </div>
                        <span class="bg-custom-teal-500 bg-opacity-70 text-white absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-[27px] leading-tight text-center font-bold w-full min-h-[90px] flex items-center justify-center">Webinars</span>
                    </a>
            </div>
        </div>
    </div>
</div>

<section class="py-24" id="webinars">
    <div class="container">
        <div>
            <h3 class="text-black text-xl sm:text-[40px] leading-10 font-medium mb-12">Webinars</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 gap-6">
            <div class="cchat-box mb-4">
                <a href="https://cancervax.com/webinar-feb-25-2025" class="relative">
                    <div class="cchat-thumbnail thumbnail-overlay h-auto">
                        <img src="https://vumbnail.com/1074009289.png" alt="Thumbnail">
                    </div>
                    <i class="far fa-play-circle  absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                </a>
            </div>
            <div class="cchat-box mb-4">
                <a href="https://cancervax.com/webinar-may-31-2025" class="relative">
                    <div class="cchat-thumbnail thumbnail-overlay h-auto">
                        <img src="https://vumbnail.com/1088764643/6170b7e696.png" alt="Thumbnail">
                    </div>
                    <i class="far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-24" id="news-commentary">
    <div class="container">
        <div class="flex items-center justify-between mb-10">
            <h3 class="text-black text-xl sm:text-[40px] leading-10 font-medium">News Commentary</h3>
            <a href="./news-commentary" class="text-custom-teal-100 underline text-lg">See All</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <?php
            $categories = ['news-commentary'];

            $filteredNewsCommentaryVideos = array_filter($videos, function ($item) use ($categories) {
                // Check if the category is in the list and the scope is public, but not "short-videos"
                return in_array($item['category'], $categories) && $item['scope'] === 'public' && $item['category'] !== 'short-videos';
            });

            // Sort the filtered videos by date in descending order
            // usort($filteredNewsCommentaryVideos, function ($a, $b) {
            //     return strtotime($b['date']) - strtotime($a['date']);
            // });

            // Take the latest 4 videos for "news-commentary"
            $latestNewsCommentary = array_slice($filteredNewsCommentaryVideos, 0, 4);

            foreach ($latestNewsCommentary as $video) {
                if ($video['date']) {
                    $title = $video['date'] . " - " . $video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "
            <div>
            <div class=\"relative mb-6\">
            <a class=\"popup-youtube getThumbnail w-full h-full block absolute inset-0 z-10\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
            <a class=\"w-full h-full block absolute inset-0 z-10\" href=\"news-commentary/{$video['slug']}\"></a>
                <div class=\"relative h-[225px]\">
                 <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\" class=\"w-full h-full object-cover\">
                </div>
                <i class=\"far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]\"></i>
            </div>            
            <p class=\"text-xl sm:text-lg text-black font-bold leading-normal sm:leading-tight\" >{$title}</p>
            </div>";
            }
            ?>
        </div>

    </div>
</section>

<section class="pt-24 pb-0" id="short-videos">
    <div class="container">
        <div class="flex items-center justify-between mb-10">
            <h3 class="text-black text-xl sm:text-[40px] leading-10 font-medium">Short Videos</h3>
            <a href="https://www.youtube.com/@CancerVAX/shorts" target="_blank" class="text-custom-teal-100 underline text-lg">See All</a>
        </div>
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            <?php
            $filteredlatestCancerSurvivorStories = array_filter($videos, function ($item) {
                return $item['category'] === 'cancer-survivor-stories' && $item['scope'] === 'public';
            });
            usort($filteredlatestCancerSurvivorStories, function ($a, $b) {
                return strtotime($b['date']) - strtotime($a['date']);
            });

            $latestCancerSurvivorStories = array_slice($filteredlatestCancerSurvivorStories, 0, 4);
            foreach ($latestCancerSurvivorStories as $video) {
                $temp1 = strtolower($video['title']);
                $string = str_replace(' ', '-', $temp1);
                echo "
            <div>
            <div class=\"relative mb-6\">
            <a class=\"popup-youtube getThumbnail w-full h-full block absolute inset-0 z-10\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
            <a class=\"w-full h-full block absolute inset-0 z-10\" href=\"cancer-survivor-stories/{$video['slug']}\"></a>
                <div class=\"relative h-[225px]\">
                 <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\" class=\"w-full h-full object-cover\">
                </div>
                <i class=\"far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]\"></i>
            </div>            
            <p class=\"text-xl sm:text-lg text-black font-bold leading-normal sm:leading-tight\" >{$title}</p>
            </div>";
            }
            ?>
        </div> -->
    </div>
</section>

<section class="pb-24">
    <div class="container">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            <?php
            $filteredlatestShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short-videos' && $item['scope'] === 'public';
            });
            // usort($filteredlatestShortVideos, function ($a, $b) {
            //     return strtotime($b['date']) - strtotime($a['date']);
            // });

            $latestCancerShortVideos = array_slice($filteredlatestShortVideos, 0, 4);
            foreach ($latestCancerShortVideos as $video) {

                if ($video['date'] === " ") {
                    $title = $video['date'] - $video['title'];
                } else {
                    $title = $video['title'];
                }
                echo "
            <div>
            <div class=\"relative mb-6\">
            <a class=\"popup-youtube getThumbnail w-full h-full block absolute inset-0 z-10\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
            <a class=\"w-full h-full block absolute inset-0 z-10\" href=\"short-videos/{$video['slug']}\"></a>
                <div class=\"relative h-[540px]\">
                 <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\" class=\"w-full h-full object-cover\">
                </div>
                <i class=\"far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-6xl [text-shadow:1px_0_6px_rgba(0,0,0,.3)]\"></i>
            </div>            
            <p class=\"text-xl sm:text-lg text-black font-bold leading-normal sm:leading-tight\" >{$title}</p>
            </div>";
            }
            ?>

        </div>
    </div>
</section>