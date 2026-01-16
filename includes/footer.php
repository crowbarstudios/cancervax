<?php
if ($page !== "prep") {
    if ($page != "" && $page != "regainvest" && $page != "webinar") {
?>
       <section class="bg-white text-center py-[50px]">
            <div class="container">
            <div class="max-w-[600px] mx-auto">
                    <p class="text-black pt-2.5 mb-6 text-[17px] tracking-[0.78px] text-center">Keep up with our progress by subscribing to our email newsletter!</p>
                    <form action="https://submit.jotform.com/submit/242775392698071/" method="POST" class="relative">
                        <input type="hidden" name="formID" value="242775392698071" />
                        <input type="email" id="input_3" name="q3_email" class="bg-custom-gray-200 text-black text-[17px] rounded-[30px] h-[60px] border-0 px-[30px] block w-full font-normal leading-normal focus:outline-none focus:ring-0 focus:shadow-none" placeholder="Your email address..." required />
                        <div class="form-line control-formnew mt-2 jf-required text-left" data-type="control_captcha" id="id_4">
                            <label class="text-black text-[15px] font-normal leading-relaxed text-left"  id="label_4" for="input_4" aria-hidden="false">
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
                        <button type="submit" id="submitNewsletterButton" class="bg-custom-green-100 text-white border-0 text-center text-[17px] p-0 h-[60px] mb-0 rounded-[30px] font-bold w-[133px] absolute right-0 top-0" disabled>Subscribe</button>
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

    <footer class="bg-custom-gray-200 py-[30px]">
        <div class="container">
            <div class="pb-[35px]">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-2">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="<?php echo  $full_url; ?>./assets/images/C-01-1.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="footer-linkhead hidden sm:block border-b border-black mb-4 pb-4">
                            <div class="row grid grid-cols-2 sm:grid-cols-3 gap-6">
                                <h6 class="text-xs uppercase tracking-[1px] text-black">COMPANY</h6>
                                <div></div>
                                <h6 class="text-xs uppercase tracking-[1px] text-black">CONTACT US</h6>
                            </div>
                        </div>
                        <div>
                            <div class="row grid grid-cols-2 sm:grid-cols-3 gap-6">
                                <div class="footer-link">
                                    <h6 class="sm:hidden text-xs uppercase tracking-[1px] text-black">COMPANY</h6>
                                    <ul class="[&>li>a]:text-black [&>li>a]:text-[15px] [&>li>a]:leading-[1.7em]">
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
                                <div class="footer-link">
                                    <ul class="[&>li>a]:text-black [&>li>a]:text-[15px] [&>li>a]:leading-[1.7em]">
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
                                <div class="footer-info">
                                    <h6 class="sm:hidden text-xs uppercase tracking-[1px] text-black">CONTACT US</h6>
                                    <a href="tel:8053561810" class="text-sm text-black font-normal leading-[1.7em] mb-6 block">(805) 356-1810</a>
                                    <a href="mailto:info@cancervax.com" class="text-sm text-black font-normal leading-[1.7em] block">info@cancervax.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-6">
                <p class="text-sm mb-0 text-black text-center sm:text-right">© 2025 CancerVax. All rights reserved</p>
            </div>
        </div>
    </footer>


<?php } ?>

<!-- <div class="modal fade" id="pipeline-img-preview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-end pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php echo  $full_url; ?>./assets/images/pipeline-virus-2-large.png" class="modal_img" alt="pipeline-virus-2">
            </div>
        </div>
    </div>
</div> -->

<!-- Team popup -->
<div id="team-popup" class="mfp-hide ">
    <div class="team-popup-content bg-white max-w-[800px] mx-auto relative rounded-md">
        <h2 class="team-popup-title text-black text-xl leading-normal font-medium p-4"></h2>
        <button title="Close (Esc)" type="button" class="mfp-close mt-2.5 mr-[5px] text-[44px]">×</button>
        <div class="team-popup-body overflow-y-auto max-h-[750px]"></div>
    </div>
</div>

<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/main.js"></script>

</body>

</html>