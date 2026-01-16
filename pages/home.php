<?php $videos = include "./data/carousel-videos.php"; ?>

<section class="pt-11 md:pt-0">
    <div class="bg-banner-mobile md:bg-banner bg-white bg-no-repeat bg-[top_center] bg-cover h-[245px] sm:h-[480px] md:h-[850px] banner-home-up">
        <div class="container">
            <div class="max-w-screen-sm text-center mx-auto sm:pt-14 -top-7 sm:top-0 relative">
                <h1 style="color: #295d6e" class="text-[33px] sm:text-[50px] xl:text-[64px] font-medium">A Revolutionary Way to Treat Cancer</h1>
            </div>
            <div class="pt-[50px] xl:pt-4 max-w-[530px] xl:max-w-[615px]">
                <p class="hidden md:block mt-0 text-black text-2xl xl:text-[32px] font-medium mb-4">The CancerVax Way
                </p>
                <ul class="hidden md:block list-disc pl-[30px] max-w-[50%] lg:max-w-[81%] xl:max-w-[98%] space-y-2.5 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-2xl [&>li]:leading-tight">
                    <li>10 million people died last year because the body does not easily recognize and kill cancer cells.</li>
                    <li>However, the body is very good at killing diseases that it recognizes, such as measles.</li>
                    <li>Our unique technology disguises cancer cells to look like measles and “tricks” the body into killing them.</li>
                </ul>
            </div>
            <div class="mt-8 max-w-[450px]">
                <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4 hidden xl:block">Short Explainer Video</h2>
                <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden xl:block">
                    <div>
                        <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                    </div>
                    <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                        <i class="far fa-play-circle"></i>
                        <span>Watch video</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Banner text -->
    <div class=" shadow-[0px_-3px_20px_11px_#fff] sm:shadow-[0px_-20px_20px_20px_#fff] md:shadow-none md:hidden">
        <div class="container">
            <div class="max-w-[530px]">
                <p class="text-black text-lg sm:text-2xl font-medium mb-4">The CancerVax Way
                </p>
                <ul class="list-disc pl-[30px] max-w-1/2 space-y-2.5 [&>li]:text-black [&>li]:text-xl xl:[&>li]:text-[25px]">
                    <li>10 million people died last year because the body does not easily recognize and kill cancer cells.</li>
                    <li>However, the body is very good at killing diseases that it recognizes, such as measles.</li>
                    <li>Our unique technology disguises cancer cells to look like measles and “tricks” the body into killing them.</li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="h-auto relative overflow-hidden bg-white">
    <div class="h-full flex items-center py-6 sm:py-[70px] w-full">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="lg:col-span-7">
                    <h2 class="text-custom-teal-100 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">Short Explainer Video</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <h2 class="text-custom-teal-100 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">Webinar: Exciting Update on <br> our
                        Revolutionary Cancer Treatment</h2> -->
                    <!-- <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div> -->
                    <h2 class="bg-[#ff0000] text-white p-2 mx-auto max-w-[300px] text-4xl font-semibold mb-4 uppercase lg:hidden">Breaking News</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <a href="https://cancervax.com/cancervax-successfully-disguises-cancer-cells-and-tricks-immune-cells-into-attacking-them.php">
                            <img src="./assets/images/Rectangle1.png" class="w-full" alt="news-thumbnail">
                        </a>
                    </div>
                    <h2 class="bg-[#ff0000] text-white py-2 px-3 text-xl sm:text-2xl text-center font-semibold mb-4 lg:hidden">Scientific Team Discusses the Breakthrough</h2>
                    <div class="mb-9 border-[10px] sm:border-[12px] border-custom-teal-100 rounded-xl relative max-w-full lg:hidden">
                        <div>
                            <img src="//img.youtube.com/vi/EyANY8BXCX4/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="https://www.youtube.com/watch?v=EyANY8BXCX4" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <div class="space-y-4 [&>p]:tracking-normal [&>p]:text-xl [&>p]:leading-normal [&>p]:max-w-[630px] [&>p]:font-normal">
                        <p>

                            <strong> CancerVax is a pre-clinical biotech company</strong> developing a novel Universal Cancer Treatment Platform that will be customizable as an injection, to treat many types of cancer.
                        </p>

                        <p> Powered by artificial intelligence, our revolutionary approach <strong>DETECTS, MARKS, and KILLS</strong> only cancer cells using the body’s own immune system. Other immunotherapies have had very limited success trying to teach the immune system how to recognize cancer cells. Instead, we intend to make cancer cells look like a common disease that it already recognizes, such as measles, and “trick” the body into killing these “disguised” cancer cells with strength.</p>


                        <p> We look forward to the day when treating cancer will be as simple as getting a shot.
                        </p>

                    </div>
                </div>
                <div class="lg:col-span-5">
                    <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4 hidden lg:block xl:hidden">Short Explainer Video</h2>
                    <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block xl:hidden">
                        <div>
                            <img src="<?php echo  $full_url; ?>assets/images/home-video-thumbnail.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=PXBNJe3nHp0" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <h2 class="text-custom-teal-100 text-2xl text-center font-semibold mb-4 hidden lg:block">Webinar: Exciting Update on <br> our
                        Revolutionary Cancer Treatment</h2>
                    <div class="mb-9 border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <div>
                            <img src="//img.youtube.com/vi/FPUKs3cjQ8A/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="http://www.youtube.com/watch?v=FPUKs3cjQ8A" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div> -->
                    <h2 class="bg-[#ff0000] text-white p-2 mx-auto max-w-[300px] text-4xl font-semibold mb-4 hidden uppercase lg:block">Breaking News</h2>
                    <div class="mb-9 mx-auto border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <a href="https://cancervax.com/cancervax-successfully-disguises-cancer-cells-and-tricks-immune-cells-into-attacking-them.php">
                            <img src="./assets/images/Rectangle1.png" class="w-full" alt="news-thumbnail">
                        </a>
                    </div>
                    <h2 class="bg-[#ff0000] text-white py-2 px-3 text-2xl text-center font-semibold mb-4 hidden lg:block">Scientific Team Discusses the Breakthrough</h2>
                    <div class="mb-9 mx-auto border-[12px] border-custom-teal-100 rounded-xl relative max-w-[500px] hidden lg:block">
                        <div>
                            <img src="//img.youtube.com/vi/EyANY8BXCX4/maxresdefault.jpg" alt="thumbnail">
                        </div>
                        <a href="https://www.youtube.com/watch?v=EyANY8BXCX4" class="theme-btn uppercase absolute left-1/2 bottom-[92px] transform -translate-x-1/2 py-1 px-3 bg-[#ff0000] border-[#ff0000] popup-youtube">
                            <i class="far fa-play-circle"></i>
                            <span>Watch video</span>
                        </a>
                    </div>
                    <!-- <div class="bg-custom-gray-100 rounded-2xl p-6 border-[10px] sm:border-[16px] border-custom-teal-100 relative lg:max-w-[500px] sm:mt-9 text-center">
                        <h4 class="text-[#ff0000] font-semibold mb-2 text-[23px] md:text-[30px]">Breaking News</h4>
                        <p class="text-custom-dark-100 text-xl text-center font-medium">CancerVax Announces Successful Tests of its Smart mRNA Technology</p>
                        <a href="cancervax-announces-successful-tests-of-its-smart-mrna-technology.php" class="theme-btn px-[30px] py-[15px] mt-4 text-base leading-none bg-custom-teal-100 border-custom-teal-100 rounded-[10px] hover:bg-custom-teal-100 hover:border-custom-teal-100 hover:text-white">Learn More</a>
                    </div> -->


                </div>
            </div>

        </div>
    </div>

</section>

<section class="bg-team-first bg-white bg-no-repeat bg-center bg-cover py-10">
    <div class="container">
        <h2 class="text-center text-4xl leading-none sm:text-[54px] text-custom-teal-300 font-medium">We have assembled a world-class team of
            experienced cancer scientists and advisors to help
            develop our revolutionary cancer technology.</h2>
    </div>
</section>

<?php include('components/team-heads.php'); ?>

<section class="pb-[70px]">
    <div class="container">

        <h2 class="text-center text-[40px] font-normal uppercase mb-[35px] text-black">Our Development Partners</h2>
        <div class="space-y-12">
            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/flashpoint.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">

                    <p class="text-black text-[18px] leading-6">Flashpoint was founded on nanotechnology developed over the past 10 years in the laboratory of Chad Mirkin, Director of the International Institute for Nanotechnology at Northwestern University and 2024 winner of the prestigious Kavli Prize in Nanoscience. <strong>Flashpoint’s groundbreaking nanotechnology discovery platform</strong> enables the development of therapeutic candidates with superior product profiles. Validated in numerous in-vivo models, this technology has transformed components that are ineffective in conventional formulations into curative cancer immunotherapies. CancerVax is working with Flashpoint to deliver its novel Universal Cancer Treatment therapies using Flashpoint’s nanoparticle technology.
                    </p>
                </div>
            </div>
            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/cytiva.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Cytiva, formerly Precision NanoSystems, is a part of Danaher (NYSE: DHR) and a global leader in advancing and accelerating therapeutics. With a strong presence in life sciences research and bioprocessing, Cytiva provides innovative technologies and expertise to help companies bring life-changing treatments to market. The company specializes in biomanufacturing solutions, lipid nanoparticle (LNP) development, and cutting-edge analytical tools. CancerVax is working with Cytiva to leverage its clinically proven LNPs to to create a complete CancerVax therapeutic nanoparticle.
                    </p>
                </div>
            </div>
            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/axisbio.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">Axis Bio is a preclinical contract research organisation with specialist capabilities in oncology, inflammation and respiratory diseases. Services range from in vitro efficacy and mechanistic studies, to in vivo target engagement, with each study tailored to the unique requirements of the client. Our clients are spread across the globe and include pharmaceutical and biotech businesses, university-based research organisations and virtual/semi-virtual development companies. We listen, guide and advise clients through every step of the preclinical efficacy testing process, to deliver clear and robust results in a timely and cost-effective manner. This approach applies whether we are simply carrying out the in-life phase of a study or providing a complete package of analysis including flow cytometry analysis, bioanalysis and blood analysis, along with a detailed interpretation of results and recommendations.
                    </p>
                </div>
            </div>
            <div class="max-w-[1100px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="max-w-[300px]">
                        <img src="<?php echo  $full_url; ?>assets/images/trilink.png" alt="Development Partners">
                    </div>
                </div>
                <div class="col-span-8">
                    <p class="text-black text-[18px] leading-6">TriLink BioTechnologies, a Maravai LifeSciences company, is a global leader in nucleic acid and mRNA solutions. TriLink delivers unrivaled chemical and biological experience, CDMO services, and high-quality readymade and custom materials, including its patented CleanCap® mRNA capping technology. Pharmaceutical leaders, biotech disruptors, and world governments depend on TriLink to meet their greatest challenges, from delivering the COVID-19 vaccine at warp speed to empowering innovative treatments in oncology, infectious diseases, cardiology, and neurological disorders to enabling future pandemic response plans.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-[50px]">
    <div class="container">
        <div class="bg-custom-teal-100 rounded-md p-8 sm:p-10">
            <div class="mb-5">
                <h3 class="text-white text-[38px] font-medium break-words mb-0 text-center max-w-[740px] mx-auto line-height-[1.36em]">Massive Market Opportunity</h3>
            </div>
            <div class="market-opp">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center pt-4 md:pt-12">
                    <div class="lg:col-span-8">
                        <h4 class="mb-4 leading-snug text-[26px] sm:text-[30px] text-white font-medium">How big is the biotechnology market?</h4>
                        <p class="text-[18px] leading-snug text-white">According to Precedence Research, the global biotechnology market is projected to grow from $1.3 trillion in 2023 to <span>$3.2 trillion by 2030</span>.
                        </p>
                    </div>
                    <div class="lg:col-span-4 text-center">

                        <div class="bg-white block sm:inline-block px-8 py-4 text-black text-center rounded-md">
                            <span>Biotech <br>
                                $3.2 trillion</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center pt-4 md:pt-6">
                    <div class="lg:col-span-8">
                        <h4 class="mb-4 leading-snug text-[26px] sm:text-[30px] text-white font-medium">How big is the cancer drug development market?</h4>
                        <p class="text-[18px] leading-snug text-white">According to Fortune Business Insights, the global oncology drugs market is projected to grow from $205 billion in 2023 to <span>$484 billion by 2030</span>.
                        </p>
                    </div>
                    <div class="lg:col-span-4 text-center">
                        <div class="bg-white block sm:inline-block px-8 py-4 text-black text-center rounded-md">
                            <span>Cancer <br>
                                $484 billion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-[100px]">
    <div class="container">
        <h2 class="text-custom-teal-100 text-xl sm:text-2xl text-center mb-4 font-semibold">One Minute Explainer Videos </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-12">
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=SLj-WU08GJQ"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Weapon Against Cancer</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=RSgh0qaEUO4"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Making Cancer Look Like Measles</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=kOxGWgLwuDs"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Immune System Memory</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=8ESunhDXzU4"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Let's Talk <br /> About Cancer</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=hmvMkgdIP7E"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Realities of Chemo and Radiation</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=W6fbVgrutxI"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Groundbreaking Treatment</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=SLj-WU08GJQ"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Weapon Against Cancer</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
            <div class="relative mb-6">
                <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=RSgh0qaEUO4"></a>
                <div class="relative">
                    <img src="<?php echo  $full_url; ?>assets/images/short-thumbnail.png" alt="thumbnail">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4 w-full">
                        <h5 class="text-white text-[20px] font-medium mb-4">CancerVax - Making Cancer Look Like Measles</h5>
                        <img src="<?php echo  $full_url; ?>assets/images/play-button.png" class="w-[110px] mx-auto" alt="play-button">
                        <p class="font-bold text-white mt-4 text-base text-center">Play Video</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-12 pb-6">
    <div class="ceochats-carousel">
        <?php

        foreach ($videos as $video) :
            $categoryName = ucwords(str_replace('-', ' ', $video['category']));
            if ($video['category'] === "ceo-podcast") {
                $categoryName = "Podcast";
            }
        ?>
            <div class="px-4">
                <div class="relative">
                    <a class="popup-youtube getThumbnail w-full h-full block absolute left-0 top-0 z-10" href="https://www.youtube.com/watch?v=<?= $video['videoID'] ?>"></a>
                    <div class="relative">
                        <img src="//img.youtube.com/vi/<?= $video['videoID'] ?>/maxresdefault.jpg" alt="Thumbnail">
                    </div>
                    <i class="far fa-play-circle absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-[100px] text-white [text-shadow:_1px_0_6px_rgba(0,_0,_0,_.3)]"></i>
                </div>
                <p class="mt-4 text-xl font-normal text-black"><?= $categoryName ?> - <?= $video['title'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="bg-white pt-[70px]">
    <div class="container">
        <h4 class="mb-9 text-xl text-black">News Highlights</h4>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-7">
            <div class="bg-custom-gray-200 min-h-full p-4 sm:p-10 relative ">
                <a href="https://cancervax.com/world-renowned-immunologist-and-distinguished-scientist-joins-cancervax-as-senior-scientific-advisor.php" class="absolute inset-0 w-full h-full"></a>
                <span class="text-custom-teal-200 text-sm uppercase font-medium tracking-widest block">January 7, 2026</span>
                <h3 class="text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight">World-renowned Immunologist and Distinguished Scientist Joins CancerVax as Senior Scientific Advisor</h3>
                <p class="text-black text-xl sm:text-base leading-normal">CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that uses the body’s immune system to treat cancer, today announced that Mark M. Davis, PhD will serve as the Company’s Senior Scientific Advisor.</p>
            </div>
            <div class="bg-custom-gray-200 min-h-full p-4 sm:p-10 relative ">
                <a href="https://cancervax.com/cancervax-reviews-major-scientific-and-strategic-milestones-achieved-in-2025.php" class="absolute inset-0 w-full h-full"></a>
                <span class="text-custom-teal-200 text-sm uppercase font-medium tracking-widest block">December 23, 2025</span>
                <h3 class="text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight">CancerVax Reviews Major Scientific and Strategic Milestones Achieved in 2025</h3>
                <p class="text-black text-xl sm:text-base leading-normal">CancerVax, Inc., the developer of a breakthrough Universal Cancer Treatment Platform that uses the body’s immune system to treat cancer, today released a year-end summary highlighting significant advancements made throughout 2025. These achievements mark a transformative period in the Company’s development as it accelerates its mission to create safe, targeted, and broadly adaptable cancer treatments.</p>
            </div>
            <div class="bg-custom-gray-200 min-h-full p-4 sm:p-10 relative ">
                <a href="https://cancervax.com/cancervax-reports-nanoparticle-component-success-in-preparation-for-animal-studies.php" class="absolute inset-0 w-full h-full"></a>
                <span class="text-custom-teal-200 text-sm uppercase font-medium tracking-widest block">December 17, 2025 </span>
                <h3 class="text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight">CancerVax Reports Nanoparticle Component Success in Preparation for Animal Studies</h3>
                <p class="text-black text-xl sm:text-base leading-normal">CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that uses the body’s immune system to treat cancer, today announced that recent in-vitro studies have confirmed that two key components of the Company’s novel technology performed exceptionally well. The next step is to put them together into a complete therapeutic lipid nanoparticle (“LNP”) for animal testing</p>
            </div>
            <div class="bg-custom-gray-200 min-h-full p-4 sm:p-10 relative ">
                <a href="https://cancervax.com/cancervax-precision-therapy-successfully-avoids-healthy-liver-cells.php" class="absolute inset-0 w-full h-full"></a>
                <span class="text-custom-teal-200 text-sm uppercase font-medium tracking-widest block">October 14, 2025</span>
                <h3 class="text-lg sm:text-[28px] font-semibold my-4 text-black leading-tight">CancerVax Precision Therapy Successfully Avoids Healthy Liver Cells</h3>
                <p class="text-black text-xl sm:text-base leading-normal">CancerVax, Inc., the developer of a breakthrough universal cancer treatment platform that uses the body’s immune system to treat cancer, today announced that recent in-vitro studies have confirmed that the Company’s technology could significantly reduce liver toxicity, a major problem with other cancer drugs</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white text-center py-[50px]">
    <div class="container">
        <div class="max-w-[600px] mx-auto">
            <h2 class="text-[51px] font-normal uppercase text-black mb-2">SUBSCRIBE</h2>
            <p class="text-black pt-2.5 mb-6 text-[17px] tracking-[0.78px] text-center">Keep up with our progress by subscribing to our email newsletter!</p>
            <form action="https://submit.jotform.com/submit/242775392698071/" method="POST" class="relative">
                <input type="hidden" name="formID" value="242775392698071" />
                <input type="email" id="input_3" name="q3_email" class="bg-custom-gray-200 text-black text-[17px] rounded-[30px] h-[60px] border-0 px-[30px] block w-full font-normal leading-normal focus:outline-none focus:ring-0 focus:shadow-none" placeholder="Your email address...">
                
                <div class="form-line control-formnew mt-2 jf-required text-left" data-type="control_captcha" id="id_4">
                    <label class="text-black text-[15px] font-normal leading-relaxed text-left" id="label_4" for="input_4" aria-hidden="false"> Please verify that you are human<span class="form-required">*</span> </label>

                    <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                        <section data-wrapper-react="true">
                            <div id="hcaptcha_input_4" class="h-captcha" data-siteKey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="onCaptchaSuccess" data-expired-callback="onCaptchaExpired"></div><input type="hidden" id="input_4" class="hidden validate[required]" name="hcaptcha_visible" required="" />
                            <script type="text/javascript" src="https://hcaptcha.com/1/api.js"></script>
                        </section>
                    </div>
                </div>
                <button type="submit" id="submitNewsletterButton" class="bg-custom-green-100 text-white border-0 text-center text-[17px] p-0 h-[60px] mb-0 rounded-[30px] font-bold w-[133px] absolute right-0 top-0" disabled>Subscribe</button>
            </form>
            <script>
                const submitNewsletterButton = document.getElementById('submitNewsletterButton');

                function onCaptchaSuccess(token) {
                    document.getElementById('input_4').value = token;
                    submitNewsletterButton.disabled = false;
                }

                function onCaptchaExpired() {
                    document.getElementById('input_4').value = '';
                    submitNewsletterButton.disabled = true;
                }
            </script>
        </div>
    </div>
</section>