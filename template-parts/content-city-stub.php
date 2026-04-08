<?php
/**
 * Compact placeholder for city pages under /gorod/ without a dedicated page-{slug}.php.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="catalog-hero catalog-hero--about" aria-label="<?php echo esc_attr(get_the_title()); ?>">
    <div class="container">
        <nav class="breadcrumbs breadcrumbs--on-dark breadcrumbs--center" aria-label="Навигационная цепочка">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs__link">Главная</a></li>
                <li class="breadcrumbs__item"><a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="breadcrumbs__link">Города Крыма</a></li>
                <li class="breadcrumbs__item"><span class="breadcrumbs__text" aria-current="page"><?php the_title(); ?></span></li>
            </ol>
        </nav>
        <p class="eyebrow">Город</p>
        <h1 class="hero__title"><?php the_title(); ?></h1>
        <p class="hero__subtitle">
            Раздел в подготовке: скоро здесь появится подробный гид по городу и идеям для маршрутов.
        </p>
    </div>
</section>

<section class="about-invite" aria-labelledby="city-stub-lead">
    <div class="container">
        <div class="about-invite__card">
            <div class="about-invite__lead">
                <h2 id="city-stub-lead" class="about-invite__title">Материал скоро появится</h2>
                <?php
                $raw = get_post()->post_content ?? '';
                if (is_string($raw) && trim($raw) !== '') :
                    ?>
                    <div class="about-invite__text entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <p class="about-invite__text">
                        Пока материал собирается, загляните в каталог городов — там можно выбрать другие направления и открыть уже готовые гиды.
                    </p>
                <?php endif; ?>
            </div>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="btn btn-primary about-invite__btn">К каталогу городов</a>
        </div>
    </div>
</section>
