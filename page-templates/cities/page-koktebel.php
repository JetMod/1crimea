<?php
/**
 * Template Name: Город — Коктебель
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_koktebel_hero_bg = $crimea_assets . '/img/cities/5.jpg';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Коктебель">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_koktebel_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Коктебель</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Восточный</span>
          <h1 class="city-hero__title">Коктебель</h1>
          <p class="city-hero__tagline">
            Посёлок у подножия Кара-Дага: залив, набережная и тропы вокруг древнего вулкана.
            Здесь удобно совмещать пляжный отдых с прогулками по заповеднику и знакомством с фестивальной и творческой атмосферой — между Феодосией и Судаком по восточному берегу.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Природа</span>
            <span class="city-hero__tag">Пляж</span>
            <span class="city-hero__tag">Фестивали</span>
            <span class="city-hero__tag">Тропы</span>
            <span class="city-hero__tag">Кара-Даг</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Коктебель — залив у Кара-Дага, набережная и тропы заповедника</h2>
          <p>
            Коктебель лежит у подножия массива Кара-Даг — природного заповедника с характерными скалами и тропами вокруг древнего вулкана.
            Посёлок выходит к бухте: набережная и пляжная линия тянутся вдоль залива, а в сторону гор поднимаются маршруты с перепадами и видами на море.
          </p>
          <p>
            По восточному побережью Коктебель связан с Феодосией и Судаком общей трассой — удобно строить переезды и кольцевые маршруты с учётом расписания и загрузки дорог в высокий сезон.
            К Новому Свету и бухтам у Судака логично закладывать отдельные выезды или соседние дни.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про море, прогулки по берегу и тропам, знакомство с литературным и фестивальным контекстом места — с поправкой на жару в разгар лета и скопление гостей у популярных пляжей и у подходов к заповеднику.
            Жильё чаще выбирают ближе к заливу и набережной или у подножия троп к Кара-Дагу — в зависимости от того, важнее ли шаговая доступность к морю или к пешим маршрутам.
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
              <dd class="city-facts__dd">Лето — пляж и длинный день у залива; весна и осень — спокойнее для троп и прогулок без пиковой жары</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Побережье смягчено морем; на открытых склонах Кара-Дага ветер и солнце ощутимее — берите воду и головной убор</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь с городами</dt>
              <dd class="city-facts__dd">До Симферополя — ориентир по карте и расписанию; до Феодосии и Судака — по восточному побережью; Новый Свет — в стороне Судака</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Природа</span>
            <span class="city-facts__tag">Пляж</span>
            <span class="city-facts__tag">Фестивали</span>
            <span class="city-facts__tag">Тропы</span>
            <span class="city-facts__tag">Кара-Даг</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Коктебелю">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">2 800</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~3,2 км²</span>
            <span class="city-stats-strip__label">площадь пгт</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~23 км</span>
            <span class="city-stats-strip__label">до Феодосии</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~116 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1968</span>
            <span class="city-stats-strip__label">статус пгт</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Кара-Даг — скалы и заповедник" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Кара-Даг и заповедник</h3>
              <p class="sight-card__text">Массив древнего вулкана с тропами и видами на море: планируйте маршрут с учётом перепадов, солнца и правил заповедной зоны.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Коктебель — набережная и залив" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Набережная и залив</h3>
              <p class="sight-card__text">Прогулки вдоль бухты и городской линии берега — естественная опора между пляжами и выходом к горам.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Пляжи Коктебеля" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Пляжи у залива</h3>
              <p class="sight-card__text">Участки вдоль бухты — выбирайте по рельефу и инфраструктуре; в высокий сезон у центральных зон народу больше.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Дом-музей М. А. Волошина" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Искусство">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Дом-музей Волошина</h3>
              <p class="sight-card__text">Литературный контекст посёлка: знакомство с жизнью и творчеством поэта удобно сочетать с прогулкой по набережной.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Коктебель — кинофестиваль и творческая атмосфера" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Искусство">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Фестивали и творческая среда</h3>
              <p class="sight-card__text">Кинофестивальная и культурная повестка — часть имиджа Коктебеля; даты и программы лучше сверять заранее.</p>
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
              <p class="sight-card__text">Порт, набережная и галерея Айвазовского — соседний крупный город западнее по трассе, на день или на пересадку.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Судак: крепость и бухты</h3>
              <p class="sight-card__text">Восточнее по побережью: генуэзская крепость и винные склоны — выезд на один или несколько дней.</p>
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
              <p class="sight-card__text">Соседняя бухта у Судака, тропа Голицына и винные погреба — логичное продолжение маршрута по восточной оси.</p>
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
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — доберите музеи и природные объекты после знакомства с заливом и Кара-Дагом.</p>
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
            <h3 class="route-card__title">Кара-Даг и заповедник</h3>
            <p class="route-card__desc">Пеший день вокруг вулканического массива: тропы, смотровые и правила охраняемой зоны — с водой и головным убором.</p>
            <ol class="route-card__stops">
              <li>Входная группа и маршрут по разрешённым тропам</li>
              <li>Смотровые на скалах и виды на море</li>
              <li>Короткий отдых в тени у подножия</li>
              <li>Спуск к заливу — купание или променад</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Природа</span>
              <span class="route-card__tag">Тропы</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Залив и Волошин</h3>
            <p class="route-card__desc">Море, набережная и литературный контекст посёлка — без лишних переездов, в ритме бухты.</p>
            <ol class="route-card__stops">
              <li>Пляж и прогулка вдоль берега</li>
              <li>Дом-музей М. А. Волошина</li>
              <li>Кофе или обед с видом на воду</li>
              <li>Вечерняя набережная и закат</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Пляж</span>
              <span class="route-card__tag">Культура</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Феодосия и возвращение в бухту</h3>
            <p class="route-card__desc">Соседний крупный город по трассе: порт, набережная и галерея — затем отдых у залива Коктебеля.</p>
            <ol class="route-card__stops">
              <li>Феодосия: порт и исторический центр</li>
              <li>Картинная галерея им. И. К. Айвазовского</li>
              <li>Обед в городе или по дороге назад</li>
              <li>Вечер у коктебельской набережной</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Экскурсия</span>
              <span class="route-card__tag">Связка</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="koktebel-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="koktebel-gallery-heading">Коктебель в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: бухта и Кара-Даг">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Бухта Коктебеля и склоны Кара-Дага" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: набережная и залив">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Набережная и залив" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: восточное побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Побережье восточного Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: скалы и море">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Скалы и море" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: приморский пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Приморский пейзаж" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: море и берег">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Море и берег" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'koktebel',
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
              Как добраться через Симферополь, восточное побережье, сезон и жара, жильё у залива или ближе к тропам — коротко для планирования.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь (ж/д, автобус) и далее рейсами на восточное побережье; до Коктебеля — по расписанию междугородних маршрутов вдоль берега от Феодосии или напрямую с учётом направления.</p>
              <ul class="city-practical__list">
                <li><strong>Симферополь</strong> — главный узел прибытия и пересадок на автобусы к Феодосии, Коктебелю и дальше к Судаку.</li>
                <li><strong>Соседние города</strong> — Феодосия западнее, Судак восточнее по той же трассе; Новый Свет — в стороне Судака.</li>
                <li><strong>Авто</strong> — гибкий график для связки пляжа, набережной и выездов к тропам Кара-Дага; летом на подъездах к курортной зоне возможны пробки — закладывайте запас времени.</li>
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
              <p class="city-practical__lead">Лето — пляжный сезон, длинный день у залива и больше гостей на набережной; весна и осень удобнее для спокойных прогулок по тропам без пиковой жары.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — май–сентябрь: пик курортного спроса на побережье; к пляжам и к подходам к Кара-Дагу выезжайте раньше или в будни.</li>
                <li><strong>Межсезонье</strong> — тише на набережной; купание зависит от погоды, зато проще гулять по склонам без давки.</li>
                <li><strong>Зима</strong> — ветренее на открытых участках у моря и у подножия массива; для прогулок одевайтесь теплее.</li>
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
              <p class="city-practical__lead">Ориентируйтесь на близость к заливу и набережной или к подножию троп к Кара-Дагу — в зависимости от того, важнее ли шаговая доступность к морю или к пешим маршрутам по склонам.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">У залива</span>
                <span class="city-practical__chip">Набережная</span>
                <span class="city-practical__chip">Ближе к тропам</span>
                <span class="city-practical__chip">Тихо от променада</span>
                <span class="city-practical__chip">Связка с Феодосией</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте расстояние до пляжа и до остановок.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты вдоль берега и на склонах у подножия Кара-Дага.</li>
                <li><strong>Комфорт</strong> — жильё с видом на бухту или на скалы; в высокий сезон и в дни фестивальных событий бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете и море, и тропы, сравните перепады и тень на маршруте — в жару короткие переходы с прохладой у воды ощутимее.</p>
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
          От дачной застройки у бухты до литературного Коктебеля Волошина и современного курорта у подножия Кара-Дага — несколько вех, которые помогают понять посёлок.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1830–1850-е</span>
            <div class="city-history__body">
              <p>Рост дачной и хуторской застройки у бухты в составе <strong>Феодосийского уезда</strong> Таврической губернии Российской империи.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1896</span>
            <div class="city-history__body">
              <p><strong>М. А. Волошин</strong> приобретает участок в Коктебеле; усадьба становится центром литературной и художественной жизни.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1944</span>
            <div class="city-history__body">
              <p>В советский период поселение получает название <strong>Планерское</strong>.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1979</span>
            <div class="city-history__body">
              <p>Организован <strong>государственный природный заповедник «Карадаг»</strong> на массиве Кара-Даг у посёлка.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1991</span>
            <div class="city-history__body">
              <p><strong>Восстановлено историческое название Коктебель</strong> вместо Планерского.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 9. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Коктебеле">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_koktebel_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Залив держит небо у подножия вулкана,</span>
          <span class="city-quote__line">а тропы ведут к скалам, где море видно сверху»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Коктебеле: бухта и Кара-Даг</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — порт и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Феодосия</h3>
              <p class="city-card__lead">Порт, набережная и галерея Айвазовского — западнее по восточному берегу, удобная связка с Коктебелем по трассе.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Судак</h3>
              <p class="city-card__lead">Крепость на скале и бухты — восточнее по побережью, на день или на соседние ночи от Коктебеля.</p>
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
              <p class="city-card__lead">Соседняя бухта у Судака, тропа Голицына и винные погреба — логичное продолжение маршрута по восточной оси.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Феодосия</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Судак</span>
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
