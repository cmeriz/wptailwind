<?php 

const WPTAILWIND_THEME_VERSION = '1.0.0';
const WP_ENVIRONMENT_TYPE = 'development';


/* -------------------------------------------------------------------------- */
/*                                 Theme Setup                                */
/* -------------------------------------------------------------------------- */

add_action('after_setup_theme', 'wptailwind_setup');
function wptailwind_setup(){

    // Enable featured images
    add_theme_support('post-thumbnails');

}


/* -------------------------------------------------------------------------- */
/*                               Enqueue Scripts                              */
/* -------------------------------------------------------------------------- */

add_action( 'wp_enqueue_scripts', 'wptailwind_scripts', 10);
function wptailwind_scripts() {

    $version = ( wp_get_environment_type() === 'development' ) ? time() : WPTAILWIND_THEME_VERSION;

    // style.css
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $version);

    // main.css
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', $version, true );
}

/* -------------------------------------------------------------------------- */
/*                               Register Menus                               */
/* -------------------------------------------------------------------------- */

function wptailwind_menus(){
    register_nav_menus(array(
        'main-menu' => __( 'Main Menu', 'wptailwind-theme' )
    ));
}
add_action('init', 'wptailwind_menus');


/* -------------------------------------------------------------------------- */
/*                                 Widget Zone                                */
/* -------------------------------------------------------------------------- */

function wptailwind_widgets(){

    register_sidebar( array(
        'name' => 'Header',
        'id' => 'wt_header',
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar( array(
        'name' => 'Footer',
        'id' => 'wt_footer',
        'before_widget' => '',
        'after_widget' => ''
    ));
}

add_action('widgets_init', 'wptailwind_widgets');