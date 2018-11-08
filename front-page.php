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

      <div class="container gallery">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
      <?php
      // check if the repeater field has rows of data
      if( have_rows('gallery_slider') ):

       	// loop through the rows of data
          while ( have_rows('gallery_slider') ) : the_row(); ?>



              <div class="carousel-item">
                <img class="d-block w-100" src="<?php the_sub_field('slider_image'); ?>" alt="">
              </div>

        <?php  endwhile;

      else :

          // no rows found

      endif;
      ?>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>


  </main>
<?php get_footer(); ?>
