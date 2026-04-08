<?php
/**
 * Template Name: О проекте
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = get_template_directory_uri() . '/assets';
get_header();
?>
<main class="catalog-page">

    <section class="catalog-hero catalog-hero--about" aria-label="О проекте">
      <div class="container">
        <nav class="breadcrumbs breadcrumbs--on-dark breadcrumbs--center" aria-label="Навигационная цепочка">
          <ol class="breadcrumbs__list">
            <li class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a></li>
            <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">О проекте</span></li>
          </ol>
        </nav>
        <p class="eyebrow">Крым — Путеводитель</p>
        <h1 class="hero__title">О проекте</h1>
        <p class="hero__subtitle">
          Помогаем открывать полуостров через города, побережье, историю и природу: собираем обзоры и идеи для маршрутов в одном месте — спокойно, без навязчивой рекламы и с уважением к региону и читателю.
        </p>
      </div>
    </section>

    <section class="about-invite" aria-labelledby="about-invite-heading">
      <div class="container">
        <div class="about-invite__card">
          <div class="about-invite__lead">
            <span class="about-invite__eyebrow">Сообщество</span>
            <h2 id="about-invite-heading" class="about-invite__title">Хотите помочь проекту?</h2>
            <p class="about-invite__text">
              Если хотите хоть как-то поддержать развитие сайта — поделиться идеей, указать на неточность или предложить материал — напишите нам на почту. Мы читаем письма и учитываем обратную связь по мере сил.
            </p>
          </div>
          <a href="mailto:info@crimea-guide.ru" class="btn btn-primary about-invite__btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            Написать на почту
          </a>
        </div>
      </div>
    </section>

    <section class="about-content" aria-labelledby="about-mission-heading">
      <div class="container about-content__inner">

        <div class="about-section about-section--rich">
          <h2 id="about-mission-heading">Зачем мы это делаем</h2>
          <div class="about-mission">
            <div class="about-prose about-prose--intro">
              <p>
                Проект задуман как независимый редакторский путеводитель: дать понятную опору тем, кто впервые едет на отдых или в деловую поездку, и тем, кто живёт в Крыму и хочет глубже узнать соседние города и достопримечательности.
              </p>
              <p>
                Мы стремимся держать тон нейтральным и дружелюбным — без политики и без давления «купи сейчас».
              </p>
            </div>

            <p class="about-accent-line">Спокойный редакторский тон — без спешки и навязчивой рекламы.</p>

            <h3 class="about-prose__subhead">Для кого сайт</h3>
            <div class="about-audience">
              <div class="about-audience__item">
                <span class="about-audience__icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                </span>
                <p class="about-audience__text">Туристам и автопутешественникам — маршрут и первое знакомство с полуостровом.</p>
              </div>
              <div class="about-audience__item">
                <span class="about-audience__icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0-.83-.83-.83-2.17 0-3L9 1"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.4-1.4"/><path d="m10 18 1.4-1.4"/></svg>
                </span>
                <p class="about-audience__text">Любителям истории, архитектуры, виноделия и природы.</p>
              </div>
              <div class="about-audience__item">
                <span class="about-audience__icon" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </span>
                <p class="about-audience__text">Жителям региона — заметки о городах и точках интереса под рукой.</p>
              </div>
            </div>

            <div class="about-callout about-callout--notice" aria-labelledby="about-not-heading">
              <div class="about-callout__icon" aria-hidden="true">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
              </div>
              <div class="about-callout__body">
                <p id="about-not-heading" class="about-callout__title">Чем мы не являемся</p>
                <p class="about-callout__text">
                  Это не официальный туристический портал органов власти и не сервис бронирования жилья, билетов или экскурсий.
                </p>
                <p class="about-callout__text">
                  Мы не заменяем кассы, диспетчерские службы и официальные сайты музеев — там всегда стоит уточнять цены, часы работы и правила посещения.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="about-features" aria-labelledby="about-inside-heading">
      <div class="container about-features__container">
        <header class="about-features__header">
          <span class="about-features__eyebrow">Разделы</span>
          <h2 id="about-inside-heading" class="about-features__title">Что внутри сайта</h2>
          <p class="about-features__lead">Три опоры путеводителя — города, каталог мест и главная как точка входа.</p>
        </header>
        <div class="about-feature-grid">
          <article class="about-feature-card">
            <div class="about-feature-card__icon" aria-hidden="true">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/><path d="M9 9v0"/><path d="M9 12v0"/><path d="M9 15v0"/><path d="M9 18v0"/></svg>
            </div>
            <div class="about-feature-card__body">
              <h3 class="about-feature-card__name">Города</h3>
              <p class="about-feature-card__text">Обзоры городов, атмосфера и с чего начать знакомство с направлением.</p>
              <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="btn btn-outline about-feature-card__btn">Перейти в раздел</a>
            </div>
          </article>
          <article class="about-feature-card">
            <div class="about-feature-card__icon" aria-hidden="true">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="about-feature-card__body">
              <h3 class="about-feature-card__name">Достопримечательности</h3>
              <p class="about-feature-card__text">Каталог мест с фильтрами и карточками объектов для планирования маршрута.</p>
              <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="btn btn-outline about-feature-card__btn">Перейти в раздел</a>
            </div>
          </article>
          <article class="about-feature-card">
            <div class="about-feature-card__icon" aria-hidden="true">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div class="about-feature-card__body">
              <h3 class="about-feature-card__name">Главная</h3>
              <p class="about-feature-card__text">Витрина полуострова: настроения маршрутов и быстрый вход в разделы.</p>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline about-feature-card__btn">На главную</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="about-content" aria-labelledby="about-process-heading">
      <div class="container about-content__inner">

        <div class="about-section about-section--rich">
          <h2 id="about-process-heading">Как мы готовим материалы</h2>
          <div class="about-process">
            <ol class="about-process-cards">
              <li class="about-process-cards__item">
                <span class="about-process-cards__num" aria-hidden="true">1</span>
                <p class="about-process-cards__label">Источники и проверка</p>
                <p class="about-process-cards__text">
                  Факты и даты — из общедоступных источников: справочники, открытые материалы учреждений и проверенные публикации. По мере сил перекрёстно сверяем ключевые сведения.
                </p>
              </li>
              <li class="about-process-cards__item">
                <span class="about-process-cards__num" aria-hidden="true">2</span>
                <p class="about-process-cards__label">Обновления</p>
                <p class="about-process-cards__text">
                  Правим текст по мере появления новой информации. Заметили неточность — напишите, учтём при очередной правке.
                </p>
              </li>
              <li class="about-process-cards__item">
                <span class="about-process-cards__num" aria-hidden="true">3</span>
                <p class="about-process-cards__label">Фото и визуал</p>
                <p class="about-process-cards__text">
                  Свои снимки и стоки с соблюдением лицензий. У разделов разный ритм, но общий аккуратный тон.
                </p>
              </li>
            </ol>

            <div class="about-callout about-callout--soft">
              <div class="about-callout__icon about-callout__icon--soft" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
              </div>
              <div class="about-callout__body">
                <p class="about-callout__title">Язык и тон</p>
                <p class="about-callout__text">
                  Нейтральный, уважительный к региону и читателю — без сенсаций и без обещаний, которые невозможно выполнить.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="about-section about-section--rich" aria-labelledby="about-disclaimer-heading">
          <h2 id="about-disclaimer-heading">Ограничения и ответственность</h2>
          <div class="about-disclaimer about-disclaimer--visual">
            <div class="about-disclaimer__icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
            </div>
            <div class="about-disclaimer__body">
              <p>
                Режимы работы музеев и заповедников, стоимость входа, расписания экскурсий и транспорта <strong>могут меняться</strong>.
              </p>
              <p>
                Перед поездкой сверяйте актуальные данные на официальных ресурсах объектов и у перевозчиков.
              </p>
              <p>
                Описания маршрутов и советы по отдыху <strong>не отменяют</strong> Правила дорожного движения и требования безопасности на воде, в горах и на природных территориях.
              </p>
              <p>
                Решения в пути вы принимаете сами. Будьте внимательны к погоде, указателям и местным регламентам.
              </p>
              <p>
                Как мы обрабатываем данные — в <a href="<?php echo esc_url( home_url( '/politika/' ) ); ?>">политике конфиденциальности</a>.
              </p>
            </div>
          </div>
        </div>

        <div class="about-section about-team-section" aria-labelledby="about-team-heading">
          <h2 id="about-team-heading">Команда</h2>
          <div class="about-team-card">
            <div class="about-team-card__aside" aria-hidden="true">
              <div class="about-team-card__mesh"></div>
              <div class="about-team-card__badge">
                <svg class="about-team-card__badge-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                <span class="about-team-card__badge-label">Крым — Путеводитель</span>
              </div>
            </div>
            <div class="about-team-card__main">
              <p class="about-team-card__eyebrow">Кто стоит за сайтом</p>
              <p class="about-team-card__lead">
                Проект создают энтузиасты региона и те, кто любит путешествовать по полуострову. Мы небольшая редакция авторов и редакторов — не медиахолдинг и не рекламное агентство.
              </p>
              <p class="about-team-card__text">
                Наша задача — спокойно собирать обзоры, факты и идеи для маршрутов, чтобы вам было проще открывать Крым и понимать его: от побережья до гор и исторических мест.
              </p>
              <ul class="about-team-card__traits">
                <li class="about-team-card__trait">
                  <span class="about-team-card__trait-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                  </span>
                  <span class="about-team-card__trait-body">
                    <span class="about-team-card__trait-title">Редакция и тексты</span>
                    <span class="about-team-card__trait-desc">Города, достопримечательности, подсказки для поездки — всё проходит через ручную вычитку и здравый смысл.</span>
                  </span>
                </li>
                <li class="about-team-card__trait">
                  <span class="about-team-card__trait-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/><path d="M16 16h5v5"/></svg>
                  </span>
                  <span class="about-team-card__trait-body">
                    <span class="about-team-card__trait-title">Развитие по мере сил</span>
                    <span class="about-team-card__trait-desc">Материалы дополняем и правим по мере возможности — особенно когда читатели подсказывают неточности.</span>
                  </span>
                </li>
                <li class="about-team-card__trait">
                  <span class="about-team-card__trait-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                  </span>
                  <span class="about-team-card__trait-body">
                    <span class="about-team-card__trait-title">Открытый диалог</span>
                    <span class="about-team-card__trait-desc">Идеи, замечания и предложения по содержанию всегда можно прислать на почту — мы читаем и стараемся откликаться.</span>
                  </span>
                </li>
              </ul>
              <div class="about-team-card__cta">
                <a href="mailto:info@crimea-guide.ru" class="about-team-card__mail">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  info@crimea-guide.ru
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="about-cta" aria-label="Дальше по сайту">
      <div class="container">
        <div class="about-cta__panel">
          <p class="about-cta__eyebrow">Дальше</p>
          <p class="about-cta__title">Куда отправиться на сайте</p>
          <div class="about-cta__actions">
            <a href="<?php echo esc_url( home_url( '/gorod/' ) ); ?>" class="btn btn-primary">Смотреть города</a>
            <a href="<?php echo esc_url( home_url( '/dostoprimechatelnosti/' ) ); ?>" class="btn btn-outline">Достопримечательности</a>
          </div>
          <p class="about-cta__secondary about-cta__secondary--spaced">
            <a href="mailto:info@crimea-guide.ru" class="about-cta__contact-link">Написать нам</a>
            <span class="about-cta__sep" aria-hidden="true">·</span>
            <a href="mailto:info@crimea-guide.ru">info@crimea-guide.ru</a>
          </p>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
