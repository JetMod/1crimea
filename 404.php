<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main-content" class="crimea-content crimea-content--404">
    <div class="container">
        <article class="error-404 not-found">
            <p class="error-404__code" aria-hidden="true">404</p>
            <h1 class="error-404__title"><?php esc_html_e('Страница не найдена', 'crimea'); ?></h1>
            <p class="error-404__lead">
                <?php esc_html_e('Такой страницы нет или адрес введён с ошибкой. Воспользуйтесь поиском или перейдите в каталог.', 'crimea'); ?>
            </p>

            <div class="error-404__search">
                <?php get_search_form(['aria_label' => __('Поиск по сайту', 'crimea')]); ?>
            </div>

            <div class="error-404__actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary"><?php esc_html_e('На главную', 'crimea'); ?></a>
                <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-outline"><?php esc_html_e('Города', 'crimea'); ?></a>
                <a href="<?php echo esc_url(home_url('/dostoprimechatelnosti/')); ?>" class="btn btn-outline"><?php esc_html_e('Достопримечательности', 'crimea'); ?></a>
            </div>
        </article>
    </div>
</main>
<?php get_footer(); ?>
