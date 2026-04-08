<?php
/**
 * Template Name: Каталог городов
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main class="catalog-page">

    <!-- Page hero + фильтры (стили catalog.css; базовая читаемость до подключения) -->
    <section class="catalog-hero" aria-label="Города Крыма">
      <div class="container">
        <nav class="breadcrumbs breadcrumbs--on-dark breadcrumbs--center" aria-label="Навигационная цепочка">
          <ol class="breadcrumbs__list">
            <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
            <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Города Крыма</span></li>
          </ol>
        </nav>
        <p class="eyebrow">Каталог</p>
        <h1 class="hero__title">Города Крыма</h1>
        <p class="hero__subtitle">
          <span id="catalogHeroDirections">19</span> направлений — от южного берега до древних крепостей
        </p>
      </div>
    </section>

    <div class="catalog-filter-bar" role="region" aria-label="Фильтры каталога городов">
      <div class="container catalog-filter-bar__inner">
        <div class="catalog-filter-stack">
          <div class="catalog-filters" role="group" aria-label="Регион">
            <button type="button" class="btn catalog-filter is-active" data-filter="all">Все</button>
            <button type="button" class="btn btn-outline-white catalog-filter" data-filter="юбк">ЮБК</button>
            <button type="button" class="btn btn-outline-white catalog-filter" data-filter="западный">Западный</button>
            <button type="button" class="btn btn-outline-white catalog-filter" data-filter="восточный">Восточный</button>
            <button type="button" class="btn btn-outline-white catalog-filter" data-filter="центральный">Центральный</button>
          </div>
          <div class="catalog-filters catalog-filters--tags" role="group" aria-label="Интересы">
            <button type="button" class="btn btn-outline-white catalog-tag-filter is-active" data-tag-filter="all">Все интересы</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="пляж">Пляж</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="история">История</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="горы">Горы</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="курорт">Курорт</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="природа">Природа</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="архитектура">Архитектура</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="вино">Вино</button>
            <button type="button" class="btn btn-outline-white catalog-tag-filter" data-tag-filter="лечение">Лечение</button>
          </div>
        </div>
      </div>
    </div>

    <section class="cities catalog-cities" aria-labelledby="catalog-cities-heading">
      <div class="container">

        <div class="section-header catalog-section-header">
          <div>
            <span class="eyebrow">Путеводитель</span>
            <h2 id="catalog-cities-heading">Все направления <span class="catalog-count" id="catalogVisibleCount" aria-live="polite">19</span></h2>
          </div>
          <div class="catalog-section-header__tools">
            <div class="catalog-search-wrap">
              <input
                type="search"
                class="catalog-search"
                id="catalogSearch"
                placeholder="Найти город…"
                autocomplete="off"
                enterkeyhint="search"
                aria-label="Поиск по названию города"
              />
            </div>
            <div class="catalog-view-toggle" role="group" aria-label="Вид каталога">
              <button
                type="button"
                class="catalog-view-btn is-active"
                data-catalog-view="grid"
                aria-pressed="true"
                aria-label="Вид сеткой"
                title="Сетка"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect x="3" y="3" width="7" height="7" rx="1" />
                  <rect x="14" y="3" width="7" height="7" rx="1" />
                  <rect x="3" y="14" width="7" height="7" rx="1" />
                  <rect x="14" y="14" width="7" height="7" rx="1" />
                </svg>
              </button>
              <button
                type="button"
                class="catalog-view-btn"
                data-catalog-view="list"
                aria-pressed="false"
                aria-label="Вид списком"
                title="Список"
              >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="8" y1="6" x2="21" y2="6" />
                  <line x1="8" y1="12" x2="21" y2="12" />
                  <line x1="8" y1="18" x2="21" y2="18" />
                  <line x1="3" y1="6" x2="3.01" y2="6" />
                  <line x1="3" y1="12" x2="3.01" y2="12" />
                  <line x1="3" y1="18" x2="3.01" y2="18" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="cities__grid catalog-grid">

          <!-- ЮБК -->
          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="city-card fade-up" data-delay="1" data-region="юбк" data-tags="пляж курорт архитектура">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Ялта — набережная и морской курорт Южного берега Крыма" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Ялта</h3>
              <p class="city-card__lead">Жемчужина ЮБК: набережная, Ливадийский дворец и мягкий климат круглый сезон.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alushta/' ) ); ?>" class="city-card fade-up" data-delay="1" data-region="юбк" data-tags="пляж горы курорт">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Алушта — курорт у подножия гор" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Алушта</h3>
              <p class="city-card__lead">Длинная набережная, канатная дорога и выход к тропам Большого каньона.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/gurzuf/' ) ); ?>" class="city-card fade-up" data-delay="2" data-region="юбк" data-tags="пляж природа">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Гурзуф — бухта и скалы" style="width:100%;height:100%;background:linear-gradient(135deg,#1e3a5f 0%,#3d6b8a 50%,#c4a574 100%);"></div>
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Гурзуф</h3>
              <p class="city-card__lead">Уютная бухта, скала Адалары и тихие пляжи в тени платанов.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/foros/' ) ); ?>" class="city-card fade-up" data-delay="2" data-region="юбк" data-tags="пляж природа архитектура">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Форос — мыс и вилла" style="width:100%;height:100%;background:linear-gradient(135deg,#0f172a 0%,#334155 40%,#e8c872 100%);"></div>
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Форос</h3>
              <p class="city-card__lead">Мыс Фиолент, церковь Воскресения и виды на ярко-синюю воду.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/alupka/' ) ); ?>" class="city-card fade-up" data-delay="3" data-region="юбк" data-tags="пляж архитектура горы">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Алупка — Воронцовский дворец" style="width:100%;height:100%;background:linear-gradient(135deg,#14532d 0%,#166534 45%,#fde68a 100%);"></div>
              <span class="city-card__badge">ЮБК</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Алупка</h3>
              <p class="city-card__lead">Воронцовский дворец, парк и пляжи у подножия Ай-Петри.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <!-- Западный -->
          <a href="<?php echo esc_url( home_url( '/gorod/sevastopol/' ) ); ?>" class="city-card fade-up" data-delay="3" data-region="западный" data-tags="история пляж архитектура">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/2.jpg" alt="Севастополь — бухты и Херсонес" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Севастополь</h3>
              <p class="city-card__lead">Херсонес Таврический, бухты Черного моря и морская история города.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/evpatoriya/' ) ); ?>" class="city-card fade-up" data-delay="4" data-region="западный" data-tags="пляж лечение курорт">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Евпатория — пляжи и набережная" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Евпатория</h3>
              <p class="city-card__lead">Семейный курорт: мелководье, грязелечение и квартал Караимских кенас.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/saki/' ) ); ?>" class="city-card fade-up" data-delay="4" data-region="западный" data-tags="лечение курорт">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Саки — озеро и курорт" style="width:100%;height:100%;background:linear-gradient(135deg,#0c4a6e 0%,#0369a1 50%,#fcd34d 100%);"></div>
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Саки</h3>
              <p class="city-card__lead">Грязелечебницы, солёное озеро и спокойный отдых у западного побережья.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/bakhchisaray/' ) ); ?>" class="city-card fade-up" data-delay="5" data-region="западный" data-tags="история архитектура природа">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Бахчисарай — ханский дворец" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Бахчисарай</h3>
              <p class="city-card__lead">Ханский дворец, Чуфут-Кале и восточный колорит предгорья.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/inkerman/' ) ); ?>" class="city-card fade-up" data-delay="5" data-region="западный" data-tags="история природа архитектура">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Инкерман — пещерный монастырь" style="width:100%;height:100%;background:linear-gradient(135deg,#292524 0%,#57534e 50%,#a8a29e 100%);"></div>
              <span class="city-card__badge">Западный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Инкерман</h3>
              <p class="city-card__lead">Пещерный монастырь Св. Климента, каньон и тихие тропы над бухтой.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <!-- Восточный -->
          <a href="<?php echo esc_url( home_url( '/gorod/feodosiya/' ) ); ?>" class="city-card fade-up" data-delay="6" data-region="восточный" data-tags="пляж история курорт">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Феодосия — набережная и порт" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Феодосия</h3>
              <p class="city-card__lead">Древний порт, галерея Айвазовского и широкие пляжи восточного берега.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/sudak/' ) ); ?>" class="city-card fade-up" data-delay="6" data-region="восточный" data-tags="история пляж вино">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Судак — Генуэзская крепость" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Судак</h3>
              <p class="city-card__lead">Крепость на скале, бухты и винные маршруты восточного побережья.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/koktebel/' ) ); ?>" class="city-card fade-up" data-delay="7" data-region="восточный" data-tags="природа пляж">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Коктебель — залив и гора Карадаг" style="width:100%;height:100%;background:linear-gradient(135deg,#7c2d12 0%,#ea580c 45%,#fbbf24 100%);"></div>
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Коктебель</h3>
              <p class="city-card__lead">Залив, тропы вокруг Карадага и творческая атмосфера курортного посёлка.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/kerch/' ) ); ?>" class="city-card fade-up" data-delay="7" data-region="восточный" data-tags="история пляж">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/10.jfif" alt="Керчь — пролив и история" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Керчь</h3>
              <p class="city-card__lead">Пролив, древний Пантикапей и памятники Великой Отечественной войны.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/novy-svet/' ) ); ?>" class="city-card fade-up" data-delay="8" data-region="восточный" data-tags="природа вино пляж">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Новый Свет — тропа Голицына" style="width:100%;height:100%;background:linear-gradient(135deg,#134e4a 0%,#0d9488 50%,#a7f3d0 100%);"></div>
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Новый Свет</h3>
              <p class="city-card__lead">Тропа Голицына, дегустации игристого и бухты заповедного мыса.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/stary-krym/' ) ); ?>" class="city-card fade-up" data-delay="8" data-region="восточный центральный" data-tags="история природа">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Старый Крым — степь и храмы" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Восточный · Центр</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Старый Крым</h3>
              <p class="city-card__lead">Древний Солхат, храмы и степные панорамы между востоком и центром полуострова.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/shcholkino/' ) ); ?>" class="city-card fade-up" data-delay="9" data-region="восточный" data-tags="пляж курорт">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Щёлкино — Азовское море" style="width:100%;height:100%;background:linear-gradient(135deg,#1e3a8a 0%,#38bdf8 55%,#fef08a 100%);"></div>
              <span class="city-card__badge">Восточный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Щёлкино</h3>
              <p class="city-card__lead">Азовское побережье, просторные пляжи и спокойный семейный отдых.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <!-- Центральный -->
          <a href="<?php echo esc_url( home_url( '/gorod/simferopol/' ) ); ?>" class="city-card fade-up" data-delay="9" data-region="центральный" data-tags="история курорт">
            <div class="city-card__img-wrap">
              <img class="city-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Симферополь — столица Крыма" width="600" height="450" loading="lazy" />
              <span class="city-card__badge">Центральный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Симферополь</h3>
              <p class="city-card__lead">Транспортный узел, музеи и отправная точка в горы и на побережье.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

          <a href="<?php echo esc_url( home_url( '/gorod/belogorsk/' ) ); ?>" class="city-card fade-up" data-delay="10" data-region="центральный" data-tags="природа горы история">
            <div class="city-card__img-wrap">
              <div class="city-card__img city-card__img--placeholder" role="img" aria-label="Белогорск — Белая скала" style="width:100%;height:100%;background:linear-gradient(135deg,#fef3c7 0%,#f59e0b 40%,#78350f 100%);"></div>
              <span class="city-card__badge">Центральный</span>
              <div class="city-card__overlay" aria-hidden="true"></div>
            </div>
            <div class="city-card__body">
              <h3 class="city-card__title">Белогорск</h3>
              <p class="city-card__lead">Белая скала-Ак-Кая, степь и видовые точки в сердце полуострова.</p>
              <span class="city-card__link">Узнать больше<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
            </div>
          </a>

        </div>

        <div
          class="catalog-empty"
          id="catalogEmpty"
          hidden
          role="status"
          aria-live="polite"
        >
          <div class="catalog-empty__inner">
            <p class="catalog-empty__title">Ничего не найдено</p>
            <p class="catalog-empty__hint">Попробуйте изменить поиск или сбросить фильтры по региону и интересам.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
