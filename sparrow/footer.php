<footer>

	<div class="row">

		<div class="twelve columns">
			<?php wp_nav_menu(
			array(
			'theme_location' => 'footer_menu',
			'menu' => null,
			'container' => 'div',
			'container_class' => 'footer-nav',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => '',
			'fallback_cb' => 'wp_page_menu',))
		?>

			<!-- <ul class="footer-nav">
				<li><a href="index.html">Home.</a></li>
				<li><a href="blog.html">Blog.</a></li>
				<li><a href="portfolio-index.html">Portfolio.</a></li>
				<li><a href="about.html">About.</a></li>
				<li><a href="contact.html">Contact.</a></li>
				<li><a href="styles.html">Features.</a></li>
			</ul> -->

			<ul class="footer-social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-skype"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>

			<ul class="copyright">
				<li>Copyright &copy; 2014 Sparrow</li>
				<li>Design by <a href="http://www.styleshout.com/" target="_blank">Styleshout</a></li>
			</ul>

		</div>

		<div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

	</div>

	<?php wp_footer(); ?>

	</body>

	</html>