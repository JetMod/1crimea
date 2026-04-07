/* ===================================================
   КАТАЛОГ ГОРОДОВ (/gorod/)
   — фильтр по data-region
   — фильтр по data-tags (интересы)
   — живой поиск по .city-card__title
   — счётчик видимых карточек
   — fade-up через IntersectionObserver (как animations.js)
   — регион в URL: чтение/запись location.hash
   =================================================== */
(function () {
  var grid = document.querySelector('.catalog-grid');
  var countEl = document.getElementById('catalogVisibleCount');
  var filterBtns = document.querySelectorAll('.catalog-filter[data-filter]');
  var tagFilterBtns = document.querySelectorAll('.catalog-tag-filter[data-tag-filter]');
  var searchInput = document.getElementById('catalogSearch');
  var viewBtns = document.querySelectorAll('.catalog-view-btn[data-catalog-view]');
  var emptyEl = document.getElementById('catalogEmpty');

  if (!grid || !filterBtns.length) return;

  var cards = grid.querySelectorAll('.city-card[data-region]');
  var heroDirectionsEl = document.getElementById('catalogHeroDirections');
  if (heroDirectionsEl) {
    heroDirectionsEl.textContent = String(cards.length);
  }
  var currentFilter = 'all';
  var currentTagFilter = 'all';
  var searchQuery = '';

  var validRegions = {};
  filterBtns.forEach(function (btn) {
    var f = (btn.getAttribute('data-filter') || 'all').toLowerCase();
    validRegions[f] = true;
  });

  function getHashRegion() {
    var raw = location.hash.replace(/^#/, '');
    if (!raw) return { mode: 'empty' };
    try {
      raw = decodeURIComponent(raw.replace(/\+/g, ' '));
    } catch (e) {
      return { mode: 'invalid' };
    }
    raw = raw.trim().toLowerCase();
    if (validRegions[raw]) return { mode: 'ok', region: raw };
    return { mode: 'invalid' };
  }

  function syncRegionToHash() {
    var target = '#' + currentFilter;
    if (location.hash !== target) location.replace(target);
  }

  function renderTagPills() {
    cards.forEach(function (card) {
      if (card.querySelector('.city-card__tags')) return;
      var raw = card.getAttribute('data-tags') || '';
      var tags = raw.trim().split(/\s+/).filter(Boolean);
      if (!tags.length) return;
      var body = card.querySelector('.city-card__body');
      var title = body && body.querySelector('.city-card__title');
      if (!body || !title) return;
      var wrap = document.createElement('div');
      wrap.className = 'city-card__tags';
      wrap.setAttribute('aria-label', 'Интересы');
      tags.forEach(function (t) {
        var span = document.createElement('span');
        span.className = 'city-card__tag';
        span.textContent = t.charAt(0).toUpperCase() + t.slice(1);
        wrap.appendChild(span);
      });
      title.insertAdjacentElement('afterend', wrap);
    });
  }

  renderTagPills();

  function regionsForCard(card) {
    return (card.getAttribute('data-region') || '')
      .trim()
      .toLowerCase()
      .split(/\s+/)
      .filter(Boolean);
  }

  function cardMatchesRegion(card, filter) {
    if (filter === 'all') return true;
    return regionsForCard(card).indexOf(filter) !== -1;
  }

  function cardTitleNorm(card) {
    var titleEl = card.querySelector('.city-card__title');
    return (titleEl && titleEl.textContent || '').trim().toLowerCase();
  }

  function cardMatchesSearch(card, q) {
    if (!q) return true;
    return cardTitleNorm(card).indexOf(q) !== -1;
  }

  function tagsForCard(card) {
    return (card.getAttribute('data-tags') || '')
      .trim()
      .toLowerCase()
      .split(/\s+/)
      .filter(Boolean);
  }

  function cardMatchesTag(card, tagFilter) {
    if (tagFilter === 'all') return true;
    return tagsForCard(card).indexOf(tagFilter) !== -1;
  }

  function setActiveFilter(filter) {
    filterBtns.forEach(function (btn) {
      var f = (btn.getAttribute('data-filter') || 'all').toLowerCase();
      var on = f === filter;
      btn.classList.toggle('is-active', on);
      btn.classList.toggle('btn-outline-white', !on);
    });
  }

  function setActiveTagFilter(tag) {
    tagFilterBtns.forEach(function (btn) {
      var t = (btn.getAttribute('data-tag-filter') || 'all').toLowerCase();
      var on = t === tag;
      btn.classList.toggle('is-active', on);
      btn.classList.toggle('btn-outline-white', !on);
    });
  }

  var fadeIo = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        fadeIo.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  function syncFadeObserve() {
    cards.forEach(function (card) {
      fadeIo.unobserve(card);
      if (!card.classList.contains('is-hidden') && !card.classList.contains('is-visible')) {
        fadeIo.observe(card);
      }
    });
  }

  /** После display:none → видимость IO иногда не срабатывает в том же кадре — не оставляем карточки с opacity:0 */
  function revealCardsInViewport() {
    var h = window.innerHeight || document.documentElement.clientHeight;
    var w = window.innerWidth || document.documentElement.clientWidth;
    cards.forEach(function (card) {
      if (card.classList.contains('is-hidden')) return;
      if (card.classList.contains('is-visible')) return;
      var r = card.getBoundingClientRect();
      if (r.width < 1 && r.height < 1) return;
      if (r.bottom > 0 && r.top < h && r.right > 0 && r.left < w) {
        card.classList.add('is-visible');
      }
    });
  }

  var countAnimToken = 0;
  var COUNT_ANIM_FRAMES = 12;

  function setVisibleCountAnimated(target) {
    if (!countEl) return;
    var end = Math.max(0, Math.floor(Number(target)) || 0);
    var start = parseInt(String(countEl.textContent).trim(), 10);
    if (isNaN(start)) start = end;
    if (start === end) {
      countEl.textContent = String(end);
      return;
    }
    var token = ++countAnimToken;
    function easeOutQuad(u) {
      return 1 - (1 - u) * (1 - u);
    }
    var frame = 0;
    function step() {
      if (token !== countAnimToken) return;
      frame++;
      if (frame >= COUNT_ANIM_FRAMES) {
        countEl.textContent = String(end);
        return;
      }
      var u = frame / COUNT_ANIM_FRAMES;
      var v = Math.round(start + (end - start) * easeOutQuad(u));
      countEl.textContent = String(v);
      window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
  }

  function setCatalogView(mode) {
    var list = mode === 'list';
    grid.classList.toggle('catalog-grid--list', list);
    viewBtns.forEach(function (btn) {
      var m = (btn.getAttribute('data-catalog-view') || 'grid').toLowerCase();
      var on = list ? m === 'list' : m === 'grid';
      btn.classList.toggle('is-active', on);
      btn.setAttribute('aria-pressed', on ? 'true' : 'false');
    });
    window.requestAnimationFrame(function () {
      revealCardsInViewport();
      syncFadeObserve();
    });
  }

  viewBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var mode = (btn.getAttribute('data-catalog-view') || 'grid').toLowerCase();
      setCatalogView(mode === 'list' ? 'list' : 'grid');
    });
  });

  function applyFilters() {
    var filter = (currentFilter || 'all').toLowerCase();
    var tagF = (currentTagFilter || 'all').toLowerCase();
    var q = searchQuery.trim().toLowerCase();
    var visible = 0;

    cards.forEach(function (card) {
      var match =
        cardMatchesRegion(card, filter) &&
        cardMatchesSearch(card, q) &&
        cardMatchesTag(card, tagF);
      if (match) {
        card.classList.remove('is-hidden');
        visible++;
      } else {
        card.classList.add('is-hidden');
        card.classList.remove('is-visible');
      }
    });

    setVisibleCountAnimated(visible);
    if (emptyEl) emptyEl.hidden = visible > 0;

    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () {
        revealCardsInViewport();
        syncFadeObserve();
      });
    });
  }

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentFilter = (btn.getAttribute('data-filter') || 'all').toLowerCase();
      setActiveFilter(currentFilter);
      applyFilters();
      syncRegionToHash();
    });
  });

  window.addEventListener('hashchange', function () {
    var h = getHashRegion();
    if (h.mode === 'ok') {
      currentFilter = h.region;
    } else if (h.mode === 'invalid') {
      currentFilter = 'all';
      location.replace('#all');
      return;
    } else {
      currentFilter = 'all';
    }
    setActiveFilter(currentFilter);
    applyFilters();
  });

  tagFilterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentTagFilter = (btn.getAttribute('data-tag-filter') || 'all').toLowerCase();
      setActiveTagFilter(currentTagFilter);
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', function () {
      searchQuery = searchInput.value || '';
      applyFilters();
    });
  }

  (function init() {
    var h = getHashRegion();
    if (h.mode === 'ok') {
      currentFilter = h.region;
    } else if (h.mode === 'invalid') {
      currentFilter = 'all';
      location.replace('#all');
    } else {
      var active = 'all';
      filterBtns.forEach(function (btn) {
        if (btn.classList.contains('is-active')) {
          active = (btn.getAttribute('data-filter') || 'all').toLowerCase();
        }
      });
      currentFilter = active;
    }
    setActiveFilter(currentFilter);

    var activeTag = 'all';
    tagFilterBtns.forEach(function (btn) {
      if (btn.classList.contains('is-active')) {
        activeTag = (btn.getAttribute('data-tag-filter') || 'all').toLowerCase();
      }
    });
    currentTagFilter = activeTag;

    if (searchInput) searchQuery = searchInput.value || '';
    applyFilters();
  })();
}());
