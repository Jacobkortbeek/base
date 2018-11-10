<?php get_header(); ?>
  <main class="blog-indv">
    <?php
       // Start the loop.
       while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid title" style="background-image: linear-gradient( rgba(250, 250, 250, 0.25), rgba(250, 250, 250, 0.25) ), url('<?php the_post_thumbnail_url( 'full' ); ?>');">
        <div class="row">
          <div class="col-md-12 text">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row blog-indv">
          <div class="col-md-12">
            <div class="cont">
              <p>
                <?php the_content(); ?>
              </p>
            </div>
          </div>
          <hr>
        </div>

      </div>
    <?php endwhile; ?>
  </main>
<?php get_footer(); ?>
