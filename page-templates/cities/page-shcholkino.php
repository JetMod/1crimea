<?php
/**
 * Template Name: Город — Щёлкино
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
$crimea_shcholkino_hero_bg = $crimea_assets . '/img/cities/5.jpg';
get_header();
?>
<main id="main-content">

    <!-- 1. HERO -->
    <section class="city-hero" aria-label="Щёлкино">
    <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_shcholkino_hero_bg ); ?>');" aria-hidden="true"></div>
    <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="breadcrumbs__link">Города Крыма</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Щёлкино</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Восточный</span>
          <h1 class="city-hero__title">Щёлкино</h1>
          <p class="city-hero__tagline">
            Курорт на Азовском море: широкие пляжи, мелководье и заметный ветер — спокойный семейный отдых без черноморской толпы и крутых склонов.
            Здесь логично рассчитывать на неспешные дни у воды и прогулки вдоль берега, а за сменой пейзажа — на выезды к Керчи, Феодосии и транзит через Симферополь.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Азовское море</span>
            <span class="city-hero__tag">Широкие пляжи</span>
            <span class="city-hero__tag">Ветер</span>
            <span class="city-hero__tag">Семейный отдых</span>
            <span class="city-hero__tag">Мелководье</span>
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
          <h2 id="city-intro-heading" class="city-intro__heading">Щёлкино — азовские пляжи, мелководье и ветер на востоке Крыма</h2>
          <p>
            Щёлкино стоит на востоке полуострова у Азовского моря: пляжная полоса здесь обычно широкая и пологая, вода мельче и теплее летом, чем на типичных черноморских участках — это задаёт другой, более неспешный курортный ритм.
            Ветер с залива ощутимее: он может быть плюсом для прогулок и водных активностей, но стоит учитывать при выборе места на пляже и в палатке.
          </p>
          <p>
            Связь с соседними точками удобно строить через Керчь и Феодосию по восточной оси и через Симферополь как главный узел ж/д и автобусов при прибытии с запада или из центра Крыма.
            Маршруты и время в пути сверяйте по карте и актуальному расписанию — в высокий сезон на трассах и остановках возможны задержки.
          </p>
          <p>
            Без медицинских обещаний: отдых здесь про море, пляж и спокойную инфраструктуру для семей — с поправкой на жару в разгар лета, ветер и отсутствие «горного» смягчения климата, как на южном побережье.
            Это не альтернатива Судаку или Ялте по рельефу: акцент — на азовском мелководье и широкой береговой полосе.
          </p>
          <p>
            Соседние направления — Керчь для пролива и древностей, Феодосия для порта и галереи, Старый Крым для исторического слоя; Симферополь остаётся опорой для пересадок и возврата.
          </p>
        </div>
        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="city-facts-title">
          <p id="city-facts-title" class="city-facts__title">Быстрые факты</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Регион</dt>
              <dd class="city-facts__dd">Восток полуострова, азовское побережье; в каталоге — «Восточный»</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучшее время</dt>
              <dd class="city-facts__dd">Лето — пляжный сезон и тёплое мелководье; весна и осень — спокойнее по людям, купание зависит от погоды</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Климат</dt>
              <dd class="city-facts__dd">Азов: мельче у берега, ветренее на открытых участках по сравнению с многими черноморскими бухтами</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Связь</dt>
              <dd class="city-facts__dd">Керчь и Феодосия — по востоку; Симферополь — транзит и ж/д; авто удобно для кольцевых выездов</dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Интересы">
            <span class="city-facts__tag">Пляж</span>
            <span class="city-facts__tag">Азов</span>
            <span class="city-facts__tag">Семьи</span>
            <span class="city-facts__tag">Ветер</span>
            <span class="city-facts__tag">Мелководье</span>
          </div>
        </aside>
      </div>
    </section>

    <!-- 3. KEY STATS -->
    <section class="city-stats-strip" aria-label="Ключевые цифры по Щёлкино">
      <div class="container">
        <ul class="city-stats-strip__list">
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">11 000</span>
            <span class="city-stats-strip__label">жителей</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">107 км²</span>
            <span class="city-stats-strip__label">площадь округа</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~65 км</span>
            <span class="city-stats-strip__label">до Керчи</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">~195 км</span>
            <span class="city-stats-strip__label">до Симферополя</span>
          </li>
          <li class="city-stats-strip__item">
            <span class="city-stats-strip__value">1974</span>
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

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Щёлкино — широкая пляжная полоса Азова" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Пляжи и мелководье</h3>
              <p class="sight-card__text">Главный мотив поездки: пологий заход и простор у воды — удобно для неспешных дней и детского купания с учётом ветра и прогноза.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Щёлкино — набережная и береговая линия" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Набережная и променад</h3>
              <p class="sight-card__text">Прогулки вдоль моря связывают курортные зоны; вечером ориентируйтесь на освещение и безопасные переходы.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Щёлкино — ветреное азовское побережье" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ветер и открытый горизонт</h3>
              <p class="sight-card__text">Азовский залив даёт просторные виды; ветреные дни — часть пейзажа: удобнее планировать тень, воду и смену активности.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Щёлкино — спокойный семейный курорт" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Архитектура">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Город и инфраструктура</h3>
              <p class="sight-card__text">Кварталы между пляжем и дорогами — база для жилья и бытовых сервисов; расстояние до остановок уточняйте при бронировании.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Щёлкино — отдых у азовского берега" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="Природа">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Сравнение с черноморскими курортами</h3>
              <p class="sight-card__text">Меньше горных бухт и «карманного» микроклимата — зато предсказуемее пологий пляж; выбирайте под свой темп и маршрут по Крыму.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — пролив и древности" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Керчь</h3>
              <p class="sight-card__text">Восточный сосед: Митридат, пролив и музейный слой — логичный выезд из азовского пляжного режима на один или два дня.</p>
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
              <p class="sight-card__text">Черноморский порт и галерея Айвазовского — контраст азовскому мелководью и удобная точка на пути к центру или обратно на восток.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/stary-krym/' ) ); ?>#city-sights-heading" class="sight-card fade-up" data-delay="2">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Старый Крым — историческое ядро" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Старый Крым</h3>
              <p class="sight-card__text">Солхат, храмы и музеи без пляжного курорта — культурная вставка между азовским морем и Феодосией по той же восточной логике.</p>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Пейзажи Крыма — каталог достопримечательностей" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Каталог достопримечательностей</h3>
              <p class="sight-card__text">Точки по Крыму с фильтром по городам — дополните пляжные дни музеями и природными объектами по маршруту.</p>
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
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </span>
              <span class="route-card__duration">~5–6 часов</span>
            </div>
            <h3 class="route-card__title">Азов: пляж и набережная</h3>
            <p class="route-card__desc">День у мелководья без переездов: утро на песке, прогулка вдоль берега и вечер с ветром с залива — в ритме семейного курорта.</p>
            <ol class="route-card__stops">
              <li>Утро на широкой пляжной полосе</li>
              <li>Променад и кафе у берега</li>
              <li>Тень и вода в разгар дня — по прогнозу ветра</li>
              <li>Вечерняя прогулка с видом на открытый горизонт</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Пляж</span>
              <span class="route-card__tag">Семьи</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="2">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
              <span class="route-card__duration">~7–8 часов</span>
            </div>
            <h3 class="route-card__title">Керчь: пролив и древности</h3>
            <p class="route-card__desc">Восточный выезд из азовского режима: Митридат, Керченский пролив и музейный слой — на машине или по расписанию рейсов.</p>
            <ol class="route-card__stops">
              <li>Подъём на Митридат и панорамы пролива</li>
              <li>Прогулка у берегов пролива и мостовые виды</li>
              <li>Музей «Пантикапей» или исторический центр — по времени</li>
              <li>Возвращение в Щёлкино к вечеру</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">История</span>
              <span class="route-card__tag">Экскурсия</span>
            </div>
          </article>

          <article class="route-card fade-up" data-delay="3">
            <div class="route-card__header">
              <span class="route-card__icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.3-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
              </span>
              <span class="route-card__duration">~6–7 часов</span>
            </div>
            <h3 class="route-card__title">Феодосия и Старый Крым</h3>
            <p class="route-card__desc">Черноморский контраст азовскому мелководью: порт, набережная и галерея — с опциональной остановкой в Старом Крыму по дороге.</p>
            <ol class="route-card__stops">
              <li>Феодосия: исторический центр и набережная</li>
              <li>Картинная галерея им. И. К. Айвазовского</li>
              <li>По пути: Старый Крым — Солхат и музеи</li>
              <li>Вечер на азовском берегу</li>
            </ol>
            <div class="route-card__tags">
              <span class="route-card__tag">Культура</span>
              <span class="route-card__tag">Связка</span>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 6. PHOTO GALLERY (lightbox) -->
    <section class="city-gallery" aria-labelledby="shcholkino-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фотогалерея</span>
            <h2 id="shcholkino-gallery-heading">Щёлкино в объективе</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: широкий пляж Азова">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Щёлкино — широкая пляжная полоса Азова" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: набережная и берег">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Набережная и азовский берег" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: восточное побережье">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Восточное побережье Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: море и горизонт">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Море и открытый горизонт" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: приморский пейзаж">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Приморский пейзаж" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: скалы и вода">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Скалы и вода у побережья" width="800" height="600" loading="lazy" />
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
        'crimea_gallery_current_slug' => 'shcholkino',
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
              Как добраться через Симферополь и с востока от Керчи и Феодосии, когда комфортнее на пляже и как выбрать жильё у азовской полосы — коротко для маршрута.
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
              <p class="city-practical__lead">Частый сценарий — через Симферополь (ж/д, автобус) с пересадкой на восточные направления; с азовской стороны логично заезжать от Керчи или связывать поездку с Феодосией по расписанию и на машине.</p>
              <ul class="city-practical__list">
                <li><strong>Симферополь</strong> — главный узел: пересадки на междугородние автобусы к востоку.</li>
                <li><strong>Керчь и Феодосия</strong> — соседние опоры на восточной оси; время в пути сравнивайте по картам и актуальным рейсам.</li>
                <li><strong>Авто</strong> — гибко для пляжного отдыха и выездов; летом на подъездах к курортным зонам закладывайте запас.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Уточняйте последние рейсы, если возвращаетесь в Симферополь вечером; в июле–августе места на популярных линиях лучше бронировать заранее.</p>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="2">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            </div>
            <h3 class="city-practical__title">Когда ехать</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Лето — пик купального сезона на мелководье; весна и осень тише по людям, но купание и ветер зависят от конкретной погоды.</p>
              <ul class="city-practical__list city-practical__list--compact">
                <li><strong>Высокий сезон</strong> — май–сентябрь: тёплая вода у берега и длинный день; ветреные дни планируйте с тенью и сменой активности.</li>
                <li><strong>Межсезонье</strong> — спокойнее на набережных; море холоднее, зато проще передвигаться по востоку без пляжной толпы.</li>
                <li><strong>Зима</strong> — ветренее у воды; для коротких прогулок одевайтесь теплее.</li>
              </ul>
            </div>
            <div class="city-season-bar" role="img" aria-label="Условная сезонность: январь–март и ноябрь–декабрь спокойнее, апрель и октябрь переходные, май–сентябрь пляжный сезон на Азове">
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
                <span class="city-season-bar__legend-item"><span class="city-season-bar__legend-swatch city-season-bar__legend-swatch--peak" aria-hidden="true"></span> Пляжный сезон</span>
              </div>
            </div>
          </div>
          <div class="city-practical__block fade-up" data-delay="3">
            <div class="city-practical__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <h3 class="city-practical__title">Где остановиться</h3>
            <div class="city-practical__text">
              <p class="city-practical__lead">Ориентируйтесь на близость к пляжу и набережной или на тихие кварталы с выездом к морю пешком или на транспорте.</p>
              <p class="city-practical__chips-label">Популярные ориентиры</p>
              <div class="city-practical__chips" aria-label="Варианты проживания">
                <span class="city-practical__chip">У пляжа</span>
                <span class="city-practical__chip">Набережная</span>
                <span class="city-practical__chip">Семьи</span>
                <span class="city-practical__chip">У остановок</span>
                <span class="city-practical__chip">Парковка</span>
              </div>
              <ul class="city-practical__list">
                <li><strong>Бюджет</strong> — гостевые дома и квартиры; уточняйте расстояние до берега и до автобусных остановок.</li>
                <li><strong>Средний сегмент</strong> — мини-отели и апартаменты в пляжной зоне.</li>
                <li><strong>Комфорт</strong> — жильё с двором или видом на море; в высокий сезон бронирование заранее уместно.</li>
              </ul>
              <p class="city-practical__tip"><span class="city-practical__tip-label">Совет</span> Если планируете и Керчь, и пляж, сравните, где удобнее одна база на несколько ночей — меньше переездов по восточной трассе.</p>
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
          От степного побережья у Керченского залива до советского курортного проекта на Азове — несколько вех, которые помогают понять, как появился современный Щёлкино.
        </p>
        <ol class="city-history__timeline">
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">До XX в.</span>
            <div class="city-history__body">
              <p><strong>Степное побережье</strong> восточного Крыма у лиманов и залива: без крупной застройки, хозяйства и рыболовецкие пункты в орбите Керчи и Феодосии.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1960-е</span>
            <div class="city-history__body">
              <p>Советское <strong>планирование курорта</strong> на азовском побережье в зоне Кызылташского лимана — подготовка инфраструктуры для отдыха у Азовского моря.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="3">
            <span class="city-history__year">1968</span>
            <div class="city-history__body">
              <p>Образован <strong>посёлок городского типа</strong>; название дано в честь русского моряка и навигатора <strong>Степана Фёдоровича Щёлкова</strong> (1737–1797).</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="1">
            <span class="city-history__year">1974</span>
            <div class="city-history__body">
              <p>Присвоен <strong>статус города</strong> — закрепление Щёлкино как административного центра района и азовского курорта.</p>
            </div>
          </li>
          <li class="city-history__event fade-up" data-delay="2">
            <span class="city-history__year">1990-е — сегодня</span>
            <div class="city-history__body">
              <p>Развитие как <strong>семейного курорта</strong> с широкими пляжами и мелководьем; связь маршрутов с Керчью, Феодосией и транзитом через Симферополь.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <!-- 9. QUOTE -->
    <section class="quote city-quote" aria-label="Цитата о Щёлкино">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_shcholkino_hero_bg ); ?>')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Слова о городе</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«Мелководье держит тепло дольше заката,</span>
          <span class="city-quote__line">а ветер с залива пишет свой ритм берегу»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Щёлкино: Азов и широкий пляж</cite>
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

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>" class="city-card fade-up" data-delay="1">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — пролив и древности" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Керчь</h3>
              <p class="city-card__lead">Митридат, пролив и музеи — сосед по востоку, если после азовского пляжа тянет на смотровые и античный слой.</p>
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
              <p class="city-card__lead">Порт, набережная и галерея — черноморский контраст азовскому мелководью на той же восточной логике маршрута.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/stary-krym/' ) ); ?>" class="city-card fade-up" data-delay="3">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Старый Крым — история и степь" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный · Центр</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Старый Крым</h3>
              <p class="city-card__lead">Солхат и музеи без пляжного курорта — культурная остановка между азовским берегом и Феодосией.</p>
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
          <a href="<?php echo esc_url( home_url( '/gorod/stary-krym/' ) ); ?>" class="city-nav__link">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="" width="64" height="64" loading="lazy" />
            <span class="city-nav__text">
              <span class="city-nav__dir">← Предыдущий</span>
              <span class="city-nav__name">Старый Крым</span>
            </span>
          </a>
        </div>
        <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="city-nav__all">Все города</a>
        <div class="city-nav__side city-nav__side--next">
          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>" class="city-nav__link city-nav__link--next">
            <img class="city-nav__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="" width="64" height="64" loading="lazy" />
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
