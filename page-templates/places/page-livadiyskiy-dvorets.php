<?php
/**
 * Template Name: Место — Ливадийский дворец
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main id="main-content">

    <section class="city-hero" aria-label="Ливадийский дворец">
      <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg');" aria-hidden="true"></div>
      <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="breadcrumbs__link">Достопримечательности</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="breadcrumbs__link">Ялта</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Ливадийский дворец</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Ялта</span>
          <h1 class="city-hero__title">Ливадийский дворец</h1>
          <p class="city-hero__tagline">
            Белоснежный дворец и парк на берегу моря: резиденция последнего императора и место Ялтинской конференции —
            один из главных символов Южного берега Крыма.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">История</span>
            <span class="city-hero__tag">Архитектура</span>
            <span class="city-hero__tag">Музей</span>
          </div>
        </div>
      </div>
      <button type="button" class="hero__scroll" aria-label="Прокрутить вниз">
        <span class="hero__scroll-label">Листать</span>
        <span class="hero__scroll-visual" aria-hidden="true">
          <span class="hero__scroll-line"></span>
          <span class="hero__scroll-dot"></span>
        </span>
      </button>
    </section>

    <section class="place-quickbar" aria-label="Кратко о месте">
      <div class="container">
        <ul class="place-quickbar__list" role="list">
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Тип</span>
              <span class="place-quickbar__value">Дворец-музей</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Время визита</span>
              <span class="place-quickbar__value">2–3 ч</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Лучший сезон</span>
              <span class="place-quickbar__value">Апрель–октябрь</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Для кого</span>
              <span class="place-quickbar__value">Семьи, история, архитектура</span>
            </span>
          </li>
        </ul>
      </div>
    </section>

    <section class="city-intro" aria-labelledby="place-intro-heading">
      <div class="container city-intro__grid">
        <div class="city-intro__copy fade-up" data-delay="1">
          <h2 id="place-intro-heading" class="place-article__h2">О Ливадийском дворце</h2>
          <p>
            Ливадийский дворец стоит в посёлке Ливадия к западу от центра Ялты — там, где горы почти касаются моря.
            Ехать сюда имеет смысл и ради архитектуры белого дворца в итальянском ренессансном духе, и ради парка с аллеями и видами на воду,
            и ради истории: здесь жила императорская семья, а в 1945 году проходила знаменитая встреча союзников.
          </p>
          <p>
            Внутри — музейные залы и интерьеры разных эпох; внимательному гостю хватит двух-трёх часов, чтобы не спешить.
            Сочетайте визит с прогулкой по парку и, по желанию, с морской линией побережья рядом — в высокий сезон закладывайте время на очереди и парковку.
          </p>
          <p>
            Часы работы, цены билетов и экскурсии лучше уточнять на официальном сайте музея-заповедника перед поездкой — расписание может меняться по сезону и праздникам.
          </p>

          <section class="place-article__section" aria-labelledby="place-history-heading">
            <h3 id="place-history-heading" class="place-article__h3">История и что внутри</h3>
            <p>
              Современный дворец построен в начале XX века для императорской семьи; белый фасад и террасы хорошо читаются из сада и с набережных дорожек.
              В советское время комплекс стал музеем; сегодня это памятник архитектуры и истории с постоянной экспозицией.
            </p>
            <p>
              Часто выделяют зал, где в 1945 году проходила Ялтинская конференция, — он для многих гостей главная точка маршрута.
              Другие залы знакомят с бытом резиденции и интерьерами; внешний вид дворца и парка особенно выигрывает в ясную погоду.
            </p>
          </section>

          <section class="place-article__section" aria-labelledby="place-tickets-heading">
            <h3 id="place-tickets-heading" class="place-article__h3">Часы и билеты</h3>
            <p>
              Режим работы и стоимость входа зависят от сезона и типа билета (экскурсия, самостоятельный визит).
              Актуальные часы и цены смотрите на официальном сайте учреждения; в праздники и пик туристического сезона возможны дополнительные ограничения по потокам.
            </p>
          </section>
        </div>

        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="place-practical-title">
          <p id="place-practical-title" class="city-facts__title">Практически</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Категория</dt>
              <dd class="city-facts__dd city-facts__dd--place-meta">
                <span class="place-facts__category" title="Тип объекта">
                  <span class="place-facts__category-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
                  </span>
                  <span>Дворец-музей</span>
                </span>
              </dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучший сезон</dt>
              <dd class="city-facts__dd city-facts__dd--place-meta">
                <span class="place-facts__season">
                  <span class="place-facts__season-indicator" aria-hidden="true" title="Апрель–октябрь">
                    <span class="place-facts__season-dot place-facts__season-dot--muted"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--muted"></span>
                  </span>
                  <span class="place-facts__season-label">Апрель–октябрь</span>
                </span>
              </dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Адрес</dt>
              <dd class="city-facts__dd">пос. Ливадия, Ялта (ЮБК). Ориентир — дворцово-парковый ансамбль у побережья.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Как добраться</dt>
              <dd class="city-facts__dd">От ялтинского автовокзала и центра города — маршрутки и автобусы в сторону Ливадии/Гаспры; при необходимости такси или трансфер. От остановки до входа — пешком по указателям.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Время визита</dt>
              <dd class="city-facts__dd">Ориентир: 2–3 часа на дворец и парк без спешки; полдня — если добавить море и кафе.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Карта</dt>
              <dd class="city-facts__dd">
                <a href="<?php echo esc_url( 'https://yandex.ru/maps/?text=%D0%9B%D0%B8%D0%B2%D0%B0%D0%B4%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9%20%D0%B4%D0%B2%D0%BE%D1%80%D0%B5%D1%86' ); ?>" class="place-article__map-link" rel="noopener noreferrer" target="_blank">Открыть на карте</a>
              </dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Темы">
            <span class="city-facts__tag">История</span>
            <span class="city-facts__tag">Архитектура</span>
            <span class="city-facts__tag">Музей</span>
          </div>
        </aside>
      </div>
    </section>

    <section class="place-highlights" aria-labelledby="place-highlights-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Маршрут</span>
            <h2 id="place-highlights-heading">Что посмотреть внутри</h2>
          </div>
        </div>
        <ol class="place-highlights__list">
          <li class="place-highlights__item fade-up" data-delay="1">
            <span class="place-highlights__num" aria-hidden="true">1</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Зал Ялтинской конференции</h3>
              <p class="place-highlights__text">
                Главная историческая точка маршрута: здесь в 1945 году проходила встреча союзников.
                Экспозиция переносит в атмосферу послевоенных переговоров.
              </p>
            </div>
          </li>
          <li class="place-highlights__item fade-up" data-delay="2">
            <span class="place-highlights__num" aria-hidden="true">2</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Белый фасад и итальянский двор</h3>
              <p class="place-highlights__text">
                Архитектура в духе итальянского Ренессанса: террасы, белый камень и смотровые площадки —
                особенно выразительны в ясную погоду и с садовых аллей.
              </p>
            </div>
          </li>
          <li class="place-highlights__item fade-up" data-delay="3">
            <span class="place-highlights__num" aria-hidden="true">3</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Ливадийский парк</h3>
              <p class="place-highlights__text">
                Аллеи, зелень и виды на море дополняют визит: заложите время на прогулку до или после экскурсии по дворцу.
              </p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <section class="city-gallery" aria-labelledby="place-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фото</span>
            <h2 id="place-gallery-heading">Галерея</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: фасад Ливадийского дворца">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Белый фасад Ливадийского дворца среди зелени" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: набережная и море у Ялты">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная и море Южного берега Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: парк и аллеи">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Аллея с пальмами в парке" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: архитектура дворца">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Дворец и парковая зона" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: скалы и море">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у побережья ЮБК" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: панорама побережья">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Горный склон и панорама" width="800" height="600" loading="lazy" />
          </button>
        </div>
      </div>
    </section>

    <section class="place-related" aria-labelledby="place-related-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Ялта</span>
            <h2 id="place-related-heading">Рядом</h2>
          </div>
        </div>
        <div class="city-sights__grid">
          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/lastochkino-gnezdo/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у мыса Аю-Даг" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ласточкино гнездо</h3>
              <p class="sight-card__text">Символ ЮБК: замок на Аю-Даге над волнами — один из самых узнаваемых видов Крыма.</p>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Пейзаж Южного берега, зелень и горы" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Никитский ботанический сад</h3>
              <p class="sight-card__text">Коллекции растений со всего мира — идеальна для спокойной прогулки в тени деревьев.</p>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Парк и винодельня у Массандровского дворца" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Массандровский дворец</h3>
              <p class="sight-card__text">Роскошный дворец и дегустации в знаменитых подвалах Массандры у подножия гор.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <nav class="place-pagination" id="placePagination" hidden aria-label="Соседние достопримечательности">
      <div class="container">
        <div class="place-pagination__inner">
          <a class="place-pagination__link place-pagination__link--prev" data-place-pagination="prev" href="">
            <span class="place-pagination__dir">← Предыдущее место</span>
            <span class="place-pagination__title" data-place-pagination="prev-title"></span>
          </a>
          <a class="place-pagination__link place-pagination__link--next" data-place-pagination="next" href="">
            <span class="place-pagination__dir">Следующее место →</span>
            <span class="place-pagination__title" data-place-pagination="next-title"></span>
          </a>
        </div>
      </div>
    </nav>

  </main>

  <div id="cityGalleryLightbox" class="city-gallery__lightbox" role="dialog" aria-modal="true" aria-label="Просмотр фотографии" aria-hidden="true">
    <div class="city-gallery__lightbox-backdrop" tabindex="-1" aria-hidden="true"></div>
    <button type="button" class="city-gallery__lightbox-close" aria-label="Закрыть">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
    <figure class="city-gallery__lightbox-figure">
      <img class="city-gallery__lightbox-img" src="" alt="" />
    </figure>
  </div>

<?php
get_footer();
