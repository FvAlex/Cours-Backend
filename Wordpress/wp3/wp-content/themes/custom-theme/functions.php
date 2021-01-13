<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
  'main' => __( 'Menu principal', 'custom-theme' ),
) );
register_nav_menus( array(
  'footer' => __( 'Pied de page', 'custom-theme' ),
) );


add_theme_support( 'post-thumbnails' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', ['style']);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', [], null, true);
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );