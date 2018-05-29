<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<!-- start of flex wrapper -->
	<div id="primary" class="content-area content-whole">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header single-product-flex-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				
					<!-- .entry-meta -->
				</header>
				<!-- .entry-header -->

				<div class="entry-content">
					<?php echo CFS()->get( 'price' ); ?>
					<?php the_content(); ?>
					<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
				</div>
				<!-- .entry-content -->
			

				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>
				</footer>
				<!-- .entry-footer -->
			</article>
			<!-- #post-## -->
			<div class="social-buttons">
					
					<a href="#" class="sharing-button">
						<i class="fab fa-facebook-f"></i>Like</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-twitter"></i>Tweet</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-pinterest-square"></i>Pin</a>
				</div>
				
			<?php the_post_navigation(); ?>



			<?php endwhile; // End of the loop. ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
