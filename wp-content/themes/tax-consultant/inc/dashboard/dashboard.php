<?php

add_action( 'admin_menu', 'tax_consultant_gettingstarted' );
function tax_consultant_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'tax-consultant'), esc_html__('Begin Installation', 'tax-consultant'), 'edit_theme_options', 'tax-consultant-guide-page', 'tax_consultant_guide');
}

if ( ! defined( 'TAX_CONSULTANT_SUPPORT' ) ) {
define('TAX_CONSULTANT_SUPPORT',__('https://wordpress.org/support/theme/tax-consultant/','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_REVIEW' ) ) {
define('TAX_CONSULTANT_REVIEW',__('https://wordpress.org/support/theme/tax-consultant/reviews/','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_LIVE_DEMO' ) ) {
define('TAX_CONSULTANT_LIVE_DEMO',__('https://trial.ovationthemes.com/tax-consultant/','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_BUY_PRO' ) ) {
define('TAX_CONSULTANT_BUY_PRO',__('https://www.ovationthemes.com/products/tax-wordpress-theme','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_PRO_DOC' ) ) {
define('TAX_CONSULTANT_PRO_DOC',__('https://trial.ovationthemes.com/docs/tax-consultant-pro-doc/','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_FREE_DOC' ) ) {
define('TAX_CONSULTANT_FREE_DOC',__('https://trial.ovationthemes.com/docs/tax-consultant-free-doc/','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_THEME_NAME' ) ) {
define('TAX_CONSULTANT_THEME_NAME',__('Premium Tax Consultant Theme','tax-consultant'));
}
if ( ! defined( 'TAX_CONSULTANT_BUNDLE_LINK' ) ) {
define('TAX_CONSULTANT_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','tax-consultant'));
}
/**
 * Theme Info Page
 */
function tax_consultant_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'tax-consultant'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( TAX_CONSULTANT_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'tax-consultant'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( TAX_CONSULTANT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'tax-consultant'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( TAX_CONSULTANT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'tax-consultant'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','tax-consultant'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','tax-consultant'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','tax-consultant'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','tax-consultant'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','tax-consultant'); ?></h4>
					<p><?php esc_html_e('To check your website click here','tax-consultant'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','tax-consultant'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','tax-consultant'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','tax-consultant'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( TAX_CONSULTANT_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','tax-consultant'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(TAX_CONSULTANT_THEME_NAME); ?></h3>
				<img class="tax_consultant_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( TAX_CONSULTANT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tax-consultant'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( TAX_CONSULTANT_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Get Pro Theme', 'tax-consultant'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( TAX_CONSULTANT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'tax-consultant'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( TAX_CONSULTANT_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (125+ Themes at Just $89)', 'tax-consultant'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>