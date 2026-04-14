<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main id="main-content" class="crimea-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <h1><?php echo esc_html(crimea_site_name()); ?></h1>
        <p><?php esc_html_e('Тема активна. Создайте страницу и назначьте её главной в «Настройки → Чтение».', 'crimea'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

