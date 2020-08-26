<?php wp_footer();?>


<footer class="container-fluid border-top border-light py-3">
  <div class="row align-items-center pt-5">
    <div class="col text-secondary">
      <form class="">
        <input type="text" placeholder="email address" id="email"></br>
        <input type="submit" value="Subscribe" id="sub">
      </form>
    </div>
    <div class="col">
<?php dynamic_sidebar(); ?>
    </div>
    <div class="col" id="footer-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </div>
  </div>
</footer>

</body>
</html>
