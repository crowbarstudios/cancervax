<?php
$news = include __DIR__ . '/../data/news-data.php';
$item = false;
if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $item = array_filter($news, function ($item) use ($newsId) {
        return $item['id'] == $newsId;
    });
    $item = reset($item);
    if (!$item) {
        $legacyNews = include __DIR__ . '/../data/news-data-old.php';
        $legacyItem = array_filter($legacyNews, function ($item) use ($newsId) {
            return $item['id'] == $newsId;
        });
        $item = reset($legacyItem);
    }
}
if (!$item) {
    http_response_code(404);
}
?>


<main id="main">
    <article class="container press-article" aria-labelledby="article-title">
        <?php if ($item) : ?>
            <header>
                <h1 id="article-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8', false) ?></h1>
                <?php if (!empty($item['date'])) :
                    $timestamp = strtotime($item['date']);
                ?>
                    <div class="article-date"><time<?php if ($timestamp !== false): ?> datetime="<?= date('Y-m-d', $timestamp) ?>"<?php endif; ?>><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></time></div>
                <?php endif; ?>
            </header>
            <div class="article-body single-news-content">
                <?php
                foreach ($item['description'] as $paragraph) {
                    echo "{$paragraph[0]}";
                } ?>

                <?php if (empty($item['includesLegalSections'])) : ?>
                <h3>About CancerVax</h3>
                <p>CancerVax is a pre-clinical biotech company developing a novel Universal Cancer Treatment platform that will be customizable, as an injection, to treat many types of cancer. Our innovative approach DETECTS, MARKS, and KILLS only cancer cells. By making cancer cells look like well-immunized common diseases, such as measles or chickenpox, we intend to use the body’s natural immune system to easily kill the cancer cells. We look forward to the day when treating cancer will be as simple as getting a shot — a better way to fight cancer. To learn more, please visit <a href="https://www.cancervax.com" target="_blank">www.CancerVax.com</a></p>
                <h3>Forward-Looking Statements</h3>
                <p>This press release may contain “forward-looking statements” within the meaning of the safe harbor provisions of the U.S. Private Securities Litigation Reform Act of 1995. Forward-looking statements are neither historical facts nor assurances of future performance. Instead, they are based only on our current beliefs, expectations and assumptions regarding the future of our business, future plans and strategies, projections, anticipated events and trends, the economy and other future conditions. Because forward-looking statements relate to the future, they are subject to inherent uncertainties, risks and changes in circumstances that are difficult to predict and many of which are outside of our control. Our actual results and financial condition may differ materially from those indicated in the forward-looking statements. Therefore, you should not rely on any of these forward-looking statements. Any forward-looking statement made by us in this release is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise.</p>
                <p>Press Contact: Cancervax, Inc.<br>Tel: <a href="tel:8053561810">(805) 356-1810</a><br><a href="mailto:communications@cancervax.com">communications@cancervax.com</a></p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <h1 id="article-title">Article unavailable</h1>
        <?php endif; ?>
        <a class="article-back" href="/news">← Back to Newsroom</a>
    </article>
</main>
