<?php
$videos = include "./data/podcast-data.php";
if (isset($_GET['id'])) {
    $videoId = $_GET['id'];
    $video = array_filter($videos, function ($video) use ($videoId) {
        return $video['videoID'] == $videoId;
    });
    $video = reset($video);
}

?>

<section class="pt-28 pb-2">
    <div class="container">
        <?php if ($video) : ?>
            <div>
                <h1 class="text-2xl sm:text-[44px] leading-snug sm:leading-none mb-6 sm:mb-12 font-medium text-custom-teal-300"><?php echo $video['title']; ?></h1>
                <div class="podcast-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video['videoID']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>