/* Reference interactions, isolated to the canonical Technology route. */
(() => {
    const skip = document.querySelector('a[href="#technology"]');
    // Leave the browser's native anchor behavior intact, rather than applying
    // the legacy site's animated 253px anchor offset.
    skip?.addEventListener('click', event => event.stopImmediatePropagation(), true);
    const toggle = document.querySelector('[aria-controls="mobile-menu"]');
    const menu = document.getElementById('mobile-menu');
    function showMenu(open) {
        toggle.setAttribute('aria-expanded', String(open));
        menu.classList.toggle('max-h-0', !open);
        menu.style.maxHeight = open ? menu.scrollHeight + 'px' : '';
        menu.inert = !open;
    }
    if (toggle && menu) {
        showMenu(false);
        // Capture prevents the shared legacy jQuery toggle from also firing.
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
    }
    const proofChart = document.querySelector('.tech-proof-chart');
    const proofDialog = document.querySelector('.tech-proof-dialog');
    if (proofChart && typeof proofDialog?.showModal === 'function') {
        proofChart.setAttribute('aria-haspopup', 'dialog');
        proofChart.addEventListener('click', event => {
            if (event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
            event.preventDefault();
            proofDialog.showModal();
        });
        proofDialog.addEventListener('click', event => {
            if (event.target === proofDialog) proofDialog.close();
        });
    }
})();
