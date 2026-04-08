<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="crimea-content crimea-content--404">
    <article class="error-404 not-found">
        <h1>Страница не найдена</h1>
        <p>Похоже, такой страницы больше нет или адрес введен с ошибкой.</p>
        <p><a href="<?php echo esc_url(home_url('/')); ?>">Вернуться на главную</a></p>
    </article>
</main>
<?php get_footer(); ?>
