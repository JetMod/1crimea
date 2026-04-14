<?php
/**
 * Template Name: Город — Судак
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_sudak_hero_bg = $crimea_assets . '/img/cities/5.jpg';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Судак">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_sudak_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Судак</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Восточный</span>
          <h1 class="city-hero__title">Судак</h1>
          <p class="city-hero__tagline">
            Генуэзская крепость на скале над морем, бухты и виноградники восточного побережья.
            Здесь удобно совмещать прогулки по стенам крепости с пляжным отдыхом и выездами к Новому Свету, Коктебелю и Феодосии вдоль берега.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Крепость</span>
            <span class="city-hero__tag">Бухты</span>
            <span class="city-hero__tag">Вино</span>
            <span class="city-hero__tag">Пляж</span>
            <span class="city-hero__tag">История</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Судак — генуэзская крепость, бухты и вино на восточном берегу</h2>
          <p>
            Судак известен прежде всего генуэзской крепостью Сюгде — средневековым укреплением на высоком мысе с видами на море и город.
            Внизу раскинулись бухты и пляжи; чуть в стороне — знаменитый Новый Свет с тропами и винными традициями: его логично планировать отдельным выездом или соседним днём.
          </p>
          <p>
            Склоны вокруг города заняты виноградниками: местные вина и дегустации часто входят в маршрут вместе с крепостью и прогулками по берегу.
            По восточному побережью Судак связан с Феодосией и Коктебелем общей трассой — удобно строить кольцевые поездки с учётом расписания и загрузки дорог в сезон.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про море, крепость, тропы и вино — с поправкой на жару в разгар лета и скопление гостей у популярных пляжей и у подножия крепости.
            Жильё выбирают ближе к историческому центру и крепости или у моря — в зависимости от того, важнее ли пешая доступность к стенам и панорамам или к пляжу без лишних подъёмов.
          </p>
          <p>
            Добираться через Симферополь удобно автобусом или на автомобиле; восточное направление от столицы республики хорошо связано с соседними городами побережья — планируйте переезды с учётом времени суток и сезона.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Восточное побережье; в каталоге городов — восточная часть полуострова</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Лето — пляж и длинный день у крепости; весна и осень — спокойнее для прогулок по стенам без пиковой жары</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Побережье смягчено морем; на верхних ярусах крепости ветер и солнце ощутимее — берите воду и головной убор</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь с городами</dt>
              <dd class="city-facts__dd">До Симферополя — ориентир по карте и расписанию; до Феодосии и Коктебеля — по восточному побережью; Новый Свет — в соседней бухте</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Крепость</span>
            <span class="city-facts__tag">Бухты</span>
            <span class="city-facts__tag">Вино</span>
            <span class="city-facts__tag">Пляж</span>
            <span class="city-facts__tag">История</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Судаку">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">16 800</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">15 км²</span>
            <span class="city-stats-strip__label">площадь города</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~115 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~25 км</span>
            <span class="city-stats-strip__label">до Коктебеля</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1979</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость Сюгде" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Генуэзская крепость Сюгде</h3>
              <p class="sight-card__text">Главный символ города: стены и башни на скале с панорамами бухты — закладывайте время на подъёмы и тени у стен в полдень.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Новый Свет — бухта и тропа Голицына" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Новый Свет</h3>
              <p class="sight-card__text">Соседняя бухта, тропа Голицына и винные погреба — отдельная страница маршрута рядом с Судаком, на день или на полдня.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — бухты и пляжи" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бухты и пляжи</h3>
              <p class="sight-card__text">Городская линия берега и уютные заливы — выбирайте участок по рельефу и инфраструктуре; в высокий сезон народу больше у центральных зон.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Виноградники восточного Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Винные маршруты</h3>
              <p class="sight-card__text">Склоны вокруг Судака — про вино и дегустации; сочетайте с прогулкой по крепости или отдельным днём в сторону Нового Света.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — залив и гора Карадаг" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Коктебель и Карадаг</h3>
              <p class="sight-card__text">Западнее по побережью: залив, тропы вокруг вулкана и фестивальная атмосфера — удобная связка с маршрутом по восточному берегу.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Феодосия</h3>
              <p class="sight-card__text">Порт, набережная и галерея Айвазовского — соседний крупный город по той же трассе, на день или на пересадку дальше.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Пейзаж восточного Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — доберите музеи и природные объекты после знакомства с крепостью и бухтами.</p>
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
              <p class="sight-card__text">Главный узел прибытия и пересадок на автобусы на восточное побережье — удобно спланировать связку с морем и обратным рейсом.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — пролив и история" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Керчь: дальше на восток</h3>
              <p class="sight-card__text">Пролив и древняя история — для тех, кто продолжает путь вдоль восточного края полуострова после Судака.</p>
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
            <h3 class="route-card__title">День у крепости</h3>
            <p class="route-card__desc">Генуэзские стены на мысе, башни и панорамы бухты — с запасом воды и тени в полдень.</p>
            <ol class="route-card__stops">
              <li>Подъём к крепости Сюгде и обход стен</li>
              <li>Смотровые на бухту и город внизу</li>
              <li>Спуск в исторический центр, кофе или обед</li>
              <li>Вечерняя прогулка вдоль берега</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">История</span>
              <span class="route-card__tag">Панорамы</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Бухты, пляж и вино</h3>
            <p class="route-card__desc">Море утром, склоны с виноградниками днём и закат у воды — без дальних переездов.</p>
            <ol class="route-card__stops">
              <li>Пляж и купание в удобной бухте</li>
              <li>Прогулка по набережной и выбор участка на вечер</li>
              <li>Дегустация или винный двор на склонах</li>
              <li>Закат и лёгкий ужин с видом на море</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Пляж</span>
              <span class="route-card__tag">Вино</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Новый Свет и соседи</h3>
            <p class="route-card__desc">Соседняя бухта с тропой Голицына и винными погребами — или связка с Феодосией по трассе.</p>
            <ol class="route-card__stops">
              <li>Выезд в Новый Свет: бухта и тропа</li>
              <li>Винные традиции и прогулка вдоль скал</li>
              <li>По желанию — короткая остановка в Феодосии по дороге</li>
              <li>Возвращение в Судак вечером</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Природа</span>
              <span class="route-card__tag">Экскурсия</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="sudak-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="sudak-gallery-heading">Судак в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: генуэзская крепость и бухта">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Генуэзская крепость Сюгде над бухтой" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: бухта Нового Света">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Бухта и скалы Нового Света" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: виноградники восточного побережья">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Виноградники на склонах" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: море и скалы">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Скалы и море у восточного берега" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: приморский пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Приморский пейзаж" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: город и побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Город у моря" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'sudak',
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
              Как добраться через Симферополь, восточное побережье, сезон и пляжи, жильё у крепости или у моря — коротко для планирования.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь (ж/д, автобус) и далее рейсами на восточное побережье; до Судака — по расписанию междугородних маршрутов вдоль берега.</p>
              <ul class="city-practical__list">
                <li><strong>Симферополь</strong> — главный узел прибытия и пересадок на автобусы к Феодосии, Коктебелю и дальше к Судаку.</li>
                <li><strong>Соседние точки</strong> — Новый Свет рядом по бухте; Феодосия и Коктебель по той же трассе; Керчь — дальше на восток.</li>
                <li><strong>Авто</strong> — удобно для выездов к крепости, пляжам и винным маршрутам; летом на подъездах к городу и парковкам у крепости возможны очереди — закладывайте запас времени.</li>
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
              <p class="city-practical__lead">Лето — пляжный сезон и больше гостей у моря и у подножия крепости; весна и осень удобнее для спокойных прогулок по стенам без пиковой жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — май–сентябрь: пик спроса на побережье; к пляжам и к крепости выезжайте раньше или в будни.</li>
                <li><strong>Межсезонье</strong> — тише на набережной; купание зависит от погоды, зато проще смотреть крепость без давки.</li>
                <li><strong>Зима</strong> — ветренее на верхних ярусах крепости; одевайтесь теплее для прогулок по стенам.</li>
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
              <p class="city-practical__lead">Ориентируйтесь на близость к крепости и историческому центру или к пляжу и бухтам — в зависимости от того, важнее ли пешая доступность к стенам и панорамам или к морю без лишних подъёмов.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">У крепости</span>
                <span class="city-practical__chip">Ближе к пляжу</span>
                <span class="city-practical__chip">Исторический центр</span>
                <span class="city-practical__chip">Тихо от променада</span>
                <span class="city-practical__chip">Выезд к Новому Свету</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте расстояние до подъёма в крепость и до пляжа.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты вдоль берега и на склонах у виноградников.</li>
                <li><strong>Комфорт</strong> — жильё с видом на бухту или на крепость; в высокий сезон бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете и крепость, и пляж, сравните перепады высот и тропы между ними — в жару короткие переходы с тенью ощутимее.</p>
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
          От античной Сугдеи до генуэзской крепости и современного курорта — несколько вех, которые помогают понять Судак на фоне восточного побережья.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">III в. до н. э.</span>
            <div class="city-history__body">
              <p>Основание античной колонии <strong>Сугдея</strong> — греческий полис на побережье, торговый узел эллинского мира.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">XIV–XV вв.</span>
            <div class="city-history__body">
              <p><strong>Генуэзский период</strong>: строительство и укрепление крепости на мысе, контроль над торговой дорогой вдоль берега.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1475</span>
            <div class="city-history__body">
              <p>Захват Крыма <strong>османами</strong>; Судак сохраняет значение как крепость и укреплённый пункт на побережье.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1783</span>
            <div class="city-history__body">
              <p>Вхождение Крыма в состав <strong>Российской империи</strong> — развитие города, виноделия и курортного освоения.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1979</span>
            <div class="city-history__body">
              <p>Присвоение <strong>статуса города</strong> в составе Крымской области УССР — закрепление административного центра восточного побережья.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 9. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Судаке">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_sudak_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Камень держит небо над бухтой,</span>
          <span class="city-quote__line">а море подбирает отблеск у стен»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Судаке: крепость и берег</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — залив и гора Карадаг" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Коктебель</h3>
              <p class="city-card__lead">Западнее по побережью: залив, Карадаг и творческая атмосфера — логичная остановка на трассе к Судаку или обратно.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Феодосия</h3>
              <p class="city-card__lead">Порт, набережная и галерея Айвазовского — крупный соседний город по восточному берегу для связки с Судаком.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Новый Свет — бухта и скалы" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Новый Свет</h3>
              <p class="city-card__lead">Соседняя бухта, тропа Голицына и винные погреба — естественное продолжение маршрута рядом с Судаком.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Коктебель</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Новый Свет</span>
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
