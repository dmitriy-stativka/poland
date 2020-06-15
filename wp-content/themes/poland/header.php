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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

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
	
		<div class="header-bottom__container">
			<div class="flex_container header-bottom">
				<?php 	
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

					if($custom_logo_id){ ?>
						<a href="<?php echo home_url(); ?>" class="logo">
							<img src="<?php echo $image[0];?>" alt="">
						</a> 
					<?php }
				?>
				<button class="nav-tools__burger">
					<span></span>
				</button>	
				<div class="header-bottom__center animate__animated">

					<?php 
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => 'general_menu', 
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
						<svg class="icon"><use xlink:href="#phone"/></svg>
						<span>INFOLINIA:</span>
						<span class="header-number"><?php the_field('tell_numb', 10);?></span>
					</a>
				</div>									
			</div>
		</div>	
	</header><!-- #masthead -->
