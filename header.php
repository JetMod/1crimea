<?php
if (!defined('ABSPATH')) {
    exit;
}

$theme_assets_uri = get_template_directory_uri() . '/assets';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Путеводитель по городам Крыма — история, природа, море. Откройте Ялту, Севастополь, Евпаторию и другие жемчужины полуострова." />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Крым — Путеводитель" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="Крым — Путеводитель по городам" />
  <meta property="og:description" content="Путеводитель по городам Крыма — история, природа, море. Откройте Ялту, Севастополь, Евпаторию и другие жемчужины полуострова." />
  <meta property="og:image" content="<?php echo esc_url($theme_assets_uri . '/img/cities/1.jpg'); ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Крым — Путеводитель по городам" />
  <meta name="twitter:description" content="Путеводитель по городам Крыма — история, природа, море. Откройте Ялту, Севастополь, Евпаторию и другие жемчужины полуострова." />
  <meta name="twitter:image" content="<?php echo esc_url($theme_assets_uri . '/img/cities/1.jpg'); ?>" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "TouristDestination",
        "@id": "/#crimea",
        "name": "Крым",
        "alternateName": ["Crimea", "Крымский полуостров"],
        "description": "Путеводитель по городам Крыма — история, природа, море. Откройте Ялту, Севастополь, Евпаторию и другие жемчужины полуострова.",
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "45.03",
          "longitude": "34.10"
        }
      },
      {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Главная",
            "item": "/"
          }
        ]
      }
    ]
  }
  </script>

  <!-- Styles and scripts are enqueued in functions.php -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Scroll progress bar -->
  <div class="scroll-progress" id="scrollProgress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Прогресс прокрутки"></div>

  <!-- =====================================================
       НАВИГАЦИЯ
       ===================================================== -->
  <header class="site-header">
    <nav class="nav" role="navigation" aria-label="Главное меню">
      <div class="container nav__inner">

        <div class="nav__brand">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="Крым — на главную">
            <span class="nav__logo-text">Крым</span>
          </a>
          <span class="nav__brand-divider" aria-hidden="true"></span>
          <span class="nav__brand-tag">Путеводитель</span>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav__menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s" role="list">%3$s</ul>',
            'fallback_cb' => 'crimea_primary_menu_fallback',
        ]);
        ?>

        <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary nav__cta">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          Смотреть города
        </a>

        <button class="nav__burger" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="navDrawer">
          <span class="nav__burger-line"></span>
          <span class="nav__burger-line"></span>
          <span class="nav__burger-line"></span>
        </button>

      </div>
    </nav>

    <div class="nav__drawer" id="navDrawer" role="dialog" aria-modal="true" aria-label="Мобильное меню">
      <div class="nav__drawer-backdrop" tabindex="-1" aria-hidden="true"></div>
      <div class="nav__drawer-panel">
        <div class="nav__drawer-head">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__drawer-brand" aria-label="<?php echo esc_attr__('Крым — на главную', 'crimea'); ?>">Крым</a>
          <button type="button" class="nav__drawer-close" aria-label="Закрыть меню">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
          </button>
        </div>
        <nav class="nav__drawer-nav" aria-label="Разделы">
          <?php
          wp_nav_menu([
              'theme_location' => 'primary',
              'container' => false,
              'items_wrap' => '%3$s',
              'fallback_cb' => 'crimea_drawer_menu_fallback',
              'walker' => new Crimea_Walker_Nav_Drawer(),
          ]);
          ?>
        </nav>
        <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary nav__drawer-cta">Смотреть города</a>
      </div>
    </div>
  </header>