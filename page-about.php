<?php
/**
 * Template Name: About Page
 *
 */
?>
<?php get_header(); ?>
<main class="about">
  <?php get_template_part( 'template-parts/about', 'none' ); ?>





  <div class="container staff-slider">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel loop">

            <?php

              $num_posts = get_option( 'posts_per_page' );

              $args = array(
                'post_type' => 'staff',
                'posts_per_page' => $num_posts,
                'orderby' => 'post_date'
              );

              $query = new WP_Query( $args );

            ?>
            <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="item">
              <div class="profile-pic">
                <?php $head_shot = get_field( 'head_shot' ); ?>
                  <?php if ( $head_shot ) { ?>
                  	<img src="<?php echo $head_shot['url']; ?>" alt="<?php echo $head_shot['alt']; ?>" />
                  <?php } ?>
              </div>
              <div class="profile-cont">
                <h5><?php the_field( 'full_name' ); ?></h5>
                <p>
                  <?php the_field( 'job_title' ); ?>
                </p>
              </div>
            </div>

            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>







<div class="container accordion">
        <div class="row">
          <div class="col-md-12">
            <div id="accordion">
              <?php

          // check if the repeater field has rows of data
          if( have_rows('collapsible_information', 23) ):

           	// loop through the rows of data
              while ( have_rows('collapsible_information', 23) ) : the_row(); ?>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                <?php // display a sub field value
                the_sub_field('collapse_title'); ?>
              </button>
            </h5>
          </div>

          <div class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <?php the_sub_field('collapse_info'); ?>
            </div>
          </div>
        </div>
      <?php endwhile;

  else : ?>

      <p>no rows found</p>

  <?php endif;

  ?>
      </div>
          </div>
        </div>
      </div>
  </main>
<?php get_footer(); ?>
