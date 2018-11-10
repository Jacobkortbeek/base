<?php get_header(); ?>
  <main class="blog-indv">
    <?php
       // Start the loop.
       while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid title">
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
  </main>
<?php get_footer(); ?>
