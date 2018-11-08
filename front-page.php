<?php get_header(); ?>
  <main class="home">
    <div class="container-fluid hero" style="<?php if ( get_field( 'background_image') ) { ?>
	                                             background-image:linear-gradient( rgba(250, 250, 250, 0.25), rgba(250, 250, 250, 0.25)), url('<?php the_field( 'background_image' ); ?>');
                                              <?php } ?>">
        <div class="row">
          <div class="col-md-12 logo">
            <?php $logoHero = get_field( 'logo-hero' ); ?>
            <?php if ( $logoHero ) { ?>
	             <img src="<?php echo $logoHero['url']; ?>" alt="<?php echo $logoHero['alt']; ?>" />
            <?php } ?>
            <h3><?php the_field( 'company-name' ); ?></h3>
          </div>
        </div>
      </div>

      <?php get_template_part( 'template-parts/about', 'none' ); ?>

  </main>
<?php get_footer(); ?>
