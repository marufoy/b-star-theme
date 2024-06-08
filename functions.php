<?php

wp_register_style(
  'reset_style',
  get_template_directory_uri() . '/reset.css',
  array(),
  '1.0' 
); 

wp_enqueue_style(
  'main_style',
  get_template_directory_uri() . '/style.css',
  array('reset_style'), // reset_styleが読み込まれた後にmain_styleを読み込む 
  '1.0'
);

function add_custom_scripts() {
  // JavaScriptファイルを登録
  wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), '1.0', true);
  // JavaScriptファイルを読み込み
  wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');