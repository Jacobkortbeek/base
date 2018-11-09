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
    <?php $i++;?>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</div>
