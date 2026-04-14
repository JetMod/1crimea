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

  /** Focusable elements inside the drawer (backdrop excluded). */
  var FOCUSABLE_SELECTOR =
    'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])';

  var drawerFocusReturn = null;

  function getDrawerFocusables() {
    if (!drawer) return [];
    var root = drawer.querySelector('.nav__drawer-panel') || drawer;
    return Array.prototype.filter.call(root.querySelectorAll(FOCUSABLE_SELECTOR), function (el) {
      return !el.hasAttribute('disabled') && el.getAttribute('aria-hidden') !== 'true';
    });
  }

  function focusFirstInDrawer() {
    var list = getDrawerFocusables();
    if (list.length) list[0].focus();
  }

  function onDrawerTabKey(e) {
    if (!drawer || !drawer.classList.contains('is-open') || e.key !== 'Tab') return;
    var focusables = getDrawerFocusables();
    if (!focusables.length) return;
    var first = focusables[0];
    var last = focusables[focusables.length - 1];
    if (e.shiftKey) {
      if (document.activeElement === first) {
        e.preventDefault();
        last.focus();
      }
    } else {
      if (document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
  }

  function onScroll() {
    nav.classList.toggle('is-scrolled', window.scrollY > THRESHOLD);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  function openDrawer() {
    if (!drawer) return;
    drawerFocusReturn = document.activeElement;
    drawer.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    if (burger) {
      burger.classList.add('is-open');
      burger.setAttribute('aria-expanded', 'true');
      burger.setAttribute('aria-label', 'Закрыть меню');
    }
    requestAnimationFrame(function () {
      focusFirstInDrawer();
    });
  }

  function closeDrawer() {
    if (!drawer) return;
    var wasOpen = drawer.classList.contains('is-open');
    drawer.classList.remove('is-open');
    document.body.style.overflow = '';
    if (burger) {
      burger.classList.remove('is-open');
      burger.setAttribute('aria-expanded', 'false');
      burger.setAttribute('aria-label', 'Открыть меню');
    }
    if (wasOpen && drawerFocusReturn && typeof drawerFocusReturn.focus === 'function') {
      try {
        drawerFocusReturn.focus();
      } catch (err) { /* ignore */ }
    }
    drawerFocusReturn = null;
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

  document.addEventListener('focusin', function (e) {
    if (!drawer || !drawer.classList.contains('is-open')) return;
    if (drawer.contains(e.target)) return;
    setTimeout(function () {
      if (drawer && drawer.classList.contains('is-open') && !drawer.contains(document.activeElement)) {
        focusFirstInDrawer();
      }
    }, 0);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('is-open')) closeDrawer();
    onDrawerTabKey(e);
  });
}());
