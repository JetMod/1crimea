<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
$theme_assets_uri = get_template_directory_uri() . '/assets';
?>
  <main id="main-content">

<!-- =====================================================
     HERO — видеофон
     ===================================================== -->
<section class="hero" aria-label="Добро пожаловать в Крым">

  <video
    class="hero__video"
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    poster="<?php echo esc_url($theme_assets_uri . '/img/cities/1.jpg'); ?>"
    aria-hidden="true"
  >
    <source src="<?php echo esc_url($theme_assets_uri . '/video/hero.MP4'); ?>" type="video/mp4" />
  </video>

  <div class="hero__overlay" aria-hidden="true"></div>

  <div class="container">
    <div class="hero__content">
      <span class="hero__eyebrow">Полуостров контрастов</span>

      <h1 class="hero__title">
        Открой<br />настоящий Крым
      </h1>

      <p class="hero__subtitle">
        Путеводитель по городам, побережью и горам.<br />
        От <a href="<?php echo esc_url(home_url('/gorod/yalta/')); ?>">Ялты</a> до Керчи — каждый уголок со своей историей.
      </p>

      <div class="hero__actions">
        <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
          Смотреть города
        </a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-outline-white">О проекте</a>
      </div>

      <div class="hero__search">
        <div class="hero__search-chips" aria-label="Популярные города">
          <span class="hero__chips-hint">Популярное:</span>
          <a class="hero__chip" href="<?php echo esc_url(home_url('/gorod/yalta/')); ?>">Ялта</a>
          <a class="hero__chip" href="<?php echo esc_url(home_url('/gorod/sevastopol/')); ?>">Севастополь</a>
          <a class="hero__chip" href="<?php echo esc_url(home_url('/gorod/sudak/')); ?>">Судак</a>
          <a class="hero__chip" href="<?php echo esc_url(home_url('/gorod/feodosiya/')); ?>">Феодосия</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll indicator -->
  <button type="button" class="hero__scroll" aria-label="Прокрутить вниз">
    <span class="hero__scroll-label">Листать</span>
    <span class="hero__scroll-visual" aria-hidden="true">
      <span class="hero__scroll-line"></span>
      <span class="hero__scroll-dot"></span>
    </span>
  </button>

</section>

<!-- =====================================================
     STATS — три факта
     ===================================================== -->
<section class="stats" aria-label="Крым в цифрах">
  <div class="container">
    <div class="stats__grid">

      <div class="stat-item fade-up" data-delay="1">
        <div class="stat-item__icon" aria-hidden="true">
          <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg>
        </div>
        <div class="stat-item__body">
          <div class="stat-item__number">
            <span data-count="2500" data-suffix="+">&nbsp;</span>
          </div>
          <p class="stat-item__label">км² пляжей и морского побережья</p>
        </div>
      </div>

      <div class="stat-item fade-up" data-delay="2">
        <div class="stat-item__icon" aria-hidden="true">
          <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <div class="stat-item__body">
          <div class="stat-item__number">
            <span data-count="45" data-suffix="+">&nbsp;</span>
          </div>
          <p class="stat-item__label">городов и посёлков с богатой историей</p>
        </div>
      </div>

      <div class="stat-item fade-up" data-delay="3">
        <div class="stat-item__icon" aria-hidden="true">
          <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
        <div class="stat-item__body">
          <div class="stat-item__number">
            <span data-count="2000" data-suffix="+">&nbsp;</span>
          </div>
          <p class="stat-item__label">лет истории, памятников и легенд</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =====================================================
     CITIES — карточки городов
     ===================================================== -->
<section class="cities" aria-label="Города Крыма">
  <div class="container">

    <div class="section-header">
      <div>
        <span class="eyebrow">Путеводитель</span>
        <h2>Города Крыма</h2>
      </div>
      <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="section-header__link">
        Все города
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

    <div class="cities__grid">

      <!-- Ялта + Алушта: две карточки вместо одной высокой (та же ячейка сетки 2×2) -->
      <div class="cities__featured-split fade-up" data-delay="1">
        <a href="<?php echo esc_url(home_url('/gorod/yalta/')); ?>" class="city-card city-card--featured city-card--featured-split">
        <div class="city-card__img-wrap">
            <img
              class="city-card__img"
              src="<?php echo esc_url($theme_assets_uri . '/img/cities/1.jpg'); ?>"
              alt="Набережная Ялты — морской курорт Южного берега Крыма"
              width="600" height="450"
              loading="lazy"
            />
            <span class="city-card__badge">Южный берег</span>
            <div class="city-card__overlay" aria-hidden="true"></div>
            <div class="city-card__featured-content">
              <h3 class="city-card__title">Ялта</h3>
              <p class="city-card__lead">
                Жемчужина Южного берега Крыма. Набережная, дворцы и тёплый климат
                с апреля по октябрь.
              </p>
              <span class="city-card__link">
                Узнать больше
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </div>
      </a>
        <a href="<?php echo esc_url(home_url('/gorod/alushta/')); ?>" class="city-card city-card--featured city-card--featured-split">
        <div class="city-card__img-wrap">
            <img
              class="city-card__img"
              src="<?php echo esc_url($theme_assets_uri . '/img/cities/7.webp'); ?>"
              alt="Алушта — курорт у подножия гор на Южном берегу Крыма"
              width="600" height="450"
              loading="lazy"
            />
            <span class="city-card__badge">Южный берег</span>
            <div class="city-card__overlay" aria-hidden="true"></div>
            <div class="city-card__featured-content">
              <h3 class="city-card__title">Алушта</h3>
              <p class="city-card__lead">
                Город у подножия Чатыр-Дага: длинная набережная, канатная дорога
                и переход к тропам Большого каньона.
              </p>
              <span class="city-card__link">
                Узнать больше
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </div>
      </a>
      </div>

      <!-- Карточка: Севастополь -->
      <a href="<?php echo esc_url(home_url('/gorod/sevastopol/')); ?>" class="city-card fade-up" data-delay="2">
        <div class="city-card__img-wrap">
          <img
            class="city-card__img"
            src="<?php echo esc_url($theme_assets_uri . '/img/cities/2.jpg'); ?>"
            alt="Панорама бухты Севастополя — город воинской славы"
            width="600" height="450"
            loading="lazy"
          />
          <span class="city-card__badge">Запад</span>
          <div class="city-card__overlay" aria-hidden="true"></div>
        </div>
        <div class="city-card__body">
          <h3 class="city-card__title">Севастополь</h3>
          <p class="city-card__lead">
            Город воинской славы и Черноморский флот. Древний Херсонес,
            панорамы бухт и особая атмосфера морского форпоста.
          </p>
          <span class="city-card__link">
            Узнать больше
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </a>

      <!-- Карточка: Евпатория -->
      <a href="<?php echo esc_url(home_url('/gorod/evpatoriya/')); ?>" class="city-card fade-up" data-delay="3">
        <div class="city-card__img-wrap">
          <img
            class="city-card__img"
            src="<?php echo esc_url($theme_assets_uri . '/img/cities/3.jpg'); ?>"
            alt="Пляжи Евпатории — детский курорт Крыма"
            width="600" height="450"
            loading="lazy"
          />
          <span class="city-card__badge">Западный берег</span>
          <div class="city-card__overlay" aria-hidden="true"></div>
        </div>
        <div class="city-card__body">
          <h3 class="city-card__title">Евпатория</h3>
          <p class="city-card__lead">
            Лучший семейный курорт: мелководные пляжи, лечебные грязи,
            средневековый Гёзлёв и весёлая набережная.
          </p>
          <span class="city-card__link">
            Узнать больше
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </a>

      <!-- Карточка: Бахчисарай -->
      <a href="<?php echo esc_url(home_url('/gorod/bakhchisaray/')); ?>" class="city-card fade-up" data-delay="4">
        <div class="city-card__img-wrap">
          <img
            class="city-card__img"
            src="<?php echo esc_url($theme_assets_uri . '/img/cities/4.jpg'); ?>"
            alt="Ханский дворец в Бахчисарае — столица Крымского ханства"
            width="600" height="450"
            loading="lazy"
          />
          <span class="city-card__badge">Предгорье</span>
          <div class="city-card__overlay" aria-hidden="true"></div>
        </div>
        <div class="city-card__body">
          <h3 class="city-card__title">Бахчисарай</h3>
          <p class="city-card__lead">
            Бывшая столица Крымского ханства. Ханский дворец, пещерный город
            Чуфут-Кале и восточный колорит старых улочек.
          </p>
          <span class="city-card__link">
            Узнать больше
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </a>

      <!-- Карточка: Судак -->
      <a href="<?php echo esc_url(home_url('/gorod/sudak/')); ?>" class="city-card fade-up" data-delay="5">
        <div class="city-card__img-wrap">
          <img
            class="city-card__img"
            src="<?php echo esc_url($theme_assets_uri . '/img/cities/5.jpg'); ?>"
            alt="Генуэзская крепость в Судаке на берегу моря"
            width="600" height="450"
            loading="lazy"
          />
          <span class="city-card__badge">Восточный берег</span>
          <div class="city-card__overlay" aria-hidden="true"></div>
        </div>
        <div class="city-card__body">
          <h3 class="city-card__title">Судак</h3>
          <p class="city-card__lead">
            Великолепная Генуэзская крепость на скале над морем, чистые бухты
            и виноградники — символ восточного Крыма.
          </p>
          <span class="city-card__link">
            Узнать больше
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </a>

      <!-- Карточка: Феодосия -->
      <a href="<?php echo esc_url(home_url('/gorod/feodosiya/')); ?>" class="city-card fade-up" data-delay="6">
        <div class="city-card__img-wrap">
          <img
            class="city-card__img"
            src="<?php echo esc_url($theme_assets_uri . '/img/cities/6.webp'); ?>"
            alt="Набережная Феодосии — древний портовый город"
            width="600" height="450"
            loading="lazy"
          />
          <span class="city-card__badge">Восток</span>
          <div class="city-card__overlay" aria-hidden="true"></div>
        </div>
        <div class="city-card__body">
          <h3 class="city-card__title">Феодосия</h3>
          <p class="city-card__lead">
            Один из древнейших городов мира, родина Айвазовского. Картинная
            галерея, золотые пляжи и горизонт, вдохновлявший художников.
          </p>
          <span class="city-card__link">
            Узнать больше
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </div>
      </a>

    </div>
  </div>
</section>

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

<!-- =====================================================
     SEASONS — когда ехать
     ===================================================== -->
<section class="seasons" aria-label="Когда ехать в Крым">
  <div class="container">

    <div class="seasons__header">
      <div>
        <span class="seasons__eyebrow">Планирование</span>
        <h2 class="seasons__title">Когда ехать</h2>
      </div>
      <p class="seasons__subtitle">Четыре сезона — четыре разных Крыма. Выберите своё настроение.</p>
    </div>

    <div class="seasons__grid">

      <!-- Весна -->
      <article class="season-card fade-up" data-delay="1">
        <div class="season-card__accent-line" aria-hidden="true"></div>
        <div class="season-card__top">
          <div class="season-card__icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="4"/>
              <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/>
              <path d="M8 16c0-2.2 1.8-4 4-4s4 1.8 4 4" opacity=".5"/>
            </svg>
          </div>
          <div class="season-card__period-wrap">
            <span class="season-card__period">апр — май</span>
            <span class="season-card__temp">+14° / +22°</span>
          </div>
        </div>
        <div class="season-card__body">
          <h3 class="season-card__title">Весна</h3>
          <p class="season-card__text">
            Цветение миндаля и магнолий, первое купание в мае. Мягкий климат, минимум туристов — идеальное время для прогулок по дворцам и горным тропам.
          </p>
        </div>
        <div class="season-card__tags">
          <span class="season-card__tag">Цветение</span>
          <span class="season-card__tag">Горные тропы</span>
          <span class="season-card__tag">Дворцы</span>
        </div>
      </article>

      <!-- Лето -->
      <article class="season-card fade-up" data-delay="2">
        <div class="season-card__accent-line" aria-hidden="true"></div>
        <div class="season-card__top">
          <div class="season-card__icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="5"/>
              <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
            </svg>
          </div>
          <div class="season-card__period-wrap">
            <span class="season-card__period">июн — авг</span>
            <span class="season-card__temp">+26° / +32°</span>
          </div>
        </div>
        <div class="season-card__body">
          <h3 class="season-card__title">Лето</h3>
          <p class="season-card__text">
            Пляжный сезон в разгаре: море прогревается до +28°C. Фестивали, ночные рынки, дайвинг и экскурсии — Крым не даёт скучать.
          </p>
        </div>
        <div class="season-card__tags">
          <span class="season-card__tag">Пляж</span>
          <span class="season-card__tag">Дайвинг</span>
          <span class="season-card__tag">Фестивали</span>
        </div>
      </article>

      <!-- Осень -->
      <article class="season-card fade-up" data-delay="3">
        <div class="season-card__accent-line" aria-hidden="true"></div>
        <div class="season-card__top">
          <div class="season-card__icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
              <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
            </svg>
          </div>
          <div class="season-card__period-wrap">
            <span class="season-card__period">сен — окт</span>
            <span class="season-card__temp">+18° / +26°</span>
          </div>
        </div>
        <div class="season-card__body">
          <h3 class="season-card__title">Осень</h3>
          <p class="season-card__text">
            Бархатный сезон: море ещё тёплое, а толпы рассеиваются. Виноградный сбор, золото Южного берега и прогулки по опустевшим набережным.
          </p>
        </div>
        <div class="season-card__tags">
          <span class="season-card__tag">Виноград</span>
          <span class="season-card__tag">Тёплое море</span>
          <span class="season-card__tag">Тишина</span>
        </div>
      </article>

      <!-- Зима -->
      <article class="season-card fade-up" data-delay="4">
        <div class="season-card__accent-line" aria-hidden="true"></div>
        <div class="season-card__top">
          <div class="season-card__icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <line x1="2" y1="12" x2="22" y2="12"/>
              <line x1="12" y1="2" x2="12" y2="22"/>
              <path d="m20 16-4-4 4-4M4 8l4 4-4 4M16 4l-4 4-4-4M8 20l4-4 4 4"/>
            </svg>
          </div>
          <div class="season-card__period-wrap">
            <span class="season-card__period">ноя — мар</span>
            <span class="season-card__temp">+4° / +12°</span>
          </div>
        </div>
        <div class="season-card__body">
          <h3 class="season-card__title">Зима</h3>
          <p class="season-card__text">
            Горы в снегу, тишина и дворцы без очередей. Зима — время медленного Крыма: уютных кофеен, прогулок по Херсонесу и Ханскому дворцу.
          </p>
        </div>
        <div class="season-card__tags">
          <span class="season-card__tag">Горы</span>
          <span class="season-card__tag">Музеи</span>
          <span class="season-card__tag">Без толп</span>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- =====================================================
     QUOTE — параллакс-цитата
     ===================================================== -->
<section class="quote" aria-label="Цитата">
  <div class="quote__bg" aria-hidden="true"></div>
  <div class="quote__overlay" aria-hidden="true"></div>
  <div class="container quote__content fade-up">
    <blockquote class="quote__text">
      «Крым — это не место на карте,<br />это состояние души»
    </blockquote>
    <cite class="quote__cite">— путеводитель</cite>
  </div>
</section>

<!-- =====================================================
     BRIDGE — вступление перед маршрутами
     ===================================================== -->
<section class="bridge" aria-label="Как планировать поездку">
  <div class="container bridge__inner fade-up">
    <div class="bridge__copy">
      <span class="eyebrow">План поездки</span>
      <h2 class="bridge__title">Сначала выберите направление</h2>
      <p class="bridge__text">
        Полуостров разный от берега до хребта: удобнее думать о поездке как о трёх линиях —
        море, горы и история. Ниже — три маршрута-настроения; внутри каждого найдёте города и идеи для маршрута.
      </p>
    </div>
    <div class="bridge__aside">
      <p class="bridge__hint">Уже знаете город? Откройте полный список.</p>
      <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary bridge__cta">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        Все города
      </a>
    </div>
  </div>
</section>

<!-- =====================================================
     WHY — три маршрута (полосы с фото)
     ===================================================== -->
<section class="why" aria-label="Маршруты по Крыму">
  <div class="container">

    <div class="why__heading fade-up">
      <span class="eyebrow">Три маршрута</span>
      <h2>Куда отправиться?</h2>
    </div>

    <div class="why__routes">

      <a href="<?php echo esc_url(home_url('/gorod/?tag=пляж')); ?>" class="why-route why-route--coast fade-up" data-delay="1">
        <span class="why-route__bg" aria-hidden="true"></span>
        <span class="why-route__overlay" aria-hidden="true"></span>
        <span class="why-route__inner">
          <span class="why-route__copy">
            <span class="why-route__eyebrow">Море</span>
            <span class="why-route__title">Побережье</span>
            <span class="why-route__text">Пляжи, набережные и курорты от Ялты до Керчи</span>
          </span>
          <span class="why-route__arrow" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </span>
        </span>
      </a>

      <a href="<?php echo esc_url(home_url('/gorod/?tag=горы')); ?>" class="why-route why-route--mountains fade-up" data-delay="2">
        <span class="why-route__bg" aria-hidden="true"></span>
        <span class="why-route__overlay" aria-hidden="true"></span>
        <span class="why-route__inner">
          <span class="why-route__copy">
            <span class="why-route__eyebrow">Природа</span>
            <span class="why-route__title">Горы</span>
            <span class="why-route__text">Хребты, водопады, заповедники и пешие тропы</span>
          </span>
          <span class="why-route__arrow" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </span>
        </span>
      </a>

      <a href="<?php echo esc_url(home_url('/gorod/?tag=история')); ?>" class="why-route why-route--history fade-up" data-delay="3">
        <span class="why-route__bg" aria-hidden="true"></span>
        <span class="why-route__overlay" aria-hidden="true"></span>
        <span class="why-route__inner">
          <span class="why-route__copy">
            <span class="why-route__eyebrow">Наследие</span>
            <span class="why-route__title">История</span>
            <span class="why-route__text">Дворцы, крепости и города тысячелетней давности</span>
          </span>
          <span class="why-route__arrow" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </span>
        </span>
      </a>

    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
