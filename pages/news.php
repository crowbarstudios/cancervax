<?php
$videos = include __DIR__ . '/../data/podcast-data.php';
$news = include __DIR__ . '/../data/news-data.php';
?>

<section class="py-24 md:py-28 bg-top bg-cover text-center relative bg-news-bg">
    <div class="container">
        <h1 class="relative z-10 text-white font-medium">Newsroom</h1>
    </div>
</section>

<section class="py-24">
    <div class="container">
        <!-- Latest Press Release News -->
        <div>
            <h2 class="text-2xl sm:text-[40px] leading-10 mb-5 sm:mb-10 font-medium">Press Releases</h2>
        </div>
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
        <div class="flex items-center justify-center mt-[46px]">
            <a href="news-archive" class="text-custom-teal-300 hover:text-custom-teal-100 text-[22px] cursor-pointer leading-5 underline">See All</a>
        </div>
    </div>
</section>

<section class="py-12 sm:py-24">
    <div class="container">
        <div>
            <h2 class="text-2xl sm:text-[40px] leading-10 mb-5 sm:mb-10 font-medium">News Commentary</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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
                $latestNewsCommentary = array_slice($filteredNewsCommentaryVideos, 0, 3);

                foreach ($latestNewsCommentary as $video) {
                    if ($video['date']) {
                        $title = $video['date'] . " - " . $video['title'];
                    } else {
                        $title = $video['title'];
                    }
                    echo "
                    <div>
                        <div class=\"relative\">
                            <a class=\"popup-youtube getThumbnail w-full h-full block absolute inset-0 z-10\" href=\"https://www.youtube.com/watch?v={$video['videoID']}\"></a>
                            <a class=\"w-full h-full block absolute inset-0 z-10\" href=\"videos/news-commentary/{$video['slug']}\"></a>
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