<?php
if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('crimea_load_subfolder_page_layout_from_page_php') && crimea_load_subfolder_page_layout_from_page_php()) {
    return;
}

get_header();

$crimea_city_stub = crimea_is_gorod_child_page();
$crimea_main_class = $crimea_city_stub ? 'catalog-page' : 'crimea-content crimea-content--page';
?>
<main id="main-content" class="<?php echo esc_attr($crimea_main_class); ?>">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php if ($crimea_city_stub) : ?>
                <?php get_template_part('template-parts/content', 'city-stub'); ?>
            <?php else : ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
