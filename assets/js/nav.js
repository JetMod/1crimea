/* ===================================================
   NAVIGATION — прозрачная → стеклянный бар при скролле
   =================================================== */
(function () {
  const nav = document.querySelector('.nav');
  const burger = document.querySelector('.nav__burger');
  const drawer = document.querySelector('.nav__drawer');
  const drawerClose = document.querySelector('.nav__drawer-close');
  const drawerBackdrop = document.querySelector('.nav__drawer-backdrop');

  if (!nav) return;

  const THRESHOLD = 80;

  function onScroll() {
    nav.classList.toggle('is-scrolled', window.scrollY > THRESHOLD);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  function openDrawer() {
    if (!drawer) return;
    drawer.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    if (burger) {
      burger.classList.add('is-open');
      burger.setAttribute('aria-expanded', 'true');
      burger.setAttribute('aria-label', 'Закрыть меню');
    }
  }

  function closeDrawer() {
    if (!drawer) return;
    drawer.classList.remove('is-open');
    document.body.style.overflow = '';
    if (burger) {
      burger.classList.remove('is-open');
      burger.setAttribute('aria-expanded', 'false');
      burger.setAttribute('aria-label', 'Открыть меню');
    }
  }

  if (burger) burger.addEventListener('click', function () {
    if (drawer && drawer.classList.contains('is-open')) closeDrawer();
    else openDrawer();
  });

  if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
  if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);

  if (drawer) {
    drawer.querySelectorAll('.nav__drawer-link, .nav__drawer-cta').forEach(function (el) {
      el.addEventListener('click', closeDrawer);
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeDrawer();
  });
}());
