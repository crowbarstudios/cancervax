/* Reference navigation behavior without the legacy jQuery double-toggle. */
(() => {
    const skip = document.querySelector('a[href="#main"]');
    skip?.addEventListener('click', event => event.stopImmediatePropagation(), true);
    const toggle = document.querySelector('[aria-controls="mobile-menu"]');
    const menu = document.getElementById('mobile-menu');
    if (!toggle || !menu) return;
    function showMenu(open) {
        toggle.setAttribute('aria-expanded', String(open));
        menu.classList.toggle('max-h-0', !open);
        menu.style.maxHeight = open ? menu.scrollHeight + 'px' : '';
        menu.inert = !open;
    }
    showMenu(false);
    toggle.addEventListener('click', event => {
        event.stopImmediatePropagation();
        showMenu(toggle.getAttribute('aria-expanded') !== 'true');
    }, true);
    menu.addEventListener('click', event => {
        if (event.target.closest('a')) showMenu(false);
    });
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            showMenu(false);
            toggle.focus();
        }
    });
    matchMedia('(min-width: 1024px)').addEventListener('change', () => showMenu(false));
})();
