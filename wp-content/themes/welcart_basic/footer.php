	</div><!-- #main -->

	<?php if(  is_home() || is_front_page() ): ?>
  	<div class="info_area">
  	  <h2>Thanks for comming</h2>
  	  <h3>Hope to see you soon. Thank you &#9829;<br>
Th	is shop is all created, managed, supervised by <a target=_blank href="https://kohimoto.com">kohimoto</a>.</h3>
  	</div>

	<?php endif; ?>

	<?php if(! wp_is_mobile()): ?>

		<div id="toTop" class="wrap fixed"><a href="#masthead"><i class="fa fa-chevron-circle-up"></i></a></div>

	<?php endif; ?>

	<footer id="colophon" role="contentinfo">


		<p class="copyright">Copyright &copy; 2017 kohimoto. All Rights Reserved. Designed by <a href="http://kohimoto.com/" target="_blank">kohimoto</a>.</p>

	</footer><!-- #colophon -->
	<script src="/wp-content/themes/welcart_basic/js/jquery.min.js"></script>
	<script src="/wp-content/themes/welcart_basic/js/navnemu.js"></script>
	<script src="/wp-content/themes/welcart_basic/js/animation.js"></script><!-- navmenu -->

	<?php wp_footer(); ?>
	</body>
</html>
