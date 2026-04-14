<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main-content" class="crimea-content crimea-content--search">
    <div class="container">
        <header class="search-page-header">
            <h1 class="search-page-header__title">
                <?php if (get_search_query() !== '') : ?>
                    <?php
                    printf(
                        /* translators: %s: search query */
                        esc_html__('Результаты по запросу «%s»', 'crimea'),
                        esc_html(get_search_query())
                    );
                    ?>
                <?php else : ?>
                    <?php esc_html_e('Поиск', 'crimea'); ?>
                <?php endif; ?>
            </h1>
            <div class="search-page-header__form">
                <?php get_search_form(['aria_label' => __('Поиск по сайту', 'crimea')]); ?>
            </div>
        </header>

        <?php if (have_posts()) : ?>
            <ul class="search-results" role="list">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <li class="search-results__item">
                        <article <?php post_class('search-result'); ?>>
                            <h2 class="search-result__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="search-result__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 32, '…')); ?></p>
                            <a class="search-result__link" href="<?php the_permalink(); ?>"><?php esc_html_e('Читать далее', 'crimea'); ?></a>
                        </article>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="search-page-empty"><?php esc_html_e('Ничего не найдено. Попробуйте другой запрос или откройте каталог городов.', 'crimea'); ?></p>
            <p class="search-page-empty-actions">
                <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary"><?php esc_html_e('Каталог городов', 'crimea'); ?></a>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-outline"><?php esc_html_e('На главную', 'crimea'); ?></a>
            </p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
