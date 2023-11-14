<?php
function font_setting_script()
{
  // googlefonts
  // Josefin
  wp_enqueue_style('font Josefin', '//fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;700&display=swap', array());

  // Oswald
  wp_enqueue_style('font Oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap', array());

  // NotoSansJP
  wp_enqueue_style('font_google_NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap', array());

  // ZenMaruGothic
  wp_enqueue_style('font_google_ZenMaruGothic', '//fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700&display=swap', array());

  // Zen Kaku Gothic New
  wp_enqueue_style('font_google_Zen Kaku Gothic New', '//fonts.googleapis.com/css2?family=Zen+kaku+Gothic+New:wght@400;500;700&display=swap', array());

  // Lato
  wp_enqueue_style('font_google_Lato', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap', array());

  // Lato
  wp_enqueue_style('font_google_NotoSerifJP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700&display=swap', array());

  // Yuji Syuku
  wp_enqueue_style('fYuji Syuku', '//fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap', array());
  add_action('wp_enqueue_scripts', 'font_setting_script');

  // Yuji Syuku
  wp_enqueue_style('Shippori Mincho B1', 'fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;500;700&display=swap', array());
  add_action('wp_enqueue_scripts', 'font_setting_script');
}
