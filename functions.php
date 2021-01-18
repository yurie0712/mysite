<?php

function sample_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'sample_scripts');


add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

// 「jQuery Migrate」を読み込まないようにする
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( $scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ) );
    }
}

//サイドバーを1つ設置する
register_sidebar(array(
			'name'=>'サイドバー',
			'before_widget'=>'<div class="sidebar-wrapper">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="sidebar-title">',
			'after_title' => '</h4>'
));

// function themebs_enqueue_styles() {
//     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
//     wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
// }

// add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');


// function themebs_enqueue_scripts() {
//   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ) );
// }
// add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
//