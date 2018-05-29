<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="prim-second-wrapper">
		<!-- start of prim-second-wrapper div -->
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<div class="social-buttons">
					
					<a href="#" class="sharing-button">
						<i class="fab fa-facebook-f"></i>Like</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-twitter"></i>Tweet</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-pinterest-square"></i>Pin</a>
				</div>
				<?php the_post_navigation(); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

					<?php endwhile; // End of the loop. ?>

			</main>
			<!-- #main -->
		</div>
		<!-- #primary -->

		<?php get_sidebar(); ?>
	</div>
	<!-- end of prim-second-wrapper div -->


	<?php get_footer(); ?>
