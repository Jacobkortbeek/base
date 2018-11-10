<?php
/**
 * Template Name: Portfolio Page
 *
 */
?>
<?php get_header(); ?>
<main class="portfolio">
  <div class="container-fluid title" style="background-image: linear-gradient( rgba(250, 250, 250, 0.25), rgba(250, 250, 250, 0.25) ), url('<?php the_post_thumbnail_url( 'full' ); ?>');">
        <div class="row">
          <div class="col-md-12 text">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
  <?php get_template_part( 'template-parts/portfolio', 'none' ); ?>
</main>
<?php get_footer(); ?>
