<?php
// The reference intentionally predates article 54. Keep this homepage selection
// stable without changing the newsroom, article data, or other home variants.
$referenceNews = array_values(array_filter($news, static fn ($item) => in_array((string) $item['id'], ['53', '52', '51', '50'], true)));
usort($referenceNews, static fn ($a, $b) => (int) $b['id'] <=> (int) $a['id']);
?>
<section class="bg-white pt-[70px]">
    <div class="container">
        <div class="text-center max-w-4xl mx-auto mb-[30px]"><h3 class="text-black font-medium">News Highlights</h3></div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-7">
            <?php foreach ($referenceNews as $item): ?>
                <div class="bg-custom-gray-200 min-h-full p-4 sm:p-10 relative">
                    <a href="/single-news.php?id=<?= htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8') ?>" class="absolute inset-0 w-full h-full" aria-label="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>"></a>
                    <span class="text-custom-teal-300 text-sm uppercase font-medium tracking-widest block"><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></span>
                    <h3 class="text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p class="text-black text-xl sm:text-base leading-normal"><?= $item['excerpt'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
