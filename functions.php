<?php
function add_theme_styles()
{
  // reset.cssを登録
  wp_register_style(
    'reset_style',
    get_template_directory_uri() . '/reset.css',
    array(),
    '1.0'
  );

  // reset.cssに依存するstyle.cssを登録
  wp_enqueue_style(
    'main_style',
    get_template_directory_uri() . '/style.css',
    array('reset_style'),
    '1.0'
  );

  //slick.CSSの読み込み
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/slick/slick.css', array(), '1.0.0');
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', array('slick-style'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_theme_styles');

function add_custom_scripts()
{
  // jQueryをGoogleのCDNから追加
  wp_enqueue_script(
    'jquery-cdn',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    array(),
    '3.6.0',
    true
  );

  // タブライブラリを追加
  wp_enqueue_script(
    'tabs-library',
    get_template_directory_uri() . '/assets/js/jquery.tab.js',
    array('jquery-cdn'),
    null,
    true
  );

  // slickライブラリを追加
  wp_enqueue_script(
    'slick-script',
    get_template_directory_uri() . '/assets/js/slick.min.js',
    array('jquery'),
    '1.0.0',
    true
  );

  wp_enqueue_script(
    'scroll-script',
    get_template_directory_uri() . '/assets/js/scrollreveal.min.js',
    array('jquery'),
    '1.0.0',
    true
  );

  // カスタムスクリプトを追加
  wp_enqueue_script(
    'jquery-script',
    get_template_directory_uri() . '/assets/js/jquery-script.js',
    array('jquery-cdn', 'tabs-library'),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');
?>