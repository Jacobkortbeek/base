<?php
/**
 * Template Name: Gallery Page
 *
 */
?>
<?php get_header(); ?>
<main class="gallery">
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
  <?php

// check if the repeater field has rows of data
if( have_rows('gallery_accordion') ):

 	// loop through the rows of data
    while ( have_rows('gallery_accordion') ) : the_row(); ?>


        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php the_sub_field('accordion_title'); ?></a>

    <?php endwhile;

else :

    // no rows found

endif;

?>
</div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <?php

// check if the repeater field has rows of data
if( have_rows('gallery_accordion') ):

 	// loop through the rows of data
    while ( have_rows('gallery_accordion') ) : the_row(); ?>
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="container">
                <div class="row">

                  <div class="col-md-4">
                    <div class="img">
                      <img src="assets/images/charis-gegelman-1128426-unsplash.jpg" alt="">
                    </div>
                  </div>

                </div>
              </div>
            </div>

        <?php the_sub_field('accordion_gallery'); ?>

    <?php endwhile;

else :

    // no rows found

endif;

?>
</div>
</main>
<?php get_footer(); ?>