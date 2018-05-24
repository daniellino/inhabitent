<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="home-banner">
			<!-- hero section start-->
			<img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-full.svg'; ?>" class="logo" alt="Inhabitent Logo"
			/>
		</section>
		<!-- hero section end-->

		<section class="shop-stuff">
			<!-- SHOP STUFF section start-->
			<h2> shop stuff</h2>
			<div class="product-type-blocks">
				<div class="product-type-block-wrapper">
					<img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/do.svg'; ?>" alt="Do">
					<p>
						Get back to nature with all the tools and toys you need to enjoy the great outdoors.
					</p>
					<p>
						<a href="#" class="btn">Do Stuff</a>
					</p>
				</div>
				<div class="product-type-block-wrapper">
					<img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/eat.svg'; ?>" alt="Eat">
					<p>
						Nothing beats food cooked over a fire. We have all you need for good camping eats.
					</p>
					<p>
						<a href="#" class="btn">Eat Stuff</a>
					</p>
				</div>
				<div class="product-type-block-wrapper">
					<img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/sleep.svg'; ?>" alt="Sleep">
					<p>
						Get a good night's rest in the wild in a home away from home that travels well.
					</p>
					<p>
						<a href="#" class="btn">Sleep Stuff</a>
					</p>
				</div>
				<div class="product-type-block-wrapper">
					<img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/wear.svg'; ?>" alt="Wear">
					<p>
						From flannel shirts to toques, look the part while roughing it in the great outdoors.
					</p>
					<p>
						<a href="#" class="btn">Wear Stuff</a>
					</p>
				</div>
			</div>
		</section>
		<!-- SHOP STUFF section end-->
		<section class="latest-entries">
			<!-- INHABITENT JOURNAL section start-->

			<div class="container">
				<h2>Inhabitent Journal</h2>

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


                       <h2 class="journal-title"><?php the_title(); ?></h2>
                       
                       <div class="entry-meta">
                               <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                           </div><!-- .entry-meta -->
                           
                           <a href="<?php echo the_permalink(); ?>">Read More</a>
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

			<h2>Latest adventures</h2>
			<ul>
				<li>
					<div class="adv-pic-wrapper">
						<img src="<?php echo get_template_directory_uri() . './assets/images/adventure-photos/canoe-girl.jpg'; ?>" alt="A girl paddling a canoe">
						<div class="adventure-title">
							<h3 class="journal-pic-title">
								<a href="#" class="white-btn">Getting Back to Nature in a Canoe</a>
							</h3>
							<a href="#" class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="adv-pic-wrapper">
						<img src="<?php echo get_template_directory_uri() . './assets/images/adventure-photos/beach-bonfire.jpg'; ?>" alt="A bonfire with friends on the beach">
						<div class="adventure-title">
							<h3 class="entry-title">
								<a href="#" class="white-btn">Getting Back to Nature in a Canoe</a>
							</h3>
							<a href="#" class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="adv-pic-wrapper">
						<img src="<?php echo get_template_directory_uri() . './assets/images/adventure-photos/mountain-hikers.jpg'; ?>" alt="Hikers taking in the view on a mountain">
						<div class="adventure-title">
							<h3 class="entry-title">
								<a href="#" class="white-btn">Getting Back to Nature in a Canoe</a>
							</h3>
							<a href="#" class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="adv-pic-wrapper">
						<img src="<?php echo get_template_directory_uri() . './assets/images/adventure-photos/night-sky.jpg'; ?>" alt="Person star-gazing at the night sky">
						<div class="adventure-title">
							<h3 class="entry-title">
								<a href="#" class="white-btn">Getting Back to Nature in a Canoe</a>
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
</div>
<!-- #primary end-->


		<?php get_footer(); ?>
