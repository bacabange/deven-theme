<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deven_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>

	<script src="https://use.fontawesome.com/fe2b40e455.js"></script>
</head>

<body <?php body_class(); ?>>

		<div class="navbar-fixed">
			<nav class="z-depth-0">
				<div class="nav-wrapper container">
					<div class="nav-wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
							<object class="logo" type="image/svg+xml" data="<?php echo get_template_directory_uri() ?>/img/logo.svg"><?php bloginfo( 'name' ); ?></object>
						</a>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-main',
								'menu_id' => 'primary-menu',
								'container' => false, 
								'menu_class' => 'right hide-on-med-and-down', 
							) );
						?>
					</div>
				</div>
			</nav>
		</div>
