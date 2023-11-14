<!DOCTYPE html>
<html lang="ja" id="html">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body id="body" <?php body_class("l-header__body"); ?>>
  <?php wp_body_open(); ?>
  <div class="l-global__container">
    <header class="l-header">
      <nav class="l-header__container">
        <div class="l-header__nav p-nav__container">
          <!-- トップページならロゴをh1にする -->
          <?php if (is_home() || is_front_page()) { ?>
            <h1 class="l-header__logo p-nav__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo.png" alt="ロゴ">
              </a>
            </h1>
            <!-- トップページ以外ならならロゴには特に指定なし -->
          <?php } else { ?>
            <div class="l-header__logo p-nav__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/logo.png" alt="">
              </a>
            </div>
          <?php } ?>
          <div class="p-nav__menu__wrapper">
            <!-- WPでのnav_menu表示させる -->
            <?php
            $args = array(
              'menu'        => 'gmenu', //WPでのメニューでメニュー名をgmenuに設定
              'menu_class'  => 'p-drawer__menu__items p-nav__items', //WPでのメニューでメニュー名をgmenuに設定
              'container' => false,
            );
            wp_nav_menu($args);
            ?>
            <!-- snsアイコン等挿し込む -->
            <div class="p-nav__sns__wrapper">
              <?php get_template_part('parts/sns/sns') ?>
            </div>
          </div>
          <!-- ハンバーガーメニュー挿し込む -->
          <div id="hamburger" class="l-header__hamburger top-page c-hamburger">
            <button id="hambuger-btn" class="c-hamburger__menu -white js-drawer">
              <div></div>
              <div></div>
              <div></div>
            </button>
          </div>
        </div>
      </nav>
    </header>