<?php
/**
 * Gadget Hub Homepage Customizer Settings
 *
 * @package storefront
 */

/**
 * Register customizer settings for the homepage
 */
function gadget_hub_customize_register( $wp_customize ) {
	
	// Add Gadget Hub Panel
	$wp_customize->add_panel( 'gadget_hub_homepage', array(
		'title'       => __( 'Gadget Hub Homepage', 'storefront' ),
		'description' => __( 'Customize your homepage content', 'storefront' ),
		'priority'    => 30,
	) );

	// ========================================
	// Top Strip Section
	// ========================================
	$wp_customize->add_section( 'gadget_hub_strip', array(
		'title'    => __( 'Top Strip Banner', 'storefront' ),
		'panel'    => 'gadget_hub_homepage',
		'priority' => 10,
	) );

	$wp_customize->add_setting( 'gh_strip_text', array(
		'default'           => '⚡ Festive Mega Sale · Extra 10% on prepaid · Free returns',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'gh_strip_text', array(
		'label'   => __( 'Strip Text', 'storefront' ),
		'section' => 'gadget_hub_strip',
		'type'    => 'text',
	) );

	// ========================================
	// Hero Section
	// ========================================
	$wp_customize->add_section( 'gadget_hub_hero', array(
		'title'    => __( 'Hero Section', 'storefront' ),
		'panel'    => 'gadget_hub_homepage',
		'priority' => 20,
	) );

	// Hero Pill Text
	$wp_customize->add_setting( 'gh_hero_pill', array(
		'default'           => 'New Season · Lightning Deals',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'gh_hero_pill', array(
		'label'   => __( 'Hero Pill Text', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// Hero Title
	$wp_customize->add_setting( 'gh_hero_title', array(
		'default'           => 'Top gadgets picked for you',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'gh_hero_title', array(
		'label'   => __( 'Hero Title', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// Hero Description
	$wp_customize->add_setting( 'gh_hero_description', array(
		'default'           => 'Smartphones, audio, gaming, and smart home tech with festival-ready prices.',
		'sanitize_callback' => 'sanitize_textarea_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'gh_hero_description', array(
		'label'   => __( 'Hero Description', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'textarea',
	) );

	// Hero Button Text
	$wp_customize->add_setting( 'gh_hero_button_text', array(
		'default'           => 'Shop all deals →',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'gh_hero_button_text', array(
		'label'   => __( 'Hero Button Text', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// Hero Button URL
	$wp_customize->add_setting( 'gh_hero_button_url', array(
		'default'           => '/shop/',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'gh_hero_button_url', array(
		'label'   => __( 'Hero Button URL', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'url',
	) );

	// Hero Image
	$wp_customize->add_setting( 'gh_hero_image', array(
		'default'           => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=900&q=80',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gh_hero_image', array(
		'label'   => __( 'Hero Image', 'storefront' ),
		'section' => 'gadget_hub_hero',
	) ) );

	// ========================================
	// Hero Features
	// ========================================
	// Feature 1
	$wp_customize->add_setting( 'gh_feature_1_icon', array(
		'default'           => '🚚',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_1_icon', array(
		'label'   => __( 'Feature 1 Icon', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_1_text', array(
		'default'           => 'Same-day dispatch',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_1_text', array(
		'label'   => __( 'Feature 1 Text', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_1_subtext', array(
		'default'           => 'Metro cities',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_1_subtext', array(
		'label'   => __( 'Feature 1 Subtext', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// Feature 2
	$wp_customize->add_setting( 'gh_feature_2_icon', array(
		'default'           => '🛡️',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_2_icon', array(
		'label'   => __( 'Feature 2 Icon', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_2_text', array(
		'default'           => '1-year warranty',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_2_text', array(
		'label'   => __( 'Feature 2 Text', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_2_subtext', array(
		'default'           => 'Brand authorized',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_2_subtext', array(
		'label'   => __( 'Feature 2 Subtext', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// Feature 3
	$wp_customize->add_setting( 'gh_feature_3_icon', array(
		'default'           => '💳',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_3_icon', array(
		'label'   => __( 'Feature 3 Icon', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_3_text', array(
		'default'           => 'Easy EMIs',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_3_text', array(
		'label'   => __( 'Feature 3 Text', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'gh_feature_3_subtext', array(
		'default'           => 'No-cost on select banks',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_feature_3_subtext', array(
		'label'   => __( 'Feature 3 Subtext', 'storefront' ),
		'section' => 'gadget_hub_hero',
		'type'    => 'text',
	) );

	// ========================================
	// Product Sections
	// ========================================
	$wp_customize->add_section( 'gadget_hub_products', array(
		'title'    => __( 'Product Sections', 'storefront' ),
		'panel'    => 'gadget_hub_homepage',
		'priority' => 30,
	) );

	// Section 1 Title
	$wp_customize->add_setting( 'gh_section_1_title', array(
		'default'           => 'Top deals for you',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_section_1_title', array(
		'label'   => __( 'First Product Section Title', 'storefront' ),
		'section' => 'gadget_hub_products',
		'type'    => 'text',
	) );

	// Number of products in section 1
	$wp_customize->add_setting( 'gh_section_1_count', array(
		'default'           => 8,
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'gh_section_1_count', array(
		'label'   => __( 'Number of Products (Section 1)', 'storefront' ),
		'section' => 'gadget_hub_products',
		'type'    => 'number',
	) );

	// Section 2 Title
	$wp_customize->add_setting( 'gh_section_2_title', array(
		'default'           => 'More Products',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_section_2_title', array(
		'label'   => __( 'Second Product Section Title', 'storefront' ),
		'section' => 'gadget_hub_products',
		'type'    => 'text',
	) );

	// Number of products in section 2
	$wp_customize->add_setting( 'gh_section_2_count', array(
		'default'           => 8,
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'gh_section_2_count', array(
		'label'   => __( 'Number of Products (Section 2)', 'storefront' ),
		'section' => 'gadget_hub_products',
		'type'    => 'number',
	) );

	// ========================================
	// Banner Section
	// ========================================
	$wp_customize->add_section( 'gadget_hub_banner', array(
		'title'    => __( 'Middle Banner', 'storefront' ),
		'panel'    => 'gadget_hub_homepage',
		'priority' => 40,
	) );

	// Enable/Disable Banner
	$wp_customize->add_setting( 'gh_banner_enable', array(
		'default'           => true,
		'sanitize_callback' => 'wp_validate_boolean',
	) );

	$wp_customize->add_control( 'gh_banner_enable', array(
		'label'   => __( 'Show Banner Section', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'checkbox',
	) );

	// Banner Section Title
	$wp_customize->add_setting( 'gh_banner_section_title', array(
		'default'           => 'Big-screen deals',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_banner_section_title', array(
		'label'   => __( 'Banner Section Title', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'text',
	) );

	// Banner Title
	$wp_customize->add_setting( 'gh_banner_title', array(
		'default'           => '65" 4K QLED TVs from $699',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_banner_title', array(
		'label'   => __( 'Banner Title', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'text',
	) );

	// Banner Description
	$wp_customize->add_setting( 'gh_banner_description', array(
		'default'           => 'HDR10+, 120Hz panels, bezel-less design, and built-in Chromecast.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( 'gh_banner_description', array(
		'label'   => __( 'Banner Description', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'textarea',
	) );

	// Banner Button Text
	$wp_customize->add_setting( 'gh_banner_button_text', array(
		'default'           => 'Explore offers',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_banner_button_text', array(
		'label'   => __( 'Banner Button Text', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'text',
	) );

	// Banner Button URL
	$wp_customize->add_setting( 'gh_banner_button_url', array(
		'default'           => '/product-category/televisions/',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'gh_banner_button_url', array(
		'label'   => __( 'Banner Button URL', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'url',
	) );

	// Banner Image
	$wp_customize->add_setting( 'gh_banner_image', array(
		'default'           => 'https://images.unsplash.com/photo-1586828436765-75d79f4a8177?auto=format&fit=crop&w=1000&q=80',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gh_banner_image', array(
		'label'   => __( 'Banner Image', 'storefront' ),
		'section' => 'gadget_hub_banner',
	) ) );

	// Banner Link Text (View all)
	$wp_customize->add_setting( 'gh_banner_link_text', array(
		'default'           => 'View TVs',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_banner_link_text', array(
		'label'   => __( 'Section Link Text', 'storefront' ),
		'section' => 'gadget_hub_banner',
		'type'    => 'text',
	) );

	// ========================================
	// Login Popup
	// ========================================
	$wp_customize->add_section( 'gadget_hub_login_popup', array(
		'title'    => __( 'Login Popup', 'storefront' ),
		'panel'    => 'gadget_hub_homepage',
		'priority' => 50,
	) );

	// Popup Title
	$wp_customize->add_setting( 'gh_login_title', array(
		'default'           => 'Welcome back',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_login_title', array(
		'label'   => __( 'Popup Title', 'storefront' ),
		'section' => 'gadget_hub_login_popup',
		'type'    => 'text',
	) );

	// Popup Subtitle
	$wp_customize->add_setting( 'gh_login_subtitle', array(
		'default'           => 'Log in to view your cart, track orders, and access My Account.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( 'gh_login_subtitle', array(
		'label'   => __( 'Popup Subtitle', 'storefront' ),
		'section' => 'gadget_hub_login_popup',
		'type'    => 'textarea',
	) );

	// Login Button Label
	$wp_customize->add_setting( 'gh_login_button_label', array(
		'default'           => 'Continue',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_login_button_label', array(
		'label'   => __( 'Login Button Label', 'storefront' ),
		'section' => 'gadget_hub_login_popup',
		'type'    => 'text',
	) );

	// Footer Intro Text
	$wp_customize->add_setting( 'gh_login_footer_text', array(
		'default'           => 'New to Gadget Hub?',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_login_footer_text', array(
		'label'   => __( 'Footer Text (before link)', 'storefront' ),
		'section' => 'gadget_hub_login_popup',
		'type'    => 'text',
	) );

	// Footer Link Label
	$wp_customize->add_setting( 'gh_login_footer_link_label', array(
		'default'           => 'Create an account',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'gh_login_footer_link_label', array(
		'label'   => __( 'Footer Link Label', 'storefront' ),
		'section' => 'gadget_hub_login_popup',
		'type'    => 'text',
	) );

	// Registration Page URL (optional override)
	$wp_customize->add_setting( 'gh_login_register_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'gh_login_register_url', array(
		'label'       => __( 'Registration Page URL (optional)', 'storefront' ),
		'description' => __( 'If set, the "Create an account" link in the popup will point here. Leave empty to use the WooCommerce My Account page.', 'storefront' ),
		'section'     => 'gadget_hub_login_popup',
		'type'        => 'url',
	) );
}
add_action( 'customize_register', 'gadget_hub_customize_register' );
