/* Shared explicit loader also renders existing contact widgets, retaining their
   original callback names and form behavior. Only one API script per document. */
(function () {
    'use strict';
    if (window.cvaxFooterCaptchaInitialized) return;
    window.cvaxFooterCaptchaInitialized = true;
    var form = document.getElementById('cv-footer-form');
    var token = document.getElementById('cv-footer-captcha-token');
    var submit = document.getElementById('cv-footer-submit');
    var footerWidgetId;
    window.cvaxFooterCaptchaSuccess = function (value) {
        token.value = value || '';
        submit.disabled = !value;
    };
    window.cvaxFooterCaptchaExpired = function () {
        window.cvaxFooterCaptchaSuccess('');
    };
    form.addEventListener('submit', function (event) {
        var response = window.hcaptcha && footerWidgetId !== undefined
            ? window.hcaptcha.getResponse(footerWidgetId) : '';
        if (!response) {
            event.preventDefault();
            window.cvaxFooterCaptchaExpired();
            return;
        }
        token.value = response;
    });
    window.cvaxRenderCaptchas = function () {
        document.querySelectorAll('.h-captcha').forEach(function (element) {
            if (element.dataset.cvaxRendered || element.querySelector('iframe')) return;
            var options = { sitekey: element.getAttribute('data-sitekey') };
            ['callback', 'expired-callback', 'error-callback'].forEach(function (name) {
                var callback = element.getAttribute('data-' + name);
                if (callback) options[name] = function () {
                    if (typeof window[callback] === 'function') {
                        window[callback].apply(window, arguments);
                    }
                };
            });
            var widgetId = window.hcaptcha.render(element, options);
            element.dataset.cvaxRendered = 'true';
            if (element.id === 'cv-footer-captcha') footerWidgetId = widgetId;
        });
    };
    if (window.hcaptcha && typeof window.hcaptcha.render === 'function') {
        window.cvaxRenderCaptchas();
    } else if (!document.querySelector('script[src*="hcaptcha.com/1/api.js"]')) {
        var loader = document.createElement('script');
        loader.src = 'https://hcaptcha.com/1/api.js?onload=cvaxRenderCaptchas&render=explicit';
        loader.async = true;
        loader.defer = true;
        document.head.appendChild(loader);
    }
})();
