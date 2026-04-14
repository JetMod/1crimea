<?php
/**
 * Template Name: Город — Новый Свет
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_novy_svet_hero_bg = $crimea_assets . '/img/cities/img9.webp';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Новый Свет">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_novy_svet_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Новый Свет</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Восточный</span>
          <h1 class="city-hero__title">Новый Свет</h1>
          <p class="city-hero__tagline">
            Посёлок в бухте у Судака, в заповедной зоне мыса: тропа Голицына, зелёные бухты, грот Шаляпина и капелла, завод шампанских вин.
            Удобно сочетать с Судаком, Коктебелем и Феодосией по восточному побережью — с отдельным днём на тропы и солнце у скал.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Тропа Голицына</span>
            <span class="city-hero__tag">Бухты</span>
            <span class="city-hero__tag">Заповедник</span>
            <span class="city-hero__tag">Вино</span>
            <span class="city-hero__tag">Пляж</span>
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
          <span class="eyebrow">О посёлке</span>
          <h2 id="city-intro-heading" class="city-intro__heading">Новый Свет — бухта у Судака, тропа Голицына и завод игристого</h2>
          <p>
            Новый Свет — узкий курортный посёлок в бухте у подножия заповедного мыса: здесь проходят знаменитая тропа Голицына, грот Шаляпина и капелла, винные погреба и завод шампанских вин с долгой историей.
            Бухты и скалы задают характер прогулкам: солнце на открытых участках ощутимее, к морю и к тропам закладывайте воду и головной убор.
          </p>
          <p>
            Логистически посёлок тесно связан со Судаком — чаще добираются через город или по восточной трассе; Коктебель и Феодосия лежат западнее по тому же берегу и удобны для кольцевых маршрутов с учётом расписания и пробок в пик сезона.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про море, тропы, бухты и винную повестку — с поправкой на жару в разгар лета и скопление гостей у популярных пляжей и на подходах к тропе.
            Жильё чаще выбирают ближе к берегу или к выходу на маршруты — в зависимости от того, важнее ли шаговая доступность к пляжу или к началу тропы.
          </p>
          <p>
            Транзит через Симферополь остаётся типичной схемой прибытия; дальше — рейсы и автомобиль на восточное побережье. Планируйте переезды с учётом времени суток и сезона.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Восточное побережье, бухта у Судака; в каталоге — восточная часть полуострова</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Лето — пляж и длинный день у бухты; весна и осень — спокойнее для троп без пиковой жары</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Море смягчает берег; на тропе и скалах ветер и солнце сильнее — берите воду и головной убор</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь с городами</dt>
              <dd class="city-facts__dd">Судак — сосед по бухте; Коктебель и Феодосия — по восточной трассе; Симферополь — главный транзит</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Тропа Голицына</span>
            <span class="city-facts__tag">Бухты</span>
            <span class="city-facts__tag">Заповедник</span>
            <span class="city-facts__tag">Вино</span>
            <span class="city-facts__tag">Пляж</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Новому Свету">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1 100</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~0,9 км²</span>
            <span class="city-stats-strip__label">площадь пгт</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~5 км</span>
            <span class="city-stats-strip__label">до Судака</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~118 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1882</span>
            <span class="city-stats-strip__label">завод Голицына</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Новый Свет — тропа Голицына и скалы" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Тропа Голицына</h3>
              <p class="sight-card__text">Главный пеший маршрут вдоль скал и бухт: планируйте время, воду и правила заповедной зоны; в жару стартуйте раньше.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Новый Свет — грот Шаляпина и капелла" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Грот Шаляпина и капелла</h3>
              <p class="sight-card__text">Известные точки на маршруте по мысу: удобно сочетать с тропой и видами на море; детали доступа уточняйте на месте.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Новый Свет — завод шампанских вин" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Завод шампанских вин</h3>
              <p class="sight-card__text">История игристого и дегустации — часть имиджа посёлка; экскурсии и часы работы лучше сверять заранее.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Новый Свет — бухты заповедника" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бухты и пляжи</h3>
              <p class="sight-card__text">Узкая полоса берега между скалами — выбирайте участок по рельефу; в высокий сезон у центральных зон народу больше.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Судак: крепость и город</h3>
              <p class="sight-card__text">Сосед по бухте: генуэзская крепость, набережная и инфраструктура — логичная база для поездки и пересадок.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — залив и Кара-Даг" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Коктебель и Кара-Даг</h3>
              <p class="sight-card__text">Западнее по побережью: залив, заповедник и набережная — удобная связка с маршрутом по восточному берегу.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Феодосия</h3>
              <p class="sight-card__text">Порт, набережная и галерея Айвазовского — крупный соседний город по той же трассе, на день или на пересадку.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Симферополь — городская панорама" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Симферополь: транзит</h3>
              <p class="sight-card__text">Главный узел прибытия и пересадок на автобусы на восток — удобно спланировать связку с бухтой и обратным рейсом.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Пейзаж восточного Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — доберите музеи и природные объекты после тропы и бухт.</p>
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
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Тропа и бухты</h3>
            <p class="route-card__desc">Классический день в заповедной зоне мыса: скалы, зелёная вода бухт и главная тропа — с раннего старта и запасом воды.</p>
            <ol class="route-card__stops">
              <li>Старт по тропе Голицына от посёлка</li>
              <li>Смотровые и переходы между бухтами</li>
              <li>Грот Шаляпина и капелла на маршруте</li>
              <li>Возвращение к бухте — купание или короткий отдых у берега</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Природа</span>
              <span class="route-card__tag">Тропа</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Игристое и история завода</h3>
            <p class="route-card__desc">Винная история посёлка: экскурсия по заводу шампанских вин, дегустация и неспешная прогулка к морю.</p>
            <ol class="route-card__stops">
              <li>Завод шампанских вин: экскурсия и дегустация</li>
              <li>Прогулка к набережной и бухте</li>
              <li>Обед с видом на скалы</li>
              <li>Свободное время у пляжа или в парковой зоне</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Вино</span>
              <span class="route-card__tag">История</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Судак и залив</h3>
            <p class="route-card__desc">Связка с соседним городом: крепость, набережная и вечером — тихая бухта Нового Света.</p>
            <ol class="route-card__stops">
              <li>Утро в Новом Свете: пляж или короткая прогулка</li>
              <li>Переезд в Судак: Генуэзская крепость</li>
              <li>Набережная, обед, виды на залив</li>
              <li>Возврат в бухту на закате</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Экскурсия</span>
              <span class="route-card__tag">Побережье</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="novy-svet-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="novy-svet-gallery-heading">Новый Свет в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: бухта и скалы Нового Света">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Бухта Нового Света и скалы заповедника" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: тропа и берег">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Тропа и прибрежные скалы у посёлка" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: восточное побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Восточное побережье Крыма, вид на море" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: скалы и вода">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Скалы и море у берега" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: приморский пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Приморский пейзаж и растительность" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: панорама над морем">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Панорама гор и моря" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'novy-svet',
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
              Узкий посёлок у Судака: как добраться через восточную трассу или город, пик сезона, тропы и солнце, жильё у моря или у выхода на маршрут.
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
              <p class="city-practical__lead">Чаще всего приезжают через Симферополь, затем на восточное побережье; до Нового Света логичный путь — через Судак (автобус, такси, автомобиль) или по восточной трассе с учётом указателей и пробок в сезон.</p>
              <ul class="city-practical__list">
                <li><strong>Симферополь</strong> — главный узел прибытия и пересадок на рейсы к Феодосии, Коктебелю и Судаку.</li>
                <li><strong>Судак</strong> — соседний город и удобная опора: отсюда чаще добираются до посёлка в бухте.</li>
                <li><strong>Авто</strong> — гибкий график для тропы, бухт и выездов к соседям по берегу; летом на подъездах к курортной зоне закладывайте запас времени.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Сверяйте расписание последних рейсов, если возвращаетесь в Симферополь вечером; в пик сезона места в автобусах на популярные направления лучше уточнять заранее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Лето — пляж, длинный день и пик гостей на тропе и у моря; весна и осень удобнее для спокойных прогулок по скалам без пиковой жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — май–сентябрь: максимум солнца и спроса на жильё; к тропе Голицына выходите раньше или в будни.</li>
                <li><strong>Межсезонье</strong> — тише на набережной; купание зависит от погоды, зато проще гулять без давки.</li>
                <li><strong>Зима</strong> — ветренее на открытых склонах; для коротких прогулок одевайтесь теплее.</li>
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
              <p class="city-practical__lead">Ориентируйтесь на близость к пляжу и бухте или к выходу на тропу — в зависимости от того, важнее ли море без лишних подъёмов или ранний старт по скалам.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">У бухты</span>
                <span class="city-practical__chip">Ближе к тропе</span>
                <span class="city-practical__chip">Связка со Судаком</span>
                <span class="city-practical__chip">Тихо от променада</span>
                <span class="city-practical__chip">Вид на скалы</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте расстояние до пляжа и до остановок.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты вдоль береговой полосы.</li>
                <li><strong>Комфорт</strong> — жильё с видом на бухту или скалы; в высокий сезон бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете и тропу, и пляж, сравните перепады и солнце на маршруте — в жару короткие отдыхи у воды ощутимее.</p>
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
          От виноградников князя Голицына до посёлка у бухты — несколько вех, которые связывают Новый Свет с винной историей восточного Крыма и тропой на мысе.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1878</span>
            <div class="city-history__body">
              <p>Князь <strong>Л. С. Голицын</strong> закладывает виноградники в Судакском уезде у побережья — начало промышленного виноделия на мысе.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1882</span>
            <div class="city-history__body">
              <p>Основан <strong>завод шампанских вин</strong> — здесь начали выпускать игристое по классической технологии; фабрика задаёт имидж посёлка до сих пор.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1890–1910</span>
            <div class="city-history__body">
              <p>Благоустройство прибрежной зоны: парк, <strong>капелла</strong> и <strong>грот Шаляпина</strong> — любимые точки на тропе у бухты.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1930-е</span>
            <div class="city-history__body">
              <p>Развитие <strong>курорта</strong> у залива: благоустройство набережной и доступ к тропам для отдыхающих.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1982</span>
            <div class="city-history__body">
              <p>Присвоен статус <strong>посёлка городского типа «Новый Свет»</strong> — закрепление названия и административного положения у Судака.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 9. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Новом Свете">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_novy_svet_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Бухта прячет небо между скалами,</span>
          <span class="city-quote__line">а тропа выводит солнце над водой»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Новом Свете: бухта и тропа</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Судак</h3>
              <p class="city-card__lead">Крепость на скале и бухты — соседний город, удобная база и транзит до посёлка в заливе.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — залив и гора Карадаг" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Коктебель</h3>
              <p class="city-card__lead">Залив, Кара-Даг и набережная — западнее по побережью, логичная остановка на трассе к Судаку и обратно.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Феодосия</h3>
              <p class="city-card__lead">Порт, набережная и галерея Айвазовского — крупный сосед по восточному берегу для связки с маршрутом.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Судак</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/stary-krym/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Старый Крым</span>
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
