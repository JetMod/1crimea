/* ===================================================
   ХАБ ДОСТОПРИМЕЧАТЕЛЬНОСТЕЙ (/dostoprimechatelnosti/)
   — фильтр по data-city
   — фильтр по data-type
   — фильтр по data-tags
   — поиск по .sight-card__title
   — счётчик, сетка/список, пустое состояние
   — город в URL: location.hash (#yalta)
   =================================================== */
(function () {
  var grid = document.querySelector('.places-grid.catalog-grid');
  var countEl = document.getElementById('placesVisibleCount');
  var cityBtns = document.querySelectorAll('.catalog-filter[data-city-filter].place-city-filter');
  var typeBtns = document.querySelectorAll('.place-type-filter[data-type-filter]');
  var hub = document.querySelector('.places-hub');
  var tagFilterBtns = (hub || document).querySelectorAll('.catalog-tag-filter[data-tag-filter]');
  var searchInput = document.getElementById('placesSearch');
  var viewBtns = (hub || document).querySelectorAll('.catalog-view-btn[data-catalog-view]');
  var emptyEl = document.getElementById('placesEmpty');

  if (!grid || !cityBtns.length) return;

  var cards = grid.querySelectorAll('.sight-card[data-city]');
  var heroCountEl = document.getElementById('placesHeroCount');
  if (heroCountEl) {
    heroCountEl.textContent = String(cards.length);
  }

  var currentCity = 'all';
  var currentType = 'all';
  var currentTagFilter = 'all';
  var searchQuery = '';

  var validCities = {};
  cityBtns.forEach(function (btn) {
    var f = (btn.getAttribute('data-city-filter') || 'all').toLowerCase();
    validCities[f] = true;
  });

  function getHashCity() {
    var raw = location.hash.replace(/^#/, '');
    if (!raw) return { mode: 'empty' };
    try {
      raw = decodeURIComponent(raw.replace(/\+/g, ' '));
    } catch (e) {
      return { mode: 'invalid' };
    }
    raw = raw.trim().toLowerCase();
    if (validCities[raw]) return { mode: 'ok', city: raw };
    return { mode: 'invalid' };
  }

  function syncCityToHash() {
    var target = '#' + currentCity;
    if (location.hash !== target) location.replace(target);
  }

  function renderTagPills() {
    cards.forEach(function (card) {
      if (card.querySelector('.sight-card__tags')) return;
      var raw = card.getAttribute('data-tags') || '';
      var tags = raw.trim().split(/\s+/).filter(Boolean);
      if (!tags.length) return;
      var body = card.querySelector('.sight-card__body');
      var title = body && body.querySelector('.sight-card__title');
      if (!body || !title) return;
      var wrap = document.createElement('div');
      wrap.className = 'sight-card__tags';
      wrap.setAttribute('aria-label', 'Темы');
      tags.forEach(function (t) {
        var span = document.createElement('span');
        span.className = 'sight-card__tag';
        span.textContent = t.charAt(0).toUpperCase() + t.slice(1);
        wrap.appendChild(span);
      });
      title.insertAdjacentElement('afterend', wrap);
    });
  }

  renderTagPills();

  function cityForCard(card) {
    return (card.getAttribute('data-city') || '')
      .trim()
      .toLowerCase();
  }

  function cardTitleNorm(card) {
    var titleEl = card.querySelector('.sight-card__title');
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

  function cardMatchesCity(card, filter) {
    if (filter === 'all') return true;
    return cityForCard(card) === filter;
  }

  function cardMatchesType(card, typeFilter) {
    if (typeFilter === 'all') return true;
    var t = (card.getAttribute('data-type') || '').trim().toLowerCase();
    return t === typeFilter;
  }

  function cardMatchesTag(card, tagFilter) {
    if (tagFilter === 'all') return true;
    return tagsForCard(card).indexOf(tagFilter) !== -1;
  }

  function setActiveCity(filter) {
    cityBtns.forEach(function (btn) {
      var f = (btn.getAttribute('data-city-filter') || 'all').toLowerCase();
      var on = f === filter;
      btn.classList.toggle('is-active', on);
      btn.classList.toggle('btn-outline-white', !on);
    });
  }

  function setActiveType(filter) {
    typeBtns.forEach(function (btn) {
      var f = (btn.getAttribute('data-type-filter') || 'all').toLowerCase();
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
    var cityF = (currentCity || 'all').toLowerCase();
    var typeF = (currentType || 'all').toLowerCase();
    var tagF = (currentTagFilter || 'all').toLowerCase();
    var q = searchQuery.trim().toLowerCase();
    var visible = 0;

    cards.forEach(function (card) {
      var match =
        cardMatchesCity(card, cityF) &&
        cardMatchesType(card, typeF) &&
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

  cityBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentCity = (btn.getAttribute('data-city-filter') || 'all').toLowerCase();
      setActiveCity(currentCity);
      applyFilters();
      syncCityToHash();
    });
  });

  window.addEventListener('hashchange', function () {
    var h = getHashCity();
    if (h.mode === 'ok') {
      currentCity = h.city;
    } else if (h.mode === 'invalid') {
      currentCity = 'all';
      location.replace('#all');
      return;
    } else {
      currentCity = 'all';
    }
    setActiveCity(currentCity);
    applyFilters();
  });

  typeBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentType = (btn.getAttribute('data-type-filter') || 'all').toLowerCase();
      setActiveType(currentType);
      applyFilters();
    });
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
    var h = getHashCity();
    if (h.mode === 'ok') {
      currentCity = h.city;
    } else if (h.mode === 'invalid') {
      currentCity = 'all';
      location.replace('#all');
    } else {
      var active = 'all';
      cityBtns.forEach(function (btn) {
        if (btn.classList.contains('is-active')) {
          active = (btn.getAttribute('data-city-filter') || 'all').toLowerCase();
        }
      });
      currentCity = active;
    }
    setActiveCity(currentCity);

    var activeType = 'all';
    typeBtns.forEach(function (btn) {
      if (btn.classList.contains('is-active')) {
        activeType = (btn.getAttribute('data-type-filter') || 'all').toLowerCase();
      }
    });
    currentType = activeType;
    setActiveType(currentType);

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
