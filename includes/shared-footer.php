<?php
// One newsletter and legal footer for every route; no page-specific exclusions.
$footerBaseUrl = $baseUrl ?? '';
?>
<div id="cvax-shared-footer">
    <section id="subscribe" aria-labelledby="cv-footer-heading">
        <div class="cv-footer-newsletter-inner">
            <div class="cv-footer-copy">
                <p class="cv-footer-kicker">CancerVax updates</p>
                <h2 id="cv-footer-heading">Follow our progress</h2>
                <p>Get research milestones and company news by email.</p>
            </div>
            <form id="cv-footer-form" action="https://submit.jotform.com/submit/242775392698071/" method="post">
                <input type="hidden" name="formID" value="242775392698071">
                <input type="hidden" name="hcaptcha_visible" id="cv-footer-captcha-token">
                <label for="cv-footer-email" class="cv-footer-label">Email address</label>
                <div class="cv-footer-fields">
                    <input type="email" id="cv-footer-email" name="q3_email" placeholder="Your email address" autocomplete="email" required>
                    <button type="submit" id="cv-footer-submit" disabled>Subscribe</button>
                </div>
                <div class="cv-footer-captcha">
                    <div id="cv-footer-captcha" class="h-captcha" data-sitekey="772f4a50-7161-425e-8cd5-4d7e361ab765" data-callback="cvaxFooterCaptchaSuccess" data-expired-callback="cvaxFooterCaptchaExpired" data-error-callback="cvaxFooterCaptchaExpired"></div>
                </div>
            </form>
        </div>
    </section>
    <footer id="site-footer">
        <div class="cv-footer-legal-container">
            <div class="cv-footer-legal-inner">
                <nav aria-label="Legal" class="cv-footer-legal-nav">
                    <a href="<?= htmlspecialchars($footerBaseUrl, ENT_QUOTES, 'UTF-8') ?>/privacy-policy">Privacy Policy</a>
                    <a href="<?= htmlspecialchars($footerBaseUrl, ENT_QUOTES, 'UTF-8') ?>/terms-of-use">Terms of Use</a>
                </nav>
                <p>© 2026 CancerVax. All rights reserved</p>
            </div>
        </div>
    </footer>
</div>
<script src="<?php echo $full_url; ?>assets/js/shared-footer.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/shared-footer.js'); ?>"></script>
