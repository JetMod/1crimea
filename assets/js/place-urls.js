/**
 * Канонические URL раздела «Достопримечательности».
 *
 * Папка (slug): dostoprimechatelnosti/ — совпадает с названием раздела; короче
 * варианты (mesta/, chto-posmotret/) намеренно не используются.
 *
 * Файлы:
 *   - index.html — хаб каталога (/dostoprimechatelnosti/ или …/index.html)
 *   - <slug>.html — страница объекта, slug в kebab-case латиницей
 *
 * Подключайте этот скрипт до шаблонов, где нужны абсолютные пути в JS.
 */
(function () {
  var BASE = '/dostoprimechatelnosti/';
  window.SiteUrls = window.SiteUrls || {};
  window.SiteUrls.places = {
    folderSlug: 'dostoprimechatelnosti',
    basePath: BASE,
    hub: BASE,
    livadiyskiyDvorets: BASE + 'livadiyskiy-dvorets.html',
    lastochkinoGnezdo: BASE + 'lastochkino-gnezdo.html',
    /**
     * Порядок страниц объектов для prev/next (place-pagination.js).
     * Добавьте сюда slug и title и создайте соответствующий <slug>.html.
     */
    placePageSequence: [
      { slug: 'livadiyskiy-dvorets', title: 'Ливадийский дворец' },
      { slug: 'lastochkino-gnezdo', title: 'Ласточкино гнездо' }
    ]
  };
})();
