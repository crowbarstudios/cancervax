const tabList = document.querySelector('.type-nav');
const tabs = [...tabList.querySelectorAll('a')];
const panels = tabs.map((tab) => document.getElementById(tab.hash.slice(1)));

tabList.setAttribute('role', 'tablist');
tabs.forEach((tab, index) => {
  tab.setAttribute('role', 'tab');
  tab.setAttribute('aria-controls', panels[index].id);
  panels[index].setAttribute('role', 'tabpanel');
  panels[index].setAttribute('aria-labelledby', tab.id);
  panels[index].tabIndex = 0;
  tab.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopImmediatePropagation();
    selectType(index);
    history.replaceState(null, '', tab.hash);
  });
  tab.addEventListener('keydown', (event) => {
    const nextIndex = {
      ArrowRight: (index + 1) % tabs.length,
      ArrowDown: (index + 1) % tabs.length,
      ArrowLeft: (index - 1 + tabs.length) % tabs.length,
      ArrowUp: (index - 1 + tabs.length) % tabs.length,
      Home: 0,
      End: tabs.length - 1,
      ' ': index,
    }[event.key];
    if (nextIndex === undefined) return;
    event.preventDefault();
    tabs[nextIndex].click();
    tabs[nextIndex].focus();
  });
});

function selectType(index) {
  tabs.forEach((tab, position) => {
    const selected = index === position;
    tab.setAttribute('aria-selected', String(selected));
    tab.tabIndex = selected ? 0 : -1;
    panels[position].hidden = !selected;
  });
}
function selectFromHash() {
  const index = tabs.findIndex((tab) => tab.hash === location.hash);
  if (index >= 0) selectType(index);
}
selectType(0);
selectFromHash();
window.addEventListener('hashchange', selectFromHash);
