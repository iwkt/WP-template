<?php
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menus();
wp_link_pages();
add_theme_support('automatic-feed-links');
add_theme_support("wp-block-styles");
add_theme_support("responsive-embeds");
add_theme_support("custom-logo");
add_theme_support("align-wide");
add_theme_support("custom-background");
add_editor_style();

$defaults = array(
  'default-image' => '',
  'random-default' => false,
  'width' => 0,
  'height' => 0,
  'flex-height' => false,
  'flex-width' => false,
  'default-text-color' => '',
  'header-text' => true,
  'uploads' => true,
  'wp-head-callback' => '',
  'admin-head-callback' => '',
  'admin-preview-callback' => '',
  'video' => false,
  'video-active-callback' => 'is_front_page',
);
add_theme_support('custom-header', $defaults);

// fontだけ別フォルダに分けたのでここで読み込み
require_once get_theme_file_path("./inc/web_font.php");

function setting_script()
{
  remove_filter('the_excerpt', 'wpautop'); //pタグの消去

  wp_enqueue_style('swiper', "https://unpkg.com/swiper@7/swiper-bundle.min.css");

  wp_enqueue_style('main_style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

  //script

  // wp_enqueue_script('js-adobeFonts', get_template_directory_uri() . '/assets/js/adobe_fonts.js', array(), '1.0.0');

  wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.2.1.min.js');

  //footerで
  wp_enqueue_script('hamburgerMenu.js', get_template_directory_uri() . '/assets/js/hamburgerMenu.js', array(), false, true);

  wp_enqueue_script('swiper.js', "https://unpkg.com/swiper@7/swiper-bundle.min.js", array(), false, true);

  wp_enqueue_script('isobserv.js', get_template_directory_uri() . '/assets/js/isobserv.js', array(), false, true);

  wp_enqueue_script('accordion.js', get_template_directory_uri() . '/assets/js/accordion.js', array(), false, true);

  wp_enqueue_script('iosClearWtoch', get_template_directory_uri() . '/assets/js/iosClearWtoch.js', array(), false, true);

  wp_enqueue_script('addClassMenuName', get_template_directory_uri() . '/assets/js/addClassListMenuName.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'setting_script');


// メニューの説明文を表示する
function edit_menu_link($atts, $item)
{
  // メニュー項目が「説明」を持っている場合
  if (!empty($item->description)) {
    // リンクにdata-desc属性を追加する
    $atts['data-desc'] = $item->description;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'edit_menu_link', 10, 2);


// ウイジェット
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ));

  register_sidebar(array(
    'name' => 'Footer Widgets',
    'id' => 'footer-widgets',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');


//勝手にPタグとbrタグを入れさせない
add_action('init', function () {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
});
