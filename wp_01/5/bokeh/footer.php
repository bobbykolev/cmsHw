<div id="scroll">
  <a title="Scroll to the top" class="top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png ?>" alt="top" /></a>
</div>
<footer>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" />&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" />&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="rss" /></p>
      <p><a href="#">Home</a> | <a href="#">Examples</a> | <a href="#">A Page</a> | <a href="#">Another Page</a> | <a href="#">Contact Us</a></p>
      <p>Copyright &copy; CSS3_bokeh | <a href="#">Heart Internet Domain Names</a> | <a href="#">design from css3templates.co.uk</a></p>
    </footer>
  </div><!--end main-->
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>