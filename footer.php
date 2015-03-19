</section>

<div class="footer-container">
<?php include("img/path-down.svg"); ?>
  <footer class="row">
  	<?php do_action('foundationPress_before_footer'); ?>
    	<?php dynamic_sidebar("footer-widgets_1-4"); ?>
    	<?php dynamic_sidebar("footer-widgets_2-4"); ?>
    	<?php dynamic_sidebar("footer-widgets_3-4"); ?>
    	<?php dynamic_sidebar("footer-widgets_4-4"); ?>
  	<?php do_action('foundationPress_after_footer'); ?>
</footer>
</div>
<div class="colophon-container">
  <div class="row colophon">
    <div class="small-12 medium-6 columns footer-title "><p><?php echo date('Y')." " ?><?php bloginfo( 'name' ); ?></p></div>
    <div class="small-12 medium-6 columns last">
      <ul class="social">
        <li class="icon"><i class="fa fa-facebook"></i></li>
        <li class="icon"><i class="fa fa-google-plus"></i></li>
        <li class="icon"><i class="fa fa-twitter"></i></li>
        <li class="icon"><i class="fa fa-rss"></i></li>
      </ul>
    </div>
  </div>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
