<?php

  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function create_posttype() {

    register_post_type( 'staff',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Staff' ),
                'singular_name' => __( 'Staff' ),
                'menu_name'           => __( 'Staff')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Staff'),
        )
    );

    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' ),
                'menu_name'           => __( 'Portfolio')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Portfolio'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );

  if( function_exists('acf_add_options_page') ) {

      acf_add_options_page(array(
  		'page_title' 	=> 'Theme General Settings',
  		'menu_title'	=> 'Theme Settings',
  		'menu_slug' 	=> 'theme-general-settings',
  		'capability'	=> 'edit_posts',
  		'redirect'		=> false
  	));

  }

  function wpt_theme_styles() {
      wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css' );
      wp_enqueue_style('owlCarouselCss', '/js/owlcarousel/assets/owl.carousel.min.css');
      wp_enqueue_style('owlCarouselTheme', '/js/owlcarousel/assets/owl.theme.default.min.css');
      wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css');
    }
    add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery'), ' ', true);
    wp_enqueue_script( 'owlCarousel', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array('jquery'), ' ', true);
    wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), ' ', true);
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true);
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>
