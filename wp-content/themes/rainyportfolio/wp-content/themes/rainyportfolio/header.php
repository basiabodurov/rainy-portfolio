<?php
/**
 * The header for our theme.
 *
 * @package Rainy's portfolio
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
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="nav grid">
				<div class ="empty col-5_xs-12">
				</div>
				<div class="logo col-2_xs-12">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img class="navlogo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png">
					</a>
					<p>Rainy Jiang</p>
				</div>
				<div class="navbtns col-5_xs-12">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
