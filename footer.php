<footer>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <?php if( !dynamic_sidebar( 'footer-text' )) ?>
        no sidebar text
      <?php endif; ?>
      <?php if( !dynamic_sidebar( 'footer-logo' )) ?>
      no sidebar logo
    <?php endif; ?>
    <?php if( !dynamic_sidebar( 'footer-menu' )) ?>
    no sidebar menu
  <?php endif; ?>
      </div>
    </div>
    <?php wp_footer(); ?>
  </footer>
</body>
</html>
