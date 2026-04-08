<?php $theme_assets_uri = get_template_directory_uri() . '/assets'; ?>
<!-- =====================================================
       ПОДВАЛ
       ===================================================== -->
       <footer class="footer">
    <div class="container">
      <div class="footer__grid">

        <!-- Колонка 1: лого + навигация -->
        <div class="footer__col footer__col--nav">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo" aria-label="Крым — главная">КРЫМ</a>
          <p class="footer__lead">Путеводитель по полуострову — история, природа, море.</p>
          <nav aria-label="Навигация в подвале">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer__nav',
                'fallback_cb' => 'crimea_footer_menu_fallback',
            ]);
            ?>
          </nav>
        </div>

        <!-- Колонка 2: Популярное — фотосетка -->
        <div class="footer__col footer__col--popular">
          <p class="footer__col-title">Популярное</p>
          <div class="footer__photo-grid">
            <a href="<?php echo esc_url(home_url('/gorod/yalta/')); ?>" class="footer__photo-item" aria-label="Ялта">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/1.jpg'); ?>" alt="Ялта" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/sevastopol/')); ?>" class="footer__photo-item" aria-label="Севастополь">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/2.jpg'); ?>" alt="Севастополь" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="footer__photo-item" aria-label="Евпатория">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/3.jpg'); ?>" alt="Евпатория" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/bakhchisaray/')); ?>" class="footer__photo-item" aria-label="Бахчисарай">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/4.jpg'); ?>" alt="Бахчисарай" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="footer__photo-item" aria-label="Судак">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/5.jpg'); ?>" alt="Судак" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="footer__photo-item" aria-label="Феодосия">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/6.webp'); ?>" alt="Феодосия" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="footer__photo-item" aria-label="Горный Крым">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/7.webp'); ?>" alt="Горный Крым" loading="lazy" width="120" height="90" />
            </a>
            <a href="<?php echo esc_url(home_url('/gorod/')); ?>" class="footer__photo-item" aria-label="Крымские пейзажи">
              <img src="<?php echo esc_url($theme_assets_uri . '/img/cities/img9.webp'); ?>" alt="Крым" loading="lazy" width="120" height="90" />
            </a>
          </div>
        </div>

        <!-- Колонка 3: Контакты + соцсети -->
        <div class="footer__col footer__col--contact">
          <p class="footer__col-title">Связаться с нами</p>
          <ul class="footer__contact-list">
            
            <li>
              <a href="mailto:info@crimea-guide.ru" class="footer__contact-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                info@crimea-guide.ru
              </a>
            </li>
          </ul>
         
        </div>

      </div>

      <div class="footer__copy">
        &copy; 2026 Крым — Путеводитель. Все права защищены.
      </div>
    </div>
  </footer>

  <!-- Back-to-top button -->
  <button class="back-to-top" id="backToTop" aria-label="Вернуться наверх" type="button">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
  </button>

  <?php wp_footer(); ?>

</body>
</html>
