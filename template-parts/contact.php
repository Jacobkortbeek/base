<div class="container contact">
        <div class="row items">
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h5><?php the_field( 'email', 18 ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <h5><?php the_field( 'mobile', 18 ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <h5><?php the_field( 'phone', 18 ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-clock" aria-hidden="true"></i>
              <h5><?php the_field( 'opening_times', 18 ); ?></h5>
            </div>
          </div>
        </div>
        <div class="row form">
          <div class="col-md-12">
            <?php the_field( 'contact_form', 18 ); ?>
          </div>
        </div>
      </div>
