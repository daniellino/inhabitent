<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-blocks container">
			<div class="footer-block-item"></div>
			<div class="contact"> <h3>Contact Info</h3>
			<p><i class="fas fa-envelope"></i><a href= href = "mailto:info@inhabitent.com">info@inhabitent.com</a></p>
			<p><i class="fas fa-phone"></i><a href="tel:123456789">778-456-7891</a></p>
			<p><i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fab fa-google-plus-square"></i></p>
			</div>
			<div class="footer-block-item"></div>
			<div class="footer-block-item"></div>
			</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
