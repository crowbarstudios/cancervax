<?php
/**
 * Render the reference's original main DOM without reserializing its SVGs.
 * The checked-in snapshot is deliberately immutable: it preserves every path,
 * accessibility label, responsive class, and item of reference copy.
 *
 * Newsletter and legal markup are supplied by the existing shared footer so
 * there is exactly one working Jotform subscription form on this page.
 */
$technologyReference = file_get_contents(
    __DIR__ . '/../assets/images/technology-reference/source.html'
);
$technologyStart = strpos($technologyReference, '<main id="technology">');
$technologyEnd = strpos($technologyReference, '<section class="tech-subscribe"', $technologyStart);
$technologyMain = substr(
    $technologyReference,
    $technologyStart,
    $technologyEnd - $technologyStart
);
$technologyMain = str_replace(
    ['src="assets/', 'href="assets/', 'https://cancervax.com/'],
    ['src="/assets/images/technology-reference/', 'href="/assets/images/technology-reference/', '/'],
    $technologyMain
);
echo $technologyMain;
?>
</div>
</main>
