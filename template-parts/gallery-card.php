<?php
/**
 * Горизонтальная галерея «Другие города» (scroll-snap, см. animations.js).
 *
 * @var string|null $crimea_assets            База URI к /assets (если не задана — вычисляется из темы).
 * @var string|null $crimea_gallery_current_slug Slug города для aria-current="page" (например alushta, yalta).
 */
if (!defined('ABSPATH')) {
    exit;
}

$crimea_assets = isset($crimea_assets) && is_string($crimea_assets) && $crimea_assets !== ''
    ? $crimea_assets
    : get_template_directory_uri() . '/assets';

$crimea_gallery_current_slug = isset($crimea_gallery_current_slug) && is_string($crimea_gallery_current_slug)
    ? $crimea_gallery_current_slug
    : 'alushta';

if (isset($args) && is_array($args)) {
    if (!empty($args['crimea_assets']) && is_string($args['crimea_assets'])) {
        $crimea_assets = $args['crimea_assets'];
    }
    if (isset($args['crimea_gallery_current_slug']) && is_string($args['crimea_gallery_current_slug'])) {
        $crimea_gallery_current_slug = $args['crimea_gallery_current_slug'];
    }
}

/**
 * Полный URL файла из assets/img/cities/.
 */
$crimea_city_img = function ($file) use ($crimea_assets) {
    return esc_url($crimea_assets . '/img/cities/' . ltrim($file, '/'));
};

$crimea_gallery_items = [
    [
        'href' => home_url('/gorod/yalta/'),
        'img' => '1.jpg',
        'alt' => 'Набережная Ялты — южный берег Крыма',
        'caption' => 'Ялта',
        'city_slug' => 'yalta',
    ],
    [
        'href' => home_url('/gorod/sevastopol/'),
        'img' => '2.jpg',
        'alt' => 'Панорама бухты Севастополя',
        'caption' => 'Севастополь',
        'city_slug' => 'sevastopol',
    ],
    [
        'href' => home_url('/gorod/evpatoriya/'),
        'img' => '3.jpg',
        'alt' => 'Пляжи Евпатории',
        'caption' => 'Евпатория',
        'city_slug' => 'evpatoriya',
    ],
    [
        'href' => home_url('/gorod/saki/'),
        'img' => '6.webp',
        'alt' => 'Саки — озёра и курортная зона западного побережья',
        'caption' => 'Саки',
        'city_slug' => 'saki',
    ],
    [
        'href' => home_url('/gorod/bakhchisaray/'),
        'img' => '4.jpg',
        'alt' => 'Ханский дворец Бахчисарая',
        'caption' => 'Бахчисарай',
        'city_slug' => 'bakhchisaray',
    ],
    [
        'href' => home_url('/gorod/sudak/'),
        'img' => '5.jpg',
        'alt' => 'Генуэзская крепость в Судаке',
        'caption' => 'Судак',
        'city_slug' => 'sudak',
    ],
    [
        'href' => home_url('/gorod/novy-svet/'),
        'img' => 'img9.webp',
        'alt' => 'Новый Свет — бухта, тропа Голицына и заповедная зона',
        'caption' => 'Новый Свет',
        'city_slug' => 'novy-svet',
    ],
    [
        'href' => home_url('/gorod/feodosiya/'),
        'img' => '6.webp',
        'alt' => 'Набережная Феодосии',
        'caption' => 'Феодосия',
        'city_slug' => 'feodosiya',
    ],
    [
        'href' => home_url('/gorod/stary-krym/'),
        'img' => '4.jpg',
        'alt' => 'Старый Крым — степь у предгорья, древний Солхат и многослойная история',
        'caption' => 'Старый Крым',
        'city_slug' => 'stary-krym',
    ],
    [
        'href' => home_url('/gorod/belogorsk/'),
        'img' => '4.jpg',
        'alt' => 'Белогорск — Белая скала (Ак-Кая) и степные панорамы центрального Крыма',
        'caption' => 'Белогорск',
        'city_slug' => 'belogorsk',
    ],
    [
        'href' => home_url('/gorod/shcholkino/'),
        'img' => '5.jpg',
        'alt' => 'Щёлкино — широкие пляжи Азовского моря на востоке Крыма',
        'caption' => 'Щёлкино',
        'city_slug' => 'shcholkino',
    ],
    [
        'href' => home_url('/gorod/simferopol/'),
        'img' => 'img9.webp',
        'alt' => 'Симферополь — столица Крыма, транспортный узел и Салгир',
        'caption' => 'Симферополь',
        'city_slug' => 'simferopol',
    ],
    [
        'href' => home_url('/gorod/koktebel/'),
        'img' => '5.jpg',
        'alt' => 'Коктебель — залив и массив Кара-Даг',
        'caption' => 'Коктебель',
        'city_slug' => 'koktebel',
    ],
    [
        'href' => home_url('/gorod/alushta/'),
        'img' => '7.webp',
        'alt' => 'Алушта — набережная и Южный берег Крыма',
        'caption' => 'Алушта',
        'city_slug' => 'alushta',
    ],
    [
        'href' => home_url('/gorod/alupka/'),
        'img' => '4.jpg',
        'alt' => 'Алупка — Воронцовский дворец и парк на Южном берегу Крыма',
        'caption' => 'Алупка',
        'city_slug' => 'alupka',
    ],
    [
        'href' => home_url('/gorod/gurzuf/'),
        'img' => 'img9.webp',
        'alt' => 'Бухта Гурзуфа и скалы Адалары',
        'caption' => 'Гурзуф',
        'city_slug' => 'gurzuf',
    ],
    [
        'href' => home_url('/gorod/foros/'),
        'img' => '5.jpg',
        'alt' => 'Форос — мыс, церковь на скале и панорамы Южного берега',
        'caption' => 'Форос',
        'city_slug' => 'foros',
    ],
    [
        'href' => home_url('/gorod/'),
        'img' => 'img9.webp',
        'alt' => 'Горный пейзаж Крыма',
        'caption' => 'Горный Крым',
        'city_slug' => null,
    ],
    [
        'href' => home_url('/gorod/kerch/'),
        'img' => '10.jfif',
        'alt' => 'Пейзажи Крымского полуострова',
        'caption' => 'Керчь',
        'city_slug' => 'kerch',
    ],
];
?>
    <!-- =====================================================
         GALLERY — горизонтальный scroll-snap
         ===================================================== -->
         <section class="gallery" aria-label="Фотогалерея Крыма">
          <div class="container">
            <div class="section-header">
              <div>
                <span class="eyebrow">Другие города</span>
                <h2>Крым в кадре</h2>
              </div>
            </div>
          </div>

          <div class="gallery__track-wrap">
            <div class="gallery__track" id="galleryTrack">

              <?php foreach ($crimea_gallery_items as $item) : ?>
                <?php
                $is_current = $crimea_gallery_current_slug !== ''
                    && isset($item['city_slug'])
                    && $item['city_slug'] !== null
                    && $crimea_gallery_current_slug === $item['city_slug'];
                ?>
              <a href="<?php echo esc_url($item['href']); ?>" class="gallery__item"<?php echo $is_current ? ' aria-current="page"' : ''; ?>>
                <img src="<?php echo $crimea_city_img($item['img']); ?>" alt="<?php echo esc_attr($item['alt']); ?>" loading="lazy" width="540" height="380" />
                <span class="gallery__caption"><?php echo esc_html($item['caption']); ?></span>
              </a>

              <?php endforeach; ?>

            </div>

            <button class="gallery__btn gallery__btn--prev" id="galleryPrev" aria-label="Предыдущие фото">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="gallery__btn gallery__btn--next" id="galleryNext" aria-label="Следующие фото">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
        </section>
