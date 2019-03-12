<footer>
  <div class="footer-inner">
    <div class="footer-nav-left">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-nav-left',
        'container' => 'nav',
        'container_class' => 'footer-nav-left',
        'container_id' => 'footer-nav-left',
        'fallback_cb' => ''
      )); ?>
    </div>
    <div class="footer-nav-center">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-nav-center',
        'container' => 'nav',
        'container_class' => 'footer-nav-center',
        'container_id' => 'footer-nav-center',
        'fallback_cb' => ''
      )); ?>
    </div>
    <div class="footer-nav-right">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-nav-right',
        'container' => 'nav',
        'container_class' => 'footer-nav-right',
        'container_id' => 'footer-nav-right',
        'fallback_cb' => ''
      )); ?>
    </div>
    <div class="copyright">
      &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
