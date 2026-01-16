<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Thu, 01 Jan 1970 00:00:00 GMT">
    <title>Cancervax</title>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo  $full_url; ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo  $full_url; ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo  $full_url; ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo  $full_url; ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo  $full_url; ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>assets/css/style.css?v=<?php echo time(); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7D9TX20JND"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-7D9TX20JND');
    </script>


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '657876116145620');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=657876116145620&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


    <?php
    $currentURL = $_SERVER['HTTP_HOST'];
    $desiredURL = 'cancervax.com';

    if ($currentURL === $desiredURL) {
        echo '<meta name="facebook-domain-verification" content="z24tdbhlb62wzvjdkr3vdp344a8mqt" />';
    }
    ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T6HDQWW7');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        // Immediately scroll to the target section upon page load
        document.addEventListener('DOMContentLoaded', function() {
            var sectionId = getQueryParam('target'); // Extract section ID from URL parameter
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });

        // Function to extract URL parameter by name
        function getQueryParam(name) {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }
    </script>

</head>



<body class="<?php echo ($page === 'home') ? 'home' : ''; ?>">
    <div class="sticky top-0 z-20 bg-white transition-all duration-300 ease-in-out border-b border-custom-teal-100">
        <div class="bg-custom-teal-100 p-2.5 sm:py-2 sm:px-8 min-h-16 hidden sm:block">
            <div class="container-fluid">
                <div class="flex items-center justify-between">
                    <div></div>
                    <!-- <a href="/webinar" class="theme-btn orange-btn tracking-normal">Watch the Webinar</a> -->
                    <a href="https://cancervax.com/invest" class="theme-btn orange-btn !border-0 !text-[15px] tracking-normal !uppercase">Learn how you can help us!</a>
                    <div class="hidden md:block space-x-3">
                        <a href="https://www.facebook.com/people/Cancervax/100090179828482/" target="_blank" rel="noopener noreferrer" class="text-white text-xl hover:text-white"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/cancervaxbiotech/" target="_blank" rel="noopener noreferrer" class="text-white text-xl hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/cancervax/" target="_blank" rel="noopener noreferrer" class="text-white text-xl hover:text-white"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/@cancervax" target="_blank" rel="noopener noreferrer" class="text-white text-xl hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="sm:py-4 bg-white px-2.5 sm:px-8">
            <div class="container-fluid">
                <div class="relative flex h-16 justify-between">
                    <div class="absolute inset-y-0 right-0 flex items-center lg:hidden">

                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center  p-2 text-gray-400 "
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>


                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
                                <path stroke="rgba(94, 176, 181, 1)" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22" />
                            </svg>


                    </div>
                    <div class="flex flex-1 items-center justify-start md:items-stretch md:justify-between">
                        <div class="flex shrink-0 items-center">
                            <a href="/" class="max-w-48 xl:max-w-72">
                                <img class="w-auto inline-flex" src="<?php echo  $full_url; ?>/assets/images/light-logo.png" alt="Cancervax">
                            </a>

                        </div>
                        <?php
                        $links = [
                            "team" => "Team",
                            "technology" => "Technology",
                            "progress" => "Progress",
                            "immunotherapy" => "Immunotherapy",
                            "market" => "Market",
                            "news" => "Newsroom",
                            "videos" => "Videos",
                            "invest" => "Investors",
                            "contact" => "Contact"
                        ];

                        $baseUrl = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? "/cancervax" : "";
                        ?>
                        <div
                            class="hidden sm:ml-6 lg:flex lg:gap-0 gap-2.5 [&>a]:inline-flex [&>a]:items-center [&>a]:border [&>a]:border-transparent [&>a]:text-[15px] [&>a]:font-medium [&>a]:leading-none [&>a]:text-black [&>a]:lg:px-2 [&>a]:xl:px-4 [&>a]:py-2 [&>a]:rounded-full">
                            <?php foreach ($links as $slug => $name): ?>
                                <a href="<?= $baseUrl ?>/<?= $slug ?>" class="hover:text-custom-teal-200 last:pr-0 <?php echo ($page === $slug) ? '!text-custom-teal-200' : ''; ?>"><?= $name ?></a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="lg:hidden overflow-hidden absolute left-0 w-full bg-white z-10 max-h-0 transition-all duration-300 ease-in-out"
                id="mobile-menu">
                <div class="space-y-1">
                    <div
                        class="sm:p-[38px] p-[14px] flex flex-col gap-4 [&>a]:block [&>a]:items-center [&>a]:border [&>a]:border-transparent [&>a]:text-sm [&>a]:font-normal [&>a]:py-[5px] [&>a]:px-2.5 [&>a]:leading-none [&>a]:text-black [&>a]:active:text-custom-green-400">
                        <?php foreach ($links as $slug => $name): ?>
                            <a href="<?= $baseUrl ?>/<?= $slug ?>" class="<?php echo ($page === $slug) ? '!text-custom-teal-200' : ''; ?>"><?= $name ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>