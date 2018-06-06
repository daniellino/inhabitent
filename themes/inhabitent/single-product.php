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
				<header class="entry-header">
					
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
					
					

				
					<!-- .entry-meta -->
				</header>
				<!-- .entry-header -->

				<div class = "product-content-wrapper">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class = "product-price-container">
				<?php echo CFS()->get( 'price' ); ?>
				</div>
				<!-- end of product-price-container -->
				<div class="entry-content">
					
					<?php the_content(); ?>
					<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
				</div>
				<!-- .entry-content -->
			

				
				<div class="social-buttons">
					
					<a href="#" class="sharing-button">
						<i class="fab fa-facebook-f"></i>Like</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-twitter"></i>Tweet</a>
					<a href="#" class="sharing-button">
						<i class="fab fa-pinterest-square"></i>Pin</a>
				</div>
				</div>
				<!-- end of product-content-wrapper -->
			</article>
			<!-- #post-## -->
		
				
		



			<?php endwhile; // End of the loop. ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
