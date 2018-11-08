<div class="container about">
        <div class="row">
          <div class="col-md-6 content">
            <h3><?php the_field( 'title', 23 ); ?></h3>
            <p>
              <?php the_field( 'paragraph', 23 ); ?>
            </p>
          </div>
          <div class="col-md-6 image">
            <?php $about_image = get_field( 'about_image', 23 ); ?>
            <?php if ( $about_image ) { ?>
	             <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
            <?php } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="<?php the_field( 'about_button', 23 ); ?>">
              <button type="button" name="button">More info</button>
            </a>
          </div>
        </div>
      </div>
