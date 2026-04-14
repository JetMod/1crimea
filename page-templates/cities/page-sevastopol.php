<?php
/**
 * Template Name: Город — Севастополь
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_sevastopol_hero_bg = $crimea_assets . '/img/cities/2.jpg';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Севастополь">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_sevastopol_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Севастополь</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Западный</span>
          <h1 class="city-hero__title">Севастополь</h1>
          <p class="city-hero__tagline">
            Город бухт и морской истории на западном побережье: Херсонес Таврический, набережные и выезды в Инкерман и к западному берегу.
            Здесь пересекаются прогулки у воды, музеи и панорамы обороны — без типичного «южнобережного» рельефа ЮБК.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Бухты</span>
            <span class="city-hero__tag">Херсонес</span>
            <span class="city-hero__tag">Морская история</span>
            <span class="city-hero__tag">Май–сент</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Севастополь — бухты, Херсонес и морская история западного Крыма</h2>
          <p>
            Севастополь — крупный город западного Крыма, не на «классическом» Южном берегу: климат здесь ближе к степному побережью с морским ветром,
            а планировка выстроена вокруг бухт и военно-морской истории. Удобно сочетать прогулки у воды с музеями и античным Херсонесом.
          </p>
          <p>
            Набережные, Графская пристань и Исторический бульвар задают ритм центра; чуть в стороне — Балаклава с узкой бухтой и своим характером.
            На север выезжают в Инкерман: каньон, пещерный монастырь и тихие тропы над водой — обычно на полдня или на целый день.
          </p>
          <p>
            Транзит почти всегда идёт через Симферополь: оттуда — автобусом, маршруткой или на авто к заливам города.
            Западное побережье (Евпатория, Саки) и Бахчисарай в предгорьях логично накрывают отдельными поездками, если остаётесь в регионе на несколько дней.
          </p>
          <p>
            В июле и августе набережные и парковки у популярных точек оживляются сильнее; весна и ранняя осень дают спокойнее свет для прогулок и музеев без пиковой жары.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Западный Крым (не ЮБК)</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Май–сентябрь; купальный сезон — примерно с конца весны до начала осени</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Умеренный, смягчённый морем; зима мягче степи, лето тёплое, нередко ветрено у заливов</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">От Симферополя</dt>
              <dd class="city-facts__dd">Порядка 65–80 км по автодороге; в пути обычно от часа до полутора (автобус, маршрутка, такси)</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">История</span>
            <span class="city-facts__tag">Бухты</span>
            <span class="city-facts__tag">Музеи</span>
            <span class="city-facts__tag">Выезды</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Севастополю">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">548 000</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">864 км²</span>
            <span class="city-stats-strip__label">площадь округа</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~70 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~15 км</span>
            <span class="city-stats-strip__label">до Балаклавы</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1783</span>
            <span class="city-stats-strip__label">основание города</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Руины и колонны Херсонеса Таврического" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Херсонес Таврический</h3>
              <p class="sight-card__text">Античный полис у моря: колонны, базилики и раскопки — главный исторический слой города, удобно совмещать с прогулкой вдоль берега.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Набережная и причалы у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Графская пристань и набережная</h3>
              <p class="sight-card__text">Прогулочная линия у бухты: суда у причала, вечерний свет на воде и короткий маршрут между центром и морем.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Панорама города и зелени" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Исторический бульвар и панорама обороны</h3>
              <p class="sight-card__text">Смотровые и памятные места с видом на бухты: удобно связать с музеем-панорамой и короткой прогулкой по склону.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Бухта и скалы у берега" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Балаклава: бухта и набережная</h3>
              <p class="sight-card__text">Узкая бухта и спокойная набережная — другой ритм, чем у центральных заливов; удобно на полдня с прогулкой вдоль воды.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и вид на побережье" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Инкерман</h3>
              <p class="sight-card__text">Каньон, пещерный монастырь и тропы над бухтой — логичный выезд к северу от Севастополя на отдельный маршрут.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Городская застройка у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Морские музеи и военно-морская тема</h3>
              <p class="sight-card__text">Экспозиции о флоте и обороне города — хорошее дополнение к прогулкам у бухт и к Херсонесу в прохладный день.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и аллеи у воды" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Нахимовский проспект и центр</h3>
              <p class="sight-card__text">Компактная городская ось: кафе, прогулки между бухтами и короткие пересадки на транспорт к Балаклаве и Инкерману.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Панорама набережной и моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бухты и виды с набережных</h3>
              <p class="sight-card__text">Разные ракурсы города с воды и с променадов — удобно сравнивать центральные заливы и более тихие участки берега.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Памятник и склон над морем" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Памятник затопленным кораблям</h3>
              <p class="sight-card__text">Один из узнаваемых символов города у берега — удобная остановка между прогулкой и музейной программой.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Пляжи западного побережья" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Евпатория по западному берегу</h3>
              <p class="sight-card__text">Семейные пляжи и набережная — отдельная поездка вдоль побережья, если хотите сменить темп севастопольских бухт.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Ханский дворец в Бахчисарае" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бахчисарай и Ханский дворец</h3>
              <p class="sight-card__text">Предгорье и крымскотатарская история — контраст с морским Севастополем; обычно полноценный день с дорогой и прогулкой по дворцу.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Парк и архитектура у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Алупка и Южный берег</h3>
              <p class="sight-card__text">Воронцовский дворец и парк — дальний выезд в сторону ЮБК, если планируете несколько дней в Крыму и хотите сравнить побережья.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Пейзаж Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Дворцы, крепости и природные точки по региону — удобно добрать маршруты после прогулок по городу и бухтам.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная Ялты" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ялта</h3>
              <p class="sight-card__text">Крупный курорт ЮБК с длинной набережной — отдельный день в дороге, если хотите сочетать запад Крыма с «классическим» южным берегом.</p>
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
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Херсонес и берег</h3>
            <p class="route-card__desc">Античный полис у моря и спокойная прогулка вдоль мыса — день про слои истории без лишних переездов.</p>
            <ol class="route-card__stops">
              <li>Заповедник «Херсонес Таврический»: раскопки и базилики</li>
              <li>Музей и смотровые на территории</li>
              <li>Прогулка к берегу и видам на залив</li>
              <li>Вечер: набережная или Графская пристань</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">История</span>
              <span class="route-card__tag">Античность</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Бухты и центр</h3>
            <p class="route-card__desc">Компактный маршрут по заливам и Нахимовскому проспекту — море рядом, памятные места и музейная пауза.</p>
            <ol class="route-card__stops">
              <li>Графская пристань и прогулка вдоль воды</li>
              <li>Исторический бульвар и панорама обороны</li>
              <li>Музей-панорама или тематический музей по времени</li>
              <li>Памятник затопленным кораблям на закате</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Прогулки</span>
              <span class="route-card__tag">Музеи</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Инкерман и Балаклава</h3>
            <p class="route-card__desc">Север и юг бухт: каньон с монастырём и узкая бухта — контрастные полдня в одном дне с транспортом.</p>
            <ol class="route-card__stops">
              <li>Инкерман: каньон и пещерный монастырь Св. Климента</li>
              <li>Обед и переезд к Балаклаве</li>
              <li>Набережная Балаклавской бухты</li>
              <li>Смотровые и спокойный вечер у воды</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Выезд</span>
              <span class="route-card__tag">Природа</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="sevastopol-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="sevastopol-gallery-heading">Севастополь в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: бухты и набережная">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_sevastopol_hero_bg ); ?>" alt="Бухты Севастополя и набережная" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: Херсонес">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Руины и колонны Херсонеса Таврического" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: панорама города">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Панорама Севастополя и зелёные склоны" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: Балаклава">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Балаклавская бухта и скалы" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: скалы у берега">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у западного побережья" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: набережная">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная и морской горизонт" width="800" height="600" loading="lazy" />
          </button>
        </div>
      </div>
    </section>

    <!-- 7. «Крым в кадре» (горизонтальная карусель городов) -->
<?php
get_template_part(
    'template-parts/gallery-card',
    null,
    array(
        'crimea_assets' => $crimea_assets,
        'crimea_gallery_current_slug' => 'sevastopol',
    )
);
?>


    <!-- 8. PRACTICAL -->
    <section class="city-practical" aria-labelledby="city-practical-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Советы</span>
            <h2 id="city-practical-heading">Практически</h2>
            <p class="city-practical__intro">
              Дорога, сезон и жильё — коротко, чтобы спланировать поездку: что учесть до выезда и в первый день в городе бухт.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь: от ж/д вокзала или автостанции — рейсами на Севастополь или с пересадкой по расписанию.</p>
              <ul class="city-practical__list">
                <li><strong>Автобус и маршрутка</strong> — регулярное сообщение с Симферополя; летом и в выходные лучше уточнять расписание и время в пути.</li>
                <li><strong>Электричка и ж/д</strong> — удобны при приезде поездом в Симферополь; дальше — пересадка на автобус или маршрутку к заливам города.</li>
                <li><strong>Свой автомобиль</strong> — прямой заезд по трассе; в центре и у набережных в высокий сезон ищите парковку заранее — у популярных точек мест мало.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Выезды в Инкерман и Балаклаву удобнее планировать с запасом по времени: маршрутки и дороги к бухтам в часы пик загружены сильнее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Купальный сезон и больше солнца — с июня по сентябрь; май и «бархатная» осень часто удобны для музеев и прогулок без июльной жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — оживлённые набережные и пляжи у бухт; транспорт и парковки у популярных мест загружены сильнее.</li>
                <li><strong>Весна и ранняя осень</strong> — комфортно для Херсонеса и пеших маршрутов; купание ещё возможно, вода прохладнее, чем в разгар лета.</li>
                <li><strong>Зима</strong> — тише, больше про город и музеи, чем про пляж; ветер у заливов ощутимее.</li>
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
              <p class="city-practical__lead">От района зависят шум ветра у бухты, виды и удобство выездов: центр ближе к набережным, окраины и посёлки у заливов — спокойнее ночью.</p>
              <p class="city-practical__chips-label">Популярные районы</p>
              <div class="city-practical__chips" aria-label="Районы для проживания">
                <span class="city-practical__chip">Центр и Нахимовский район</span>
                <span class="city-practical__chip">У Графской пристани</span>
                <span class="city-practical__chip">Балаклава и бухта</span>
                <span class="city-practical__chip">Окраины у заливов</span>
                <span class="city-practical__chip">Вторая линия от набережной</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры чуть дальше от воды; до набережной и остановок часто 10–20 минут пешком или на маршрутке.</li>
                <li><strong>Средний сегмент</strong> — отели и апартаменты с видом на бухту или город; уточняйте парковку, если едете на машине.</li>
                <li><strong>Комфорт</strong> — жильё у тихих улиц с видом на воду; в высокий сезон бронирование заранее разумно и в центре, и у Балаклавы.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете дни в Инкермане и на западном берегу, сравните, где удобнее выходить на трассу — иногда окраина ближе к выезду, чем самый центр.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. HISTORY -->
    <section class="city-history" aria-labelledby="city-history-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">История</span>
            <h2 id="city-history-heading">Краткая хронология</h2>
          </div>
        </div>
        <p class="city-history__lead fade-up" data-delay="1">
          От древнегреческого Херсонеса до морской крепости на бухтах — несколько вех, которые связывают античный полис, флот и оборону города у западного берега Крыма.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">V в. до н. э.</span>
            <div class="city-history__body">
              <p>Основание <strong>Херсонеса Таврического</strong> — древнегреческого полиса в юго-западной части Крыма.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">988</span>
            <div class="city-history__body">
              <p>По преданию, крещение князя <strong>Владимира</strong> в Херсонесе — одна из ключевых связей древнерусской истории с этим местом.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1783</span>
            <div class="city-history__body">
              <p>После присоединения Крыма к России — закладка <strong>Ахтиара</strong> и развитие военно-морской базы; позже город получает имя <strong>Севастополь</strong>.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1854–1855</span>
            <div class="city-history__body">
              <p><strong>Оборона Севастополя</strong> в Крымской войне — длительная осада и укрепления на берегах бухт.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1941–1942</span>
            <div class="city-history__body">
              <p><strong>Оборона</strong> в годы Великой Отечественной войны — город вновь становится центром сопротивления у моря.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 10. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Севастополе">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_sevastopol_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Здесь город держится на бухтах:</span>
          <span class="city-quote__line">море рядом — и история тоже»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о западном побережье</cite>
        </footer>
      </div>
    </section>

    <!-- 11. NEARBY -->
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
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Евпатория — пляжи и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Евпатория</h3>
              <p class="city-card__lead">Семейный курорт западного берега: мелководье, набережная и спокойный ритм по сравнению с бухтами Севастополя.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Инкерман — каньон и монастырь" style="width:100%;height:100%;background:linear-gradient(135deg,#292524 0%,#57534e 50%,#a8a29e 100%);"></div>
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Инкерман</h3>
              <p class="city-card__lead">Пещерный монастырь Св. Климента, каньон и тропы над бухтой — короткий выезд от Севастополя.</p>
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
              <p class="city-card__lead">Ханский дворец и предгорье — отдельный день с дорогой из прибрежного города в сторону внутреннего Крыма.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

        </div>
      </div>
    </section>

    <!-- 12. CITY NAV -->
    <nav class="city-nav" aria-label="Соседние города">
      <div class="container city-nav__inner">
        <div class="city-nav__side city-nav__side--prev">
          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Алупка</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Евпатория</span>
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
