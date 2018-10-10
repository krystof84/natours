<?php
/*
* Customizer
*/ 
include_once 'incl/sanitization.php';
include_once 'incl/customizer.php';


/**
 * Setup theme
 */
if( !function_exists('natours_setup') ):

    function natours_setup() {

        load_theme_textdomain('natours', get_template_directory() . '/languqges');

        add_theme_support('title-tag');

        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 195,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' )
        ));

        register_nav_menus(array(
            'primary' => __( 'Main menu', 'natours' ),
            'footer'  => __('Footer menu', 'natours')
        ));
    }

endif;    
add_action('after_setup_theme', 'natours_setup');


/**
 * Print Google Font url.
 */
if ( ! function_exists( 'natours_fonts_url' ) ) :
    function natours_fonts_url() {
        $fonts_url = '';
        $fonts     = array(
            'Lato:100,300,400,700,900',
        );
        $subsets   = 'latin,latin-ext';

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => implode( '|', $fonts ),
                'subset' => $subsets,
            ), 'https://fonts.googleapis.com/css?family=' );
        }

        return $fonts_url;
    }
endif;


/**
 * Enqueues scripts and styles
 */
function natours_scripts() {

    // Google Font
    wp_enqueue_style('natours-font', natours_fonts_url(), array(), null);

    // Icon font 
    wp_enqueue_style('natours-icon', get_template_directory_uri() . '/assets/css/icon-font.css', array(), '0.1');

    // Main css file
    wp_enqueue_style('natours-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '0.2');

    // Main js file
    wp_enqueue_script('natours-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '0.1', true);

}
add_action('wp_enqueue_scripts', 'natours_scripts');



// Changing default custom logo class
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'header__logo', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );


// Add custom class to <li> primary menu
function natours_primary_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'navigation__item';
    }
    return $classes;
}
function natours_footer_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'footer') {
        $classes[] = 'footer__item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'natours_primary_menu_classes', 1, 3);
add_filter('nav_menu_css_class', 'natours_footer_menu_classes', 1, 3);