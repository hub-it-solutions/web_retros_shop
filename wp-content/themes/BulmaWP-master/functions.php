<?php
/**************************************************/
/* BulmaWP Functions and Definitions
/* @package BulmaWP
/* Version: 0.1.1
/* Updated: 14th Aug 2017
/**************************************************/

if ( ! function_exists( 'bulmawp_setup' ) ) :

	/**************************************************/
	/* Setup the theme defaults
	/**************************************************/

	function bulmawp_setup() {

		// Make theme available for translation
		load_theme_textdomain( 'bulmawp', get_template_directory() . '/includes/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Add BulmaWP custom image sizes
		add_image_size( 'bulmawp_preview-image', 1200, 9999 );
		add_image_size( 'bulmawp_fullscreen-image', 1860, 9999 );

		// Register the navigation menus
		register_nav_menus( array(
			'header-left' => esc_html__( 'Header Left', 'bulmawp' ),
			'header-right' => esc_html__( 'Header Right', 'bulmawp' ),
		) );

		// Switch default core markup to HTML5
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}

endif;
add_action( 'after_setup_theme', 'bulmawp_setup' );

/**************************************************/
/* Set the content width in pixels
/**************************************************/

	function bulmawp_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'bulmawp_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'bulmawp_content_width', 0 );

/**************************************************/
/* Register Widget Areas
/**************************************************/

	function bulmawp_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'bulmawp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bulmawp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'bulmawp_widgets_init' );

/**************************************************/
/* Enqueue Styles
/**************************************************/

	function bulmawp_styles() {
		wp_enqueue_style( 'bulmawp-css', get_template_directory_uri() . '/includes/css/bulma-0.5.1.css', array(), '0.5.1' );
		wp_enqueue_style( 'bulmawp-style', get_stylesheet_uri() );
		wp_enqueue_style( 'hamilton-fonts', 'https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,400i,500,700,700i&amp;subset=latin-ext' );
		wp_enqueue_style( 'bulmawp-theme', get_template_directory_uri() . '/includes/css/bulmawp.css', array(), '0.5.1' );
		wp_enqueue_style( 'bulmawp-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'bulmawp_styles' );

/**************************************************/
/* Enqueue Scripts
/**************************************************/

	function bulmawp_scripts() {
		wp_enqueue_script( 'bulmawp-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20151215', true );
		wp_enqueue_script( 'bulmawp-js', get_template_directory_uri() . '/includes/js/bulmawp.js', array('jquery'), '20151215', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'bulmawp_scripts' );

/**************************************************/
/* Add Editor Styles for admin
/**************************************************/

	function bulmawp_add_editor_styles() {
    	add_editor_style( array(
			'bulmawp-editor-styles.css',
			'https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,400i,500,700,700i&amp;subset=latin-ext'
		) );
	}
	add_action( 'init', 'bulmawp_add_editor_styles' );

/**************************************************/
/* Custom template tags for this theme
/**************************************************/

	require get_template_directory() . '/includes/php/template-tags.php';

/**************************************************/
/*  Functions which enhance the theme by hooking into WordPress
/**************************************************/

	require get_template_directory() . '/includes/php/template-functions.php';

/**************************************************/
/*  BulmaWP Functions
/**************************************************/

	require get_template_directory() . '/includes/php/bulmawp-functions.php';

/**************************************************/
/*  Customizer additions
/**************************************************/

	require get_template_directory() . '/includes/php/customizer.php';

/**************************************************/
/*  Load Jetpack compatibility file
/**************************************************/

	if ( defined( 'JETPACK__VERSION' ) ) {
		require get_template_directory() . '/includes/php/jetpack.php';
	}

/**************************************************/
/*  BulmaWP Nav Walker
/**************************************************/

	require_once get_template_directory() . '/includes/php/bulmaWP-navwalker.php';

/**************************************************/
/*  TGMPA Activation
/**************************************************/

	require_once get_template_directory() . '/includes/admin/tgmpa/class-tgm-plugin-activation.php';

/**************************************************/
/*  TGMPA Required Plugins
/**************************************************/

	function bulmawp_register_required_plugins() {

		$plugins = array(

			array(
				'name'      => 'Jetpack by WordPress.com',
				'slug'      => 'jetpack',
				'required'  => true,
			),

		);

		tgmpa( $plugins, $config );
	}

	add_action( 'tgmpa_register', 'bulmawp_register_required_plugins' );

/**************************************************/
/*  MerlinWP - Easy Onboarding
/**************************************************/

	function bulmawp_merlin() {
		require get_parent_theme_file_path( '/includes/admin/merlin/merlin.php' );
		require get_parent_theme_file_path( '/includes/admin/merlin/merlin-config.php' );
	}

	add_action( 'after_setup_theme', 'bulmawp_merlin' );
