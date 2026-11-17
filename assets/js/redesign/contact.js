const contactForm = document.querySelector('#contact-form');
const contactToken = document.querySelector('#contact-captcha-token');
const contactSubmit = document.querySelector('#contact-submit');

window.onCaptchaSuccessContact = (token) => {
  contactToken.value = token || '';
  contactSubmit.disabled = !token;
};
window.onCaptchaExpiredContact = () => window.onCaptchaSuccessContact('');

contactForm.addEventListener('submit', (event) => {
  if (!contactToken.value) event.preventDefault();
});
