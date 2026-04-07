/* ===================================================
   ANIMATIONS
   — fade-up при вхождении в viewport
   — CountUp для блока статистики
   =================================================== */

/* ---- 1. Fade-up ---- */
(function () {
  const items = document.querySelectorAll('.fade-up');
  if (!items.length) return;

  const io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  items.forEach(function (el) { io.observe(el); });
}());

/* ---- 2. CountUp ---- */
(function () {
  var counters = document.querySelectorAll('[data-count]');
  if (!counters.length) return;

  function animateCounter(el) {
    var target   = parseFloat(el.dataset.count);
    var suffix   = el.dataset.suffix  || '';
    var prefix   = el.dataset.prefix  || '';
    var decimals = el.dataset.decimals ? parseInt(el.dataset.decimals, 10) : 0;
    var duration = 1600;
    var start    = null;

    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased    = 1 - Math.pow(1 - progress, 3); /* ease-out cubic */
      var current  = target * eased;
      el.textContent = prefix + current.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });

  counters.forEach(function (el) { io.observe(el); });
}());

/* ---- 3. Gallery — prev/next scroll + dots ---- */
(function () {
  var track  = document.getElementById('galleryTrack');
  var btnPrev = document.getElementById('galleryPrev');
  var btnNext = document.getElementById('galleryNext');
  if (!track || !btnPrev || !btnNext) return;

  var items = track.querySelectorAll('.gallery__item');
  var total = items.length;

  /* Build dot indicators */
  var dotsWrap = document.createElement('div');
  dotsWrap.className = 'gallery__dots';
  dotsWrap.setAttribute('aria-hidden', 'true');
  var dots = [];
  for (var i = 0; i < total; i++) {
    var dot = document.createElement('button');
    dot.className = 'gallery__dot';
    dot.setAttribute('aria-label', 'Фото ' + (i + 1));
    dotsWrap.appendChild(dot);
    dots.push(dot);
  }
  track.parentNode.insertAdjacentElement('afterend', dotsWrap);

  function getItemWidth() {
    return items[0] ? items[0].offsetWidth + parseInt(getComputedStyle(track).gap || '0', 10) : 400;
  }

  function getCurrentIndex() {
    return Math.round(track.scrollLeft / getItemWidth());
  }

  function updateState() {
    var idx = getCurrentIndex();
    btnPrev.disabled = idx <= 0;
    btnNext.disabled = idx >= total - 1;
    dots.forEach(function (d, i) {
      d.classList.toggle('is-active', i === idx);
    });
  }

  function scrollToIndex(idx) {
    idx = Math.max(0, Math.min(total - 1, idx));
    track.scrollTo({ left: idx * getItemWidth(), behavior: 'smooth' });
  }

  btnPrev.addEventListener('click', function () { scrollToIndex(getCurrentIndex() - 1); });
  btnNext.addEventListener('click', function () { scrollToIndex(getCurrentIndex() + 1); });

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { scrollToIndex(i); });
  });

  track.addEventListener('scroll', updateState, { passive: true });

  updateState();
}());

/* ---- 4. Scroll-to при клике на стрелку hero ---- */
(function () {
  var scrollBtn = document.querySelector('.hero__scroll');
  if (!scrollBtn) return;
  scrollBtn.addEventListener('click', function () {
    var target = document.querySelector('.stats') || document.querySelector('main > section:nth-child(2)');
    if (target) target.scrollIntoView({ behavior: 'smooth' });
  });
}());

/* ---- 5. Scroll progress bar ---- */
(function () {
  var bar = document.getElementById('scrollProgress');
  if (!bar) return;

  function updateProgress() {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var pct = docHeight > 0 ? Math.round((scrollTop / docHeight) * 100) : 0;
    bar.style.width = pct + '%';
    bar.setAttribute('aria-valuenow', pct);
  }

  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();
}());

/* ---- 6. Back-to-top button ---- */
(function () {
  var btn = document.getElementById('backToTop');
  if (!btn) return;

  var THRESHOLD = 400;

  function onScroll() {
    var scrolled = window.scrollY || document.documentElement.scrollTop;
    btn.classList.toggle('is-visible', scrolled > THRESHOLD);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}());
