<?php
 
function sample_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'sample_scripts');


add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}