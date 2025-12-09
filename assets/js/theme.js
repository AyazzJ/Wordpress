(function () {
  const navToggle = document.querySelector('.pf-nav-toggle');
  const nav = document.querySelector('.pf-nav');
  const body = document.body;

  if (navToggle && nav) {
    navToggle.addEventListener('click', () => {
      const isOpen = body.dataset.navState === 'open';
      body.dataset.navState = isOpen ? 'closed' : 'open';
      navToggle.setAttribute('aria-expanded', String(!isOpen));
    });

    document.addEventListener('click', (event) => {
      if (body.dataset.navState !== 'open') return;
      if (nav.contains(event.target) || navToggle.contains(event.target)) return;
      body.dataset.navState = 'closed';
      navToggle.setAttribute('aria-expanded', 'false');
    });
  }
})();
