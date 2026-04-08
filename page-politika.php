<?php
/**
 * Template Name: Политика конфиденциальности
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="catalog-page">

  <section class="catalog-hero catalog-hero--about" aria-label="Политика конфиденциальности">
    <div class="container">
      <nav class="breadcrumbs breadcrumbs--on-dark breadcrumbs--center" aria-label="Навигационная цепочка">
        <ol class="breadcrumbs__list">
          <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs__link">Главная</a></li>
          <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page">Политика конфиденциальности</span></li>
        </ol>
      </nav>
      <p class="eyebrow">Документ</p>
      <h1 class="hero__title">Политика конфиденциальности</h1>
      <p class="hero__subtitle">
        Как мы относимся к персональным данным и обращению посетителей к материалам сайта «Крым — Путеводитель».
      </p>
    </div>
  </section>

  <section class="about-content" aria-labelledby="politika-general-heading">
    <div class="container about-content__inner">
      <div class="about-section about-section--rich">
        <h2 id="politika-general-heading">Общие положения</h2>
        <div class="about-prose about-prose--intro">
          <p>
            Настоящая политика описывает базовые принципы обработки информации при использовании сайта.
            Проект носит информационный характер; мы не собираем намеренно персональные данные через формы,
            если вы сами не отправили нам письмо на указанный адрес электронной почты.
          </p>
        </div>

        <h3 class="about-prose__subhead">Связь по электронной почте</h3>
        <p>
          Если вы пишете нам на <a href="mailto:info@crimea-guide.ru">info@crimea-guide.ru</a>, вы добровольно передаёте адрес
          и текст сообщения. Мы используем эти сведения только для ответа и учёта обратной связи, без передачи третьим лицам
          в маркетинговых целях.
        </p>

        <h3 class="about-prose__subhead">Технические данные</h3>
        <p>
          Как и большинство сайтов, хостинг и инфраструктура могут фиксировать техническую информацию
          (например, IP-адрес, тип браузера, время запроса) в рамках обеспечения работоспособности и безопасности.
          Уточните условия у вашего хостинг-провайдера и администратора сайта.
        </p>

        <h3 class="about-prose__subhead">Файлы cookie</h3>
        <p>
          Сайт может использовать минимально необходимые cookie для работы сессии и настроек.
          Вы можете ограничить cookie в настройках браузера.
        </p>

        <h3 class="about-prose__subhead">Изменения</h3>
        <p>
          Текст политики может обновляться; актуальная версия размещена на этой странице.
          Дата последнего обновления: <?php echo esc_html(wp_date('j F Y')); ?>.
        </p>

        <p class="about-accent-line">
          Вопросы по политике можно направить на <a href="mailto:info@crimea-guide.ru">info@crimea-guide.ru</a>.
        </p>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();
