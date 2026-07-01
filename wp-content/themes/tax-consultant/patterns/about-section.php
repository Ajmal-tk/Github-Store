<?php
/**
 * Title: About Section
 * Slug: tax-consultant/about-section
 * Categories: tax-consultant, about-section
 */
?>
<!-- wp:group {"className":"about-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group about-section has-primary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px;font-size:14px"><!-- wp:group {"className":"head-box wow fadeInDown","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow fadeInDown" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3,"className":"about-sec-title","style":{"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center about-sec-title has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:28px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('who we are','tax-consultant'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('global experience. local expertise.','tax-consultant'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"about-cols wow fadeInUp"} -->
<div class="wp-block-columns about-cols wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"about-img-box-inner","style":{"spacing":{"padding":{"right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group about-img-box-inner" style="padding-right:0px"><!-- wp:image {"id":30,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px","width":"1px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/about.png'); ?>" alt="" class="has-border-color has-white-border-color wp-image-30" style="border-width:1px;border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"abt-exp-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"backgroundColor":"secondary","borderColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group abt-exp-box has-border-color has-white-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:26px;font-style:normal;font-weight:700"><?php echo esc_html__('15 +','tax-consultant'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('years of','tax-consultant'); ?><br><?php echo esc_html__('experience','tax-consultant'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about-text-box","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center about-text-box" style="padding-left:0"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"80px"}},"typography":{"lineHeight":"2","fontSize":"23px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base"} -->
<p class="has-text-align-right has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;margin-left:80px;font-size:23px;font-style:normal;font-weight:400;line-height:2"><?php echo esc_html__('GlobalTax Advisors provides international tax filing, corporate compliance, VAT guidance, and expat tax support for clients across the world.  We ensure accurate, secure, and hassle-free tax processes.','tax-consultant'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->