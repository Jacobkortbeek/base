<?php get_header(); ?>
  <main class="home">
    <div class="container-fluid hero" style="<?php if ( get_field( 'background_image') ) { ?>
	                                             background-image: <?php the_field( 'background_image' ); ?>;
                                              <?php } ?>">
        <div class="row">
          <div class="col-md-12 logo">
            <?php $logoHero = get_field( 'logo-hero' ); ?>
            <?php if ( $logoHero ) { ?>
	             <img src="<?php echo $logoHero['url']; ?>" alt="<?php echo $logoHero['alt']; ?>" />
            <?php } ?>
            <?php the_field( 'company-name' ); ?>
          </div>
        </div>
      </div>
  </main>
<?php get_footer(); ?>
