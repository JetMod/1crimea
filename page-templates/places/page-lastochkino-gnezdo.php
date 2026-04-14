<?php
/**
 * Template Name: Место — Ласточкино гнездо
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main id="main-content">

    <section class="city-hero" aria-label="Ласточкино гнездо">
      <div class="city-hero__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg');" aria-hidden="true"></div>
      <div class="city-hero__overlay" aria-hidden="true"></div>
      <div class="container">
        <div class="city-hero__content">
          <nav class="breadcrumbs breadcrumbs--on-dark" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="breadcrumbs__link">Достопримечательности</a></li>
              <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="breadcrumbs__link">Ялта</a></li>
              <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Ласточкино гнездо</span></li>
            </ol>
          </nav>
          <span class="city-hero__badge">Ялта</span>
          <h1 class="city-hero__title">Ласточкино гнездо</h1>
          <p class="city-hero__tagline">
            Замок на отвесной скале мыса Аю-Даг — один из самых узнаваемых силуэтов Южного берега: море под ногами, обзор на Ялту и Гаспру.
          </p>
          <div class="city-hero__tags">
            <span class="city-hero__tag">Архитектура</span>
            <span class="city-hero__tag">Природа</span>
            <span class="city-hero__tag">Смотровые</span>
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

    <section class="place-quickbar" aria-label="Кратко о месте">
      <div class="container">
        <ul class="place-quickbar__list" role="list">
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Тип</span>
              <span class="place-quickbar__value">Замок-музей</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Время визита</span>
              <span class="place-quickbar__value">1–2 ч</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Лучший сезон</span>
              <span class="place-quickbar__value">Апрель–октябрь</span>
            </span>
          </li>
          <li class="place-quickbar__item">
            <span class="place-quickbar__icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </span>
            <span class="place-quickbar__meta">
              <span class="place-quickbar__label">Для кого</span>
              <span class="place-quickbar__value">Фото, прогулки, семьи</span>
            </span>
          </li>
        </ul>
      </div>
    </section>

    <section class="city-intro" aria-labelledby="place-intro-heading">
      <div class="container city-intro__grid">
        <div class="city-intro__copy fade-up" data-delay="1">
          <h2 id="place-intro-heading" class="place-article__h2">О «Ласточкином гнезде»</h2>
          <p>
            Домик на скале у поселка Гаспра — не средневековый замок, а романтическая постройка начала XX века в духе европейских неоготических вилл.
            Площадь замка «Ласточкино гнездо» составляет 120&nbsp;м²: это небольшой архитектурный объект, сравнимый по масштабу с компактной двухкомнатной квартирой в типовом панельном доме; внутри два этажа.
            Силуэт хорошо читается с моря и с дороги вдоль побережья; многие приезжают сюда ради вида и короткой экскурсии по залам.
          </p>
          <p>
            В высокий сезон стоит закладывать время на подъём от парковки и очереди; сочетайте визит с прогулкой по тропам Аю-Дага или с поездкой в сторону Ливадии и Массандры.
            Часы работы и цены билетов уточняйте на официальных ресурсах музея перед поездкой.
          </p>

          <section class="place-article__section" aria-labelledby="place-route-heading">
            <h3 id="place-route-heading" class="place-article__h3">Маршрут и смотровые</h3>
            <p>
              От входа ведут пешеходные дорожки к смотровым площадкам: отсюда открываются панорамы моря и соседних склонов.
              Внутри — небольшая экспозиция; многим гостям важнее сами виды и атмосфера скалы над волнами.
            </p>
          </section>

          <section class="place-article__section" aria-labelledby="place-tickets-heading">
            <h3 id="place-tickets-heading" class="place-article__h3">Часы и билеты</h3>
            <p>
              Режим работы и стоимость входа зависят от сезона. Перед визитом проверьте актуальное расписание и ограничения по потокам в праздники и пик сезона.
            </p>
          </section>
        </div>

        <aside class="city-facts fade-up" data-delay="2" aria-labelledby="place-practical-title">
          <p id="place-practical-title" class="city-facts__title">Практически</p>
          <dl class="city-facts__dl">
            <div class="city-facts__row">
              <dt class="city-facts__dt">Категория</dt>
              <dd class="city-facts__dd city-facts__dd--place-meta">
                <span class="place-facts__category" title="Тип объекта">
                  <span class="place-facts__category-icon" aria-hidden="true">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
                  </span>
                  <span>Замок-музей</span>
                </span>
              </dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Лучший сезон</dt>
              <dd class="city-facts__dd city-facts__dd--place-meta">
                <span class="place-facts__season">
                  <span class="place-facts__season-indicator" aria-hidden="true" title="Апрель–октябрь">
                    <span class="place-facts__season-dot place-facts__season-dot--muted"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--good"></span>
                    <span class="place-facts__season-dot place-facts__season-dot--muted"></span>
                  </span>
                  <span class="place-facts__season-label">Апрель–октябрь</span>
                </span>
              </dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Адрес</dt>
              <dd class="city-facts__dd">пос. Гаспра, Ялта (ЮБК). Ориентир — мыс Аю-Даг, замок на скале над морем.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Как добраться</dt>
              <dd class="city-facts__dd">От Ялты — маршрутки и автобусы в сторону Гаспры; часто удобнее такси или экскурсионный трансфер. От остановки — пешком по указателям к кассам и подъёму.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Время визита</dt>
              <dd class="city-facts__dd">Ориентир: 1–2 часа на осмотр и фото; полдня — если добавить тропы Аю-Дага или соседние точки.</dd>
            </div>
            <div class="city-facts__row">
              <dt class="city-facts__dt">Карта</dt>
              <dd class="city-facts__dd">
                <a href="<?php echo esc_url( 'https://yandex.ru/maps/?text=%D0%9B%D0%B0%D1%81%D1%82%D0%BE%D1%87%D0%BA%D0%B8%D0%BD%D0%BE%20%D0%B3%D0%BD%D0%B5%D0%B7%D0%B4%D0%BE' ); ?>" class="place-article__map-link" rel="noopener noreferrer" target="_blank">Открыть на карте</a>
              </dd>
            </div>
          </dl>
          <div class="city-facts__tags" aria-label="Темы">
            <span class="city-facts__tag">Архитектура</span>
            <span class="city-facts__tag">Природа</span>
            <span class="city-facts__tag">Смотровые</span>
          </div>
        </aside>
      </div>
    </section>

    <section class="place-facts-strip" aria-labelledby="place-facts-strip-heading">
      <div class="container">
        <h2 id="place-facts-strip-heading" class="screen-reader-text">Ласточкино гнездо в цифрах</h2>
        <ul class="place-facts-strip__list" role="list">
          <li class="place-facts-strip__item">
            <span class="place-facts-strip__value">40 м</span>
            <span class="place-facts-strip__label">над уровнем моря</span>
          </li>
          <li class="place-facts-strip__item">
            <span class="place-facts-strip__value">120 м²</span>
            <span class="place-facts-strip__label">площадь замка</span>
          </li>
          <li class="place-facts-strip__item">
            <span class="place-facts-strip__value">1912</span>
            <span class="place-facts-strip__label">год постройки в нынешнем виде</span>
          </li>
          <li class="place-facts-strip__item">
            <span class="place-facts-strip__value">2 этажа</span>
            <span class="place-facts-strip__label">внутри</span>
          </li>
          <li class="place-facts-strip__item">
            <span class="place-facts-strip__value">~500 тыс.</span>
            <span class="place-facts-strip__label">посетителей в год</span>
          </li>
        </ul>
      </div>
    </section>

    <section class="place-highlights" aria-labelledby="place-highlights-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Маршрут</span>
            <h2 id="place-highlights-heading">На что обратить внимание</h2>
          </div>
        </div>
        <ol class="place-highlights__list">
          <li class="place-highlights__item fade-up" data-delay="1">
            <span class="place-highlights__num" aria-hidden="true">1</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Силуэт со стороны моря</h3>
              <p class="place-highlights__text">
                Классический ракурс — с воды или с набережных маршрутов: замок «висит» над волной и хорошо узнаваем в ясную погоду.
              </p>
            </div>
          </li>
          <li class="place-highlights__item fade-up" data-delay="2">
            <span class="place-highlights__num" aria-hidden="true">2</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Смотровые и тропы Аю-Дага</h3>
              <p class="place-highlights__text">
                Рядом — пешеходные маршруты по массиву мыса; учитывайте перепады и обувь, если планируете длинную прогулку.
              </p>
            </div>
          </li>
          <li class="place-highlights__item fade-up" data-delay="3">
            <span class="place-highlights__num" aria-hidden="true">3</span>
            <div class="place-highlights__body">
              <h3 class="place-highlights__title">Соседние точки ЮБК</h3>
              <p class="place-highlights__text">
                Логично сочетать с Ливадийским дворцом, Массандрой или ялтинской набережной — по времени и транспорту это один «пояс» отдыха.
              </p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <section class="city-gallery" aria-labelledby="place-gallery-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Фото</span>
            <h2 id="place-gallery-heading">Галерея</h2>
          </div>
        </div>
        <div class="city-gallery__grid" role="list">
          <button type="button" class="city-gallery__item city-gallery__item--featured fade-up" data-delay="1" role="listitem" aria-label="Увеличить: скалы и море у мыса">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg" alt="Скалы и море у побережья Южного берега Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: набережная Ялты">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/1.jpg" alt="Набережная и море Южного берега Крыма" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: парк и зелень">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/3.jpg" alt="Аллея с пальмами в парке" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="1" role="listitem" aria-label="Увеличить: горы и облака">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/7.webp" alt="Горный склон и панорама" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="2" role="listitem" aria-label="Увеличить: дворец в парке">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Дворец и парковая зона" width="800" height="600" loading="lazy" />
          </button>
          <button type="button" class="city-gallery__item fade-up" data-delay="3" role="listitem" aria-label="Увеличить: пейзаж ЮБК">
            <img class="city-gallery__thumb" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/img9.webp" alt="Пейзаж Южного берега" width="800" height="600" loading="lazy" />
          </button>
        </div>
      </div>
    </section>

    <section class="place-practical" aria-labelledby="place-practical-heading">
      <div class="container">
        <h2 id="place-practical-heading" class="place-article__h2">Практическая информация</h2>
        <div class="place-practical__grid">
          <div class="place-practical__quartet">
          <article class="place-practical__card fade-up" data-delay="1">
            <span class="place-practical__icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            </span>
            <h3 class="place-practical__card-title">Режим работы</h3>
            <div class="place-practical__card-body">
              <p class="place-practical__note">
                Время работы касс и входа зависит от сезона и календаря; в праздничные дни режим может отличаться.
                Конкретные часы здесь не приводим — их стоит смотреть в официальных источниках музея-заповедника перед поездкой.
              </p>
            </div>
          </article>

          <article class="place-practical__card fade-up" data-delay="2">
            <span class="place-practical__icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </span>
            <h3 class="place-practical__card-title">Билеты и льготы</h3>
            <div class="place-practical__card-body">
              <p class="place-practical__note">
                Стоимость входа и условия льгот меняются; суммы с путеводительных сайтов быстро устаревают.
                Актуальные тарифы и правила покупки (онлайн / в кассе) смотрите на официальном сайте музея-заповедника или уточняйте в кассе.
              </p>
            </div>
          </article>

          <article class="place-practical__card fade-up" data-delay="3">
            <span class="place-practical__icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
            </span>
            <h3 class="place-practical__card-title">Свет</h3>
            <div class="place-practical__card-body">
              <p class="place-practical__note">
                Мягкий боковой свет (утро и вечер) обычно выгоднее для снимков скалы, чем полдень с резкими тенями — это общее наблюдение, не «идеальное» время.
              </p>
            </div>
          </article>

          <article class="place-practical__card fade-up" data-delay="4">
            <span class="place-practical__icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/></svg>
            </span>
            <h3 class="place-practical__card-title">Ракурсы</h3>
            <div class="place-practical__card-body">
              <p class="place-practical__note">
                Смотровые у замка и тропы на Аю-Даге дают разные планы; ракурс с воды, если доступен, зависит от расписания и правил перевозчика.
              </p>
            </div>
          </article>
          </div>

          <article class="place-practical__card place-practical__card--wide fade-up" data-delay="5">
            <div class="place-practical__wide-head">
              <span class="place-practical__icon place-practical__icon--route" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </span>
              <div class="place-practical__wide-head-text">
                <h3 class="place-practical__card-title">Как добраться</h3>
                <p class="place-practical__wide-kicker">Ялта → Гаспра, дальше пешком по указателям</p>
              </div>
            </div>
            <div class="place-practical__card-body place-practical__card-body--route">
              <ol class="place-practical__steps place-practical__steps--route">
                <li class="place-practical__step">Из Ялты — транспорт в сторону Гаспры вдоль побережья; номера маршрутов и посадки уточняйте на автовокзале или у перевозчика — схемы меняются.</li>
                <li class="place-practical__step">Ориентируйтесь на указатели к Ласточкиному гнезду; названия остановок на месте могут отличаться от привычных подписей в приложениях.</li>
                <li class="place-practical__step">От остановки к кассам и подъёму — короткий пеший участок по указателям; время зависит от очередей и темпа.</li>
              </ol>
            </div>
          </article>
        </div>
      </div>
    </section>

  
    <section class="place-history" aria-labelledby="place-history-heading">
      <div class="container">
        <div class="section-header place-history__header fade-up">
          <div>
            <span class="eyebrow">Хронология</span>
            <h2 id="place-history-heading" class="place-article__h2">История</h2>
            <p class="place-history__lead">
              От скалы и дачи до знаменитого вида. Ниже — даты; здесь — коротко, как всё это появилось.
            </p>
          </div>
        </div>
        <div class="place-history__story fade-up">
          <p>
            Скалу на мысе знали давно. Дом на обрыве построили для отдыха — как сказочный замок, не как музей.
            С моря и с дороги его хорошо видно, силуэт запоминается, поэтому дом быстро стал «лицом» побережья на открытках и в путеводителях.
          </p>
          <p>
            В XX веке сюда поехали тысячи туристов. После землетрясения здание отремонтировали и открыли для входа по билетам: кассы, экскурсии, летние очереди.
            Так дача превратилась в обычную достопримечательность — со своим расписанием и правилами, как у других музеев.
          </p>
        </div>
        <ol class="place-history__timeline" role="list">
          <li class="place-history__event fade-up" data-delay="1">
            <span class="place-history__year">1011</span>
            <div class="place-history__body">
              <p class="place-history__text">Первое письменное упоминание скалы.</p>
            </div>
          </li>
          <li class="place-history__event fade-up" data-delay="2">
            <span class="place-history__year">1895</span>
            <div class="place-history__body">
              <p class="place-history__text">Нефтяник Штейнгель строит первый деревянный домик.</p>
            </div>
          </li>
          <li class="place-history__event fade-up" data-delay="3">
            <span class="place-history__year">1912</span>
            <div class="place-history__body">
              <p class="place-history__text">Архитектор Шервуд перестраивает здание в готический замок.</p>
            </div>
          </li>
          <li class="place-history__event fade-up" data-delay="1">
            <span class="place-history__year">1927</span>
            <div class="place-history__body">
              <p class="place-history__text">Землетрясение, трещина в скале.</p>
            </div>
          </li>
          <li class="place-history__event fade-up" data-delay="2">
            <span class="place-history__year">1968</span>
            <div class="place-history__body">
              <p class="place-history__text">Реставрация, открытие как музей.</p>
            </div>
          </li>
        </ol>
      </div>
    </section>

    <section class="quote city-quote" aria-label="Цитата о Ласточкином гнезде">
      <div class="quote__bg" style="background-image: url('<?php echo esc_url( $crimea_assets ); ?>/img/cities/5.jpg')" aria-hidden="true"></div>
      <div class="quote__overlay" aria-hidden="true"></div>
      <div class="container quote__content fade-up">
        <p class="city-quote__kicker">Впечатление</p>
        <blockquote class="quote__text city-quote__text">
          <span class="city-quote__line">«С моря замок кажется игрушкой на скале,</span>
          <span class="city-quote__line">а с тропы — тем самым силуэтом, за который едут на весь Южный берег»</span>
        </blockquote>
        <footer class="city-quote__footer">
          <cite class="quote__cite city-quote__cite">— о Ласточкином гнезде и видах мыса Аю-Даг</cite>
        </footer>
      </div>
    </section>

    <section class="place-related" aria-labelledby="place-related-heading">
      <div class="container">
        <div class="section-header fade-up">
          <div>
            <span class="eyebrow">Ялта</span>
            <h2 id="place-related-heading">Рядом</h2>
          </div>
        </div>
        <div class="city-sights__grid">
          <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/livadiyskiy-dvorets/' ) ); ?>" class="sight-card fade-up" data-delay="1">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/4.jpg" alt="Ливадийский дворец среди парка" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Ливадийский дворец</h3>
              <p class="sight-card__text">Белоснежная резиденция у моря: парк, музей и место Ялтинской конференции 1945 года.</p>
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
              <h3 class="sight-card__title">Набережная Ялты</h3>
              <p class="sight-card__text">Главная прогулочная линия города: кафе, причалы и виды на море.</p>
            </div>
          </a>
          <a href="<?php echo esc_url( home_url( '/gorod/yalta/' ) ); ?>" class="sight-card fade-up" data-delay="3">
            <div class="sight-card__img-wrap">
              <img class="sight-card__img" src="<?php echo esc_url( $crimea_assets ); ?>/img/cities/6.webp" alt="Парк и винодельня у Массандровского дворца" width="800" height="600" loading="lazy" />
              <span class="sight-card__icon" aria-hidden="true" title="История">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/><path d="M9 9v0M9 12v0M9 15v0M9 18v0"/></svg>
              </span>
            </div>
            <div class="sight-card__body">
              <h3 class="sight-card__title">Массандровский дворец</h3>
              <p class="sight-card__text">Дворец и дегустации в подвалах Массандры у подножия гор.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <nav class="place-pagination" id="placePagination" hidden aria-label="Соседние достопримечательности">
      <div class="container">
        <div class="place-pagination__inner">
          <a class="place-pagination__link place-pagination__link--prev" data-place-pagination="prev" href="">
            <span class="place-pagination__dir">← Предыдущее место</span>
            <span class="place-pagination__title" data-place-pagination="prev-title"></span>
          </a>
          <a class="place-pagination__link place-pagination__link--next" data-place-pagination="next" href="">
            <span class="place-pagination__dir">Следующее место →</span>
            <span class="place-pagination__title" data-place-pagination="next-title"></span>
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
