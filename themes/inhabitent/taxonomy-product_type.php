<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area content-whole">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
		
			<?php
				$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy'), get_query_var('description') );
			?>
			<h1 class="page-title"><?php echo $term->name;?></h1>
			<p class="taxonomy-explain"><?php echo $term->description; ?></p>

			</header><!-- .page-header -->
			
			<div class="product-grid-archive price-info-wrapper"> <!--Parent for grid-->

			<?php /* brgining of the loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo esc_url( get_permalink()) ?>" alt="Product Image"><?php the_post_thumbnail( 'large' ); ?></a>
				<?php endif; ?>

				

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="product-info">
				
				<?php the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
				<p class="dots-inside"></p>
				<p class = "product-price"><?php echo CFS()->get( 'price' ); ?></p>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>