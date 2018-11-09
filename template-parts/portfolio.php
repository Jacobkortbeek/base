
<div class="container portfolio">

        <div class="row port-row">
          <?php

          // check if the repeater field has rows of data
          if( have_rows('portfolio-field') ):

           	// loop through the rows of data
              while ( have_rows('portfolio-field') ) : the_row(); ?>
          <div class="col-md-6 port-item">
            <div class="port" style="background-image: url('<?php the_sub_field('background_image'); ?>');">
              <div class="cont">
                <h4><?php the_sub_field('portfolio_title'); ?></h4>
                <p>
                  <?php the_sub_field('portfolio_info'); ?>
                </p>
              </div>
            </div>
          </div>
          <?php
              endwhile;

          else :

              // no rows found

          endif;

          ?>

        </div>
      </div>
