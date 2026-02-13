<?php
$videos = include "./data/podcast-data.php";
?>

<section class="py-24 md:py-28 bg-top bg-cover text-center relative bg-video-bg bg-black bg-opacity-50 after:content-[''] after:absolute after:inset-0 after:bg-black after:bg-opacity-70">
    <div class="container">
        <h1 class="relative z-10 text-white font-medium">News Commentary</h1>
    </div>
</section>

<section class="py-[70px] sm:pt-[140px] sm:pb-20 bg-black">
    <div class="container">
        <div class="max-w-[600px] mx-auto flex items-center justify-center gap-5 flex-col sm:flex-row">
            <div class="min-w-[160px]">
                <img src="./assets/images/byron-cvax.png" class="w-full" alt="ryan">
            </div>
            <p class="text-gray-400 text-base leading-7 text-center">Watch our CMO, Byron Elton, cover the most important news and developments in the cancer industry</p>
        </div>
    </div>
</section>

<section class="bg-black pb-20 sm:pb-32">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 text-gray-500">
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
                // $latestNewsCommentary = array_slice($filteredNewsCommentaryVideos, 0, 4);

                foreach ($filteredNewsCommentaryVideos as $video) {
                    if ($video['date']) {
                        $title = $video['date'] . " - " . $video['title'];
                    } else {
                        $title = $video['title'];
                    }
                    echo "
                <div>
                <div class=\"relative mb-6\">
                <a class=\"popup-youtube getThumbnail w-full h-full block absolute inset-0 z-10\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                <a class=\"w-full h-full block absolute inset-0 z-10\" href=\"videos/news-commentary/{$video['slug']}\"></a>
                    <div class=\"relative h-auto md:h-[394px] lg:h-[260px] xl:h-[394px]\">
                    <img src=\"//img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"Thumbnail\" class=\"w-full h-full object-cover\">
                    </div>
                    <i class=\"far fa-play-circle absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-[100px] lg:text-6xl xl:text-[100px] [text-shadow:1px_0_6px_rgba(0,0,0,.3)]\"></i>
                </div>            
                <p class=\"text-xl sm:text-lg text-gray-400 font-bold leading-normal sm:leading-tight\" >{$title}</p>
                </div>";
                }
            ?>
        </div>
    </div>
</section>