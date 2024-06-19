<?php

function wpb_custom_new_menu() {

register_nav_menus(
array(
	'menu-principal' => __( 'Menu Principal' ),

)
);
}
add_action( 'init', 'wpb_custom_new_menu' );


function wmpudev_enqueue_icon_stylesheet()
{
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet');

class Bootstrap_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
}

function themename_custom_logo_setup() {
    $defaults = array(

        'flex-height'          => true,
        'flex-width'           => true,
        'components-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}


add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_shortcode('product_data','custom_product_function');


function theme_setup(){
	/** automatic feed link*/
	add_theme_support( 'automatic-feed-links' );

	/** tag-title **/
	add_theme_support( 'title-tag',  );

	add_theme_support( 'widgets' );

	add_theme_support( 'widget-customizer' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'widgets-block-editor' );

	/** post formats */
	$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
	add_theme_support( 'post-formats', $post_formats);

	/** post thumbnail **/
	add_theme_support( 'post-thumbnails' );

	/** HTML5 support **/
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	/** refresh widgest **/
	add_theme_support( 'customize-selective-refresh-widgets' );

	/** custom background **/
	$bg_defaults = array(
		'default-image'          => '',
		'default-preset'         => 'default',
		'default-size'           => 'cover',
		'default-repeat'         => 'no-repeat',
		'default-attachment'     => 'scroll',
	);
	add_theme_support( 'custom-background', $bg_defaults );

	/** custom components **/
	$header_defaults = array(
		'default-image'          => '',
		'width'                  => 300,
		'height'                 => 60,
		'flex-height'            => true,
		'flex-width'             => true,
		'default-text-color'     => '',
		'components-text'            => true,
		'uploads'                => true,
	);
	add_theme_support( 'custom-components', $header_defaults );




}
add_action('after_setup_theme','theme_setup');

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


function enqueue_custom_script() {
    // Enqueue the script
    wp_enqueue_script('header-menu', get_template_directory_uri() . '/js/header-menu.js', array('jquery'), null, true);
    wp_enqueue_script('index', get_template_directory_uri() . '/js/index.js', array('jquery'), null, true);

}

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

