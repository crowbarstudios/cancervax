<?php
include 'CacheControl.php'; 

if (function_exists('opcache_reset')) {
    opcache_reset();
}

CacheControl::preventCaching();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {

        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    }
    // Get the current domain URL
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $domain = $_SERVER['HTTP_HOST'];
    $current_url = $protocol . "://" . $domain;

    // Check if the script is running on localhost
    if ($domain === 'localhost' || $domain === '127.0.0.1') {
        $full_url = $current_url . '/cancervax/';
    } else {
        $full_url = $current_url . '/';
    }
    $page_name = basename($_SERVER['PHP_SELF']);

   
    ?>
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo  $full_url; ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo  $full_url; ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo  $full_url; ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo  $full_url; ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo  $full_url; ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>assets/css/slick.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>assets/css/slick-theme.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>assets/css/style.min.css?v=<?php echo time(); ?>">
    <script src="https://player.vimeo.com/api/player.js"></script>
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

<body <?php if ($page_name == "prep.php") { ?> class="pt-0" <?php } ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6HDQWW7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }

    if ($page_name !== "prep.php") {
    ?>
        <div class="header-top">
            <div class="invest-bar">
                <div class="container-fluid">
                    <div class="invest-bar-content">
                        <!-- <a href="/webinar" class="theme-btn orange-btn">Watch the Webinar</a> -->
                         <div></div>
                        <a href="https://invest.cancervax.com/schedule-call" target="_blank" class="theme-btn orange-btn text-uppercase">Learn how you can help us!</a>
                        <div class="tSocial d-none d-md-block">
                            <a href="https://www.facebook.com/people/Cancervax/100090179828482/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/cancervaxbiotech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/cancervax/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@cancervax" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hedaer -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo  $full_url; ?>/assets/img/light-logo.png?v=<?php echo filemtime('./assets/img/light-logo.png'); ?>" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php active('team'); ?>" href="/team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('technology'); ?>" href="/technology">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('progress'); ?>" href="/progress">Progress</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('immunotherapy'); ?>" href="/immunotherapy">Immunotherapy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('market'); ?>" href="/market">Market</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('news'); ?>" href="/news">Newsroom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('videos'); ?>" href="/videos">Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('invest'); ?>" href="/invest">Investors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php active('contact'); ?>" href="/contact">Contact</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    <?php } ?>