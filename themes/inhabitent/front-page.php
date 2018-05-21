<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<header>
		<h1>Header</h1>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div>
				<img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-full.svg'; ?>" class="logo" alt="Inhabitent Logo"
				/>
			</div>
			<section class="latest-entries">
				<!-- INHABITENT JOURNAL start-->

				<div class="container">
					<h2>Inhabitent Journal</h2>
					<ul>
						<li>
							<div class="journal-pic-wrapper">
								<img src="<?php echo get_template_directory_uri() . './assets/images/blog-photos/van-camper.jpg'; ?>" alt="Van camper at night">
							</div>
							<div class="journal-pic-wrapper">
								<span class="journal-time-comment">
									<span class="post-date">
										<time class="entry-date published"></time>
										<time class="updated"></time>
									</span>
									<h3 class="journal-pic-title">
										<a href="#">Van Camping Photo Contest</a>
									</h3>
								</span>
							</div>
							<a href="#" class="journal-post-btn">Read Entry</a>
						</li>
						<li>
							<div class="journal-pic-wrapper">
								<img src="<?php echo get_template_directory_uri() . './assets/images/blog-photos/warm-cocktail.jpg'; ?>" alt="A cup of coffee on a grill">
							</div>
							<div class="journal-pic-wrapper">
								<span class="journal-time-comment">
									<span class="post-date">
										<time class="entry-date published"></time>
										<time class="updated"></time>
									</span>
									<h3 class="journal-pic-title">
										<a href="#">Fireside Libations: 3 Warm Cocktail Recipes</a>
									</h3>
								</span>
							</div>
							<a href="#" class="journal-post-btn">Read Entry</a>
						</li>
						<li>
							<div class="journal-pic-wrapper">
								<img src="<?php echo get_template_directory_uri() . './assets/images/blog-photos/healthy-camp-food.jpg'; ?>" alt="A pan of vegetables cooking">
							</div>
							<div class="journal-pic-wrapper">
								<span class="journal-time-comment">
									<span class="post-date">
										<time class="entry-date published"></time>
										<time class="updated"></time>
									</span>
									<h3 class="journal-pic-title">
										<a href="#">Van Camping Photo Contest</a>
									</h3>
								</span>
							</div>
							<a href="#" class="journal-post-btn">Read Entry</a>
						</li>
					</ul>
				</div>
			</section>
			<!-- INHABITENT JOURNAL end-->

			<section class="latest-adventures container">
				<!-- LATEST ADVENTURES start-->

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
			<!-- LATEST ADVENTURES end-->

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
