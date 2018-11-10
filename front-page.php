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
        $i = 1;
          while ( have_rows('gallery_slider') ) : the_row(); ?>



              <div class="carousel-item<?php if($i == 1): ?> active<?php endif; ?>">
                <img class="d-block w-100" src="<?php the_sub_field('slider_image'); ?>" alt="">
              </div>

        <?php $i++;  endwhile;

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

    <?php

      $num_posts = get_option( 'posts_per_page' );

      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => $num_posts,
        'orderby' => 'post_date'
      );

      $query = new WP_Query( $args );

    ?>

    <div class="container portfolio">
      <div class="row port-row">
        <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <?php if( $i < 4 ) : ?>
        <div class="col-md-6 port-item">
          <div class="port" style="background-image: url('<?php if ( get_field( 'background_image') ) { ?>
    	                                                   <?php the_field( 'background_image' ); ?>
                                                         <?php } ?>');">
            <div class="cont">
              <h4><?php the_field( 'portfolio_title' ); ?></h4>
              <p>
                <?php the_field( 'portfolio_info' ); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endif; ?>
        <?php $i++;?>

        <?php endwhile; endif; wp_reset_postdata(); ?>

      </div>
    </div>

    <div class="container blog">
        <div class="row">
          <?php

            $num_posts = get_option( 'posts_per_page' );

            $args = array(
              'post_type' => 'post',
              'posts_per_page' => $num_posts,
              'orderby' => 'post_date'
            );

            $query = new WP_Query( $args );

          ?>
          <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
            <?php if($i < 4) : ?>
          <div class="col-md-4">
            <div class="post">
              <div class="img">
                <?php the_post_thumbnail( 'medium' ); ?>
                <!-- <img src="assets/images/charis-gegelman-1128426-unsplash.jpg" alt=""> -->
              </div>
              <div class="post-cont">
                <h3><?php the_title(); ?></h3>
                  <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>">More</a>
            </div>
          </div>
        <?php endif; $i++; endwhile; endif; ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="button" name="button">See All</button>
          </div>
        </div>
      </div>

    <?php get_template_part( 'template-parts/contact', 'none' ); ?>
  </main>
<?php get_footer(); ?>
