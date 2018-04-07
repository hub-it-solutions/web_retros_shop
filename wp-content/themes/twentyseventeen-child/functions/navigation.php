<?php
/**
 * Navigation Functions
 *
 * @package Bulmapress
 */
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'nav-menu' => esc_html__( 'Primary', 'bulmapress' ),
	) );
// Bulmapress navigation
function bulmapress_navigation()
{
	wp_nav_menu( array(
		'theme_location'    => 'nav-menu',
		'depth'             => 0,
		'container'         => 'div id="navigation"',
		'menu_class'        => 'navbar-start'
		)
	);
}