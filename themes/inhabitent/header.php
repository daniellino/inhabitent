<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html( 'Skip to content' ); ?>
			</a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container content-whole">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	
						<img class="logo-white" src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg'; ?>" class="logo"
									alt="Inhabitent Logo" />
									
						<img class="logo-green"  src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent.svg'; ?>" class="logo"
						alt="Inhabitent Logo" />			

								<h1 class="site-title">Inhabitent</h1>
							</a>
						</div>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php esc_html( 'Primary Menu' ); ?>
						</button>
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					</nav>
					<?php get_search_form();?>
				


				<p class="site-description">
					<?php bloginfo( 'description' ); ?>
				</p>
			</div><!-- .container -->
		</header>
		<!-- #masthead -->
