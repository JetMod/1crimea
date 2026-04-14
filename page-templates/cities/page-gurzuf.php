<?php
/**
 * Template Name: Город — Гурзуф
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_gurzuf_hero_bg = $crimea_assets . '/img/cities/img9.webp';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Гурзуф">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_gurzuf_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Гурзуф</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">ЮБК</span>
          <h1 class="city-hero__title">Гурзуф</h1>
          <p class="city-hero__tagline">
            Компактная бухта с островом Адалары на горизонте: набережная, платаны и короткая дорога до Ялты и подножия Аю-Дага.
            Удобная база, если хотите совмещать море с прогулками по южнобережной трассе и видам на скалы.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Бухта</span>
            <span class="city-hero__tag">Скалы</span>
            <span class="city-hero__tag">ЮБК</span>
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
          <span class="eyebrow">О посёлке</span>
          <h2 id="city-intro-heading" class="city-intro__heading">Гурзуф — бухта, Адалары и короткая дорога до Ялты</h2>
          <p>
            Гурзуф — небольшой посёлок в излучине бухты между мысами: отсюда хорошо видны скалы Адалары и линия Южного берега в сторону Ялты.
            Набережная и пляжная полоса укладываются в прогулку за полчаса, зато атмосфера спокойнее, чем в крупных курортах.
          </p>
          <p>
            Вдоль берега — кафе, причалы и привычный для ЮБК ритм: утро у воды, день на экскурсии или втором пляже, вечер с видом на подсвеченные скалы.
            Выше по склону — тише улочки и тень деревьев; ближе к воде — больше гостевых домов и мелких отелей.
          </p>
          <p>
            Здесь пересекаются культурные ассоциации с Чеховым и соседним Артеком — без обязательного «чек-листа», но как часть общего образа побережья.
            Рядом — трасса к Ялте: маршрутки и такси ходят часто, за день можно собрать музеи и набережную соседнего города.
          </p>
          <p>
            В июле и августе бухта заполняется отдыхающими, парковки и набережная требуют терпения; весна и ранняя осень дают мягкий свет и меньше очередей у причалов.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Южный берег Крыма (ЮБК)</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Май–сентябрь; купальный сезон — примерно с конца весны до начала осени</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">От Ялты</dt>
              <dd class="city-facts__dd">Небольшая поездка маршруткой или такси вдоль побережья — обычно до получаса в пути в зависимости от трафика</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">От Симферополя</dt>
              <dd class="city-facts__dd">Через Ялту по автодороге; в пути часто от полутора до двух с половиной часов на общественном транспорте или авто</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Бухта</span>
            <span class="city-facts__tag">Скалы</span>
            <span class="city-facts__tag">Набережная</span>
            <span class="city-facts__tag">Выезды по ЮБК</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Гурзуфу">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">9 000</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">6,7 км²</span>
            <span class="city-stats-strip__label">площадь посёлка</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~20 км</span>
            <span class="city-stats-strip__label">до Ялты</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~90 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1899</span>
            <span class="city-stats-strip__label">«Дама с собачкой»</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Бухта Гурзуфа и скалы Адалары" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бухта и скалы Адалары</h3>
              <p class="sight-card__text">Короткая излучина с островом на горизонте — главный узнаваемый вид; удобно смотреть с набережной и с причалов на закате.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Набережная и море" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Набережная и променад</h3>
              <p class="sight-card__text">Главная прогулочная линия бухты: кафе, причалы и вечерний свет на воде — без длинных перегонов между точками.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/lastochkino-gnezdo/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у мыса" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Аю-Даг и Ласточкино гнездо</h3>
              <p class="sight-card__text">Мыс и замок на скале — логичное продолжение дня из Гурзуфа в сторону Ялты; часто совмещают с прогулкой по трассе.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная Ялты" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">День в Ялте</h3>
              <p class="sight-card__text">Длинная набережная, дворцы и музеи соседнего курорта — короткая поездка маршруткой или такси от бухты.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alushta/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Алушта — набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Алушта по трассе</h3>
              <p class="sight-card__text">Город «на середине» ЮБК: набережная, Профессорский уголок и выезды в сторону Большого каньона — удобно сочетать с отдыхом в бухте.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Морское побережье Южного берега" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Форос и мыс</h3>
              <p class="sight-card__text">Соседнее направление по ЮБК: виды с мыса, церковь на скале и контраст с бухтенной застройкой Гурзуфа.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/livadiyskiy-dvorets/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Ливадийский дворец среди парка" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ливадийский дворец</h3>
              <p class="sight-card__text">Белоснежный дворец и парк у моря — удобная цель при выезде из бухты в ялтинскую сторону на полдня.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и аллеи у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Пляжи и тихие уголки</h3>
              <p class="sight-card__text">Галечные и бетонированные участки у бухты; в стороне от променада можно найти тень платанов и спокойнее воду в межсезонье.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Парк и дворец в Алупке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Алупка и Воронцовский дворец</h3>
              <p class="sight-card__text">Парк и дворец у подножия Ай-Петри — следующий крупный маршрут западнее Ялты, если остаётесь на ЮБК на несколько дней.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у побережья" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Артек и соседний берег</h3>
              <p class="sight-card__text">Лагерь и парк по соседству с бухтой: узнаваемый силуэт на горизонте при прогулке вдоль моря в сторону Партенита.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Панорама побережья и гор" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Коктебель и Кара-Даг</h3>
              <p class="sight-card__text">Восточнее по побережью: вулканический массив, винодельни и знаменитая «Коктебельская» панорама — на машине или экскурсией на день.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Бухта и скалы у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Новый Свет</h3>
              <p class="sight-card__text">Уютная бухта, тропа Голицына и винные погреба — популярный выезд из ЮБК на полдня или на целый день с морем и прогулкой.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Города и достопримечательности Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог мест по Крыму</h3>
              <p class="sight-card__text">Дворцы, крепости и природные точки с фильтрами по городам — удобно добрать маршруты после прогулок по бухте.</p>
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
              <p class="sight-card__text">Крымскотатарская история и каскады дворца — контраст с морским отдыхом; обычно отдельный день с дорогой в горы.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Город и зелень у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Севастополь</h3>
              <p class="sight-card__text">Большой город с бухтами и музеями — длиннее по дороге, чем Ялта, но логичен как разнообразие после тихой бухты.</p>
            </div>
          </a>

        </div>

        <nav class="city-sights__pagination" id="citySightsPagination" aria-label="Страницы списка достопримечательностей" hidden></nav>
      </div>
    </section>

    <!-- 5. ROUTES -->
    <section class="city-routes" aria-labelledby="gurzuf-routes-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Идеи для поездки</span>
            <h2 id="gurzuf-routes-heading">Маршруты на день</h2>
          </div>
        </div>
        <div class="city-routes__grid">

          <article class="route-card fade-up" data-delay="1">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
              <span class="route-card__duration">~4–5 часов</span>
            </div>
            <h3 class="route-card__title">Бухта и набережная</h3>
            <p class="route-card__desc">Полдня в Гурзуфе: прогулка вдоль воды, виды на Адалары и кофе в тени платанов — без выезда в соседние города.</p>
            <ol class="route-card__stops">
              <li>Набережная и причалы</li>
              <li>Пляж и купание — по сезону</li>
              <li>Обед в посёлке</li>
              <li>Закат с видом на скалы</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Променад</span>
              <span class="route-card__tag">Бухта</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Гурзуф и Ялта</h3>
            <p class="route-card__desc">Утро в бухте, день в Ялте — набережная, музеи или Ливадия; вечером можно вернуться к тихой бухте.</p>
            <ol class="route-card__stops">
              <li>Утро у моря в Гурзуфе</li>
              <li>Маршрутка или такси в Ялту</li>
              <li>Прогулка по набережной и обед</li>
              <li>Возвращение в посёлок вечером</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">ЮБК</span>
              <span class="route-card__tag">Выезд</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Аю-Даг и Ласточкино гнездо</h3>
            <p class="route-card__desc">Классическая связка по южному берегу: замок на скале и тропы у «Медведь-горы» — с дорогой от «базы» в Гурзуфе.</p>
            <ol class="route-card__stops">
              <li>Выезд в сторону Ялты и Гаспры</li>
              <li>Ласточкино гнездо и смотровые</li>
              <li>Прогулки у подножия Аю-Дага — по силам</li>
              <li>Возвращение в Гурзуф вечером</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Экскурсия</span>
              <span class="route-card__tag">Горы</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="gurzuf-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="gurzuf-gallery-heading">Гурзуф в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: бухта и Адалары">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_gurzuf_hero_bg ); ?>" alt="Бухта Гурзуфа и скалы Адалары" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: скалы и море">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у побережья ЮБК" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: набережная Ялты">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная и море — соседнее направление" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: зелень у моря">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и аллеи у моря" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: панорама побережья">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Панорама южнобережного побережья" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: курортный пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Город и море на ЮБК" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'gurzuf',
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
              Дорога, сезон и жильё — коротко, чтобы спланировать поездку: что учесть до выезда и в первый день в бухте.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь и Ялту: до бухты добираются по общей южнобережной трассе, последний отрезок — от Ялты маршруткой или такси.</p>
              <ul class="city-practical__list">
                <li><strong>Из Ялты</strong> — маршрутки и такси вдоль побережья; в высокий сезон заложите время на пробки у въездов в курорты.</li>
                <li><strong>Из Симферополя</strong> — автобус или маршрутка до Ялты с пересадкой или прямым рейсом по расписанию; такси и трансфер удобнее с багажом.</li>
                <li><strong>Свой автомобиль</strong> — та же трасса; в июле и августе парковки у набережной и в центре посёлка заполняются быстро — уточняйте стоянку у жилья заранее.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Для выездов в Ялту, Ливадию и к Аю-Дагу удобнее положиться на маршрутки, чем искать место для машины у популярных точек в часы пик.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Пляжный сезон и максимум солнца — с июня по сентябрь; май и «бархатный» октябрь часто дают тёплое море без июльской толпы у причалов.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — купание, оживлённая набережная и больше людей в бухте; цены выше, жильё лучше бронировать заранее.</li>
                <li><strong>Весна и ранняя осень</strong> — комфортно для прогулок и поездок по ЮБК; море ещё можно, но вода прохладнее.</li>
                <li><strong>Зима</strong> — тише; больше про виды, кафе и короткие прогулки, чем про пляж.</li>
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
              <p class="city-practical__lead">От выбора района зависят шум, виды на бухту и удобство выездов в Ялту: у воды оживлённее, выше по склону — тише.</p>
              <p class="city-practical__chips-label">Популярные варианты</p>
              <div class="city-practical__chips" aria-label="Районы для проживания">
                <span class="city-practical__chip">Набережная и первая линия</span>
                <span class="city-practical__chip">Центр посёлка</span>
                <span class="city-practical__chip">Выше по склону</span>
                <span class="city-practical__chip">Гостевые дома</span>
                <span class="city-practical__chip">Вторая линия от моря</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — комнаты и квартиры чуть дальше от променада; до пляжа часто 10–15 минут пешком.</li>
                <li><strong>Средний сегмент</strong> — мелкие отели и апартаменты с видом на бухту; уточняйте парковку, если едете на машине.</li>
                <li><strong>Комфорт</strong> — жильё с террасой к воде или в тихом квартале; в июле и августе бронируйте заранее.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете часто ездить в Ялту и по дворцам ЮБК, сравните расстояние до остановок маршруток — иногда удобнее селиться ближе к трассе, чем у самой набережной.</p>
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
          От античной гавани до курортной бухты с литературными ассоциациями — несколько вех, которые связывают Гурзуф с Южным берегом Крыма.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">Античность</span>
            <div class="city-history__body">
              <p>На месте бухты — древние греческие и римские связи побережья; гавань у скал входит в историю торговых морских путей.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">Средневековье</span>
            <div class="city-history__body">
              <p>Городище в сфере <strong>Византии</strong> и <strong>Генуи</strong>, затем <strong>османский</strong> период — укрепления и торговля у входа в бухту.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1783</span>
            <div class="city-history__body">
              <p><strong>Присоединение Крыма</strong> к Российской империи; начало нового этапа освоения южнобережья.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">XIX век</span>
            <div class="city-history__body">
              <p>Развитие <strong>курорта и дач</strong>; Гурзуф входит в орбиту ялтинского побережья как тихая бухта.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1899</span>
            <div class="city-history__body">
              <p>Публикация рассказа <strong>А. П. Чехова «Дама с собачкой»</strong>, действие которого связано с Гурзуфом — прочная литературная ассоциация посёлка.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">XX век</span>
            <div class="city-history__body">
              <p>Соседство с <strong>Артеком</strong> и развитие <strong>курортной инфраструктуры</strong>; Гурзуф остаётся узнаваемой бухтой на трассе ЮБК.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 10. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Гурзуфе">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о побережье</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Маленькая бухта держит в кадре и море, и скалы:</span>
          <span class="city-quote__line">будто весь Южный берег уместился в одном излучине»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о бухтах Крыма</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Ялта — набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Ялта</h3>
              <p class="city-card__lead">Дворцы, длинная набережная и выезды к Ласточкиному гнезду и Ай-Петри.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alushta/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Алушта — набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Алушта</h3>
              <p class="city-card__lead">Компактная набережная, Профессорский уголок и удобные выезды по трассе.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Форос — морской пейзаж ЮБК" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Форос</h3>
              <p class="city-card__lead">Мыс, церковь на скале и виды на воду — соседнее направление вдоль побережья.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/alushta/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Алушта</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Форос</span>
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
