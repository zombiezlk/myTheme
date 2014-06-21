<?php
/**
 *
 * The Header for my theme
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet"  type="text/css" href="http://localhost/wordpress/wp-content/themes/myTheme/genericons/genericons.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>"/> 
</head>
<body>
<div id="page">
	<div id="site-header">
			<div id="banner">
				<div  id="personl-icon">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="wp-content/themes/myTheme/img/icon/Halloween-Zombie-icon64.png">
					</a>

				</div>
			</div>
			

			<div id="top-nav">
				<ul id="nav-item">
					<li id="first-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a></li>
					<li><a href="<?php echo get_permalink(36);?>">works</a></li>
					<li><a href="<?php echo get_permalink(32);?>">contact</a></li>
					<li><a href="<?php echo get_permalink(23);?>">me</a></li>
				</ul>
				
				<div id="search-box">
					<?php get_template_part( 'searchform'); ?>
				</div>

			</div>
	</div>
					


	

