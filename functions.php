<?php
 
function sample_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'sample_scripts');