<?php
$news = include __DIR__ . '/../data/news-data.php';
if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $item = array_filter($news, function ($item) use ($newsId) {
        return $item['id'] == $newsId;
    });
    $item = reset($item);
}
?>


<section class="pt-28 pb-2">
    <div class="container">
        <?php if ($item) : ?>
            <h1 class="text-2xl sm:text-[44px] leading-snug sm:leading-none mb-6 sm:mb-12 font-medium text-custom-teal-300"><?php echo $item['title']; ?></h1>
            <div class="[&_h3]:text-xl sm:[&_h3]:text-lg md:[&_h3]:text-2xl [&_h3]:font-normal [&_h3]:text-custom-teal-300 [&_h3]:mt-5 md:[&_h3]:mt-6 [&_h3]:mb-3 [&_p]:text-xl sm:[&_p]:text-base [&_p]:mb-4 [&_p]:tracking-[0.78px] [&_a]:text-xl sm:[&_a]:text-base [&_a]:mb-4 [&_a]:tracking-[0.78px] [&_a]:underline [&_ul]:list-disc [&_ul]:pl-10 [&_ul]:my-6 [&_li]:text-xl sm:[&_li]:text-base">
                <?php
                foreach ($item['description'] as $paragraph) {
                    echo "{$paragraph[0]}";
                } ?>

                <h3>About Cancervax</h3>
                <p>Cancervax, Inc. is developing immunotherapy cancer treatments that use the body’s immune system to treat cancer. Much like COVID-19 vaccines that train the body to recognize and destroy the coronavirus, we are developing cancer vaccines that train the body to target and destroy cancer cells. Our immunotherapy platform is aimed at creating lower cost personalized CAR T-cell therapies as well as generalized antibody treatments through nanotechnology and gene-editing innovations. Our initial drug development is targeted at treating Ewing Sarcoma, a rare but deadly bone and soft tissue cancer that primarily affects children and young adults. There is currently no FDA approved treatment to prevent recurrence. Our research is performed at the UCLA Jonsson Comprehensive Cancer Center by a leading cancer research team. We believe the resulting immunotherapy platform will be able to target other cancers such as adrenal cancer and brain cancer, as well as enabling the development of other vaccines and drugs. For more information about the Company, please visit <a href="https://cancervax948.e.wpstage.net/" target="_blank">https://cancervax948.e.wpstage.net/</a>.</p>
                <h3>Forward-Looking Statements</h3>
                <p>This press release may contain “forward-looking statements” within the meaning of the safe harbor provisions of the U.S. Private Securities Litigation Reform Act of 1995. Forward-looking statements are neither historical facts nor assurances of future performance. Instead, they are based only on our current beliefs, expectations and assumptions regarding the future of our business, future plans and strategies, projections, anticipated events and trends, the economy and other future conditions. Because forward-looking statements relate to the future, they are subject to inherent uncertainties, risks and changes in circumstances that are difficult to predict and many of which are outside of our control. Our actual results and financial condition may differ materially from those indicated in the forward-looking statements. Therefore, you should not rely on any of these forward-looking statements. Any forward-looking statement made by us in this release is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise.</p>
                <p>Press Contact: Cancervax, Inc.<br>Tel: <a href="tel:8053561810">(805) 356-1810</a><br><a href="mailto:communications@cancervax.com">communications@cancervax.com</a></p>
            </div>
        <?php endif; ?>
    </div>
</section>
