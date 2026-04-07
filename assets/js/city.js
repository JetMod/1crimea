/* Gallery lightbox for gorod/*.html */
(function () {
  var lb = document.getElementById('cityGalleryLightbox');
  if (!lb) return;

  var img = lb.querySelector('.city-gallery__lightbox-img');
  var backdrop = lb.querySelector('.city-gallery__lightbox-backdrop');
  var closeBtn = lb.querySelector('.city-gallery__lightbox-close');
  if (!img || !backdrop || !closeBtn) return;

  var lastFocus = null;
  var slideItems = [];
  var slideIndex = 0;

  var prevBtn = document.createElement('button');
  prevBtn.type = 'button';
  prevBtn.className = 'city-gallery__lightbox-prev';
  prevBtn.setAttribute('aria-label', 'Предыдущее фото');
  prevBtn.innerHTML =
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18 9 12l6-6"/></svg>';
  var nextBtn = document.createElement('button');
  nextBtn.type = 'button';
  nextBtn.className = 'city-gallery__lightbox-next';
  nextBtn.setAttribute('aria-label', 'Следующее фото');
  nextBtn.innerHTML =
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>';
  lb.appendChild(prevBtn);
  lb.appendChild(nextBtn);
  prevBtn.hidden = true;
  nextBtn.hidden = true;

  var counterEl = document.createElement('div');
  counterEl.className = 'city-gallery__lightbox-counter';
  counterEl.setAttribute('aria-live', 'polite');
  counterEl.setAttribute('aria-atomic', 'true');
  counterEl.hidden = true;
  lb.appendChild(counterEl);

  function updateCounter() {
    var n = slideItems.length;
    if (n === 0) {
      counterEl.textContent = '';
      counterEl.hidden = true;
      return;
    }
    counterEl.textContent = slideIndex + 1 + ' / ' + n;
    counterEl.hidden = false;
  }

  function updateSlideView() {
    var item = slideItems[slideIndex];
    if (!item) return;
    var thumb = item.querySelector('.city-gallery__thumb');
    if (!thumb) return;
    img.src = thumb.currentSrc || thumb.src;
    img.alt = thumb.getAttribute('alt') || '';
    updateCounter();
  }

  function syncNavVisibility() {
    var multi = slideItems.length > 1;
    prevBtn.hidden = !multi;
    nextBtn.hidden = !multi;
  }

  function step(delta) {
    if (slideItems.length <= 1) return;
    slideIndex = (slideIndex + delta + slideItems.length) % slideItems.length;
    updateSlideView();
  }

  function openFromItem(itemBtn) {
    var grid = itemBtn.closest('.city-gallery__grid');
    if (grid) {
      slideItems = Array.prototype.slice.call(grid.querySelectorAll('.city-gallery__item'));
    } else {
      slideItems = itemBtn.classList.contains('city-gallery__item') ? [itemBtn] : [];
    }
    slideIndex = slideItems.indexOf(itemBtn);
    if (slideIndex === -1) slideIndex = 0;

    lastFocus = document.activeElement;
    updateSlideView();
    syncNavVisibility();
    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    closeBtn.focus();
  }

  function close() {
    if (!lb.classList.contains('is-open')) return;
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    img.removeAttribute('src');
    img.alt = '';
    slideItems = [];
    slideIndex = 0;
    prevBtn.hidden = true;
    nextBtn.hidden = true;
    counterEl.textContent = '';
    counterEl.hidden = true;
    if (lastFocus && typeof lastFocus.focus === 'function') {
      try {
        lastFocus.focus();
      } catch (_) {}
    }
    lastFocus = null;
  }

  document.querySelectorAll('.city-gallery__item').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var thumb = btn.querySelector('.city-gallery__thumb');
      if (!thumb) return;
      openFromItem(btn);
    });
  });

  prevBtn.addEventListener('click', function (e) {
    e.stopPropagation();
    step(-1);
  });
  nextBtn.addEventListener('click', function (e) {
    e.stopPropagation();
    step(1);
  });

  backdrop.addEventListener('click', close);
  closeBtn.addEventListener('click', close);

  document.addEventListener('keydown', function (e) {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') {
      e.preventDefault();
      close();
      return;
    }
    if (slideItems.length <= 1) return;
    if (e.key === 'ArrowLeft') {
      e.preventDefault();
      step(-1);
    } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      step(1);
    }
  });
}());

/* «Что посмотреть» — пагинация: по 9 карточек на страницу */
(function () {
  var grid = document.getElementById('citySightsGrid');
  var nav = document.getElementById('citySightsPagination');
  if (!grid || !nav) return;

  var cards = grid.querySelectorAll('.sight-card');
  if (!cards.length) return;

  var perPage = parseInt(grid.getAttribute('data-sights-per-page'), 10) || 9;
  if (perPage < 1) perPage = 9;
  var totalPages = Math.ceil(cards.length / perPage);
  var currentPage = 1;
  var prevBtn;
  var nextBtn;
  var numButtons = [];

  function updateNavState() {
    if (!prevBtn || !nextBtn) return;
    prevBtn.disabled = currentPage <= 1;
    nextBtn.disabled = currentPage >= totalPages;
    numButtons.forEach(function (b, i) {
      var n = i + 1;
      var active = n === currentPage;
      b.classList.toggle('is-active', active);
      if (active) b.setAttribute('aria-current', 'page');
      else b.removeAttribute('aria-current');
    });
  }

  function goToPage(n, scrollToHeading) {
    if (n < 1 || n > totalPages) return;
    if (scrollToHeading === undefined) scrollToHeading = true;
    currentPage = n;
    cards.forEach(function (card, i) {
      var page = Math.floor(i / perPage) + 1;
      var show = page === n;
      card.style.display = show ? 'flex' : 'none';
      if (show) card.classList.add('is-visible');
    });
    updateNavState();

    if (!scrollToHeading) return;
    var heading = document.getElementById('city-sights-heading');
    if (heading) {
      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      heading.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'nearest' });
    }
  }

  if (totalPages <= 1) {
    nav.hidden = true;
    cards.forEach(function (c) {
      c.style.display = 'flex';
      c.classList.add('is-visible');
    });
    return;
  }

  nav.innerHTML = '';
  nav.hidden = false;

  prevBtn = document.createElement('button');
  prevBtn.type = 'button';
  prevBtn.className = 'city-sights__page-arrow city-sights__page-arrow--prev';
  prevBtn.setAttribute('aria-label', 'Предыдущая страница');
  prevBtn.textContent = 'Назад';

  var list = document.createElement('div');
  list.className = 'city-sights__page-list';
  list.setAttribute('role', 'group');
  list.setAttribute('aria-label', 'Номер страницы');

  var p;
  for (p = 1; p <= totalPages; p++) {
    (function (pageNum) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'city-sights__page-num';
      b.textContent = String(pageNum);
      b.setAttribute('aria-label', 'Страница ' + pageNum);
      b.addEventListener('click', function () {
        goToPage(pageNum);
      });
      list.appendChild(b);
      numButtons.push(b);
    })(p);
  }

  nextBtn = document.createElement('button');
  nextBtn.type = 'button';
  nextBtn.className = 'city-sights__page-arrow city-sights__page-arrow--next';
  nextBtn.setAttribute('aria-label', 'Следующая страница');
  nextBtn.textContent = 'Вперёд';

  prevBtn.addEventListener('click', function () {
    goToPage(currentPage - 1);
  });
  nextBtn.addEventListener('click', function () {
    goToPage(currentPage + 1);
  });

  nav.appendChild(prevBtn);
  nav.appendChild(list);
  nav.appendChild(nextBtn);

  /* Первая отрисовка без прокрутки — иначе при открытии страницы уезжаем с hero */
  goToPage(1, false);
}());
