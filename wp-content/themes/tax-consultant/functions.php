<?php
/**
 * Tax Consultant functions and definitions
 *
 * @package Tax Consultant
 */

if ( ! function_exists( 'tax_consultant_setup' ) ) :
function tax_consultant_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'tax-consultant', get_template_directory() . '/languages' );
    
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    add_theme_support('woocommerce');

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	if (! defined('TAX_CONSULTANT_VERSION')) {
		// Replace the version number of the theme on each release.
		define('TAX_CONSULTANT_VERSION', wp_get_theme()->get('Version'));
	}

	require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

    require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
}
endif; // tax_consultant_setup
add_action( 'after_setup_theme', 'tax_consultant_setup' );

function tax_consultant_scripts() {
    wp_enqueue_style( 'tax-consultant-basic-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );

    //font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '6.7.0' );

    wp_style_add_data( 'tax-consultant-basic-style', 'rtl', 'replace' );

    //homepage slider
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), TAX_CONSULTANT_VERSION );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery') ,TAX_CONSULTANT_VERSION,true);

	// script.js
	wp_enqueue_script('tax-consultant-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), TAX_CONSULTANT_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'tax_consultant_scripts' );

function tax_consultant_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('tax-consultant-welcome-notice', get_template_directory_uri() . '/inc/dashboard/tax-consultant-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('tax-consultant-welcome-notice', 'tax_consultant_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('tax_consultant_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('tax_consultant_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=tax-consultant-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'tax_consultant_enqueue_admin_script');

function tax_consultant_admin_theme_style() {
   wp_enqueue_style('tax-consultant-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'tax_consultant_admin_theme_style');

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

add_action( 'admin_init', function() {
    update_option( 'essential_blocks_quick_setup_shown', true );
    update_option( 'essential_blocks_user_type', 'old' );
    remove_submenu_page( 'admin.php', 'eb-quick-setup' );
});

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
require get_template_directory() .'/inc/TGM/tgm.php';
require get_template_directory() . '/custom-setting.php';
require_once get_template_directory() . '/inc/dashboard/welcome-notice.php';