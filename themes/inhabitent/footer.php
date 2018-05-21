<?php

/**
 * The template for displaying the footer.
 *
 * @package inhabitent
 */

?>

	</div>
	<!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- footer start -->

		<div class="footer-blocks container">
			<div class="footer-block-item">
				<div class="contact">
					<h3>Contact Info</h3>
					<p>
						<i class="fas fa-envelope"></i>
						<a href=h ref="mailto:info@inhabitent.com">info@inhabitent.com</a>
					</p>
					<p>
						<i class="fas fa-phone"></i>
						<a href="tel:123456789">778-456-7891</a>
					</p>
					<p>
						<span>
							<i class="fab fa-facebook-square"></i>
						</span>
						<span>
							<i class="fab fa-twitter-square"></i>
						</span>
						<span>
							<i class="fab fa-google-plus-square"></i>
						</span>
					</p>
				</div>
			</div>
			<div class="footer-block-item">
				<div class="business-hours">
					<h3>business hours</h3>
					<p>
						<span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
					<p>
						<span class="day-of-week">Saturday:</span> 10am to 2pm</p>
					<p>
						<spanclass="day-of-week">Sunday:</span> Closed</p>
				</div>
			</div>

			<div class="footer-block-item">
				<div class="text-logo">
					<a href="#">
						<img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-text.svg'; ?>" alt="Inhabitent logo">
					</a>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">copyright &copy 2017 inhabitent</div>
		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>