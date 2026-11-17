<?php
/**
 * Preserve the owned reference's original main DOM and CSS chart markup.
 * Newsletter/legal content comes from the shared footer exactly once, retaining
 * its live Jotform submission and CAPTCHA validation.
 */
$marketReference = file_get_contents(
    __DIR__ . '/../assets/images/market-reference/source.html'
);
$marketStart = strpos($marketReference, '<main id="main">');
$marketEnd = strpos($marketReference, '<div class="cv-tech"><section class="tech-subscribe"', $marketStart);
$marketMain = substr($marketReference, $marketStart, $marketEnd - $marketStart);
$marketMain = str_replace(
    ['https://staging.cancervax.com/', 'https://cancervax.com/', 'src="assets/', 'href="assets/'],
    ['/', '/', 'src="/assets/images/market-reference/', 'href="/assets/images/market-reference/'],
    $marketMain
);
echo $marketMain;
?>
</main>
