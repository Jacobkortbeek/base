<?php

function wpt_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css' );
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css'); 
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery'), ' ', true);
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
