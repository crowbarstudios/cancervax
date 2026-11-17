<?php
ob_start();
include __DIR__ . '/team-heads.php';
$teamMarkup = ob_get_clean();

$teamMarkup = str_replace(
    [
        'w-[307px] xl:w-[224px] rounded-lg object-cover',
        'w-[307px] xl:w-[224px] h-auto rounded-lg object-cover',
    ],
    [
        'w-[307px] xl:w-[224px] h-[307px] xl:h-[224px] rounded-lg object-cover',
        'w-[307px] xl:w-[224px] h-[307px] xl:h-[224px] rounded-lg object-cover',
    ],
    $teamMarkup
);

$teamMarkup = str_replace('assets/images/', 'assets/images/home-aug-28-a/', $teamMarkup);
$teamMarkup = str_replace(
    [
        'assets/images/home-aug-28-a/george.png',
        'assets/images/home-aug-28-a/adam-grant.png',
        'assets/images/home-aug-28-a/sumant-ramachandra.png',
        'assets/images/home-aug-28-a/gordon-ringold.png',
        'assets/images/home-aug-28-a/mark-davis.png',
        'assets/images/home-aug-28-a/george-kemble.png',
        'assets/images/home-aug-28-a/lakey.png',
        'assets/images/home-aug-28-a/steven-warner.png',
        'assets/images/home-aug-28-a/matthew-spear.png',
        'assets/images/home-aug-28-a/amit-indap.png',
    ],
    [
        'assets/images/home-aug-28-a/george.jpg',
        'assets/images/home-aug-28-a/adam-grant.jpg',
        'assets/images/home-aug-28-a/sumant-ramachandra.jpg',
        'assets/images/home-aug-28-a/gordon-ringold.jpg',
        'assets/images/home-aug-28-a/mark-davis.jpg',
        'assets/images/home-aug-28-a/george-kemble.jpg',
        'assets/images/home-aug-28-a/lakey.jpg',
        'assets/images/home-aug-28-a/steven-warner.jpg',
        'assets/images/home-aug-28-a/matthew-spear.jpg',
        'assets/images/home-aug-28-a/amit-indap.jpg',
    ],
    $teamMarkup
);

$teamMarkup = str_replace(
    [
        'class="max-w-[970px] mx-auto"',
        'class="w-full md:max-w-[720px] xl:max-w-[470px] mx-auto"',
    ],
    [
        'class="max-w-[970px] mx-auto home-sep-1-team-group"',
        'class="w-full md:max-w-[720px] xl:max-w-[470px] mx-auto home-sep-1-team-group"',
    ],
    $teamMarkup
);

$teamMarkup = str_replace(
    [
        'class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto"',
        'class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto my-6"',
        'class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center my-6"',
    ],
    [
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto"',
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 justify-center max-w-[717px] mx-auto my-6"',
        'class="home-sep-1-team-grid grid grid-cols-1 md:grid-cols-2 gap-6 justify-center my-6"',
    ],
    $teamMarkup
);

$teamMarkup = str_replace('<a href="#">', '<a href="/team">', $teamMarkup);

// Keep the same canonical team-heads.php biographies and homepage portrait
// transformation above; the ID supplies a /team-only styling boundary.
echo '<div id="cvax-team-reference" class="home-sep-1-team-layout">' . $teamMarkup . '</div>';

$developmentPartners = [
    [
        'name' => 'IQVIA',
        'image' => 'assets/images/home-aug-28-a/iqvia.jpg',
        'description' => 'Global leader in clinical research, real-world evidence and healthcare data science.',
    ],
    [
        'name' => 'Axis Bio',
        'image' => 'assets/images/axisbio.png',
        'description' => 'Preclinical CRO delivering expertise in pharmacology, efficacy and safety evaluation.',
    ],
    [
        'name' => 'RoukenBio',
        'image' => 'assets/images/roukenbio.png',
        'description' => 'Specialists in antibody analytics and characterization for biologics development.',
    ],
    [
        'name' => 'Champions Oncology',
        'image' => 'assets/images/champions-oncology.png',
        'description' => 'Oncology CRO advancing clinical development and patient-focused therapies.',
    ],
    [
        'name' => 'Cytiva',
        'image' => 'assets/images/cytiva.png',
        'description' => 'Enabling the development and manufacture of advanced therapies and biologics.',
    ],
    [
        'name' => 'TriLink',
        'image' => 'assets/images/trilink.png',
        'description' => 'Delivering innovative tools and services for nucleic acid and bioconjugate development.',
    ],
    [
        'name' => 'VectorBuilder',
        'image' => 'assets/images/vectorbuilder.png',
        'description' => 'Custom vector design and molecular cloning solutions for research and development.',
    ],
];
?>

<section class="home-sep-1-development-partners bg-white py-[50px] sm:py-[70px]">
    <div class="container">
        <div class="mx-auto max-w-[1220px]">
            <div class="text-center max-w-4xl mx-auto mb-[30px]">
                <h3 class="text-black font-medium">Our Development Partners</h3>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach (array_slice($developmentPartners, 0, 4) as $partner): ?>
                    <article class="flex min-h-[270px] flex-col items-center rounded-2xl border border-[#e7ebef] bg-white px-6 py-6 text-center shadow-[0_4px_14px_rgba(25,45,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_24px_rgba(25,45,65,0.13)]">
                        <div class="flex h-[90px] w-full items-center justify-center">
                            <img src="<?php echo $full_url . $partner['image']; ?>" alt="<?php echo htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8'); ?>" class="max-h-[82px] max-w-[230px] w-auto object-contain">
                        </div>
                        <h3 class="mt-5 text-[17px] font-semibold leading-tight text-[#14213d]"><?php echo $partner['name']; ?></h3>
                        <p class="caption-text mt-3 text-center text-black"><?php echo $partner['description']; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="home-sep-1-development-partners-bottom mx-auto mt-5 grid max-w-[930px] grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                <?php foreach (array_slice($developmentPartners, 4) as $partner): ?>
                    <article class="flex min-h-[270px] flex-col items-center rounded-2xl border border-[#e7ebef] bg-white px-6 py-6 text-center shadow-[0_4px_14px_rgba(25,45,65,0.08)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_24px_rgba(25,45,65,0.13)]">
                        <div class="flex h-[90px] w-full items-center justify-center">
                            <img src="<?php echo $full_url . $partner['image']; ?>" alt="<?php echo htmlspecialchars($partner['name'], ENT_QUOTES, 'UTF-8'); ?>" class="max-h-[82px] max-w-[230px] w-auto object-contain">
                        </div>
                        <h3 class="mt-5 text-[17px] font-semibold leading-tight text-[#14213d]"><?php echo $partner['name']; ?></h3>
                        <p class="caption-text mt-3 text-center text-black"><?php echo $partner['description']; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>