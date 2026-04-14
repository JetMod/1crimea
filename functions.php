<?php
/**
 * Theme setup for Crimea theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

/** Название и слоган сайта (переопределение: define('CRIMEA_SITE_NAME', '…'); в wp-config.php до загрузки темы). */
if (!defined('CRIMEA_SITE_NAME')) {
    define('CRIMEA_SITE_NAME', 'Крым — путеводитель');
}
if (!defined('CRIMEA_SITE_TAGLINE')) {
    define(
        'CRIMEA_SITE_TAGLINE',
        'Путеводитель по городам Крыма — история, природа, море. Откройте Ялту, Севастополь, Евпаторию и другие жемчужины полуострова.'
    );
}

/** Путь к favicon относительно каталога темы, например `assets/img/favicon.svg`. */
if (!defined('CRIMEA_FAVICON_RELATIVE')) {
    define('CRIMEA_FAVICON_RELATIVE', 'assets/img/favicon.svg');
}

/**
 * Версия синхронизации SEO для дочерних страниц «Города» (/gorod/…): цитата (excerpt), контент и обложка.
 * Увеличьте, чтобы снова применить дефолты к страницам с пустыми полями (ручные правки не перезаписываются).
 */
if (!defined('CRIMEA_CITY_SEO_SYNC_VERSION')) {
    define('CRIMEA_CITY_SEO_SYNC_VERSION', 1);
}

/** Возвращает true, если путь к favicon задан в константе (файл может ещё не существовать). */
function crimea_has_favicon_configured(): bool
{
    $relative = ltrim(str_replace('\\', '/', (string) CRIMEA_FAVICON_RELATIVE), '/');
    return $relative !== '';
}

/**
 * Встроенный data URI фавикона — используется как запасной вариант,
 * если файл favicon.svg недоступен на сервере по HTTP.
 */
function crimea_favicon_data_uri(): string
{
    return 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHJlY3Qgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiByeD0iOCIgZmlsbD0iIzBkNDdhMSIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNiA3YTUuNSA1LjUgMCAwIDAtNS41IDUuNWMwIDQgNS41IDEyLjUgNS41IDEyLjVzNS41LTguNSA1LjUtMTIuNUE1LjUgNS41IDAgMCAwIDE2IDd6bTAgNy41YTIgMiAwIDEgMSAwLTQgMiAyIDAgMCAxIDAgNHoiLz48L3N2Zz4=';
}

function crimea_get_favicon_url(): string
{
    $relative = ltrim(str_replace('\\', '/', (string) CRIMEA_FAVICON_RELATIVE), '/');
    if ($relative === '') {
        return crimea_favicon_data_uri();
    }
    $abs = get_template_directory() . '/' . $relative;
    if (!is_readable($abs)) {
        return crimea_favicon_data_uri();
    }
    $url = get_template_directory_uri() . '/' . $relative;
    $ver = (string) filemtime($abs);

    return add_query_arg('v', $ver, $url);
}

add_action('wp_head', 'crimea_output_favicon_link', 1);
function crimea_output_favicon_link(): void
{
    if (is_admin()) {
        return;
    }
    $url = crimea_get_favicon_url();
    if ($url === '') {
        return;
    }
    // esc_url() strips data: URIs, поэтому используем esc_attr() для href.
    $href = str_starts_with($url, 'data:') ? esc_attr($url) : esc_url($url);
    echo '<link rel="icon" href="' . $href . '" type="image/svg+xml">' . "\n";
}

/**
 * На фронте отключаем иконку из «Настроить → Сайт», иначе wp_site_icon() печатает её позже в head и перекрывает favicon темы.
 */
add_filter('get_site_icon_url', 'crimea_filter_get_site_icon_url_for_front', 99, 3);
function crimea_filter_get_site_icon_url_for_front($url, $size, $blog_id)
{
    if (is_admin()) {
        return $url;
    }
    if (!crimea_has_favicon_configured()) {
        return $url;
    }
    if (function_exists('is_customize_preview') && is_customize_preview()) {
        return $url;
    }
    return false;
}

add_filter('site_icon_meta_tags', 'crimea_filter_site_icon_meta_tags_empty', 999);
function crimea_filter_site_icon_meta_tags_empty($meta_tags)
{
    if (!is_array($meta_tags)) {
        return $meta_tags;
    }
    if (is_admin()) {
        return $meta_tags;
    }
    if (!crimea_has_favicon_configured()) {
        return $meta_tags;
    }
    if (function_exists('is_customize_preview') && is_customize_preview()) {
        return $meta_tags;
    }
    return [];
}

add_action('init', 'crimea_remove_wp_site_icon_hooks', 20);
function crimea_remove_wp_site_icon_hooks(): void
{
    if (is_admin() || !crimea_has_favicon_configured()) {
        return;
    }
    if (function_exists('is_customize_preview') && is_customize_preview()) {
        return;
    }
    foreach ([10, 99, 100] as $priority) {
        remove_action('wp_head', 'wp_site_icon', $priority);
    }
}

/**
 * Публичное название сайта (вкладка браузера, og:site_name, заголовки).
 */
function crimea_site_name(): string
{
    return (string) apply_filters('crimea_site_name', CRIMEA_SITE_NAME);
}

/**
 * Краткое описание сайта (подзаголовок, meta description на главной при пустом поле в админке).
 */
function crimea_site_tagline(): string
{
    return (string) apply_filters('crimea_site_tagline', CRIMEA_SITE_TAGLINE);
}

/**
 * Части заголовка вкладки: локализация 404/поиска и единый бренд без дублирования.
 */
add_filter('document_title_parts', 'crimea_document_title_parts', 20, 1);
function crimea_document_title_parts(array $title): array
{
    if (is_404()) {
        $title['title'] = __('Страница не найдена', 'crimea');
        return $title;
    }

    if (is_search()) {
        $q = get_search_query();
        $title['title'] = $q !== ''
            ? sprintf(__('Результаты поиска: «%s»', 'crimea'), $q)
            : __('Поиск', 'crimea');
        return $title;
    }

    return $title;
}

/**
 * noindex для 404 (если SEO-плагин не подключён — см. WPSEO_VERSION в header.php).
 */
add_filter('wp_robots', 'crimea_wp_robots_404', 20);
function crimea_wp_robots_404(array $robots): array
{
    if (is_404()) {
        $robots['noindex'] = true;
    }

    return $robots;
}

/**
 * LCP: предзагрузка постера hero на главной (совпадает с poster у video в front-page.php).
 */
add_action('wp_head', 'crimea_preload_front_hero_poster', 2);
function crimea_preload_front_hero_poster(): void
{
    if (!is_front_page() || is_paged()) {
        return;
    }

    $relative = 'assets/img/cities/1.jpg';
    $abs = get_template_directory() . '/' . $relative;
    if (!is_readable($abs)) {
        return;
    }

    $href = get_template_directory_uri() . '/' . $relative;
    $ver = (string) filemtime($abs);
    $url = add_query_arg('v', $ver, $href);

    echo '<link rel="preload" as="image" href="' . esc_url($url) . '" fetchpriority="high" />' . "\n";
}

add_action('wp_head', 'crimea_preconnect_fonts', 1);
function crimea_preconnect_fonts(): void
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" />' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />' . "\n";
}

/**
 * Заменяет значения по умолчанию WordPress на брендинг темы.
 */
add_filter('option_blogname', 'crimea_filter_option_blogname', 9);
function crimea_filter_option_blogname($value): string
{
    if (!is_string($value)) {
        return crimea_site_name();
    }
    $t = trim($value);
    if ($t === '' || $t === 'WordPress') {
        return crimea_site_name();
    }
    return $value;
}

add_filter('option_blogdescription', 'crimea_filter_option_blogdescription', 9);
function crimea_filter_option_blogdescription($value): string
{
    if (!is_string($value)) {
        return crimea_site_tagline();
    }
    $t = trim($value);
    if ($t === '' || $t === 'Just another WordPress site') {
        return crimea_site_tagline();
    }
    return $value;
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
 * Absolute path to page-templates/cities|places/page-{slug}.php for the current page, or null.
 * Used by template filters and by page.php (early require before get_header).
 */
function crimea_get_city_or_place_template_path_for_queried_page(): ?string
{
    if (!is_page()) {
        return null;
    }

    $page_id = (int) get_queried_object_id();
    if ($page_id <= 0) {
        return null;
    }

    $selected = get_page_template_slug($page_id);
    if (is_string($selected) && $selected !== '' && $selected !== 'default') {
        return null;
    }

    $slug = get_post_field('post_name', $page_id);
    if (!is_string($slug) || $slug === '') {
        return null;
    }

    $directories = array_unique(
        array_filter(
            [
                get_stylesheet_directory(),
                get_template_directory(),
            ]
        )
    );

    foreach ($directories as $theme_dir) {
        $base = $theme_dir . '/page-templates';
        foreach (['cities', 'places'] as $sub) {
            $path = $base . '/' . $sub . '/page-' . $slug . '.php';
            if (is_readable($path)) {
                return $path;
            }
        }
    }

    return null;
}

/**
 * City/place layouts: page-templates/cities/page-{slug}.php and page-templates/places/page-{slug}.php.
 * WordPress only auto-resolves slug templates in the theme root; this bridges subfolder files
 * when the page uses the default template (or no template) in admin.
 *
 * Uses `page_template`, `template_include`, and an early require in page.php (most reliable).
 */
function crimea_resolve_city_or_place_template_file(string $template): string
{
    $path = crimea_get_city_or_place_template_path_for_queried_page();

    return $path !== null ? $path : $template;
}

/**
 * @param string       $template  Resolved template path (e.g. page.php).
 * @param string       $type      Post type key passed to get_query_template (e.g. 'page').
 * @param array|string $templates Templates list; unused.
 */
function crimea_filter_page_template_city_place(string $template, string $type, $templates = null): string
{
    unset($templates);
    if ($type !== 'page') {
        return $template;
    }

    return crimea_resolve_city_or_place_template_file($template);
}

/**
 * Load full city/place layout from page-templates/… when WordPress falls through to page.php.
 * Call at the top of page.php before get_header(); avoids relying on filters alone.
 *
 * @return bool True if a subfolder template was loaded (caller should return from page.php).
 */
function crimea_load_subfolder_page_layout_from_page_php(): bool
{
    $path = crimea_get_city_or_place_template_path_for_queried_page();
    if ($path === null) {
        return false;
    }

    require $path;

    return true;
}

add_filter('page_template', 'crimea_filter_page_template_city_place', 99, 3);
add_filter('template_include', 'crimea_resolve_city_or_place_template_file', 999);

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
            'shcholkino' => __('Щёлкино', 'crimea'),
            'simferopol' => __('Симферополь', 'crimea'),
            'belogorsk' => __('Белогорск', 'crimea'),
        ];
        foreach ($cities as $slug => $title) {
            crimea_ensure_page($slug, $title, $gorod_id);
        }
    }

    $dost_id = crimea_get_page_id_by_path('dostoprimechatelnosti');
    if ($dost_id) {
        $titles = crimea_get_place_bootstrap_titles();
        foreach (crimea_get_place_template_slugs() as $slug) {
            $title = $titles[$slug] ?? ucwords(str_replace(['-', '_'], ' ', $slug));
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
 * Slugs страниц мест: по одному файлу `page-templates/places/page-{slug}.php`.
 *
 * @return string[]
 */
function crimea_get_place_template_slugs(): array
{
    static $cache = null;
    if ($cache !== null) {
        return $cache;
    }
    $dir = get_template_directory() . '/page-templates/places';
    $slugs = [];
    foreach ((array) glob($dir . '/page-*.php') as $file) {
        $base = basename((string) $file, '.php');
        if (preg_match('/^page-(.+)$/', $base, $m) && $m[1] !== '') {
            $slugs[] = $m[1];
        }
    }
    sort($slugs);
    $cache = $slugs;

    return $cache;
}

/**
 * Заголовки для bootstrap дочерних страниц `/dostoprimechatelnosti/{slug}/` (дополнять при новом шаблоне места).
 *
 * @return array<string, string>
 */
function crimea_get_place_bootstrap_titles(): array
{
    return [
        'livadiyskiy-dvorets' => __('Ливадийский дворец', 'crimea'),
        'lastochkino-gnezdo' => __('Ласточкино гнездо', 'crimea'),
    ];
}

/**
 * Канонический URL страницы места под `/dostoprimechatelnosti/{slug}/`.
 */
function crimea_place_page_url(string $slug): string
{
    $slug = sanitize_title($slug);

    return $slug !== '' ? home_url('/dostoprimechatelnosti/' . $slug . '/') : home_url('/dostoprimechatelnosti/');
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
 * Краткие описания и файлы hero из `assets/img/cities/` для meta description и обложки записи (og:image).
 * Заполняются только если excerpt/контент пусты и миниатюра не задана.
 *
 * @return array<string, array{excerpt: string, image: string}>
 */
function crimea_get_gorod_city_seo_defaults(): array
{
    return [
        'yalta' => [
            'excerpt' => 'Ялта — набережная, парки и дворцы Южного берега Крыма. Удобная база для Ласточкиного гнезда и Ай-Петри; сезон с апреля по октябрь.',
            'image' => '1.jpg',
        ],
        'alushta' => [
            'excerpt' => 'Алушта у подножия гор: набережная, канатная дорога и тропы к Большому каньону. Компактный курорт между Ялтой и морем.',
            'image' => 'alushta-hero.webp',
        ],
        'sevastopol' => [
            'excerpt' => 'Севастополь: бухты, древний Херсонес и морская история. Панорамы, музеи флота и прогулки вдоль берега.',
            'image' => '2.jpg',
        ],
        'evpatoriya' => [
            'excerpt' => 'Евпатория — семейный курорт с мелководьем, грязями и старым центром. Спокойные пляжи и набережная на западе Крыма.',
            'image' => '3.jpg',
        ],
        'bakhchisaray' => [
            'excerpt' => 'Бахчисарай: ханский дворец, восточные улочки и Чуфут-Кале. Бывшая столица Крымского ханства в предгорье.',
            'image' => '4.jpg',
        ],
        'sudak' => [
            'excerpt' => 'Судак: генуэзская крепость над морем, бухты и виноградники. Один из символов восточного побережья Крыма.',
            'image' => '5.jpg',
        ],
        'feodosiya' => [
            'excerpt' => 'Феодосия — древний порт, галерея Айвазовского и широкие пляжи. Город с художественным наследием на восточном берегу.',
            'image' => '6.webp',
        ],
        'kerch' => [
            'excerpt' => 'Керчь: пролив, древняя Пантикапей и мост в сторону Тамани. Восточные ворота полуострова с богатой историей.',
            'image' => '10.jfif',
        ],
        'alupka' => [
            'excerpt' => 'Алупка: дворец у моря, парк и виды на Ай-Петри. Один из узнаваемых курортов Южного берега Крыма.',
            'image' => '4.jpg',
        ],
        'gurzuf' => [
            'excerpt' => 'Гурзуф: бухта, скалы Адалары и набережная в короткой поездке от Ялты. Компактный курорт с горным фоном.',
            'image' => 'img9.webp',
        ],
        'foros' => [
            'excerpt' => 'Форос: мыс, крест на склоне и панорамы Южного берега. Тихие виды и выезды к побережью и горам.',
            'image' => '5.jpg',
        ],
        'saki' => [
            'excerpt' => 'Саки: грязелечение и спокойный курортный ритм на западе Крыма. Подходит для оздоровительного отдыха у моря.',
            'image' => '3.jpg',
        ],
        'inkerman' => [
            'excerpt' => 'Инкерман: пещерный монастырь и винные подвалы у бухт Севастополя. Короткие маршруты по склонам и историческим местам.',
            'image' => '2.jpg',
        ],
        'koktebel' => [
            'excerpt' => 'Коктебель: вулкан Кара-Даг, залив и богемная атмосфера. Пляжи, фестивали и прогулки вдоль берега.',
            'image' => '5.jpg',
        ],
        'novy-svet' => [
            'excerpt' => 'Новый Свет: тропа Голицына, капелла и зелёные бухты. Заповедное побережье недалеко от Судака.',
            'image' => 'img9.webp',
        ],
        'stary-krym' => [
            'excerpt' => 'Старый Крым: слои истории, мечети и степь у подножия гор. Тихий город для знакомства с восточным наследием.',
            'image' => '4.jpg',
        ],
        'shcholkino' => [
            'excerpt' => 'Щёлкино: широкие пляжи на востоке, ветер и простор у Азовского моря. Спокойный отдых вдали от крупных курортов.',
            'image' => '5.jpg',
        ],
        'simferopol' => [
            'excerpt' => 'Симферополь — ворота Крыма: ж/д, автобусы и отправные точки для поездок по полуострову. Город-транзит с музеями и парками.',
            'image' => '4.jpg',
        ],
        'belogorsk' => [
            'excerpt' => 'Белогорск: Белая скала и степные панорамы у предгорья. Удобная остановка на пути к восточным и центральным маршрутам.',
            'image' => '4.jpg',
        ],
    ];
}

/**
 * Копирует файл из темы в медиатеку один раз на имя файла и возвращает ID вложения.
 */
function crimea_import_theme_image_to_media_library(string $relative_filename): int
{
    $relative_filename = ltrim(str_replace('\\', '/', $relative_filename), '/');
    $abs_theme = get_template_directory() . '/assets/img/cities/' . $relative_filename;
    if (!is_readable($abs_theme)) {
        return 0;
    }

    $existing = get_posts([
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => 1,
        'fields' => 'ids',
        'meta_key' => '_crimea_theme_source_file',
        'meta_value' => $relative_filename,
        'suppress_filters' => true,
    ]);
    if (!empty($existing)) {
        return (int) $existing[0];
    }

    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    $basename = basename($relative_filename);
    $bits = file_get_contents($abs_theme);
    if ($bits === false) {
        return 0;
    }

    $upload = wp_upload_bits($basename, null, $bits);
    if (!empty($upload['error']) || empty($upload['file'])) {
        return 0;
    }

    $filetype = wp_check_filetype($basename, null);
    $mime = is_array($filetype) && isset($filetype['type']) && $filetype['type'] !== ''
        ? $filetype['type']
        : 'image/jpeg';

    $attachment = [
        'post_mime_type' => $mime,
        'post_title' => preg_replace('/\.[^.]+$/', '', $basename),
        'post_content' => '',
        'post_status' => 'inherit',
    ];

    $attach_id = wp_insert_attachment($attachment, $upload['file']);
    if (is_wp_error($attach_id) || !$attach_id) {
        @unlink($upload['file']);

        return 0;
    }

    update_post_meta((int) $attach_id, '_crimea_theme_source_file', $relative_filename);

    $metadata = wp_generate_attachment_metadata((int) $attach_id, $upload['file']);
    if (is_array($metadata) && $metadata !== []) {
        wp_update_attachment_metadata((int) $attach_id, $metadata);
    }

    return (int) $attach_id;
}

/**
 * Подставляет в записи городов краткое описание (excerpt), минимальный контент и обложку для meta/OG, если поля пусты.
 */
function crimea_sync_gorod_city_seo_meta(): void
{
    $gorod_id = crimea_get_gorod_parent_page_id();
    if (!$gorod_id) {
        return;
    }

    $defaults = crimea_get_gorod_city_seo_defaults();
    foreach ($defaults as $slug => $data) {
        $page = get_page_by_path('gorod/' . $slug);
        if (!$page instanceof WP_Post) {
            continue;
        }

        $page_id = (int) $page->ID;
        if (wp_get_post_parent_id($page_id) !== $gorod_id) {
            continue;
        }

        $excerpt = trim((string) $page->post_excerpt);
        $content = trim((string) $page->post_content);
        $excerpt_text = isset($data['excerpt']) ? (string) $data['excerpt'] : '';

        $update = ['ID' => $page_id];
        $needs_update = false;

        if ($excerpt === '' && $excerpt_text !== '') {
            $update['post_excerpt'] = $excerpt_text;
            $needs_update = true;
        }
        if ($content === '' && $excerpt_text !== '') {
            $update['post_content'] = '<p>' . esc_html($excerpt_text) . '</p>';
            $needs_update = true;
        }

        if ($needs_update) {
            wp_update_post(wp_slash($update));
        }

        if (!has_post_thumbnail($page_id) && !empty($data['image'])) {
            $att_id = crimea_import_theme_image_to_media_library((string) $data['image']);
            if ($att_id > 0) {
                set_post_thumbnail($page_id, $att_id);
            }
        }
    }

    update_option('crimea_city_seo_sync_version', CRIMEA_CITY_SEO_SYNC_VERSION, false);
}

/**
 * Однократное применение синхронизации SEO при обновлении темы (без повторной активации).
 */
function crimea_maybe_sync_gorod_city_seo_meta(): void
{
    if (wp_installing()) {
        return;
    }
    $v = (int) get_option('crimea_city_seo_sync_version', 0);
    if ($v >= CRIMEA_CITY_SEO_SYNC_VERSION) {
        return;
    }
    crimea_sync_gorod_city_seo_meta();
}

add_action('after_switch_theme', 'crimea_sync_gorod_city_seo_meta', 20);
add_action('init', 'crimea_maybe_sync_gorod_city_seo_meta', 30);

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
 * True when a city layout file exists for the current page slug (page-templates/cities/page-{slug}.php).
 * Used to enqueue city.js even if the page is not attached under «Города» in the admin.
 */
function crimea_page_has_city_template_file(): bool
{
    if (!is_page()) {
        return false;
    }

    $slug = get_post_field('post_name', get_queried_object_id());
    if (!is_string($slug) || $slug === '') {
        return false;
    }

    $path = get_template_directory() . '/page-templates/cities/page-' . $slug . '.php';

    return is_readable($path);
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
    } elseif ((crimea_is_gorod_child_page() || crimea_page_has_city_template_file()) && file_exists($city_js)) {
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

