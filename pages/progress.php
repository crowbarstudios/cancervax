<?php
$isRedesignedProgress = in_array($page ?? '', ['progress', 'progress-sep-8'], true);
?>

<section class="py-24 md:py-28 bg-center bg-cover text-center relative bg-progress-bg bg-black bg-opacity-50 after:content-[''] after:absolute after:inset-0 after:bg-black after:bg-opacity-50">
    <div class="container">
        <h1 class="relative z-10 text-white font-medium">Progress</h1>
    </div>
</section>

<section class="bg-white py-20">
    <div class="container">
        <div class="relative ">
            <?php if ($isRedesignedProgress): ?>
            <img src="<?php echo $full_url; ?>assets/images/progress-sep-8-roadmap.svg" class="hidden md:block w-full" alt="CancerVax development progress roadmap">
            <img src="<?php echo $full_url; ?>assets/images/progress-sep-8-roadmap-mobile.svg" class="md:hidden w-full" alt="CancerVax vertical development progress roadmap">
            <?php else: ?>
            <img src="<?php echo  $full_url; ?>assets/images/graph.png" class="hidden md:block w-full" alt="graph">
            <img src="<?php echo  $full_url; ?>assets/images/graph-mobile.png" class="md:hidden" alt="graph">
            <?php endif; ?>
            <a href="#children-cancer" style="display: inline-block;
                position: absolute;
                left: 0;
                top: 25%;
                width: 24%;
                height: 18.5%;"></a>
            <a href="#ucvp" style="display: inline-block;
                position: absolute;
                left: 0;
                top: 44%;
                width: 24%;
                height: 26%;"></a>
            <a href="#uctcp" style="
                display: inline-block;
                position: absolute;
                left: 0;
                top: 70%;
                width: 24%;
                height: 26%;"></a>
            <?php if ($isRedesignedProgress): ?>
            <a href="single-news.php?id=31" class="roadmap-press-link roadmap-press-link-pancreatic" aria-label="Read the Pancreatic Cancer press release" style="display: inline-block;
                position: absolute;
                z-index: 2;
                left: 4.2%;
                top: 65%;
                width: 7.2%;
                height: 9%;"></a>
            <a href="single-news.php?id=36" class="roadmap-press-link roadmap-press-link-liver" aria-label="Read the Liver Cancers press release" style="display: inline-block;
                position: absolute;
                z-index: 2;
                left: 4.2%;
                top: 79.7%;
                width: 7.2%;
                height: 9%;"></a>
            <?php endif; ?>
        </div>

        <ul class="theme-list mt-12 [&_li]:text-xl md:[&_li]:text-lg [&_li]:text-black">
            <li>Filed multiple patent applications </li>
            <li>Designed several Smart mRNAs for targeting multiple cancer types​​</li>
            <li>Lab tests successfully validated Smart mRNAs worked in actual cancer cells (Q1 2025)​</li>
            <li>Complete therapeutic nanoparticles for the above cancer indications (Q3 2025)</li>
            <li>Complete pre-IND animal studies to determine toxicity and efficacy of the above cancer treatments (2026)</li>
        </ul>
    </div>
</section>

<section id="development-milestones">
    <div class="container">
        <div>
            <h2 class="text-center text-5xl mb-10 font-medium">Major Development Milestones</h2>
        </div>
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">February 25, 2025 – Smart mRNA Works!</h5>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-[52px] sm:gap-6">
                <div class="lg:col-span-7">
                    <p class="text-2xl text-center mb-3">Smart mRNA turned <strong class="underline">ON</strong> in <br> cancer cells only
                    </p>
                    <div class="flex justify-center items-center sm:min-h-[370px]">
                        <img src="./assets/images/fluorescene-microscopy.png" class="max-h-[370px]" alt="fluorescene-microscopy">
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <p class="text-2xl text-center mb-3">Smart mRNA turned <strong class="underline">OFF</strong> <br> in healthy cell line (HEK293)</p>
                    <div class="flex justify-center item-center sm:min-h-[370px]">
                        <img src="./assets/images/gfp-smart-mrnas-cropped.png" class="max-h-[370px]" alt="fluorescene-microscopy">
                    </div>
                    
                </div>
            </div>
            <div id="first-milestone-actions" class="progress-two-actions grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-7 flex justify-center">
                    <a href="webinar-feb-25-2025" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Update Video</a>
                </div>
                <div class="lg:col-span-5 flex justify-center">
                    <a href="single-news.php?id=32" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

 <section>
    <div class="container py-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">May 31, 2025 – Successfully Made Cell Targeting Lipid Nanoparticle (“LNP”)</h5>
            <div class="bg-white p-8 grid progress-may-2025-layout">
                <div class="flex flex-col justify-center items-center xl:px-3">
                    <h6 class="text-2xl font-bold mb-5 text-center">Lipid Nanoparticle</h6>
                    <img class="progress-may-2025-lnp-image" src="<?php echo $full_url; ?>assets/images/lipid-nanoparticle-marker1.png" alt="Blue lipid nanoparticle displaying Marker1 targeting molecules">
                </div>
                <div class="px-3">
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li>Independent analysis confirmed efficient and successful attachment of Marker1 onto lipid nanoparticles</li>
                        <li class="my-5">Marker1 is a molecule that will seek out  specific proteins on cancer cell surface and deliver our Smart mRNA payload</li>
                        <li>Next step, we will put Smart mRNAs inside the nanoparticles to make  complete cancer targeting and killing nanoparticles. </li>
                    </ul>
                </div>
            </div>
            <div class="progress-may-2025-actions grid mt-12">
                <div class="flex justify-center">
                    <a href="webinar-may-31-2025" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Update Video</a>
                </div>
                <div class="flex justify-center">
                    <a href="single-news.php?id=35" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5  class="text-2xl font-bold mb-8">August 5, 2025 – Successfully Disguised Cancer Cells and Tricked Immune Cells into Attacking Them</h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 xl:px-3">
                    <img src="./assets/images/t-cells-stimulatory.png" alt="lipid-nanoparticle">
                    <div class="max-w-[320px] mt-14 mx-auto">
                        <p class="text-base font-semibold tracking-normal">Statistical Difference Between Conditions: </p>
                        <ul class="[&>li]:text-[14px]">
                            <li class="flex"><span class="min-w-[50px]">ns</span><span>p>0.05 (not significant)</span></li>
                            <li class="flex"><span class="min-w-[50px]">*</span><span>p<=0.05</span></li>
                            <li class="flex"><span class="min-w-[50px]">**</span><span>p<=0.01</span></li>
                            <li class="flex"><span class="min-w-[50px]">***</span><span>p<=0.001</span></li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li>Non-immunogenic mRNA was used as a Negative Control to confirm little to no T-cell activation by cancer cells alone.</li>
                        <li class="my-5">Known immunogenic peptides were used as a Positive Control to confirm the expected level of T-cell activation.</li>
                        <li class="mb-5">CancerVax mRNAs disguised cancer cells as measles and Sars-CoV-2, which activated T-cells to similar levels as the Positive Control. </li>
                        <li><strong>The CancerVax trick worked, and worked very well!</strong></li>
                    </ul>   
                </div>
            </div>
            <div class="progress-two-actions grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-7 flex justify-center">
                    <a href="update-video-august-5-2025" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Update Video</a>
                </div>
                <div class="lg:col-span-5 flex justify-center">
                    <a href="single-news.php?id=38" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>    
        </div>
    </div>
</section>

<section>
    <div class="container pt-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">October 15, 2025 – Smart mRNA Successfully Avoided Healthy Liver Cells to Reduce Liver Toxicity </h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 flex justify-center items-center xl:px-3">
                    <img src="./assets/images/dev-progress-4.png" alt="lipid-nanoparticle">
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li>The liver is the main site for drug metabolism. Many cancer therapies fail in clinical trials because a significant portion of the drug ends up in the liver and causes liver damage or liver failure.</li>
                        <li class="my-5">Recent in-vitro tests confirmed that our Smart mRNAs targeting pancreatic and liver cancers were dramatically deactivated in healthy human liver cells.</li>
                        <li><strong>In other words, CancerVax will not make healthy liver cells look like measles!</strong></li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-6"></div>
                <div class="lg:col-span-6 flex justify-center">
                    <a href="single-news.php?id=42" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">March 31, 2026 – Breakthrough Mouse Study Showed Reduced LNP Liver Accumulation</h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 flex justify-center items-center xl:px-3">
                    <img src="./assets/images/breakthrough-mouse-1.png" alt="lipid-nanoparticle">
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li><strong class="block">Systemic Circulation of the LNPs</strong>
Many LNP therapies fail in clinical trials due to liver accumulation and resulting toxicity.  CancerVax LNPs showed dramatically lowered liver accumulation.</li>
                        <li class="my-5"><strong class="block">Distribution Noted in Many Organs:</strong>
                        Spleen, Lung, Liver, Kidney, Intestines, Pancreas, Bladder, Heart, Stomach, Ovaries/Testes. </li>
                        <li><strong class="block">Dosage Response:</strong>A clear dose response was observed in this study of 24 mice, with signal intensity increasing alongside administered dose levels. All animals remained healthy and active during the study suggesting strong tolerability of the Marker1-LNP formulation.</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-6"></div>
                <div class="lg:col-span-6 flex justify-center">
                    <a href="single-news.php?id=47" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">June 15, 2026 – Successful Biodistribution Study of Complete Nanoparticle</h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 flex justify-center items-center xl:px-3">
                    <img src="./assets/images/progress-june2026/image1.png" alt="Complete nanoparticle biodistribution study results">
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li class="mb-5">First biodistribution study of the Company's complete cancer targeting nanoparticle avoided many healthy organs.</li>
                        <li class="mb-5">Marker1 showed signs of directing LNPs into specific cells with matching Marker1 surface proteins and delivered the Smart mRNA payload.</li>
                        <li class="mb-5">Once inside healthy cells, Marker2 was very effective in deactivating the Smart mRNA.</li>
                        <li class="mb-5">Marker1+Marker2 LNPs showed significantly lower liver stress markers (ALT/AST and total bilirubin) than conventional LNPs, consistent with the high cell selectivity of the construct.</li>
                        <li><strong>First of a kind, Marker1+Marker2 nanoparticle worked as expected!</strong></li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-6"></div>
                <div class="lg:col-span-6 flex justify-center">
                    <a href="single-news.php?id=49" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pb-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">August 6, 2026 – Major Milestone in Activating Human Killer T-Cells Against Cancer</h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 flex flex-col justify-center items-center xl:px-3">
                    <img src="./assets/images/progress-aug2026/image1.png" alt="ELISpot on CDX Liver Cancer Cells">
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <p class="text-xl font-bold mb-5">ELISpot results from left to right</p>
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li class="mb-5">Before T-cells can kill cancer cells, they must be first activated. The latest studies validated this important part of our platform.</li>
                        <li class="mb-5">Large amounts of human immune cells (PBMCs) were successfully activated.</li>
                        <li class="mb-5">CD4 T-cells were depleted to confirm CD8+ Killer T-cells were activated.</li>
                        <li class="mb-5">CD8+ Killer T-cells were isolated and confirmed specific activation.</li>
                    </ul>
                    <p class="milestone-callout text-xl font-bold mt-6"><strong>CancerVax successfully tricked human anti-viral CD8+ Killer T-cells into thinking cancer is a familiar viral infection and should be killed!</strong></p>
                </div>
            </div>
            <div class="progress-two-actions grid grid-cols-1 lg:grid-cols-12 mt-12 gap-12">
                <div class="lg:col-span-7 flex justify-center">
                    <a href="webinar-august-6-2026" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Update Video</a>
                </div>
                <div class="lg:col-span-5 flex justify-center">
                    <a href="single-news.php?id=52" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="november-2026-milestone">
    <div class="container pb-28">
        <div class="bg-custom-aqua-100 px-8 py-9 rounded-[42px]">
            <h5 class="text-2xl font-bold mb-8">November 17, 2026 – Successfully Killed Cancer Cells in Landmark Test</h5>
            <div class="bg-white p-8 grid grid-cols-1 lg:grid-cols-12 gap-[52px]">
                <div class="lg:col-span-6 flex flex-col justify-center gap-8 xl:px-3">
                    <img
                        src="<?php echo $full_url; ?>assets/images/progress-nov-2026-cell-killing-chart.png"
                        alt="Cancer-cell killing over 68 hours, with antiviral T-cell test results approaching 100 percent cytolysis">
                    <img
                        src="<?php echo $full_url; ?>assets/images/progress-nov-2026-cell-killing-process.png"
                        alt="Four-step real-time cell-killing test: seed liver cancer cells, add CancerVax nanoparticles, wash the media, then add antiviral T-cells">
                </div>
                <div class="lg:col-span-6 lg:pt-6 px-3 xl:pr-[50px]">
                    <h6 class="text-2xl font-bold mb-5">Real-Time Cell Killing on the xCELLigence Machine</h6>
                    <ul class="list-disc list-outside [&>li]:text-black [&>li]:font-normal [&>li]:text-xl [&>li]:leading-8">
                        <li class="mb-5">Human liver cancer cells were seeded on gold electrodes.</li>
                        <li class="mb-5">CancerVax treatment nanoparticles were added and left for 24 hours.</li>
                        <li class="mb-5">The media was washed before human antiviral T-cells were added.</li>
                        <li>The cells were monitored in real time as the T-cells attacked.</li>
                    </ul>
                    <p class="milestone-callout text-xl font-bold mt-6"><strong>After 68 hours, nearly 100% of the cancer cells were killed.</strong></p>
                    <div class="mt-8 flex justify-center lg:justify-start">
                        <a href="single-news.php?id=54" class="theme-btn orange-btn !text-[18px] font-medium tracking-normal">Press Release</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
