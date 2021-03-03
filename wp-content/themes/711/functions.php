<?php 

function enqueue_styles_scripts() {
  wp_enqueue_style( 'css-main', get_template_directory_uri() . '/assets/dist/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/dist/css/main.css' ) );

   wp_enqueue_script( 'js-jquery', get_template_directory_uri() . '/assets/src/js/vendor/jquery-3.5.1.min.js', array(), true );
   
   wp_enqueue_script( 'js-rellax', get_template_directory_uri() . '/assets/src/js/vendor/rellax.min.js', array(), true );

  wp_enqueue_script( 'js-scripts', get_template_directory_uri() . '/assets/dist/js/main.js', array(), true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );


add_theme_support( 'menus');
register_nav_menus( array (
  'header-nav' => 'Header Navigation',
  )
);