<?php
/**
 * Theme setup for Crimea theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'crimea_theme_setup');
function crimea_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Navigation', 'crimea'),
        'footer' => __('Footer Navigation', 'crimea'),
    ]);
}

/**
 * City/place layouts: page-templates/cities/page-{slug}.php and page-templates/places/page-{slug}.php.
 * WordPress only auto-resolves slug templates in the theme root; this bridges subfolder files
 * when the page uses the default template (or no template) in admin.
 */
function crimea_template_include_cities_places(string $template): string
{
    if (!is_page()) {
        return $template;
    }

    $page_id = (int) get_queried_object_id();
    $selected = get_page_template_slug($page_id);
    if (is_string($selected) && $selected !== '') {
        return $template;
    }

    $slug = get_post_field('post_name', $page_id);
    if (!is_string($slug) || $slug === '') {
        return $template;
    }

    $base = get_template_directory() . '/page-templates';
    $candidates = [
        $base . '/cities/page-' . $slug . '.php',
        $base . '/places/page-' . $slug . '.php',
    ];
    foreach ($candidates as $path) {
        if (is_readable($path)) {
            return $path;
        }
    }

    return $template;
}
add_filter('template_include', 'crimea_template_include_cities_places', 99);

add_action('after_switch_theme', 'crimea_bootstrap_pages');

/**
 * Create default hierarchical pages once (idempotent: skips existing slugs/paths).
 */
function crimea_bootstrap_pages(): void
{
    $top_level = [
        'gorod' => __('Города', 'crimea'),
        'dostoprimechatelnosti' => __('Достопримечательности', 'crimea'),
        'about' => __('О проекте', 'crimea'),
        'politika' => __('Политика конфиденциальности', 'crimea'),
    ];

    foreach ($top_level as $slug => $title) {
        crimea_ensure_page($slug, $title, 0);
    }

    $gorod_id = crimea_get_page_id_by_path('gorod');
    if ($gorod_id) {
        $cities = [
            'yalta' => __('Ялта', 'crimea'),
            'sevastopol' => __('Севастополь', 'crimea'),
            'evpatoriya' => __('Евпатория', 'crimea'),
            'bakhchisaray' => __('Бахчисарай', 'crimea'),
            'sudak' => __('Судак', 'crimea'),
            'feodosiya' => __('Феодосия', 'crimea'),
            'alushta' => __('Алушта', 'crimea'),
            'kerch' => __('Керчь', 'crimea'),
            'alupka' => __('Алупка', 'crimea'),
            'gurzuf' => __('Гурзуф', 'crimea'),
            'foros' => __('Форос', 'crimea'),
            'saki' => __('Саки', 'crimea'),
            'inkerman' => __('Инкерман', 'crimea'),
            'koktebel' => __('Коктебель', 'crimea'),
            'novy-svet' => __('Новый Свет', 'crimea'),
            'stary-krym' => __('Старый Крым', 'crimea'),
            'shcholkino' => __('Щелкино', 'crimea'),
            'simferopol' => __('Симферополь', 'crimea'),
            'belogorsk' => __('Белогорск', 'crimea'),
        ];
        foreach ($cities as $slug => $title) {
            crimea_ensure_page($slug, $title, $gorod_id);
        }
    }

    $dost_id = crimea_get_page_id_by_path('dostoprimechatelnosti');
    if ($dost_id) {
        $places = [
            'livadiyskiy-dvorets' => __('Ливадийский дворец', 'crimea'),
            'lastochkino-gnezdo' => __('Ласточкино гнездо', 'crimea'),
        ];
        foreach ($places as $slug => $title) {
            crimea_ensure_page($slug, $title, $dost_id);
        }
    }
}

/**
 * Published page ID for a path like "gorod" or "gorod/yalta", or 0 if missing.
 */
function crimea_get_page_id_by_path(string $path): int
{
    $page = get_page_by_path($path);
    return $page instanceof WP_Post ? (int) $page->ID : 0;
}

/**
 * Insert a published page if no page exists at the same hierarchical path.
 *
 * @return int Page ID, or 0 on failure.
 */
function crimea_ensure_page(string $slug, string $title, int $parent_id): int
{
    $slug = sanitize_title($slug);
    if ($slug === '') {
        return 0;
    }

    $path = $slug;
    if ($parent_id > 0) {
        $parent = get_post($parent_id);
        if (!$parent instanceof WP_Post || $parent->post_type !== 'page') {
            return 0;
        }
        $parent_slug = (string) $parent->post_name;
        if ($parent_slug === '') {
            return 0;
        }
        $path = $parent_slug . '/' . $slug;
    }

    $existing = get_page_by_path($path);
    if ($existing instanceof WP_Post) {
        return (int) $existing->ID;
    }

    $postarr = [
        'post_title' => $title,
        'post_name' => $slug,
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_parent' => $parent_id,
    ];

    $author_id = (int) get_current_user_id();
    if ($author_id > 0) {
        $postarr['post_author'] = $author_id;
    }

    $id = wp_insert_post(wp_slash($postarr), true);
    if (is_wp_error($id)) {
        return 0;
    }

    return (int) $id;
}

/**
 * Parent page slug for a hierarchical page, or null if top-level.
 */
function crimea_get_page_parent_slug(int $post_id): ?string
{
    $parent_id = wp_get_post_parent_id($post_id);
    if (!$parent_id) {
        return null;
    }
    $name = get_post_field('post_name', $parent_id);
    return is_string($name) && $name !== '' ? $name : null;
}

/**
 * Published page ID for slug `gorod`, or 0 if missing.
 */
function crimea_get_gorod_parent_page_id(): int
{
    $page = get_page_by_path('gorod');
    return $page instanceof WP_Post ? (int) $page->ID : 0;
}

/**
 * True when the current page is a child of the «Города» hub (`/gorod/…`).
 */
function crimea_is_gorod_child_page(): bool
{
    if (!is_page()) {
        return false;
    }
    $gorod_id = crimea_get_gorod_parent_page_id();
    if (!$gorod_id) {
        return false;
    }

    return wp_get_post_parent_id(get_queried_object_id()) === $gorod_id;
}

/**
 * True for single-place templates under `/dostoprimechatelnosti/{slug}/` (not the catalog hub).
 */
function crimea_is_place_attraction_page(): bool
{
    if (!is_page()) {
        return false;
    }

    return crimea_get_page_parent_slug(get_queried_object_id()) === 'dostoprimechatelnosti';
}

/**
 * Restore layout body classes from the static HTML (secondary.css targets).
 */
add_filter('body_class', 'crimea_body_class', 10, 2);
function crimea_body_class(array $classes, array $css_class): array
{
    unset($css_class);

    if (!is_page()) {
        return $classes;
    }

    $post_id = get_queried_object_id();
    $slug = get_post_field('post_name', $post_id);
    if (!is_string($slug) || $slug === '') {
        return $classes;
    }

    $extra = [
        'gorod' => ['page-catalog'],
        'dostoprimechatelnosti' => ['page-catalog', 'page-places'],
        'about' => ['page-catalog', 'page-about'],
        'politika' => ['page-catalog', 'page-politika'],
    ];

    if (isset($extra[$slug])) {
        $classes = array_merge($classes, $extra[$slug]);
    }

    if (crimea_get_page_parent_slug($post_id) === 'dostoprimechatelnosti') {
        $classes[] = 'place-page';
    }

    return array_values(array_unique($classes));
}

add_action('wp_enqueue_scripts', 'crimea_enqueue_assets');
function crimea_enqueue_assets(): void
{
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();

    $secondary_css = $theme_dir . '/assets/css/secondary.css';
    $nav_js = $theme_dir . '/assets/js/nav.js';
    $animations_js = $theme_dir . '/assets/js/animations.js';

    wp_enqueue_style(
        'crimea-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Fraunces:ital,opsz,wght@0,9..144,600;0,9..144,700;1,9..144,600&family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700&display=swap',
        [],
        null
    );

    if (file_exists($secondary_css)) {
        wp_enqueue_style(
            'crimea-secondary',
            $theme_uri . '/assets/css/secondary.css',
            ['crimea-fonts'],
            (string) filemtime($secondary_css)
        );
    }

    if (file_exists($nav_js)) {
        wp_enqueue_script(
            'crimea-nav',
            $theme_uri . '/assets/js/nav.js',
            [],
            (string) filemtime($nav_js),
            true
        );
    }

    if (file_exists($animations_js)) {
        wp_enqueue_script(
            'crimea-animations',
            $theme_uri . '/assets/js/animations.js',
            [],
            (string) filemtime($animations_js),
            true
        );
    }

    $nav_registered = wp_script_is('crimea-nav', 'registered');
    $animations_registered = wp_script_is('crimea-animations', 'registered');
    $base_after_core = [];
    if ($nav_registered) {
        $base_after_core[] = 'crimea-nav';
    }
    if ($animations_registered) {
        $base_after_core[] = 'crimea-animations';
    }

    $catalog_js = $theme_dir . '/assets/js/catalog.js';
    if (file_exists($catalog_js) && is_page('gorod')) {
        wp_enqueue_script(
            'crimea-catalog',
            $theme_uri . '/assets/js/catalog.js',
            $base_after_core,
            (string) filemtime($catalog_js),
            true
        );
    }

    $places_js = $theme_dir . '/assets/js/places.js';
    if (file_exists($places_js) && is_page('dostoprimechatelnosti')) {
        wp_enqueue_script(
            'crimea-places',
            $theme_uri . '/assets/js/places.js',
            $base_after_core,
            (string) filemtime($places_js),
            true
        );
    }

    $city_js = $theme_dir . '/assets/js/city.js';
    $place_urls_js = $theme_dir . '/assets/js/place-urls.js';
    $place_pagination_js = $theme_dir . '/assets/js/place-pagination.js';

    if (crimea_is_place_attraction_page()) {
        if (file_exists($place_urls_js)) {
            wp_enqueue_script(
                'crimea-place-urls',
                $theme_uri . '/assets/js/place-urls.js',
                [],
                (string) filemtime($place_urls_js),
                true
            );
        }

        if (file_exists($place_pagination_js) && wp_script_is('crimea-place-urls', 'registered')) {
            wp_enqueue_script(
                'crimea-place-pagination',
                $theme_uri . '/assets/js/place-pagination.js',
                ['crimea-place-urls'],
                (string) filemtime($place_pagination_js),
                true
            );
        }

        if (file_exists($city_js)) {
            $city_deps = $base_after_core;
            if (wp_script_is('crimea-place-pagination', 'registered')) {
                array_unshift($city_deps, 'crimea-place-pagination');
            } elseif (wp_script_is('crimea-place-urls', 'registered')) {
                array_unshift($city_deps, 'crimea-place-urls');
            }
            wp_enqueue_script(
                'crimea-city',
                $theme_uri . '/assets/js/city.js',
                $city_deps,
                (string) filemtime($city_js),
                true
            );
        }
    } elseif (crimea_is_gorod_child_page() && file_exists($city_js)) {
        wp_enqueue_script(
            'crimea-city',
            $theme_uri . '/assets/js/city.js',
            $base_after_core,
            (string) filemtime($city_js),
            true
        );
    }
}

/**
 * Add location-specific classes to menu links.
 */
add_filter('nav_menu_link_attributes', 'crimea_nav_menu_link_attributes', 10, 4);
function crimea_nav_menu_link_attributes(array $atts, WP_Post $item, stdClass $args, int $depth): array
{
    unset($item, $depth);

    $class_map = [
        'primary' => 'nav__link',
        'footer' => 'footer__nav-link',
    ];

    if (empty($args->theme_location) || !isset($class_map[$args->theme_location])) {
        return $atts;
    }

    $existing = isset($atts['class']) ? trim((string) $atts['class']) : '';
    $atts['class'] = trim($existing . ' ' . $class_map[$args->theme_location]);

    return $atts;
}

/**
 * Default primary navigation links (used when no menu is assigned to Primary).
 *
 * @return array<int, array{href: string, label: string}>
 */
function crimea_default_primary_nav_links(): array
{
    return [
        ['href' => home_url('/gorod/'), 'label' => __('Города', 'crimea')],
        ['href' => home_url('/dostoprimechatelnosti/'), 'label' => __('Достопримечательности', 'crimea')],
        ['href' => home_url('/about/'), 'label' => __('О проекте', 'crimea')],
    ];
}

/**
 * Walker: flat drawer links (same items as primary menu).
 */
class Crimea_Walker_Nav_Drawer extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null): void
    {
    }

    public function end_lvl(&$output, $depth = 0, $args = null): void
    {
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0): void
    {
        if ($depth !== 0) {
            return;
        }

        $classes = ['nav__drawer-link'];
        $current = in_array('current-menu-item', $item->classes, true)
            || in_array('current_page_item', $item->classes, true);
        $attrs = '';
        if ($current) {
            $attrs .= ' aria-current="page"';
        }

        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr(implode(' ', $classes)) . '"' . $attrs . '>' . esc_html($item->title) . '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null): void
    {
    }
}

/**
 * Fallback for the primary menu before it is configured in admin.
 */
function crimea_primary_menu_fallback(): void
{
    echo '<ul class="nav__menu" role="list">';
    foreach (crimea_default_primary_nav_links() as $link) {
        echo '<li><a href="' . esc_url($link['href']) . '" class="nav__link">' . esc_html($link['label']) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Fallback for the drawer menu (same URLs as primary fallback).
 */
function crimea_drawer_menu_fallback(): void
{
    foreach (crimea_default_primary_nav_links() as $link) {
        echo '<a href="' . esc_url($link['href']) . '" class="nav__drawer-link">' . esc_html($link['label']) . '</a>';
    }
}

/**
 * Fallback for the footer menu before it is configured in admin.
 */
function crimea_footer_menu_fallback(): void
{
    echo '<ul class="footer__nav">';
    echo '<li><a href="' . esc_url(home_url('/gorod/')) . '" class="footer__nav-link">Популярные города</a></li>';
    echo '<li><a href="' . esc_url(home_url('/dostoprimechatelnosti/')) . '" class="footer__nav-link">Достопримечательности</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '" class="footer__nav-link">О проекте</a></li>';
    echo '<li><a href="' . esc_url(home_url('/politika/')) . '" class="footer__nav-link">Политика конфиденциальности</a></li>';
    echo '</ul>';
}

