<?php
function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

function university_files() {
  wp_enqueue_script('JQuery',get_theme_file_uri('/assets/js/jquery.min.js'), NULL, '1.0', true);
  wp_enqueue_script('tether',get_theme_file_uri("/assets/js/tether.min.js"), NULL, '1.0', true);
  wp_enqueue_script('toolKitJS',get_theme_file_uri('/assets/js/toolkit.js'), NULL, microtime(), true);
  wp_enqueue_script('app',get_theme_file_uri('/assets/js/application.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600');
  wp_enqueue_style('toolKit',get_theme_file_uri("/assets/css/toolkit-startup.css"),NULL,microtime());
  wp_enqueue_style('appStartup',get_theme_file_uri("/assets/css/application-startup.css"),NULL,microtime());
  wp_enqueue_style('main_styles', get_stylesheet_uri(),NULL,microtime());
 /* wp_localize_script('main-university-js', 'universityData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));*/
}

add_action('wp_enqueue_scripts', 'university_files');
?>
