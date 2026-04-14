<?php
if (!defined('ABSPATH')) {
    exit;
}

$crimea_sf_id = function_exists('wp_unique_id')
    ? 'crimea-search-' . wp_unique_id()
    : 'crimea-search-' . sanitize_html_class(uniqid('', true));

$crimea_label = isset($aria_label) && is_string($aria_label) && $aria_label !== ''
    ? $aria_label
    : __('Поиск', 'crimea');
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="<?php echo esc_attr($crimea_sf_id); ?>"><?php echo esc_html($crimea_label); ?></label>
    <div class="search-form__row">
        <input
            type="search"
            id="<?php echo esc_attr($crimea_sf_id); ?>"
            class="search-form__input"
            name="s"
            value="<?php echo esc_attr(get_search_query()); ?>"
            placeholder="<?php esc_attr_e('Город, место, тема…', 'crimea'); ?>"
            autocomplete="off"
        />
        <button type="submit" class="btn btn-primary search-form__submit"><?php esc_html_e('Найти', 'crimea'); ?></button>
    </div>
</form>
