<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section class="home-banner">
		<!-- hero section start-->
		<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'; ?>" class="logo" alt="Inhabitent Logo"
		/>
	</section>
	<!-- hero section end-->
	<div id="primary" class="content-whole">
		<main id="main" class="site-main" role="main">

			<section class="shop-stuff">
				<!-- SHOP STUFF section start-->
				<h2> shop stuff</h2>

				<?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
            //    print_r($terms);

               if ( ! empty( $terms ) && ! is_wp_error ( $terms ) ) : ?>

					<div class="product-type-blocks container">

						<?php foreach ( $terms as $term ) : ?>

						<div class="product-type-block-wrapper">

							<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>"
							/>

							<p>
								<?php echo $term->description; ?>
							</p>

							<p class="btn-link">
								<a href="<?php echo get_term_link( $term ); ?>" class="btn">
									<?php echo $term->name; ?> Stuff</a>
							</p>
						</div>

						<?php endforeach; ?>

						<?php endif; ?>

			</section>
			<!-- SHOP STUFF section end-->
			<section class="latest-entries">
				<!-- INHABITENT JOURNAL section start-->

				<div class="container">
					<h2 class="big-title">Inhabitent Journal</h2>

					<!-- =================================================== -->
					<ul class="journal-entries">
						<li>
							<?php
                   $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3);
                   $journal_posts = get_posts( $args );
                   ?>
								<div class="seperate-entries">
									<?php foreach ($journal_posts as $post ) : setup_postdata ( $post ); ?>
									<?php
                       if ( has_post_thumbnail() ) :
                           the_post_thumbnail( 'large' );
                       endif;

                       // echo the_title;
                       ?>
										<div class="front-post-info-wrapper">
											<!-- start of front-post-info-wrapper -->
											<div class="entry-meta">
												<!-- .entry-meta -->
												<?php red_starter_posted_on(); ?> /
												<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
												
											</div>
											<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

											<div class="btn-black">
												<a href="<?php echo the_permalink(); ?>">Read Entry</a>
											</div>
										</div>
										<!-- end of front-post-info-wrapper-->
								</div>
								<div class="seperate-entries container">
									<?php endforeach; wp_reset_postdata(); ?>
								</div>

						</li>
					</ul>
					<!-- ===================================================== -->
				</div>
			</section>
			<!-- INHABITENT JOURNAL section end-->

			<section class="latest-adventures container">
				<!-- LATEST ADVENTURES section start-->

				<h2 class="big-title">Latest adventures</h2>
				<ul>
					<li>
						<div class="adv-pic-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/adventure-photos/canoe-girl.jpg'; ?>" alt="A girl paddling a canoe">
							<div class="adventure-title">
								<h3 class="journal-pic-title">
									<a href="#" class="adv-btn">Getting Back to Nature in a Canoe</a>
								</h3>
								<a href="#" class="white-btn">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="adv-pic-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/adventure-photos/beach-bonfire.jpg'; ?>" alt="A bonfire with friends on the beach">
							<div class="adventure-title">
								<h3 class="journal-pic-mid">
									<a href="#" class="adv-btn">A Night with Friends at the Beach</a>
								</h3>
								<a href="#" class="white-btn">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="adv-pic-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/adventure-photos/mountain-hikers.jpg'; ?>" alt="Hikers taking in the view on a mountain">
							<div class="adventure-title">
								<h3 class="journal-pic-small">
									<a href="#" class="adv-btn">Taking in the View at Big Mountain</a>
								</h3>
								<a href="#" class="white-btn">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="adv-pic-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/adventure-photos/night-sky.jpg'; ?>" alt="Person star-gazing at the night sky">
							<div class="adventure-title">
								<h3 class="journal-pic-small">
									<a href="#" class="adv-btn">Star-Gazing at the Night Sky</a>
								</h3>
								<a href="#" class="white-btn">Read More</a>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<!-- LATEST ADVENTURES section end-->

		</main>
		<!-- #main end -->
		<a class = "btn more-adv-btn" href="#">More adventures</a>
		</div>
		<!-- #primary end-->
		


		<?php get_footer(); ?>
