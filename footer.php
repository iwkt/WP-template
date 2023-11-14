<footer id="footer" class="l-footer">
  <div class="l-footer__container">
    <!-- ロゴ　ロゴの名前はlogo.png -->
    <div class="l-footer__logo p-logo__footer">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo.png">
      </a>
    </div>

    <!-- WPでのnav_menu表示させる -->
    <nav class="l-footer__menu">
      <?php
      $args = array(
        'menu'        => 'footer_menu', //WPでのメニューでメニュー名をgmenuに設定
        'menu_class'  => 'l-nav-menu__items l-footer__nav',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
    <p class="l-footer__adress">
      新潟県南魚沼市水尾５５４<br>
      電話・FAX 025-779-2449<br>
      ✉️ <span class="l-footer__mail-adress">info@kosugi-noujo.com</span><br>
    </p>
    <div class="l-footer__sns">
      <?php get_template_part('/parts/sns') ?>
    </div>
    <p class="l-footer__copyright"><span class="c-copy">©️</span>2023 小杉農場</p>
  </div>
</footer>
</div><!-- header.phpのl-global__containerの閉じタグ -->

<?php wp_footer(); ?>
</body>

</html>