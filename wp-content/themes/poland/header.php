<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

	<link
        rel="stylesheet"
        href="/wp-content/themes/poland/styles/styles.min.css"
      />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
	<header class="header">
		<div class="flex_container header-top">
			<div class="header-top__links">
				<a class="header-top__links-icon" href="#">
					<svg class="icon-header"><use xlink:href="#sun"/></svg>
					<span>Kariera</span>	
				</a>
				<a class="header-top__links-icon" href="#">
					<svg class="icon-header"><use xlink:href="#sun"/></svg>
					<span>Blog</span>  
				</a>
				<a class="header-top__links-icon" href="#">
					<svg class="icon-header"><use xlink:href="#sun"/></svg>
					<span>Relacje inwestorskie</span>	
				</a>	
			</div>					
		</div>
		<div class="header-bottom__container">
			<div class="flex_container header-bottom">
				<a class="logo" href="#">
					<img src="/wp-content/themes/poland/images/logo.svg" alt="">
				</a>
				<button class="nav-tools__burger">
					<span></span>
				</button>	
				<div class="header-bottom__center animate__animated">
					<!-- <ul class="nav-bar">
						<li><a href="#">Dla domu</a></li>
						<li><a href="#">Dla biznesu</a></li>
						<li><a href="#">Dla Rolnika</a></li>
						<li><a href="#">Farmy PV</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Kontakt</a></li>
					</ul> -->


					<?php 
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => '', 
							'container'       => 'ul', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'nav-bar', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>



					<a class="blue-btn header-phone" href="#">
						<svg class="icon"><use xlink:href="#sun"/></svg>
						<span>INFOLINIA:</span>
						<span class="header-number">+48 12 307 30 96</span>
					</a>
				</div>									
			</div>
		</div>	
	</header><!-- #masthead -->
