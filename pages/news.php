<main id="main">
  <section class="news-hero py-24 md:py-28 text-center" aria-labelledby="page-title">
    <div class="container"><h1 class="text-white font-medium" id="page-title">Newsroom</h1></div>
  </section>

  <section class="release-band" aria-labelledby="releases-title">
    <div class="container">
      <div class="release-heading">
        <h2 id="releases-title">Press releases</h2>
        <a class="archive-link" href="/news-archive">View full archive <span aria-hidden="true">→</span></a>
      </div>
      <div class="release-list">
        <?php
        $news = require __DIR__ . '/../data/news-data.php';
        $pressReleases = array_filter($news, static function ($item) {
            return ($item['category'] ?? '') === 'pressrelease';
        });
        foreach (array_slice($pressReleases, 0, 4) as $item):
            $timestamp = strtotime($item['date']);
        ?>
        <article class="release">
          <time<?php if ($timestamp !== false): ?> datetime="<?= date('Y-m-d', $timestamp) ?>"<?php endif; ?>><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></time>
          <div class="release-copy">
            <h3><a href="/single-news.php?id=<?= rawurlencode((string) $item['id']) ?>"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8', false) ?></a></h3>
            <p><?= htmlspecialchars($item['excerpt'], ENT_QUOTES, 'UTF-8', false) ?></p>
          </div>
          <span class="release-arrow" aria-hidden="true">→</span>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
