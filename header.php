<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numer23
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

<body <?php body_class(); ?>>
<div id="page"  class="site">
<span style='display:none'  class="icon-box"><svg viewBox="0 0 24 24"  fill='#1c1c1c' class="navCollapseIcon" ><g data-name="Layer 2"><g data-name="arrow-ios-downward"><rect  opacity="0"/><path d="M12 16a1 1 0 0 1-.64-.23l-6-5a1 1 0 1 1 1.28-1.54L12 13.71l5.36-4.32a1 1 0 0 1 1.41.15 1 1 0 0 1-.14 1.46l-6 4.83A1 1 0 0 1 12 16z"/></g></g></svg></span>
	
	<header class="nav">
		<div class="wrapper">
            
		   <?php 
			echo the_custom_logo();  
		   ?>
			
			<img src='' alt=''>
			<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
			</nav>
</div>
	</header>

	<div id="content" class="site-content">
