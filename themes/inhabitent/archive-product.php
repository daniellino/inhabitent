<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-whole">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					
				?>


					<?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
            //    print_r($terms);

               if ( ! empty( $terms ) && ! is_wp_error ( $terms ) ) : ?>
						<?php foreach ( $terms as $term ) : ?>
						<a href="<?php echo get_term_link( $term ); ?>">
							<?php echo $term->name; ?>
						</a>
						<?php endforeach; ?>

						<?php endif; ?>
			</header>
			<!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="products-grid-wrapper">
				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header product-image-container">
						<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php echo esc_url( get_permalink()) ?>" alt="Product Image">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
						
						<?php endif; ?>
					</header>
					<!-- .entry-header -->

					<div class="product-info">
						<div class='product-price'>
							<?php
								echo CFS()->get( 'price' );
							?>
						</div>
					</div>

				</article>
				<!-- #post-## -->


				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<!-- end of grid wrapper -->
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
