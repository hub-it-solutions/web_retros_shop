<?php
/**************************************************/
/* BulmaWP Header
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="site content">

		<!-- Add Screen Reader Text -->
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bulmawp' ); ?></a>

		<!-- Start Header -->
		<header id="masthead" class="site-header">
			<div class="container">
				<nav class="navbar is-transparent">
  					<div class="navbar-brand">
						<?php if ( has_custom_logo() ) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a class="navbar-item navbar-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	      						<?php bloginfo( 'name' ); ?>
	    					</a><!-- navbar-item -->
						<?php } ?>

						<?php if (!empty( get_theme_mod( 'bulmawp_social_facebook' ) )) { ?>
							<a href="<?php echo get_theme_mod( 'bulmawp_social_facebook' ); ?>" class="navbar-item is-hidden-desktop">
								<span class="icon">
									<i class="fa fa-facebook"></i>
								</span>
							</a>
						<?php } ?>
						<?php if (!empty( get_theme_mod( 'bulmawp_social_twitter' ) )) { ?>
							<a href="<?php echo get_theme_mod( 'bulmawp_social_twitter' ); ?>" class="navbar-item is-hidden-desktop">
								<span class="icon">
									<i class="fa fa-twitter"></i>
								</span>
							</a>
						<?php } ?>
						<?php if (!empty( get_theme_mod( 'bulmawp_social_linkedin' ) )) { ?>
							<a href="<?php echo get_theme_mod( 'bulmawp_social_linkedin' ); ?>" class="navbar-item is-hidden-desktop">
								<span class="icon">
									<i class="fa fa-linkedin"></i>
								</span>
							</a>
						<?php } ?>

    					<div class="navbar-burger burger" data-target="primaryNav">
      						<span></span>
      						<span></span>
      						<span></span>
    					</div><!-- navbar-burger -->
  					</div><!-- navbar-brand -->
  					<div id="primaryNav" class="navbar-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' 	=> 'header-left',
				                'depth'             => 0,
				                'container'         => 'div',
				                'container_class'   => 'navbar-start',
				                'container_id'      => '',
								'items_wrap' 		=> '%3$s',
				                'menu_class'        => 'nav navbar-nav',
				                'walker'            => new BulmaWP_Walker(),
								'fallback_cb'		=> '__return_false'
							));
						?>
						<?php
							wp_nav_menu( array(
								'theme_location' 	=> 'header-right',
								'depth'             => 0,
								'container'         => 'div',
								'container_class'   => 'navbar-end',
								'container_id'      => '',
								'items_wrap' 		=> '%3$s',
								'walker'            => new BulmaWP_Walker()
							));
						?>
  					</div><!-- navbar-menu -->
				</nav><!-- navbar -->
			</div><!-- container -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
