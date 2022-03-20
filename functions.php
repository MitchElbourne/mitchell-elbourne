<?php

add_filter('show_admin_bar', '__return_false');

function add_theme_scripts() {  
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
  
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>