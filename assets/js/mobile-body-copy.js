/*
 * Preserve each page's existing body-copy scale rather than normalizing it.
 * Measure unmodified copy at the current viewport, then enlarge it on phones.
 * Do not change the root font size: display type and controls also use rem/em.
 */
(() => {
    const mobile = window.matchMedia('(max-width: 767px)');
    const candidates = [
        'main p', 'main li',
        '#cvax-home-reference p', '#cvax-home-reference li',
        '#cvax-team-introduction p',
        '.cv-thank-you__copy',
        '#cv-public-content p', '#cv-public-content li',
        '#team-popup .team-popup-body p', '#team-popup .team-popup-body li',
        '#cvax-shared-footer .cv-footer-copy p:not(.cv-footer-kicker)'
    ].join(',');
    const excludedContainers = [
        'nav', 'button', '[role="button"]', 'label', 'form',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'table', 'figcaption', 'summary', '.actions', '.meta',
        '.team-box', '.home-sep-2-breaking-news', '.tech-ai-pair'
    ].join(',');
    const nonCopyClass = /(?:^|[-_\s])(eyebrow|kicker|caption|label|title|heading|display|stat|badge|tag|button|btn|cta|source|status|scroll-hint|resource-note)(?:$|[-_\s])/i;
    const originals = new Map();
    let timer;

    function restore() {
        originals.forEach(({ value, priority }, element) => {
            if (value) element.style.setProperty('font-size', value, priority);
            else element.style.removeProperty('font-size');
        });
        originals.clear();
    }

    function update() {
        restore();
        if (!mobile.matches) return;
        // Read every original size before writing, avoiding compounded scaling.
        const measurements = [...document.querySelectorAll(candidates)]
            .filter(element => {
                if (element.closest(excludedContainers)) return false;
                if (nonCopyClass.test(element.className)) return false;
                // List items wrapping cards/paragraphs are layout, not copy.
                if (element.matches('li') && element.querySelector('p, li, h1, h2, h3, h4, h5, h6, figure, button')) return false;
                const style = getComputedStyle(element);
                if (style.textTransform === 'uppercase') return false;
                // The homepage includes display-sized text in paragraph tags.
                if (element.closest('#cvax-home-reference') &&
                    (parseFloat(style.fontSize) > 26 || Number(style.fontWeight) >= 600)) return false;
                return true;
            })
            .map(element => ({ element, size: parseFloat(getComputedStyle(element).fontSize) }));
        measurements.forEach(({ element, size }) => {
            originals.set(element, {
                value: element.style.getPropertyValue('font-size'),
                priority: element.style.getPropertyPriority('font-size')
            });
            element.style.setProperty('font-size', `${size * 1.157625}px`, 'important');
        });
    }

    update();
    window.addEventListener('load', update, { once: true });
    // Team biographies are inserted when a profile is opened.
    const biography = document.querySelector('#team-popup .team-popup-body');
    if (biography) {
        new MutationObserver(update).observe(biography, { childList: true, subtree: true });
    }
    window.addEventListener('resize', () => {
        // Restore desktop immediately when rotating/resizing out of mobile.
        if (!mobile.matches) restore();
        clearTimeout(timer);
        timer = setTimeout(update, 120);
    });
})();
