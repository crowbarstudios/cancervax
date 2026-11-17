const dialog = document.querySelector('.video-dialog');
const player = dialog.querySelector('.video-player');
const title = dialog.querySelector('h2');
const fallback = dialog.querySelector('.video-fallback');

document.querySelectorAll('[data-video]').forEach((link) => {
  link.addEventListener('click', (event) => {
    if (event.button || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
    event.preventDefault();
    const name = link.querySelector('h3')?.textContent || 'Short explainer video';
    const frame = document.createElement('iframe');
    frame.title = name;
    frame.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(link.dataset.video) + '?autoplay=1';
    frame.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
    frame.allowFullscreen = true;
    title.textContent = name;
    fallback.href = link.href;
    player.replaceChildren(frame);
    dialog.showModal();
  });
});
dialog.addEventListener('close', () => player.replaceChildren());
