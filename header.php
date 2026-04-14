<?php
if (!defined('ABSPATH')) {
    exit;
}

$theme_assets_uri = get_template_directory_uri() . '/assets';

$crimea_default_description = crimea_site_tagline();
$crimea_default_image = $theme_assets_uri . '/img/cities/1.jpg';

$crimea_meta_title = wp_get_document_title();
$crimea_meta_description = $crimea_default_description;
$crimea_og_image = $crimea_default_image;
$crimea_og_type = is_singular('post') ? 'article' : 'website';

if (is_404()) {
    $crimea_meta_description = apply_filters(
        'crimea_404_meta_description',
        __('Запрашиваемая страница не найдена. Перейдите на главную или в каталог городов и достопримечательностей.', 'crimea')
    );
} elseif (is_search()) {
    $crimea_sq = get_search_query();
    if ($crimea_sq !== '') {
        $crimea_meta_description = sprintf(
            /* translators: %s: search query */
            __('Поиск по сайту: «%s». Путеводитель по городам и местам Крыма.', 'crimea'),
            $crimea_sq
        );
    }
}

if (is_singular()) {
    $crimea_queried = get_queried_object();
    if ($crimea_queried instanceof WP_Post) {
        $crimea_excerpt = trim(wp_strip_all_tags((string) $crimea_queried->post_excerpt));
        $crimea_from_content = trim(wp_strip_all_tags(wp_trim_words($crimea_queried->post_content, 40, '…')));
        if ($crimea_excerpt !== '') {
            $crimea_meta_description = $crimea_excerpt;
        } elseif ($crimea_from_content !== '') {
            $crimea_meta_description = $crimea_from_content;
        }
        if (has_post_thumbnail($crimea_queried)) {
            $crimea_thumb = get_the_post_thumbnail_url($crimea_queried, 'large');
            if (is_string($crimea_thumb) && $crimea_thumb !== '') {
                $crimea_og_image = $crimea_thumb;
            }
        }
    }
} elseif (is_category() || is_tag() || is_tax()) {
    $crimea_term_desc = term_description();
    if (is_string($crimea_term_desc) && trim(wp_strip_all_tags($crimea_term_desc)) !== '') {
        $crimea_meta_description = wp_strip_all_tags($crimea_term_desc);
    }
} elseif (is_front_page() || (is_home() && !is_front_page())) {
    $crimea_tagline = get_bloginfo('description', 'display');
    if (is_string($crimea_tagline) && trim($crimea_tagline) !== '') {
        $crimea_meta_description = $crimea_tagline;
    }
}

$crimea_meta_description = (string) apply_filters('crimea_meta_description', $crimea_meta_description);
$crimea_meta_description = trim(preg_replace('/\s+/u', ' ', $crimea_meta_description));
if (mb_strlen($crimea_meta_description) > 160) {
    $crimea_meta_description = mb_substr($crimea_meta_description, 0, 157) . '…';
}

if (is_singular()) {
    $crimea_og_url = get_permalink() ?: home_url('/');
} elseif (is_front_page()) {
    $crimea_og_url = home_url('/');
} elseif (is_home() && !is_front_page()) {
    $crimea_posts_page = (int) get_option('page_for_posts');
    $crimea_og_url = $crimea_posts_page ? get_permalink($crimea_posts_page) : home_url('/');
} elseif (is_404()) {
    $crimea_req = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
    $crimea_og_url = home_url($crimea_req);
} else {
    $crimea_req = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
    $crimea_og_url = home_url($crimea_req);
}

$crimea_output_theme_meta = !(
    defined('WPSEO_VERSION')
    || class_exists('RankMath')
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if ($crimea_output_theme_meta) : ?>
  <meta name="description" content="<?php echo esc_attr($crimea_meta_description); ?>" />

  <meta property="og:type" content="<?php echo esc_attr($crimea_og_type); ?>" />
  <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="<?php echo esc_attr($crimea_meta_title); ?>" />
  <meta property="og:description" content="<?php echo esc_attr($crimea_meta_description); ?>" />
  <meta property="og:url" content="<?php echo esc_url($crimea_og_url); ?>" />
  <meta property="og:image" content="<?php echo esc_url($crimea_og_image); ?>" />
<?php if (is_singular('post')) : ?>
  <meta property="article:published_time" content="<?php echo esc_attr(get_the_date('c')); ?>" />
  <meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_date('c')); ?>" />
<?php endif; ?>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo esc_attr($crimea_meta_title); ?>" />
  <meta name="twitter:description" content="<?php echo esc_attr($crimea_meta_description); ?>" />
  <meta name="twitter:image" content="<?php echo esc_url($crimea_og_image); ?>" />
<?php if (!is_404()) : ?>
  <link rel="canonical" href="<?php echo esc_url($crimea_og_url); ?>" />
<?php endif; ?>
<?php endif; ?>

<?php
if (is_404()) {
    $crimea_json_ld = null;
} else {
$crimea_json_ld = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'TouristDestination',
            '@id' => home_url('/') . '#crimea',
            'name' => 'Крым',
            'alternateName' => ['Crimea', 'Крымский полуостров'],
            'description' => crimea_site_tagline(),
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '45.03',
                'longitude' => '34.10',
            ],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Главная',
                    'item' => home_url('/'),
                ],
            ],
        ],
    ],
];
}
?>
<?php if (is_array($crimea_json_ld)) : ?>
  <script type="application/ld+json">
<?php echo wp_json_encode($crimea_json_ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>

  </script>
<?php endif; ?>

  <!-- Styles and scripts are enqueued in functions.php -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Перейти к содержимому', 'crimea'); ?></a>

  <!-- Scroll progress bar -->
  <div class="scroll-progress" id="scrollProgress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-valuetext="0 %" aria-label="Прогресс прокрутки"></div>

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