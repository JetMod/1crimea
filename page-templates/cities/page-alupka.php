<?php
/**
 * Template Name: Город — Алупка
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Алупка">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Алупка</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">ЮБК</span>
          <h1 class="city-hero__title">Алупка</h1>
          <p class="city-hero__tagline">
            Воронцовский дворец и парк у подножия Ай-Петри, набережная и пляжи между Ялтой и Форосом.
            Удобная точка на Южном берегу: дворцовый комплекс, тень платанов и выезды по трассе к соседним курортам и смотровым.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Дворец</span>
            <span class="city-hero__tag">Парк</span>
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
          <span class="eyebrow">О городе</span>
          <h2 id="city-intro-heading" class="city-intro__heading">Алупка — дворец и парк у подножия Ай-Петри</h2>
          <p>
            Алупка известна прежде всего Воронцовским дворцом и прилегающим парком — один из главных архитектурных ансамблей Южного берега у моря.
            Город тянется вдоль бухты: ниже — набережная и пляжная полоса, выше — улочки с перепадами высот и зеленью, откуда открываются виды на Ай-Петри.
          </p>
          <p>
            Здесь удобно совмещать прогулки по дворцу и аллеям с купанием и кафе у воды; в ясную погоду силуэт горного массива держится в кадре почти отовсюду.
            До Ялты — короткая поездка по трассе, в сторону запада — Форос с мысом и церковью на скале.
          </p>
          <p>
            Культурный слой — дворцовая архитектура, парковые скульптуры и спокойный ритм по сравнению с крупной ялтинской набережной: многие приезжают ради дворца и тени старых деревьев.
            Рядом — Ливадия и другие ялтинские точки; дальше по ЮБК — Гурзуф и бухты восточнее.
          </p>
          <p>
            В июле и августе у дворца и у парковых входов бывают очереди; весна и ранняя осень дают мягкий свет для прогулок и меньше людей у аллей и смотровых.
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
              <dd class="city-facts__dd">Короткая поездка маршруткой или такси вдоль побережья — обычно до получаса в пути в зависимости от трафика</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">От Симферополя</dt>
              <dd class="city-facts__dd">Через Ялту по автодороге; в пути часто от полутора до двух с половиной часов на общественном транспорте или авто</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Дворец</span>
            <span class="city-facts__tag">Парк</span>
            <span class="city-facts__tag">Ай-Петри</span>
            <span class="city-facts__tag">Выезды по ЮБК</span>
          </div>
        </aside>
      </div>
    </section>

    <section class="city-stats-strip" aria-label="Ключевые цифры по Алупке">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~8 000</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~5 км²</span>
            <span class="city-stats-strip__label">площадь города</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~17 км</span>
            <span class="city-stats-strip__label">до Ялты</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~90 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1828</span>
            <span class="city-stats-strip__label">начало строительства дворца</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- 3. SIGHTS -->
    <section class="city-sights" aria-labelledby="city-sights-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Достопримечательности</span>
            <h2 id="city-sights-heading">Что посмотреть</h2>
          </div>
        </div>
        <div class="city-sights__grid" id="citySightsGrid" data-sights-per-page="9">

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Воронцовский дворец и парк в Алупке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Воронцовский дворец</h3>
              <p class="sight-card__text">Романтический ансамбль у моря — главная причина поездки в Алупку: экскурсии, интерьеры и вид на бухту с террас.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Парк и аллеи у моря в Алупке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Дворцовый парк</h3>
              <p class="sight-card__text">Платаны, скульптуры и тропы между дворцом и морем — удобно гулять отдельно от музейных залов или после экскурсии.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Набережная и море в Алупке" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Набережная и пляжи</h3>
              <p class="sight-card__text">Галечные и оборудованные участки у бухты — купание и променад в шагах от парка и центральной части города.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Горы и побережье — вид в сторону Ай-Петри" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Вид на Ай-Петри</h3>
              <p class="sight-card__text">Силуэт массива — фон для прогулок по городу; отдельная поездка на канатную дорогу часто планируется из Ялты или как выезд на день.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная Ялты" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ялта</h3>
              <p class="sight-card__text">Соседний крупный курорт: длинная набережная, музеи и маршрутки вдоль ЮБК — логичное продолжение после Алупки.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Форос — морской пейзаж ЮБК" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Форос</h3>
              <p class="sight-card__text">Западнее по побережью: мыс, церковь на скале и панорамы — контраст с дворцовой Алупкой.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Бухта Гурзуфа" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Гурзуф</h3>
              <p class="sight-card__text">Бухта с Адаларами и набережная — восточнее Ялты; удобно как день из ялтинско-алупкинской базы по трассе.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/livadiyskiy-dvorets/' ) ); ?>" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Ливадийский дворец и парк у моря" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ливадийский дворец</h3>
              <p class="sight-card__text">Белоснежный дворец и парк в соседней Ливадии — часто совмещают с ялтинским днём при поездке из Алупки.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/lastochkino-gnezdo/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у мыса Аю-Даг" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ласточкино гнездо и Аю-Даг</h3>
              <p class="sight-card__text">Замок на скале и мыс — популярный маршрут из ялтинской стороны; удобно сочетать с днём в Ялте после дворца в Алупке.</p>
            </div>
          </a>

        </div>

        <nav class="city-sights__pagination" id="citySightsPagination" aria-label="Страницы списка достопримечательностей" hidden></nav>
      </div>
    </section>


<?php
get_template_part(
    'template-parts/gallery-card',
    null,
    array(
        'crimea_assets' => $crimea_assets,
        'crimea_gallery_current_slug' => 'alupka',
    )
);
?>


    <!-- 5. PRACTICAL -->
    <section class="city-practical" aria-labelledby="city-practical-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Советы</span>
            <h2 id="city-practical-heading">Практически</h2>
            <p class="city-practical__intro">
              Дорога через Ялту, сезон и жильё — коротко, чтобы спланировать поездку: очереди у дворца в пик сезона и выбор между первой линией и тише на склоне.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь и Ялту: до Алупки добираются по общей симферопольско-ялтинской трассе, дальше — маршрутки и такси вдоль побережья.</p>
              <ul class="city-practical__list">
                <li><strong>Из Ялты</strong> — маршрутки и такси; в высокий сезон заложите время на пробки у въездов в курорты и у остановок у дворца.</li>
                <li><strong>Из Симферополя</strong> — автобус или маршрутка до Ялты с пересадкой или прямым рейсом по расписанию; такси и трансфер удобнее с багажом.</li>
                <li><strong>Свой автомобиль</strong> — та же трасса; парковки у дворцового комплекса и у набережной в июле и августе заполняются быстро — приезжайте раньше или уточняйте стоянку у жилья.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если цель — дворец в первую очередь, сравните время входа и онлайн-билеты; для выездов в Ялту и к Ливадии удобнее ориентироваться на остановки маршруток у трассы.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Пляжный сезон и максимум солнца — с июня по сентябрь; май и «бархатный» октябрь часто дают тёплое море без пиковой толпы у касс дворца.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — купание, оживлённая набережная и очереди у Воронцовского дворца; цены выше, жильё лучше бронировать заранее.</li>
                <li><strong>Весна и ранняя осень</strong> — комфортно для парка и прогулок; море ещё можно, но вода прохладнее.</li>
                <li><strong>Зима</strong> — тише; больше про дворец, виды и короткие прогулки, чем про пляж.</li>
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
              <p class="city-practical__lead">От выбора района зависят шум набережной, близость к дворцу и удобство выездов в Ялту: у воды оживлённее, выше по склону — тише.</p>
              <p class="city-practical__chips-label">Популярные варианты</p>
              <div class="city-practical__chips" aria-label="Районы для проживания">
                <span class="city-practical__chip">Набережная и первая линия</span>
                <span class="city-practical__chip">Центр у дворца</span>
                <span class="city-practical__chip">Выше по склону</span>
                <span class="city-practical__chip">Гостевые дома</span>
                <span class="city-practical__chip">Вторая линия от моря</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — комнаты и квартиры чуть дальше от набережной; до пляжа и парка часто 10–20 минут пешком.</li>
                <li><strong>Средний сегмент</strong> — мелкие отели и апартаменты с видом на море или парк; уточняйте парковку, если едете на машине.</li>
                <li><strong>Комфорт</strong> — жильё с террасой к бухте или в тихом квартале; в июле и августе бронируйте заранее.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если хотите тишины, сравните дома выше линии моря; если важны море и дворец в пешей доступности — ищите варианты ближе к парку и набережной.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата об Алупке">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о побережье</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Где дворец спускается к морю, а гора держит небо за спиной,</span>
          <span class="city-quote__line">Алупка кажется паузой между Ялтой и закатом на мысе»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Южном берегу</cite>
        </footer>
      </div>
    </section>

    <!-- 7. NEARBY -->
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

          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="city-card fade-up" data-delay="2">
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

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Гурзуф — бухта" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Гурзуф</h3>
              <p class="city-card__lead">Бухта с Адаларами, набережная и короткая дорога в сторону Ялты и Аю-Дага.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

        </div>
      </div>
    </section>

    <!-- 8. CITY NAV -->
    <nav class="city-nav" aria-label="Соседние города">
      <div class="container city-nav__inner">
        <div class="city-nav__side city-nav__side--prev">
          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Форос</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Ялта</span>
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
