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
	<!--<meta name="viewport" content="width=device-width">--!>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<title>立柯的博客</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet"  type="text/css" href="http://localhost/wordpress/wp-content/themes/myTheme/genericons/genericons.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>"/> 
	<link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(). '/img/icon/Halloween-Zombie-icon32.png'?>" />
	<?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
</head>

<body>
<div id="page">	
			<div class="inline-block">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(). '/img/icon/Halloween-Zombie-icon64.png'?>"/>
				</a>
			</div>
			<div id="follow" class="pull-right">
				<a class="img-rounded social-icon github inline-block" href="https://github.com/zombiezlk" title="Follow me on github"></a>
				<a class="img-rounded social-icon weibo inline-block" href="http://weibo.com/zombiezlk" title="Follow me on weibo"></a>
				<a class="img-rounded social-icon twitter inline-block" href="https://twitter.com/zombiezlk" title="Follow me on twitter"></a>
				<a class="img-rounded social-icon douban inline-block" href="http://douban.com/people/zombiezlk/" title="Follow me on douban"></a>
			</div>

			<div  class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">							
							<span class="icon-bar"></span>
                    					<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<?php
					          if(function_exists('wp_nav_menu')){
							  $defalut = array(
							  	'theme_location'  => 'top_menu',
  								'menu'            => '',
								'container'       => 'div',
								'container_class' => 'nav-collapse navbar-responsive-collapse collapse',
								'container_id'    => '',
								'menu_class'      => 'nav menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '',
								'depth'           => 0,
								'walker'          => ''
							);
							  wp_nav_menu($default);
							  get_template_part( 'searchform');
						  }
						?>
		

					</div>

				</div>

			</div>




