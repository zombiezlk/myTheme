<?php
/**
 *
 * The Header for my theme
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head><meta name="viewport" content="width=device-width">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<title>立柯的博客</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet"  type="text/css" href="http://localhost/wordpress/wp-content/themes/myTheme/genericons/genericons.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>"/> 
	<link rel="Shortcut Icon" href="http://zhuolike.com/wp-content/themes/myTheme/img/icon/Halloween-Zombie-icon32.png" />
	<?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
</head>

<body>
<div id="page">	
			<div>
				<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(). '/img/icon/Halloween-Zombie-icon64.png'?>"/>
				</a>
			</div>

			<div  class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">							
							<span class="icon-bar"></span>
                    					<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse navbar-responsive-collapse collapse" style="height: 0px;">
								<ul  class="nav">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a></li>
									<li><a href="<?php echo get_permalink(64);?>">works</a></li>
									<li><a href="<?php echo get_permalink(62);?>">contact</a></li>
									<li><a href="<?php echo get_permalink(60);?>">me</a></li>
								</ul>
				
					
								<?php get_template_part( 'searchform'); ?>	
						</div>
						 
					</div>
				
				</div>

			</div>

				
	

