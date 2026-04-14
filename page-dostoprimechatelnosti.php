<?php
/**
 * Template Name: Достопримечательности (каталог)
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_place_landing_count = count(crimea_get_place_template_slugs());
/** @var int Число карточек в сетке ниже (подборка направлений, не только отдельные страницы мест). */
$crimea_places_hub_catalog_count = 12;

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main id="main-content" class="catalog-page places-hub">

    <section class="catalog-hero catalog-hero--places" aria-label="Достопримечательности Крыма">
      <div class="container">
        <nav class="breadcrumbs breadcrumbs--on-dark breadcrumbs--center" aria-label="Навигационная цепочка">
          <ol class="breadcrumbs__list">
            <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
            <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Достопримечательности</span></li>
          </ol>
        </nav>
        <p class="eyebrow">Каталог</p>
        <h1 class="hero__title">Достопримечательности</h1>
        <p class="hero__subtitle">
          Подборка из <span id="placesCatalogHeroCount"><?php echo (int) $crimea_places_hub_catalog_count; ?></span> направлений
          (дворцы, крепости, музеи и природа). Отдельные страницы на сайте:
          <span id="placesLandingCount"><?php echo (int) $crimea_place_landing_count; ?></span>.
        </p>
      </div>
    </section>

    <div class="catalog-filter-bar" role="region" aria-label="Фильтры каталога мест">
      <div class="container catalog-filter-bar__inner">
        <div class="catalog-filter-stack">
          <div class="catalog-filters" role="group" aria-label="Город или регион">
            <button type="button" class="btn catalog-filter place-city-filter is-active" data-city-filter="all">Все</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="yalta">Ялта</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="alupka">Алупка</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="sevastopol">Севастополь</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="bakhchisaray">Бахчисарай</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="sudak">Судак</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="feodosiya">Феодосия</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="evpatoriya">Евпатория</button>
            <button type="button" class="btn btn-outline-white catalog-filter place-city-filter" data-city-filter="belogorsk">Белогорск</button>
          </div>
     
        </div>
      </div>
    </div>

    <section class="cities catalog-cities places-catalog" aria-labelledby="places-cities-heading">
      <div class="container">

        <div class="section-header catalog-section-header">
          <div>
            <span class="eyebrow">Что посмотреть</span>
            <h2 id="places-cities-heading">Объекты <span class="catalog-count" id="placesVisibleCount" aria-live="polite"><?php echo (int) $crimea_places_hub_catalog_count; ?></span></h2>
          </div>
          <div class="catalog-section-header__tools">
            <div class="catalog-search-wrap">
              <input
                type="search"
                class="catalog-search"
                id="placesSearch"
                placeholder="Найти место…"
                autocomplete="off"
                enterkeyhint="search"
                aria-label="Поиск по названию"
              />
            </div>
            <div class="catalog-view-toggle" role="group" aria-label="Вид каталога">
              <button
                type="button"
                class="catalog-view-btn is-active"
                data-catalog-view="grid"
                aria-pressed="true"
                aria-label="Вид сеткой"
                title="Сетка"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect x="3" y="3" width="7" height="7" rx="1" />
                  <rect x="14" y="3" width="7" height="7" rx="1" />
                  <rect x="3" y="14" width="7" height="7" rx="1" />
                  <rect x="14" y="14" width="7" height="7" rx="1" />
                </svg>
              </button>
              <button
                type="button"
                class="catalog-view-btn"
                data-catalog-view="list"
                aria-pressed="false"
                aria-label="Вид списком"
                title="Список"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="8" y1="6" x2="21" y2="6" />
                  <line x1="8" y1="12" x2="21" y2="12" />
                  <line x1="8" y1="18" x2="21" y2="18" />
                  <line x1="3" y1="6" x2="3.01" y2="6" />
                  <line x1="3" y1="12" x2="3.01" y2="12" />
                  <line x1="3" y1="18" x2="3.01" y2="18" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="cities__grid catalog-grid places-grid">

          <a href="<?php echo esc_url( crimea_place_page_url( 'livadiyskiy-dvorets' ) ); ?>" class="sight-card fade-up" data-delay="1" data-city="yalta" data-type="dvorets" data-tags="история архитектура музей" data-crimea-place-page="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Ливадийский дворец среди парка" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ливадийский дворец</h3>
              <p class="sight-card__text">Белоснежная резиденция у моря: парк, экспозиции и место Ялтинской конференции 1945 года.</p>
              <span class="sight-card__link">Подробнее<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>" class="sight-card fade-up" data-delay="1" data-city="alupka" data-type="dvorets" data-tags="история архитектура природа">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Воронцовский дворец в Алупке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Воронцовский дворец</h3>
              <p class="sight-card__text">Романтические башни и парк у подножия Ай-Петри — визитная карточка Южного берега.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="sight-card fade-up" data-delay="2" data-city="bakhchisaray" data-type="dvorets" data-tags="история архитектура">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Бахчисарайский ханский дворец" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ханский дворец</h3>
              <p class="sight-card__text">Дворцовая площадь, Большая и Малая ханские мечети — сердце средневекового Бахчисарая.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>" class="sight-card fade-up" data-delay="2" data-city="sevastopol" data-type="krepost" data-tags="история архитектура пляж">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Руины Херсонеса Таврического" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Херсонес Таврический</h3>
              <p class="sight-card__text">Античный полис у моря: театр, базилики и набережная с видом на закат.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="sight-card fade-up" data-delay="3" data-city="sudak" data-type="krepost" data-tags="история архитектура">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Генуэзская крепость в Судаке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Генуэзская крепость</h3>
              <p class="sight-card__text">Крепостные стены над бухтой — один из самых узнаваемых силуэтов восточного Крыма.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="sight-card fade-up" data-delay="3" data-city="feodosiya" data-type="muzej" data-tags="история архитектура курорт">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия, галерея Айвазовского" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Галерея Айвазовского</h3>
              <p class="sight-card__text">Крупнейшее собрание морских полотен художника и постоянные выставки в старинном здании.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( crimea_place_page_url( 'lastochkino-gnezdo' ) ); ?>" class="sight-card fade-up" data-delay="4" data-city="yalta" data-type="priroda" data-tags="архитектура природа курорт" data-crimea-place-page="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Замок Ласточкино гнездо" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ласточкино гнездо</h3>
              <p class="sight-card__text">Замок на Аю-Даге над морем — символ Южного берега и популярная смотровая точка.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="4" data-city="yalta" data-type="priroda" data-tags="природа история">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Никитский ботанический сад" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Никитский ботанический сад</h3>
              <p class="sight-card__text">Коллекции растений со всего мира — прогулки в тени деревьев круглый год.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="sight-card fade-up" data-delay="5" data-city="feodosiya" data-type="priroda" data-tags="природа горы">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Вулкан Карадаг у Коктебеля" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Карадаг</h3>
              <p class="sight-card__text">Древний вулкан и заповедник у моря: тропы, бухты и редкая флора.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="5" data-city="yalta" data-type="priroda" data-tags="горы природа">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Канатная дорога на Ай-Петри" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Канатная дорога на Ай-Петри</h3>
              <p class="sight-card__text">Подъём на плато с панорамами Южного берега и зубцами скал.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/belogorsk/' ) ); ?>" class="sight-card fade-up" data-delay="6" data-city="belogorsk" data-type="priroda" data-tags="история природа горы">
            <div class="sight-card__img-wrap">
              <div class="sight-card__img city-card__img--placeholder" role="img" aria-label="Белая скала — меловой массив" style="width:100%;height:100%;background:linear-gradient(135deg,#fef3c7 0%,#f59e0b 40%,#78350f 100%);"></div>
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Белая скала (Ак-Кая)</h3>
              <p class="sight-card__text">Меловой массив с обзорными площадками — визитная карточка степного Крыма.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="sight-card fade-up" data-delay="6" data-city="evpatoriya" data-type="muzej" data-tags="история курорт лечение">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Евпатория, музей" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Краеведческий музей Евпатории</h3>
              <p class="sight-card__text">История западного побережья: от античности до курортной эпохи.</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="7" data-city="yalta" data-type="dvorets" data-tags="история архитектура вино">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Массандровский дворец" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/></svg></span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Массандровский дворец</h3>
              <p class="sight-card__text">Резиденция у подножия гор и дегустации в подвалах знаменитого завода «Массандра».</p>
              <span class="sight-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

        </div>

        <div
          class="catalog-empty"
          id="placesEmpty"
          hidden
          role="status"
          aria-live="polite"
        >
          <div class="catalog-empty__inner">
            <p class="catalog-empty__title">Ничего не найдено</p>
            <p class="catalog-empty__hint">Попробуйте изменить поиск или сбросить фильтры по городу, типу и интересам.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
