<div class="container contact">
        <div class="row items">
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <h5><?php the_field( 'email' ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <h5><?php the_field( 'mobile' ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <h5><?php the_field( 'phone' ); ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item">
              <i class="fa fa-clock" aria-hidden="true"></i>
              <h5><?php the_field( 'opening_times' ); ?></h5>
            </div>
          </div>
        </div>
        <div class="row form">
          <div class="col-md-12">
            <?php the_field( 'contact_form' ); ?>
            <form class="" action="index.html" method="post">
              <input type="text" name="" value="" placeholder="name">
              <input type="text" name="" value="" placeholder="email">
              <textarea name="name" rows="8" cols="80"></textarea>
              <button type="button" name="button">Send</button>
            </form>
          </div>
        </div>
      </div>
