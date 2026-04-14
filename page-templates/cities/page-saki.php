<?php
/**
 * Template Name: Город — Саки
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_saki_hero_bg = $crimea_assets . '/img/cities/6.webp';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Саки">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_saki_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Саки</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Западный</span>
          <h1 class="city-hero__title">Саки</h1>
          <p class="city-hero__tagline">
            Курорт у озёрной зоны западного побережья: грязелечебные и оздоровительные традиции, спокойный ритм без шума крупной набережной.
            Рядом — Евпатория с морем и прогулками; удобно совмещать оздоровительный отдых с выездами к соседям по берегу или в Симферополь.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Лечение</span>
            <span class="city-hero__tag">Озёра</span>
            <span class="city-hero__tag">Курорт</span>
            <span class="city-hero__tag">Сезон</span>
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

    <!-- 2. INTRO -->
    <section class="city-intro" aria-labelledby="city-intro-heading">
      <div class="container city-intro__grid">
        <div class="city-intro__copy fade-up" data-delay="1">
          <span class="eyebrow">О городе</span>
          <h2 id="city-intro-heading" class="city-intro__heading">Саки — озёра и курортная зона западного побережья</h2>
          <p>
            Саки — город на западе Крыма у солёных озёр: климат ближе к степному побережью с морским влиянием неподалёку, а застройка сочетает
            санаторную зону, жилые кварталы и зелёные проспекты. Для гостей типичны спокойный график и акцент на оздоровительной инфраструктуре.
          </p>
          <p>
            Озёрная линия и набережные задают характер прогулок: открытый горизонт воды, ветер со степи и неспешные маршруты без «горного» рельефа ЮБК.
            Море в классическом смысле — у соседней Евпатории; многие совмещают проживание в Саках с поездками на пляж или вечером к набережной.
          </p>
          <p>
            Оздоровительный профиль сложился вокруг сочетания климата, солнца и курортной среды — без обещаний «лечения» вместо очной консультации специалиста.
            Симферополь остаётся главным узлом прибытия; до Евпатории по дороге обычно немного, что удобно для связки двух западных точек в одной поездке.
          </p>
          <p>
            Транзит чаще всего через Симферополь: далее — автобус, маршрутка или авто. В июле и августе курортная полоса оживлённее;
            весна и ранняя осень дают мягкий свет для прогулок у озёр без пиковой жары центра Евпатории.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Западное побережье Крыма (не ЮБК)</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Май–сентябрь; купание в море — чаще с выездом в Евпаторию</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Степное побережье, смягчённое близостью моря; лето тёплое и солнечное</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">От Симферополя</dt>
              <dd class="city-facts__dd">Порядка 45–55 км по автодороге; в пути обычно около часа (автобус, маршрутка, такси)</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">До Евпатории</dt>
              <dd class="city-facts__dd">Несколько десятков минут на машине или рейсом по расписанию — удобная связка для моря и набережной</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Озёра</span>
            <span class="city-facts__tag">Оздоровление</span>
            <span class="city-facts__tag">Спокойный ритм</span>
            <span class="city-facts__tag">Связка с Евпаторией</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Сакам">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">25 100</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">28 км²</span>
            <span class="city-stats-strip__label">площадь города</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~20 км</span>
            <span class="city-stats-strip__label">до Евпатории</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~50 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1952</span>
            <span class="city-stats-strip__label">статус города</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- 4. SIGHTS -->
    <section class="city-sights" aria-labelledby="city-sights-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Достопримечательности</span>
            <h2 id="city-sights-heading">Что посмотреть</h2>
          </div>
        </div>
        <div class="city-sights__grid" id="citySightsGrid" data-sights-per-page="9">

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Озёра и открытая вода у Сак" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Озёра и набережная</h3>
              <p class="sight-card__text">Главная визуальная ось города: вода, променад и открытый горизонт — удобная база для первого знакомства с Саками пешком или на велосипеде.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и аллеи курортной зоны" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Санаторная зона и парки</h3>
              <p class="sight-card__text">Аллеи и зелёные кварталы между корпусами — типичный фон курорта: тень в жаркие часы и спокойные маршруты без центральной толпы.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Курортная атмосфера и открытое небо" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Грязелечебницы и оздоровительный профиль</h3>
              <p class="sight-card__text">Традиции курорта связаны с грязевыми и оздоровительными практиками — планируйте процедуры и проживание через официальные программы учреждений.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Набережная и море в Евпатории" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Евпатория: море и набережная</h3>
              <p class="sight-card__text">Соседний крупный курорт западного берега — пологий вход в воду, вечерние прогулки и пляжный день в короткой поездке от Сак.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Городская панорама Симферополя" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Симферополь: транзит и столица</h3>
              <p class="sight-card__text">Узел прибытия в Крым: ж/д и автостанции, откуда удобно добраться до Сак рейсом или такси — логичный ориентир при планировании пути.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Предгорный пейзаж у Бахчисарая" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бахчисарай и Ханский дворец</h3>
              <p class="sight-card__text">Выезд в предгорье — контраст с озёрной зоной; удобно планировать как полноценный день из западного берега.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Степной горизонт и дорога" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Спокойный ритм и степной воздух</h3>
              <p class="sight-card__text">Без нагрузки «мегапляжа»: прогулки, чтение у воды и неспешные вечера — типичный запрос тех, кто выбирает Саки именно за атмосферу.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Пейзаж Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — удобно добрать музеи и маршруты после знакомства с озёрной зоной.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Набережная и море" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Севастополь на день</h3>
              <p class="sight-card__text">Бухты, Херсонес и морская история — отдельная поездка по западному побережью, если хотите разбавить курортный график большим городом.</p>
            </div>
          </a>

        </div>

        <nav class="city-sights__pagination" id="citySightsPagination" aria-label="Страницы списка достопримечательностей" hidden></nav>
      </div>
    </section>

    <!-- 5. ROUTES -->
    <section class="city-routes" aria-labelledby="city-routes-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Идеи для поездки</span>
            <h2 id="city-routes-heading">Маршруты на день</h2>
          </div>
        </div>
        <div class="city-routes__grid">

          <article class="route-card fade-up" data-delay="1">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Озёра и променад</h3>
            <p class="route-card__desc">Спокойный день у солёных озёр: набережные, открытый горизонт воды и курортные аллеи без спешки крупной набережной.</p>
            <ol class="route-card__stops">
              <li>Утренняя прогулка вдоль озёрной линии</li>
              <li>Санаторная зона и парковые аллеи</li>
              <li>Обед в городе или у базы отдыха</li>
              <li>Вечер у воды или на тихих улицах</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Озёра</span>
              <span class="route-card__tag">Прогулки</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Море в Евпатории</h3>
            <p class="route-card__desc">Связка двух западных курортов: купание и набережная соседнего города — возврат в Саки на ночь у озёр.</p>
            <ol class="route-card__stops">
              <li>Выезд в Евпаторию утром</li>
              <li>Пляж и купание, обед у моря</li>
              <li>Прогулка по набережной и старому городу</li>
              <li>Возвращение в Саки к вечеру</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Море</span>
              <span class="route-card__tag">Соседний курорт</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Столица и предгорье</h3>
            <p class="route-card__desc">Из озёрной зоны — в Симферополь на музеи и прогулки или в Бахчисарай за дворцом и каньоном (один полноценный выезд).</p>
            <ol class="route-card__stops">
              <li>Трансфер на автобусе или машине</li>
              <li>Симферополь: центр, парки, кофе — или Бахчисарай: Ханский дворец</li>
              <li>Обед в городе, короткие точки по интересам</li>
              <li>Возврат в Саки до вечера</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Экскурсия</span>
              <span class="route-card__tag">Культура</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="saki-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="saki-gallery-heading">Саки в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: озёра и открытая вода">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Озёра и открытая вода у Сак" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: зелень и аллеи">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и аллеи курортной зоны" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: степной горизонт">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Степной горизонт и дорога" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: курортная атмосфера">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Курортная атмосфера и открытое небо" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: море и набережная соседнего курорта">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Море и набережная на западном побережье" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: предгорный пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Предгорный пейзаж Крыма" width="800" height="600" loading="lazy" />
          </button>
        </div>
      </div>
    </section>

<?php
get_template_part(
    'template-parts/gallery-card',
    null,
    array(
        'crimea_assets' => $crimea_assets,
        'crimea_gallery_current_slug' => 'saki',
    )
);
?>

    <!-- 7. PRACTICAL -->
    <section class="city-practical" aria-labelledby="city-practical-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Советы</span>
            <h2 id="city-practical-heading">Практически</h2>
            <p class="city-practical__intro">
              Дорога, сезон и жильё — коротко, чтобы спланировать поездку: что учесть до выезда и в первые дни у озёр.
            </p>
          </div>
        </div>
        <div class="city-practical__grid">
          <div class="city-practical__block fade-up" data-delay="1">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 class="city-practical__title">Как добраться</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь: от ж/д вокзала или автостанции — рейсами на Саки или с пересадкой по расписанию.</p>
              <ul class="city-practical__list">
                <li><strong>Автобус и маршрутка</strong> — регулярное сообщение с Симферополя; летом уточняйте рейсы и время в пути.</li>
                <li><strong>Связка с Евпаторией</strong> — короткий переезд на машине или общественным транспортом, если базируетесь у моря и хотите день у озёр (или наоборот).</li>
                <li><strong>Свой автомобиль</strong> — прямой заезд по трассе; в высокий сезон у курортной зоны планируйте парковку у жилья заранее.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Выезды в Симферополь и Бахчисарай удобнее планировать с запасом по времени — в часы пик транспорт на трассах загружен сильнее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Тёплый сезон и максимум солнца — с июня по сентябрь; май и «бархатная» осень часто комфортны для прогулок у озёр без июльской жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — больше гостей в санаторной зоне; жильё и процедуры лучше согласовывать заранее.</li>
                <li><strong>Весна и ранняя осень</strong> — спокойнее для пеших маршрутов; купание в море обычно с выездом в Евпаторию.</li>
                <li><strong>Зима</strong> — тише; больше про короткие прогулки и город, чем про пляжный отдых.</li>
              </ul>
            </div>
            <div class="city-season-bar" role="img" aria-label="Условная сезонность: январь–март и ноябрь–декабрь спокойнее, апрель и октябрь переходные, май–сентябрь высокий сезон">
              <p class="city-season-bar__label">Сезонность по месяцам</p>
              <div class="city-season-bar__months">
                <span class="city-season-bar__month city-season-bar__month--low">Янв</span>
                <span class="city-season-bar__month city-season-bar__month--low">Фев</span>
                <span class="city-season-bar__month city-season-bar__month--low">Мар</span>
                <span class="city-season-bar__month city-season-bar__month--shoulder">Апр</span>
                <span class="city-season-bar__month city-season-bar__month--peak">Май</span>
                <span class="city-season-bar__month city-season-bar__month--peak">Июн</span>
                <span class="city-season-bar__month city-season-bar__month--peak">Июл</span>
                <span class="city-season-bar__month city-season-bar__month--peak">Авг</span>
                <span class="city-season-bar__month city-season-bar__month--peak">Сен</span>
                <span class="city-season-bar__month city-season-bar__month--shoulder">Окт</span>
                <span class="city-season-bar__month city-season-bar__month--low">Ноя</span>
                <span class="city-season-bar__month city-season-bar__month--low">Дек</span>
              </div>
              <div class="city-season-bar__legend">
                <span class="city-season-bar__legend-item"><span class="city-season-bar__legend-swatch city-season-bar__legend-swatch--low" aria-hidden="true"></span> Спокойнее</span>
                <span class="city-season-bar__legend-item"><span class="city-season-bar__legend-swatch city-season-bar__legend-swatch--shoulder" aria-hidden="true"></span> Переходный</span>
                <span class="city-season-bar__legend-item"><span class="city-season-bar__legend-swatch city-season-bar__legend-swatch--peak" aria-hidden="true"></span> Высокий сезон</span>
              </div>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="3">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <h3 class="city-practical__title">Где остановиться</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">От района зависят близость к озёрам, санаторному комплексу и удобство выездов к морю в Евпаторию.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">Санаторная зона</span>
                <span class="city-practical__chip">Ближе к озёрам</span>
                <span class="city-practical__chip">Спокойные кварталы</span>
                <span class="city-practical__chip">Связка с Евпаторией</span>
                <span class="city-practical__chip">Выезд на море на день</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; до озёрной набережной часто пешком или короткой поездкой.</li>
                <li><strong>Средний сегмент</strong> — базы отдыха и апартаменты; уточняйте парковку и питание, если едете на машине.</li>
                <li><strong>Комфорт</strong> — санатории и отели с инфраструктурой; в высокий сезон бронирование заранее разумно по всему городу.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если важен пляж каждый день, сравните расстояние до Евпатории в описании жилья или заложите отдельные поездки к морю.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. HISTORY -->
    <section class="city-history" aria-labelledby="city-history-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">История</span>
            <h2 id="city-history-heading">Краткая хронология</h2>
          </div>
        </div>
        <p class="city-history__lead fade-up" data-delay="1">
          От степного участка у солёных озёр до курортного города западного побережья — несколько вех, которые помогают понять современные Саки.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">Конец XIX в.</span>
            <div class="city-history__body">
              <p>Начало освоения <strong>озёрной зоны Сак</strong> как места отдыха и лечения: первые бальнеологические и грязевые практики у солёных водоёмов.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1920–1930-е</span>
            <div class="city-history__body">
              <p>Развитие <strong>санаторной инфраструктуры</strong> в советский период — Саки формируются как узнаваемый курорт западного Крыма.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1952</span>
            <div class="city-history__body">
              <p>Населённому пункту присвоен <strong>статус города</strong> — закрепление административного положения Сак на карте республики.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">Советские десятилетия</span>
            <div class="city-history__body">
              <p>Расширение <strong>санаторно-курортной базы</strong> и оздоровительного профиля; город связывают с грязелечением и отдыхом у озёр.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1990-е — XXI в.</span>
            <div class="city-history__body">
              <p>Обновление курортной среды и <strong>связь с соседней Евпаторией</strong>: туристы всё чаще совмещают озёра Сак с морем западного побережья.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 9. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Саках">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_saki_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Западный берег держит иной ритм:</span>
          <span class="city-quote__line">озёра, солнце и пространство для спокойного отдыха у воды»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о западном побережье и оздоровлении</cite>
        </footer>
      </div>
    </section>

    <!-- 10. NEARBY -->
    <section class="city-nearby cities" aria-labelledby="city-nearby-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Похожие направления</span>
            <h2 id="city-nearby-heading">Рядом</h2>
          </div>
          <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="section-header__link">
            Все города
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        <div class="city-nearby__grid">

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Евпатория — набережная и море" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Евпатория</h3>
              <p class="city-card__lead">Соседний крупный курорт: пологий вход в море, набережная и семейный пляжный день в короткой поездке от Сак.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Севастополь — бухты и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Севастополь</h3>
              <p class="city-card__lead">Бухты, Херсонес и морская история — крупный город по западному побережью для отдельной поездки.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Бахчисарай — ханский дворец" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Бахчисарай</h3>
              <p class="city-card__lead">Ханский дворец и предгорье — день в сторону внутреннего Крыма от озёрной зоны.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

        </div>
      </div>
    </section>

    <!-- 11. CITY NAV -->
    <nav class="city-nav" aria-label="Соседние города">
      <div class="container city-nav__inner">
        <div class="city-nav__side city-nav__side--prev">
          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Евпатория</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Симферополь</span>
            </span>
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
