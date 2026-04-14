<?php
/**
 * Template Name: Город — Керчь
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_kerch_hero_bg = $crimea_assets . '/img/cities/10.jfif';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Керчь">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_kerch_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Керчь</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Восточный</span>
          <h1 class="city-hero__title">Керчь</h1>
          <p class="city-hero__tagline">
            Пролив, античные корни и музейная сеть на восточном краю полуострова: набережные, археология и узел дорог в сторону Азовского побережья.
            Удобно сочетать прогулки у воды с выездами к соседним городам вдоль восточной трассы и планировать пересадки через Симферополь.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Пролив</span>
            <span class="city-hero__tag">Античность</span>
            <span class="city-hero__tag">Музеи</span>
            <span class="city-hero__tag">Набережная</span>
            <span class="city-hero__tag">Транспорт</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Керчь — пролив, Пантикапей и восточные ворота Крыма</h2>
          <p>
            Керчь стоит на восточном краю Крыма: здесь пересекаются морские просторы и сухопутные маршруты, а городская застройка соседствует с местами, где хорошо читается античное прошлое и археологический слой.
            По восточному направлению Керчь логично связывают с Феодосией и Судаком общей трассой — путь длиннее, чем до ближайших крупных точек центрального побережья, поэтому переезды удобно планировать с запасом по времени и расписанию.
          </p>
          <p>
            Симферополь остаётся главным узлом прибытия и пересадок: оттуда рейсами и на автомобиле добираются к восточному берегу и дальше к проливу и набережным Керчи.
            У побережья у Азовского моря пляжи часто широкие и открытые; волна и ветер зависят от погоды — без обещаний «идеального штиля»: смотрите прогноз и выбирайте день под прогулку или купание.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про историю у воды, музеи, виды с возвышенностей и спокойные прогулки вдоль набережных — с поправкой на ветреную погоду у пролива и на сезонный поток гостей.
            Жильё выбирают ближе к центру и к основным маршрутам или у моря — в зависимости от того, важнее ли пешая доступность к музеям и променаду или короткий выход к берегу.
          </p>
          <p>
            Добираться через Симферополь удобно автобусом или на машине; восточное направление от столицы республики требует больше времени, чем поездка к Феодосии, — закладывайте это в маршрут и в обратные рейсы.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Восточный край полуострова; в каталоге городов — восточная часть с выходом к проливу и связью с азовским побережьем</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Лето — длинный день у воды и музеи в комфортном режиме; весна и осень — спокойнее для прогулок без пиковой жары</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">У пролива и на открытых набережных ветер ощутимее; на возвышенностях солнце и обзор сильнее — вода и головной убор по ситуации</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь с городами</dt>
              <dd class="city-facts__dd">До Симферополя — узел пересадок; до Феодосии и Судака — по восточной трассе; Щёлкино и азовская полоса — восточнее по побережью</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Пролив</span>
            <span class="city-facts__tag">Античность</span>
            <span class="city-facts__tag">Музеи</span>
            <span class="city-facts__tag">Набережная</span>
            <span class="city-facts__tag">Транспорт</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Керчи">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">152 000</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">107 км²</span>
            <span class="city-stats-strip__label">площадь города</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~200 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~20 м</span>
            <span class="city-stats-strip__label">высота центра над уровнем моря</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">VI в. до н. э.</span>
            <span class="city-stats-strip__label">Пантикапей</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — античное наследие и Пантикапей" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Античное наследие и Пантикапей</h3>
              <p class="sight-card__text">Древний слой города и раскопки: закладывайте время на музейные экспозиции и спокойный темп — камень и история лучше читаются без спешки.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — гора Митридат и обзор" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Гора Митридат</h3>
              <p class="sight-card__text">Возвышение с панорамами на город и воду — удобная смотровая для ориентации; в ясную погоду обзор шире, в ветер одевайтесь теплее.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — пролив и набережные" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Пролив и набережные</h3>
              <p class="sight-card__text">Променады вдоль воды и виды на переправы — хороший фон для вечерней прогулки; шторм и волна зависят от погоды, не от календаря.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Керчь — музеи и экспозиции" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Музейная тематика</h3>
              <p class="sight-card__text">Город держит несколько направлений экспозиций — от археологии до локальной истории; сверяйте часы работы и очереди в высокий сезон.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Феодосия</h3>
              <p class="sight-card__text">Западнее по восточной трассе: порт, набережная и галерея Айвазовского — удобная остановка в маршруте к Керчи или обратно.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — генуэзская крепость" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Судак</h3>
              <p class="sight-card__text">Крепость на скале и бухты восточного побережья — логичная точка на той же оси, если движетесь вдоль берега с пересадками.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — залив и гора Карадаг" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Коктебель</h3>
              <p class="sight-card__text">Залив и Карадаг на пути вдоль восточного берега — хорошая связка для кольцевых поездок с учётом времени на дорогу.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Каталог достопримечательностей Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — дополните маршрут музеями и природными объектами после знакомства с Керчью.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Симферополь — городская панорама" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Симферополь: транзит</h3>
              <p class="sight-card__text">Главный узел прибытия; на восток дорога длиннее, чем до Феодосии — планируйте пересадки и обратные рейсы заранее.</p>
            </div>
          </a>

        </div>

        <nav class="city-sights__pagination" id="citySightsPagination" aria-label="Страницы списка достопримечательностей" hidden></nav>
      </div>
    </section>

    <!-- 5. ROUTES -->
    <section class="city-routes" aria-labelledby="kerch-routes-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Идеи для поездки</span>
            <h2 id="kerch-routes-heading">Маршруты на день</h2>
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
            <h3 class="route-card__title">Митридат и музеи</h3>
            <p class="route-card__desc">Культурный день в Керчи: подъём или дорога к смотровым, археологические музеи и прогулка у пролива без дальних переездов.</p>
            <ol class="route-card__stops">
              <li>Гора Митридат и панорамы</li>
              <li>Музей «Пантикапей» или другие экспозиции — по интересам</li>
              <li>Обед в центре</li>
              <li>Набережная и вечер у Керченского пролива</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">История</span>
              <span class="route-card__tag">Город</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Античность и набережная</h3>
            <p class="route-card__desc">Спокойный размер города позволяет совместить археологические точки, променад и отдых у Азовского моря — в темпе без спешки «за один час».</p>
            <ol class="route-card__stops">
              <li>Утро у раскопок или в музее</li>
              <li>Переход к набережной и проливу</li>
              <li>Обед и отдых в тени</li>
              <li>Пляж у Азова или прогулка по вечерней набережной</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Музеи</span>
              <span class="route-card__tag">Море</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <span class="route-card__duration">~8–9 часов</span>
            </div>
            <h3 class="route-card__title">Керчь и Феодосия</h3>
            <p class="route-card__desc">Длинная связка по восточной трассе: один день с ранним выездом — галерея Айвазовского и набережная Феодосии и возвращение в Керчь вечером или ночёвка на побережье.</p>
            <ol class="route-card__stops">
              <li>Выезд на запад по трассе</li>
              <li>Феодосия: центр, порт или музеи</li>
              <li>Обед и прогулка</li>
              <li>Обратный путь в Керчь</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Выезд</span>
              <span class="route-card__tag">Два города</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="kerch-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="kerch-gallery-heading">Керчь в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: Керчь и пролив">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_kerch_hero_bg ); ?>" alt="Керчь — пролив и городской пейзаж" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: восточное побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Побережье и горы восточного Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: Феодосия">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — соседнее направление по трассе" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: открытый горизонт">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Море и горизонт у восточного берега" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: Судак">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Восточное побережье и скалы" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: степь и море">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Пейзажи восточного Крыма" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'kerch',
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
              Как добраться через Симферополь на восток, сколько занимает путь относительно Феодосии, сезон у пролива и жильё в центре или ближе к морю — коротко для планирования.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь (ж/д, автобус) и далее на восток по междугородним маршрутам; до Керчи времени в пути больше, чем до Феодосии на той же оси — ориентируйтесь по карте и актуальному расписанию.</p>
              <ul class="city-practical__list">
                <li><strong>Симферополь</strong> — главный узел пересадок на автобусы к восточному побережью и дальше к проливу.</li>
                <li><strong>Соседние точки</strong> — Феодосия, Судак и Коктебель по восточной трассе; Щёлкино и азовская полоса — восточнее, если продолжаете путь.</li>
                <li><strong>Авто</strong> — удобно для музеев, набережных и выездов к смотровым; летом на подъездах и парковках у популярных зон возможны задержки — закладывайте запас.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Сверяйте время последних рейсов при возврате в Симферополь; в пик сезона места на дальние восточные направления лучше уточнять заранее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Лето — больше гостей у набережных и в музеях; весна и осень удобнее для спокойных прогулок и археологических маршрутов без пиковой жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — май–сентябрь: пик спроса на побережье; к проливу и к пляжам у Азова выезжайте с поправкой на ветер и прогноз.</li>
                <li><strong>Межсезонье</strong> — тише в городе; купание на открытых пляжах зависит от погоды, зато проще смотреть экспозиции без очередей.</li>
                <li><strong>Зима</strong> — ветренее у воды и на Митридате; для прогулок вдоль пролива одевайтесь теплее.</li>
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
              <p class="city-practical__lead">Ориентируйтесь на близость к центру, музеям и набережным или к берегу — в зависимости от того, важнее ли пешая доступность к проливу и променаду или короткий выход к морю.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">Центр и музеи</span>
                <span class="city-practical__chip">Ближе к набережной</span>
                <span class="city-practical__chip">У пролива</span>
                <span class="city-practical__chip">Тихо от променада</span>
                <span class="city-practical__chip">Выезд на восток</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте расстояние до набережной и до остановок на восток.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты вдоль берега и в спальных кварталах.</li>
                <li><strong>Комфорт</strong> — жильё с видом на воду или на город; в высокий сезон бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете и Митридат, и набережную, сравните перепады и ветер у пролива — в прохладную погоду запасной слой одежды уместен.</p>
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
          От античной столицы Боспорского царства до современного города у пролива — несколько вех, которые помогают понять слои истории на восточном краю Крыма.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">VI в. до н. э.</span>
            <div class="city-history__body">
              <p>Основание <strong>Пантикапея</strong> — крупного полиса и торгового центра на берегу Керченского пролива.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">V–III вв. до н. э.</span>
            <div class="city-history__body">
              <p>Расцвет <strong>Боспорского царства</strong>: монетное дело, ремёсла и связи с греческим миром.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">I тыс. н. э.</span>
            <div class="city-history__body">
              <p>Смена эпох: <strong>Рим</strong>, <strong>Византия</strong>, <strong>Хазарский каганат</strong> — город остаётся узлом у пролива.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">XV век</span>
            <div class="city-history__body">
              <p><strong>Генуэзская</strong> и <strong>османская</strong> власть; торговля и укрепления у входа в бухты.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1783</span>
            <div class="city-history__body">
              <p><strong>Присоединение Крыма</strong> к Российской империи; развитие порта и города на месте древних поселений.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">XX век</span>
            <div class="city-history__body">
              <p>Индустриальный рост, <strong>военные события</strong> и восстановление; Керчь остаётся крупным центром восточного Крыма.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 10. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Керчи">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_kerch_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Ветер с пролива не спрашивает расписания,</span>
          <span class="city-quote__line">а ступени вверх держат весь горизонт в одном взгляде»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Керчи: пролив и древний город</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Феодосия</h3>
              <p class="city-card__lead">Западнее по восточной трассе: порт, набережная и галерея — крупная остановка на пути к Керчи или обратно к центру полуострова.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — крепость и бухты" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Судак</h3>
              <p class="city-card__lead">Генуэзская крепость и бухты восточного побережья — логичная точка на той же оси перед или после Керчи.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Щёлкино — побережье на востоке" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Щёлкино</h3>
              <p class="city-card__lead">Восточнее по азовской полосе: широкие пляжи и простор — если продолжаете путь от Керчи к спокойному побережью.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Щёлкино</span>
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
