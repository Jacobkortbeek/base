<?php get_header(); ?>

<main class="blog">
  <?php

    $num_posts = get_option( 'posts_per_page' );

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $num_posts,
      'orderby' => 'post_date'
    );

    $query = new WP_Query( $args );

  ?>

  <div class="container">
      <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
          <div class="row blog-indv">
            <div class="col-md-8">
              <div class="cont">
                <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="img">
                <?php the_post_thumbnail( 'medium' ); ?>
              </div>
            </div>
            <hr>
          </div>
          </a>
          <?php endwhile; endif; ?>


        </div>
</main>

<?php get_footer(); ?>
