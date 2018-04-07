<?php
/**************************************************/
/* BulmaWP Theme Customizer
/* @package BulmaWP
/* Version: 0.1
/* Updated: 5th Aug 2017
/**************************************************/

	function bulmawp_customize_register( $wp_customize ) {

		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

		if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial( 'blogname', array(
				'selector'        => '.site-title a',
				'render_callback' => 'bulmawp_customize_partial_blogname',
			) );
			$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'bulmawp_customize_partial_blogdescription',
			) );
		}
		$wp_customize->remove_section("colors");
		$wp_customize->remove_section("header_image");

	}

	add_action( 'customize_register', 'bulmawp_customize_register' );

/**************************************************/
/* Render the site title for the selective refresh partial.
/**************************************************/

	function bulmawp_customize_partial_blogname() {
		bloginfo( 'name' );
	}

/**************************************************/
/* Render the site tagline for the selective refresh partial.
/**************************************************/

	function bulmawp_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}

/**************************************************/
/* RBinds JS handlers to make Theme Customizer preview reload changes asynchronously.
/**************************************************/

	function bulmawp_customize_preview_js() {
		wp_enqueue_script( 'bulmawp-customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20151215', true );
	}

	add_action( 'customize_preview_init', 'bulmawp_customize_preview_js' );

/**************************************************/
/* BulmaWP Theme Options
/**************************************************/


	function bulmawp_register( $wp_customize ) {

		// Add our Customizer section
		$wp_customize->add_section( 'bulmawp_options', array(
			'title' 		=> __( 'BulmaWP Options', 'bulmawp' ),
			'priority' 		=> 35,
			'capability' 	=> 'edit_theme_options',
			'description' 	=> __( 'Customize the theme settings for BulmaWP.', 'bulmawp' ),
		) );

		// Set the home page title
		$wp_customize->add_setting( 'bulmawp_home_title', array(
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'			=> 'refresh'
		) );

		$wp_customize->add_control( 'bulmawp_home_title', array(
			'type' 			=> 'textarea',
			'section' 		=> 'bulmawp_options', // Add a default or your own section
			'label' 		=> __( 'Front Page Title', 'bulmawp' ),
			'description' 	=> __( 'The title you want shown on the front page when the "Front page displays" setting is set to "Your latest posts" in Settings > Reading.', 'bulmawp' ),
		) );

		$wp_customize->add_setting('bulmawp_blog_columns', array(
	        'default'        => 'is-half-desktop is-half-tablet is-half-mobile',
	        'capability'     => 'edit_theme_options',
	        'type'           => 'theme_mod',
	    ));

	    $wp_customize->add_control( 'bulmawp_blog_columns', array(
	        'settings' 		=> 'bulmawp_blog_columns',
			'label' 		=> __( 'Blog Columns', 'bulmawp' ),
			'description' 	=> __( 'The title you want shown on the front page when the "Front page displays" setting is set to "Your latest posts" in Settings > Reading.', 'bulmawp' ),
	        'section' 		=> 'bulmawp_options',
	        'type'    		=> 'select',
	        'choices'    	=> array(
	            'is-half-desktop is-half-tablet is-half-mobile' => __( '2 Columns (Default)', 'bulmawp' ),
	            'is-one-third-desktop is-half-tablet is-half-mobile' => __( '3 Columns', 'bulmawp' ),
	            'is-one-quarter-desktop is-half-tablet is-half-mobile' => __( '4 Columns', 'bulmawp' ),
	        ),
	    ));

		$wp_customize->add_setting('bulmawp_author_bio_display', array(
	        'default'        => '0',
	        'capability'     => 'edit_theme_options',
	        'type'           => 'theme_mod',
	    ));

		$wp_customize->add_control( 'bulmawp_author_bio_display', array(
	        'settings' 		=> 'bulmawp_author_bio_display',
			'label' 		=> __( 'Display Author Bios', 'bulmawp' ),
			'description' 	=> __( 'The title you want shown on the front page when the "Front page displays" setting is set to "Your latest posts" in Settings > Reading.', 'bulmawp' ),
	        'section' 		=> 'bulmawp_options',
	        'type'    		=> 'select',
	        'choices'    	=> array(
	            '0' => __( 'Display on Posts &amp; Pages (Default)', 'bulmawp' ),
	            '1' => __( 'Display on Posts only', 'bulmawp' ),
	            '3' => __( 'Display on Pages only', 'bulmawp' ),
				'4' => __( 'Do not display Author Bios', 'bulmawp' ),
	        ),
	    ));


		// Social Media Section
		$wp_customize->add_section( 'bulmawp_social_media', array(
			'title' 		=> __( 'BulmaWP Social Media', 'bulmawp' ),
			'priority' 		=> 35,
			'capability' 	=> 'edit_theme_options',
			'description' 	=> __( 'Setup and display your social media links.', 'bulmawp' ),w
		) );

		$wp_customize->add_setting( 'bulmawp_social_facebook', array(
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'			=> 'refresh'
		) );
		$wp_customize->add_control( 'bulmawp_social_facebook', array(
			'type' 			=> 'text',
			'section' 		=> 'bulmawp_social_media', // Add a default or your own section
			'label' 		=> __( 'Facebook URL', 'bulmawp' ),
			'description' 	=> __( 'Your Facebook URL (please include http://)', 'bulmawp' ),
		) );

		$wp_customize->add_setting( 'bulmawp_social_twitter', array(
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'			=> 'refresh'
		) );

		$wp_customize->add_control( 'bulmawp_social_twitter', array(
			'type' 			=> 'text',
			'section' 		=> 'bulmawp_social_media', // Add a default or your own section
			'label' 		=> __( 'Twitter URL', 'bulmawp' ),
			'description' 	=> __( 'Your Twitter URL (please include http://)', 'bulmawp' ),
		) );

		$wp_customize->add_setting( 'bulmawp_social_linkedin', array(
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'			=> 'refresh'
		) );

		$wp_customize->add_control( 'bulmawp_social_linkedin', array(
			'type' 			=> 'text',
			'section' 		=> 'bulmawp_social_media', // Add a default or your own section
			'label' 		=> __( 'LinkedIn URL', 'bulmawp' ),
			'description' 	=> __( 'Your LinkedIn URL (please include http://)', 'bulmawp' ),
		) );


	}

	add_action( 'customize_register', 'bulmawp_register' );
