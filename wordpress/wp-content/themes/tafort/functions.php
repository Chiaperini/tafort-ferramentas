<?php



function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function wpb_custom_new_menu() {

register_nav_menus(
array(
	'menu-principal' => __( 'Menu Principal' ),
	'menu-footer' => __( 'Menu Footer' ),

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


class Custom_Bootstrap_Nav_Walker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        $args = (object) $args;

        $args->link_before = ! empty( $args->link_before ) ? $args->link_before : '';
        $args->link_after = ! empty( $args->link_after ) ? $args->link_after : '';

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        if ( $args->walker->has_children ) {
            $atts['class'] = 'nav-link dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';

        } else {
            $atts['class'] = 'nav-link';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function custom_product_category_widget_init() {
    register_sidebar( array(
        'name'          => 'Product Category Sidebar',
        'id'            => 'product_category_sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_product_category_widget_init' );
