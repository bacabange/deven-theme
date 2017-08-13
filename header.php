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

	<header class="homeHeader">

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

						
						<!-- <ul class="right hide-on-med-and-down">
							<li><a href="#">Blog</a></li>
							<li><a href="https://github.com/bacabange" target="_blank"><i class="fa fa-github"></i></a></li>
							<li><a href="https://www.linkedin.com/in/stivncastillo/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						</ul> -->
					</div>
				</div>
			</nav>
		</div>
		
		<div class="homeHeader-content">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1>Hi!</h1>
						<p>Me apasiona el desarrollo y el diseño de aplicaciones web y móviles. Cuento con más de 5 años de experiencia y siempre estoy disponible a escuchar y tal vez a trabajar en nuevas ideas. </p>
						<p><span class="text-sc-blue"><i class="fa fa-envelope"></i></span> stivencastillo.90@gmail.com</p>
						<!-- <a class="waves-effect waves-light btn btn-primary">Contact</a> -->
					</div>

				</div>
			</div>
		</div>
	</header>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'deven-blog' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'deven-blog' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
