<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dunktree
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('no-sidebar'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dtree' ); ?></a>

	<header id="masthead" class="site-header">

		<div id="brand-nav-wrap" class="header-wrap">
			<div class="site-branding">
				<?php
					dtree_site_logo();
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) );
				?>
				<button class="menu-toggle" id="menu-toggle" aria-expanded="false"><span class="screen-reader-text">Menu</span>
					<svg class="icon icon-menu-toggle" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100">
						<g class="svg-menu-toggle">
							<path class="line line-1" d="M5 13h90v14H5z"/>
							<path class="line line-2" d="M5 43h90v14H5z"/>
							<path class="line line-3" d="M5 73h90v14H5z"/>
						</g>
					</svg>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'mobile',
					'menu_id'        => 'mobile-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- #brand-nav-wrap -->

		<?php if ( is_front_page() ) : ?>

			<h1 class="scroll animated">We partner with brands, agencies and companies to build successful digital experiences with WordPress.</h1>

		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
