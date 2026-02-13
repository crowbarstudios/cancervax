<?php
$videos = include "./data/podcast-data.php";
$news = include "./data/news-data.php"
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
            // $latestIndustryNews = array_slice($filteredPressleaseNews, 0, 4);
            foreach ($filteredPressleaseNews as $item) {
                echo "<div class=\"bg-custom-gray-200 min-h-full p-4 sm:p-10 relative \">
                        <a href=\"single-news.php?id={$item['id']}\" class=\"absolute inset-0 w-full h-full\"></a>
                        <span class=\"text-custom-teal-200 text-sm uppercase font-medium tracking-widest block\">{$item['date']}</span>
                        <h3 class=\"text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight\">{$item['title']}</h3>
                        <p class=\"text-black text-xl sm:text-base leading-normal\">{$item['excerpt']}</p>
                    </div>";
            } ?>

        </div>

    </div>
</section>