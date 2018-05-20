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
			<img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-full.svg'; ?>" class="logo" alt="Inhabitent Logo"/>
		</div>


		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
