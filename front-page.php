<?php get_header(); ?>
  <main class="home">
    <div class="container-fluid hero" style="<?php if ( get_field( 'background_image') ) { ?>
	                                             background-image: linear-gradient(
                                                 rgba(250, 250, 250, 0.25),
                                                 rgba(250, 250, 250, 0.25)
                                                ), <?php the_field( 'background_image' ); ?>
                                              <?php } ?>">
        <div class="row">
          <div class="col-md-12 logo">
            <?php $logo-hero = get_field( 'logo-hero' ); ?>
            <?php if ( $logo-hero ) { ?>
	             <img src="<?php echo $logo-hero['url']; ?>" alt="<?php echo $logo-hero['alt']; ?>" />
            <?php } ?>
            <?php the_field( 'company-name' ); ?>
          </div>
        </div>
      </div>
  </main>
<?php get_footer(); ?>
