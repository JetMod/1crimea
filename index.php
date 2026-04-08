<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main class="crimea-content">
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
        <h1><?php bloginfo('name'); ?></h1>
        <p>Theme is active. Create a page and set it as homepage in Settings -> Reading.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

