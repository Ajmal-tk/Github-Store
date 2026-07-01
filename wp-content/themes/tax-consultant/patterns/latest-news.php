<?php
/**
 * Title: Latest News
 * Slug: tax-consultant/latest-news
 * Categories: tax-consultant, latest-news
 */
?>
<!-- wp:group {"className":"latest-news","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0"><!-- wp:group {"className":"head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn"><!-- wp:heading {"textAlign":"center","level":3,"className":"latest-news-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center latest-news-sec-title has-primary-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('blog & resources','tax-consultant'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html__('Stay informed with expert articles, tips, and global tax law updates.','tax-consultant'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow zoomIn news-boxes owl-carousel","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"latest-news-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"12px","bottom":"50px","left":"12px","right":"12px"}}},"backgroundColor":"base","borderColor":"heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-news-box has-border-color has-heading-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:12px;padding-right:12px;padding-bottom:50px;padding-left:12px"><!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"bottom":"15px"}}}} /-->

<!-- wp:post-title {"isLink":true,"className":"news-title","style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:read-more {"content":"Read More","className":"news-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}},"border":{"radius":"25px","width":"1px"}},"backgroundColor":"base","textColor":"heading","borderColor":"heading"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->