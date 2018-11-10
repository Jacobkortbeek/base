<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row logo">
          <?php if ( get_field( 'logo', 'options') ) { ?>
	            <img src="<?php the_field( 'logo', 'options' ); ?>" />
          <?php } ?>
        </div>
        <div class="row nav">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <?php

  				      $defaults = array(
  				        'container' => 'ul',
  				        'theme_location' => 'primary-menu',
  				        'menu_class' => 'navbar-nav'
  				      );

  				      wp_nav_menu( $defaults );

  				    ?>
  </div>
</nav>
          </div>
        </div>
      </div>
    </header>
