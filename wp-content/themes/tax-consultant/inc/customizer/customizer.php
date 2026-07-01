<?php
/**
 * Tax Consultant: Customizer
 *
 * @subpackage Tax Consultant
 * @since 1.0
 */

function tax_consultant_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('tax_consultant_pro', array(
        'title'    => __('TAX CONSULTANT PREMIUM', 'tax-consultant'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('tax_consultant_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Tax_Consultant_Pro_Control($wp_customize, 'tax_consultant_pro', array(
        'label'    => __('TAX CONSULTANT PREMIUM', 'tax-consultant'),
        'section'  => 'tax_consultant_pro',
        'settings' => 'tax_consultant_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'tax_consultant_customize_register' );


define('TAX_CONSULTANT_PRO_LINK',__('https://www.ovationthemes.com/products/tax-wordpress-theme','tax-consultant'));

define('TAX_CONSULTANT_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','tax-consultant'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Tax_Consultant_Pro_Control')):
    class Tax_Consultant_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( TAX_CONSULTANT_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE TAX CONSULTANT PREMIUM','tax-consultant');?> </a>
	        </div>
            <div class="col-md">
                <img class="tax_consultant_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'tax-consultant');?> </li>                 
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'tax-consultant');?> </li>
                    <li class="upsell-tax_consultant"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'tax-consultant');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( TAX_CONSULTANT_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (125+ Themes)','tax-consultant');?> </a>
            </div>
        </label>
    <?php } }
endif;