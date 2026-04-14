<?php
/**
 * Template Name: Город — Инкерман
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_inkerman_hero_bg = $crimea_assets . '/img/cities/2.jpg';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Инкерман">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_inkerman_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Инкерман</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Западный</span>
          <h1 class="city-hero__title">Инкерман</h1>
          <p class="city-hero__tagline">
            Посёлок у бухт Севастополя: каньон и склоны над водой, пещерный монастырь и винодельческая история.
            Маршруты здесь компактные, а связь с Севастополем делает удобными и морские прогулки, и выезды вглубь полуострова.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Пещерный монастырь</span>
            <span class="city-hero__tag">Бухты</span>
            <span class="city-hero__tag">История</span>
            <span class="city-hero__tag">Природа</span>
            <span class="city-hero__tag">Вино</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Инкерман — бухты, каньон и пещерный монастырь у Севастополя</h2>
          <p>
            Инкерман расположен у заливов западного побережья, в соседстве с Севастополем: отсюда открываются виды на бухты и склоны, а до центра крупного города обычно недолго на автобусе или маршрутке.
            Для гостей это сочетание природного рельефа — каньона и троп над водой — с культурным слоем: от пещерного монастыря до винодельческих традиций региона.
          </p>
          <p>
            Маршруты по месту относительно короткие: можно уложить прогулку у монастыря и по каньону в полдня и вечером оказаться на севастопольской набережной или в другом районе бухт.
            Инкерман известен и винными подвалами: дегустации и знакомство с местными винодельческими традициями удобно совмещать с прогулками по склонам — без спешки и с учётом расписания экскурсий.
            В сторону Симферополя и предгорья логично продолжать путь через столицу республики; ориентируйтесь на расписание и загрузку дорог в высокий сезон, особенно к популярным точкам у моря.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про прогулки, виды и спокойный ритм по сравнению с курортной суетой — с поправкой на жару в разгар лета и склоны, где удобнее устойчивая обувь.
            Жильё чаще выбирают в Инкермане или в Севастополе — в зависимости от того, важнее близость к тропам и каньону или к морю и инфраструктуре большого города.
          </p>
          <p>
            Добираться удобнее всего через Севастополь или Симферополь: междугородние автобусы, электричка до столицы и дальше трансфер, либо автомобиль по трассе с учётом очередей к набережным в пик сезона.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Западное побережье; в каталоге городов — западная часть полуострова</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Весна и ранняя осень для прогулок по склонам; лето — длинный день, но жарче на открытых участках у бухты</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Побережье: смягчённое морем; на склонах над каньоном — заметнее ветер и перепады в течение дня</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь с городами</dt>
              <dd class="city-facts__dd">До Севастополя — короткий пригородный переезд; до Симферополя — ориентир по карте и расписанию, обычно в пределах нескольких часов с пересадками</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">История</span>
            <span class="city-facts__tag">Природа</span>
            <span class="city-facts__tag">Монастырь</span>
            <span class="city-facts__tag">Бухты</span>
            <span class="city-facts__tag">Вино</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Инкерману">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">11 200</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">5,5 км²</span>
            <span class="city-stats-strip__label">площадь посёлка</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~10 км</span>
            <span class="city-stats-strip__label">до центра Севастополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~75 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1854</span>
            <span class="city-stats-strip__label">сражение у Инкермана</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Склоны и панорама у Инкермана" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Пещерный монастырь Св. Климента</h3>
              <p class="sight-card__text">Главная историческая точка района: скалы и пещерный комплекс над бухтой — планируйте время и обувь для наклонных участков.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Севастополь — бухты и набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Севастополь и бухты</h3>
              <p class="sight-card__text">Херсонес, набережные и морская история — естественное продолжение дня после Инкермана; Балаклава — в том же пригородном контексте.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Тропы и природа у каньона" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каньон и тропы</h3>
              <p class="sight-card__text">Виды со склонов и маршруты над водой — хороший фон к монастырю; смотрите прогноз и нагрузку на ноги.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Бахчисарай — Ханский дворец" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Бахчисарай и предгорье</h3>
              <p class="sight-card__text">Ханский дворец и Узень-Су — выезд из западного направления в сторону внутреннего Крыма после дней у бухты.</p>
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
              <p class="sight-card__text">Узел прибытия и пересадок — удобно спланировать связку с морем на западе или с другими городами после Инкермана.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Пейзаж Крыма" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — доберите музеи и маршруты после знакомства с бухтами.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Евпатория — набережная" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Евпатория: море</h3>
              <p class="sight-card__text">Западный курорт с пологим входом в воду — логичная связка, если после склонов тянет к пляжу и набережной.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Саки — озёра" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Саки и озёрная зона</h3>
              <p class="sight-card__text">Соседнее западное направление: спокойный курортный ритм в дополнение к дням у бухт и в Севастополе.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Винные подвалы и дегустации в западном Крыму" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Винные подвалы и местные вина</h3>
              <p class="sight-card__text">Инкерманские подвалы и дегустации — спокойный формат после троп: знакомство с винодельческой линией западного побережья, по желанию в связке с Севастополем.</p>
            </div>
          </a>

        </div>

        <nav class="city-sights__pagination" id="citySightsPagination" aria-label="Страницы списка достопримечательностей" hidden></nav>
      </div>
    </section>

    <!-- 5. ROUTES -->
    <section class="city-routes" aria-labelledby="inkerman-routes-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Идеи для поездки</span>
            <h2 id="inkerman-routes-heading">Маршруты на день</h2>
          </div>
        </div>
        <div class="city-routes__grid">

          <article class="route-card fade-up" data-delay="1">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
              <span class="route-card__duration">~4–5 часов</span>
            </div>
            <h3 class="route-card__title">Монастырь и каньон</h3>
            <p class="route-card__desc">Полдня у Инкермана: пещерный монастырь Святого Климента, тропы над Чёрной рекой и виды на бухты — без дальних переездов.</p>
            <ol class="route-card__stops">
              <li>Монастырь и прилегающие тропы</li>
              <li>Инкерманский каньон — по силам и обуви</li>
              <li>Перерыв в посёлке</li>
              <li>Короткая прогулка к смотровым у залива</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">История</span>
              <span class="route-card__tag">Природа</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Инкерман и Севастополь</h3>
            <p class="route-card__desc">Связка с соседним городом: утро на склонах и у монастыря, день — бухты, набережная и музеи Севастополя.</p>
            <ol class="route-card__stops">
              <li>Утро: монастырь и каньон</li>
              <li>Переезд в Севастополь</li>
              <li>Набережная, Графская пристань или музеи</li>
              <li>По желанию — Херсонес на другой день</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Два города</span>
              <span class="route-card__tag">Море</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Подвалы и дегустация</h3>
            <p class="route-card__desc">Знакомство с инкерманскими винными традициями: экскурсия по подвалам и спокойный вечер у бухты — по записи и расписанию.</p>
            <ol class="route-card__stops">
              <li>Экскурсия и дегустация в подвалах</li>
              <li>Прогулка по посёлку</li>
              <li>Обед или ужин</li>
              <li>Закат у залива или возвращение в Севастополь</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Вино</span>
              <span class="route-card__tag">Экскурсия</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="inkerman-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="inkerman-gallery-heading">Инкерман в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: бухты и Севастополь">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_inkerman_hero_bg ); ?>" alt="Бухты и побережье у Севастополя и Инкермана" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: склоны и панорама">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Склоны и панорама у Инкермана" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: зелень у моря">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Зелень и вид на залив" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: предгорье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Предгорный пейзаж западного Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Панорама западного побережья" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: дорога и горизонт">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Открытый горизонт у моря" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'inkerman',
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
              Как добраться через Севастополь и Симферополь, сезон и загрузка дорог к бухтам, жильё ближе к трассе или к морю — коротко для планирования.
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
              <p class="city-practical__lead">Чаще всего путь идёт через Симферополь (ж/д, автобус) и далее транспортом в Севастополь; до Инкермана — пригородные маршрутки и автобусы согласно расписанию.</p>
              <ul class="city-practical__list">
                <li><strong>Севастополь</strong> — ближайший крупный узел: от центра и остановок — короткий переезд в сторону Инкермана.</li>
                <li><strong>Симферополь</strong> — удобная точка прилёта и пересадок на западное направление; дальше смотрите актуальные рейсы до Севастополя.</li>
                <li><strong>Авто</strong> — гибкий график для кольцевых маршрутов; к набережным и бухтам летом возможны пробки и очереди — закладывайте запас времени.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Сверяйте последний рейс обратно в Севастополь, если ночуете в городе, а днём гуляете по каньону и монастырю; экскурсии в подвалы часто по записи — уточняйте заранее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Весна и ранняя осень часто комфортны для троп и склонов; лето даёт длинный день, но на открытых участках у бухты жарче, а дороги к морю загруженнее.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — больше транспорта и гостей у побережья; к популярным точкам выезжайте раньше или в будни.</li>
                <li><strong>Весна и осень</strong> — мягче для прогулок по каньону и монастырю без пиковой жары.</li>
                <li><strong>Зима</strong> — тише; ветер у заливов ощутимее, маршруты зависят от погоды.</li>
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
              <p class="city-practical__lead">Ориентируйтесь на близость к тропам и каньону в Инкермане или на море и инфраструктуру в Севастополе — в зависимости от ритма поездки.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">Инкерман у склонов</span>
                <span class="city-practical__chip">Севастополь у бухты</span>
                <span class="city-practical__chip">Ближе к трассе</span>
                <span class="city-practical__chip">Выезд к Симферополю</span>
                <span class="city-practical__chip">Набережные города</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте, как добираться до остановок в Севастополь.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты в обоих населённых пунктах.</li>
                <li><strong>Комфорт</strong> — жильё с видом на воду в Севастополе или тише — в Инкермане; в высокий сезон бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете вечера у моря, а дни — на склонах, сравните время в пути от выбранного адреса до остановок и парковок у каньона.</p>
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
          От средневековой крепости и пещерных келий до винных подвалов и бухт Севастополя — несколько вех, которые связывают Инкерман с западным побережьем Крыма.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">VI век</span>
            <div class="city-history__body">
              <p>Византийский период: христианские общины и <strong>пещерные обители</strong> на склонах над будущим каньоном.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">Средневековье</span>
            <div class="city-history__body">
              <p><strong>Крепость Каламита</strong> — контроль над входом в бухту; позднее генуэзский и османский этапы истории региона.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1854</span>
            <div class="city-history__body">
              <p><strong>Сражение при Инкермане</strong> в ходу Крымской войны — одно из известных полей боя у реки Чёрной.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">XIX–XX вв.</span>
            <div class="city-history__body">
              <p>Развитие <strong>Севастополя</strong> и пригородов; <strong>пещерный монастырь</strong> и виноделие закрепляют профиль Инкермана.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">Советский период</span>
            <div class="city-history__body">
              <p>Городское строительство, <strong>винные комбинаты</strong> и туристический интерес к каньону и бухтам.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">Современность</span>
            <div class="city-history__body">
              <p>Инкерман остаётся <strong>пригородом Севастополя</strong> с маршрутами к монастырю, подвалам и видам на заливы.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 10. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата об Инкермане">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_inkerman_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Скалы над бухтой держат монастырь,</span>
          <span class="city-quote__line">в подвалах — тишина вина, а внизу заливы»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— об Инкермане: каньон, монастырь и винная история</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Севастополь — бухты и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Севастополь</h3>
              <p class="city-card__lead">Бухты, Херсонес и море — естественное продолжение маршрута из Инкермана в тот же день или на соседние дни.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="city-card fade-up" data-delay="2">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Бахчисарай — ханский дворец" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Бахчисарай</h3>
              <p class="city-card__lead">Ханский дворец и предгорье — выезд в сторону Узень-Су после дней у западных бухт.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Симферополь — столица Крыма" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Центральный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Симферополь</h3>
              <p class="city-card__lead">Главный транзитный узел: прибытие, пересадки и короткие связки с остальным Крымом после побережья.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Бахчисарай</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">Следующий →</span>
              <span class="city-nav__name">Феодосия</span>
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
