/**
 * Prev / next между страницами мест (см. SiteUrls.places.placePageSequence в place-urls.js).
 * Блок #placePagination скрыт, пока в последовательности меньше двух страниц или текущий slug не найден.
 */
(function () {
  var nav = document.getElementById('placePagination');
  if (!nav) return;

  var places = window.SiteUrls && window.SiteUrls.places;
  var seq = places && places.placePageSequence;
  if (!seq || !seq.length) {
    nav.setAttribute('hidden', '');
    return;
  }

  if (seq.length < 2) {
    nav.setAttribute('hidden', '');
    return;
  }

  var base = (places.basePath || '/dostoprimechatelnosti/').replace(/\/?$/, '/');
  var path = location.pathname || '';
  var m = path.match(/([^/]+)\.html$/);
  var slug = m ? m[1] : '';
  var idx = -1;
  for (var i = 0; i < seq.length; i++) {
    if (seq[i].slug === slug) {
      idx = i;
      break;
    }
  }

  if (idx === -1) {
    nav.setAttribute('hidden', '');
    return;
  }

  var prevLink = nav.querySelector('[data-place-pagination="prev"]');
  var nextLink = nav.querySelector('[data-place-pagination="next"]');
  var prevTitle = nav.querySelector('[data-place-pagination="prev-title"]');
  var nextTitle = nav.querySelector('[data-place-pagination="next-title"]');
  var inner = nav.querySelector('.place-pagination__inner');

  function hrefFor(sl) {
    return base + sl + '.html';
  }

  function setSide(link, titleEl, enabled, sl, title) {
    if (!link) return;
    if (enabled) {
      link.href = hrefFor(sl);
      link.hidden = false;
      link.removeAttribute('aria-disabled');
      link.removeAttribute('tabindex');
      if (titleEl) titleEl.textContent = title;
    } else {
      link.removeAttribute('href');
      link.hidden = true;
      link.setAttribute('aria-hidden', 'true');
      if (titleEl) titleEl.textContent = '';
    }
  }

  setSide(prevLink, prevTitle, idx > 0, seq[idx - 1].slug, seq[idx - 1].title);
  setSide(nextLink, nextTitle, idx < seq.length - 1, seq[idx + 1].slug, seq[idx + 1].title);

  if (prevLink && !prevLink.hidden) {
    prevLink.removeAttribute('aria-hidden');
  }
  if (nextLink && !nextLink.hidden) {
    nextLink.removeAttribute('aria-hidden');
  }

  if (inner) {
    inner.classList.toggle('place-pagination__inner--only-next', idx === 0);
    inner.classList.toggle('place-pagination__inner--only-prev', idx === seq.length - 1);
  }

  nav.removeAttribute('hidden');
})();
