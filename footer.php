<?php
$page_name = basename($_SERVER['PHP_SELF']);
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
if ($page_name !== "prep.php") {
    if ($page_name != "index.php" && $page_name != "regainvest.php" && $page_name != "regainvest" && $page_name != "webinar.php") {
?>
        <section class="newsletter">
            <div class="container">
                <div class="newsletter-wrap">
                    <p>Keep up with our progress by subscribing to our email newsletter!</p>
                    <form action="https://submit.jotform.com/submit/242775392698071/" method="POST">
                        <input type="hidden" name="formID" value="242775392698071" />
                        <input type="email" id="input_3" name="q3_email" class="form-control" placeholder="Your email address..." required />

                        <div class="form-line control-formnew mt-2 jf-required" data-type="control_captcha" id="id_4">
                            <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4" aria-hidden="false">
                                Please verify that you are human<span class="form-required">*</span>
                            </label>
                            <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                                <section data-wrapper-react="true">
                                    <div id="hcaptcha_input_4" class="h-captcha"
                                        data-sitekey="772f4a50-7161-425e-8cd5-4d7e361ab765"
                                        data-callback="onCaptchaSuccess"
                                        data-expired-callback="onCaptchaExpired"></div>
                                    <input type="hidden" id="input_4" class="hidden validate[required]" name="hcaptcha_visible" required />
                                    <script type="text/javascript" src="https://hcaptcha.com/1/api.js" async defer></script>
                                </section>
                            </div>
                        </div>
                        <button type="submit" id="submitNewsletterButton" disabled>Subscribe</button>
                    </form>
                    <script>
                        const submitNewsletterButton = document.getElementById('submitNewsletterButton');

                        // Callback when hCaptcha succeeds
                        function onCaptchaSuccess(token) {
                            document.getElementById('input_4').value = token;
                            submitNewsletterButton.disabled = false; // Enable the button
                        }

                        // Callback when hCaptcha expires
                        function onCaptchaExpired() {
                            document.getElementById('input_4').value = '';
                            submitNewsletterButton.disabled = true; // Disable the button
                        }
                    </script>


                </div>
            </div>
        </section>

    <?php } ?>
    <!-- <div class="invest-footer">
    <div class="container">
        <p>This Reg A+ offering is made available through StartEngine Primary, LLC, member FINRA/SIPC. This investment is speculative, illiquid, and involves a high degree of risk, including the possible loss of your entire investment. You should read the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm#A_003" target="_blank" rel="noopener noreferrer">Selected Risks</a>, the <a href="https://www.sec.gov/Archives/edgar/data/1905495/000149315223013677/partiiandiii.htm" target="_blank" rel="noopener noreferrer">Offering Circular</a>, and <a href="https://www.sec.gov/edgar/browse/?CIK=1905495" target="_blank" rel="noopener noreferrer">Sec Edgar</a> Page before investing.</p>
    </div>
</div> -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="<?php echo  $full_url; ?>./assets/img/C-01-1.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-linkhead d-none d-sm-block">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <h6>COMPANY</h6>
                                </div>
                                <div class="col-6 col-sm-4">
                                </div>
                                <div class="col-6 col-sm-4">
                                    <h6>CONTACT US</h6>
                                </div>
                            </div>
                        </div>
                        <div class="footer-linkbody">
                            <div class="row">
                                <div class="col-6 col-sm-4">
                                    <div class="footer-link">
                                        <h6 class="d-sm-none">COMPANY</h6>
                                        <ul class="links">
                                            <li>
                                                <a href="/team">Team</a>
                                            </li>
                                            <li>
                                                <a href="/progress">Progress</a>
                                            </li>
                                            <li>
                                                <a href="/market">Market</a>
                                            </li>
                                            <li>
                                                <a href="/news">Newsroom</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="footer-link">
                                        <ul class="links no-head">
                                            <li>
                                                <a href="/videos">Videos</a>
                                            </li>
                                            <li>
                                                <a href="/invest">Investors</a>
                                            </li>
                                            <li>
                                                <a href="/contact">Contact</a>
                                            </li>
                                            <li>
                                                <a href="/privacy-policy">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="/terms-of-use">Terms of Use</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="footer-info">
                                        <h6 class="d-sm-none">CONTACT US</h6>
                                        <a href="tel:8053561810">(805) 356-1810</a>
                                        <a href="mailto:info@cancervax.com">info@cancervax.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 CancerVax. All rights reserved</p>
            </div>
        </div>
    </footer>


<?php } ?>

<!-- Team popup -->
<div class="modal fade" id="team">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="pipeline-img-preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-end pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <img src="./assets/img/pipeline-virus-2-large.png" class="modal_img" alt="pipeline-virus-2">
            </div>
        </div>
    </div>
</div>


<script
src="https://widgets.leadconnectorhq.com/loader.js"
data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"
data-widget-id="692e23d5fdb7681dffea583c"   >
</script>



<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/particles.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo  $full_url; ?>/assets/js/typed.min.js?v=<?php echo time(); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/main.js?v=<?php echo time(); ?>"></script>

</body>

</html>