<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent
 */

?>

			</div><!-- #content -->
			
			<footer id="colophon" class="site-footer" role="contentinfo"> <!-- footer start -->

			<div class="footer-blocks container">
			<div class="footer-block-item"></div>
			<div class="contact"> <h3>Contact Info</h3>
			<p>
			<i class="fas fa-envelope"></i><a href= href = "mailto:info@inhabitent.com">info@inhabitent.com</a>
			</p>
			<p>
			<i class="fas fa-phone"></i><a href="tel:123456789">778-456-7891</a>
			</p>
			<p>
			<i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fab fa-google-plus-square"></i>
			</p>
			</div>
			<div class="footer-block-item">
				<h3>business hours</h3>
			<p><span>Monday-Friday:</span> 9am to 5pm</p>
			<p><span>Saturday:</span> 10am to 2pm</p>
			<p><span>Sunday:</span> Closed</p>
			</div>
			<div class="footer-block-item"></div>
			<div class="text-logo"><a href="#"><img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-text.svg'; ?>" alt="Inhabitent logo"></a></div>
			</div>
				<div class="site-info">
					 copyright &copy 2017 inhabitent
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
