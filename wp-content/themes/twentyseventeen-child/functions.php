

<?php
require get_stylesheet_directory() . '/functions/bulmapress_navwalker.php';

if(!function_exists('bulmapress_setup')):
	function bulmapress_setup() {
		require get_stylesheet_directory() . '/functions/helper.php';
		require get_stylesheet_directory() . '/functions/navigation.php';
	}
endif;
add_action( 'after_setup_theme', 'bulmapress_setup' );




// add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 1 );

// function new_loop_shop_per_page( $cols ) {
//   // $cols contains the current number of products per page based on the value stored on Options -> Reading
//   // Return the number of products you wanna show per page.
//   $cols = 2;
//   return $cols;
// }

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Fifteen theme.

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?> 

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'footer sidebar',
        'id'            => 'footer_sidebar_1',
        'before_widget' => '<div class="sitemap">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="title is-4">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );





/* ----------------------------------------
* Create the TABS
----------------------------------------- */

$eto_custom_tabs = [
    [
            'label'=> __('General'),
            'id'    => $prefix.'general'
    ],
    [
            'label'=> __('Gallery'),
            'id'    => $prefix.'gallery'
    ]
];

/* ----------------------------------------
* Options Field Array
----------------------------------------- */

$eto_custom_meta_fields = [

    /* -- TAB 1 -- */
    [
        'id'    => $prefix.'general', // Use data in $eto_custom_tabs
        'type'  => 'tab_start'
    ],
        [
            'label'=> 'PAYMENT METHODS TEXT',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'payment_method_text',
            'type'  => 'text'
        ],
    [
        'type'  => 'tab_end'
    ],
    /* -- TAB 1 -- */
    [
        'id'    => $prefix.'gallery', // Use data in $eto_custom_tabs
        'type'  => 'tab_start'
    ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_1',
            'type'  => 'image'
        ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_2',
            'type'  => 'image'
        ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_3',
            'type'  => 'image'
        ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_4',
            'type'  => 'image'
        ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_5',
            'type'  => 'image'
        ],
        [
            'label' => 'Image',
            'desc'  => 'A description for the field.',
            'id'    => $prefix.'g_image_6',
            'type'  => 'image'
        ],
    [
        'type'  => 'tab_end'
    ]
];