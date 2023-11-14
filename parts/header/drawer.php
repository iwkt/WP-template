<div id="drawer" class="p-drawer js-drawer'">
  <div class="p-drawer__logo__container">
    <button id="hambuger-btn-close" class="p-drawer__close-button c-hamburger__close  js-drawer">
      <div></div>
      <div></div>
    </button>
    <div class="p-drawer__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo-color.png" alt="小杉農場">
      </a>
    </div>
  </div>
  <!-- WPでのnav_menu表示させる -->
  <nav class="p-drawer__menu">
    <?php
    $args = array(
      'menu'        => 'gmenu',
      'menu_class'  => 'p-drawer__menu__items',
      'container' => false,
    );
    wp_nav_menu($args);
    ?>
  </nav>
</div>