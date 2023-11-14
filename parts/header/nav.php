<nav class="p-nav__container">
  <div class="l-header__logo p-nav__logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo.svg" alt="">
    </a>
  </div>

  <div class="p-nav__menu__wrapper">
    <!-- WPでのnav_menu表示させる -->
    <?php
    $args = array(
      'menu'       => 'gmenu',
      'menu_class' => 'p-nav__items',
      'container'  => false,
    );
    wp_nav_menu($args);
    ?>
    <div class="p-nav__sns__wrapper">
      <?php get_template_part('parts/sns/sns') ?>
    </div>
  </div>

  <div id="hamburger" class="c-hamburger__button">
    <button id="hambuger-btn" class="c-hamburger__menu js-drawer">
      <div></div>
      <div></div>
      <div></div>
    </button>
  </div>
</nav>