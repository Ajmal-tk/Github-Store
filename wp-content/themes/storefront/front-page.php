<?php
/**
 * Custom front page layout for Gadget Hub.
 *
 * Presents hero, deal grids, and curated gadgets in a Flipkart-style layout.
 *
 * @package storefront
 */

get_header();
?>

<main id="primary" class="content-area gh-full-viewport">
	<style>
		:root {
			--gh-blue: #2874f0;
			--gh-blue-dark: #0f4bb6;
			--gh-gold: #ffc107;
			--gh-text: #1f1f1f;
			--gh-muted: #6c757d;
			--gh-bg: #f5f6fa;
			--gh-card: #fff;
			--gh-border: #e5e7eb;
		}

		body.home { background: var(--gh-bg); }
		body.home .site-header {
			padding-left: 20px;
			padding-right: 20px;
		}
		@media (min-width: 1024px) {
			body.home .site-header {
				padding-left: 40px;
				padding-right: 40px;
			}
		}
		body.home .site,
		body.home #content,
		body.home .site-content,
		body.home .site-main,
		body.home .content-area,
		body.home .col-full,
		body.home .hentry {
			margin: 0;
			padding: 0;
			max-width: none;
			width: 100%;
		}
		body.home #primary { margin: 0; padding: 0; }
		.gh-full-viewport { min-height: 100vh; display: block; }

		.gh-wrap { max-width: none; width: 100%; margin: 0 auto; padding: 0 16px 48px; }

		.gh-hero {
			background: linear-gradient(135deg, var(--gh-blue), var(--gh-blue-dark));
			color: #fff;
			border-radius: 16px;
			padding: 28px 32px;
			display: grid;
			grid-template-columns: 1.1fr 0.9fr;
			gap: 20px;
			align-items: center;
			box-shadow: 0 18px 30px rgba(16, 73, 182, 0.22);
		}

		.gh-strip {
			margin: 0 auto 18px;
			max-width: none;
			width: 100%;
			padding: 14px 20px;
			background: #fff;
			color: var(--gh-blue-dark);
			border: 1px solid var(--gh-border);
			border-radius: 12px;
			display: flex;
			gap: 10px;
			align-items: center;
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.04);
			font-weight: 700;
			justify-content: center;
		}

		.gh-hero h1 {
			margin: 0 0 8px;
			font-size: 32px;
			line-height: 1.2;
			letter-spacing: -0.5px;
		}

		.gh-hero p {
			margin: 0 0 16px;
			font-size: 16px;
			color: #f1f5ff;
		}

		.gh-hero .gh-pill {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			background: rgba(255, 255, 255, 0.18);
			border-radius: 999px;
			padding: 8px 14px;
			font-weight: 600;
		}

		.gh-hero .gh-cta {
			margin-top: 14px;
			display: inline-flex;
			align-items: center;
			gap: 10px;
			padding: 12px 18px;
			background: #fff;
			color: var(--gh-blue-dark);
			border-radius: 10px;
			font-weight: 700;
			text-decoration: none;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
		}

		.gh-hero .gh-img-frame {
			background: #f7f9ff;
			border-radius: 14px;
			padding: 10px;
			border: 1px solid rgba(255, 255, 255, 0.22);
			box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.2);
		}

		.gh-hero img {
			width: 100%;
			display: block;
			border-radius: 12px;
		}

		.gh-section {
			margin-top: 28px;
		}

		.gh-head {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-bottom: 14px;
		}

		.gh-head h2 {
			margin: 0;
			font-size: 22px;
			color: var(--gh-text);
		}

		.gh-head a {
			color: var(--gh-blue-dark);
			font-weight: 700;
			text-decoration: none;
			font-size: 14px;
		}

		.gh-grid {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
			gap: 14px;
		}

		.gh-card {
			background: var(--gh-card);
			border-radius: 12px;
			padding: 14px;
			border: 1px solid var(--gh-border);
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.04);
			transition: transform 0.15s ease, box-shadow 0.15s ease;
			display: flex;
			flex-direction: column;
			gap: 10px;
		}

		.gh-card:hover {
			transform: translateY(-3px);
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.08);
		}

		.gh-card img {
			width: 100%;
			height: 170px;
			object-fit: cover;
			border-radius: 10px;
		}

		.gh-card a {
			text-decoration: none;
			color: inherit;
		}

		.gh-card h3 a {
			color: var(--gh-text);
			transition: color 0.15s ease;
		}

		.gh-card h3 a:hover {
			color: var(--gh-blue-dark);
		}

		.gh-card .price {
			font-size: 18px;
			font-weight: 800;
			color: var(--gh-blue-dark);
		}

		.gh-card .price del {
			color: var(--gh-muted);
			font-weight: 400;
			font-size: 14px;
			margin-right: 6px;
		}

		.gh-card .price ins {
			text-decoration: none;
		}

		.gh-badge {
			display: inline-block;
			background: var(--gh-gold);
			color: #1a1a1a;
			padding: 5px 10px;
			border-radius: 20px;
			font-weight: 700;
			font-size: 12px;
			align-self: flex-start;
		}

		.gh-card h3 {
			margin: 0;
			font-size: 16px;
			color: var(--gh-text);
			line-height: 1.35;
		}

		.gh-desc {
			margin: 0;
			color: var(--gh-muted);
			font-size: 13px;
		}

		.gh-price-row {
			display: flex;
			align-items: baseline;
			gap: 8px;
		}

		.gh-price {
			font-size: 18px;
			font-weight: 800;
			color: var(--gh-blue-dark);
		}

		.gh-meta {
			color: var(--gh-muted);
			font-size: 12px;
		}

		.gh-btn {
			margin-top: auto;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 8px;
			padding: 10px 12px;
			background: var(--gh-blue);
			color: #fff;
			border-radius: 10px;
			text-decoration: none;
			font-weight: 700;
			font-size: 14px;
			transition: background 0.15s ease;
		}

		.gh-btn:hover {
			background: var(--gh-blue-dark);
		}

		.gh-banner {
			display: grid;
			grid-template-columns: 1.2fr 1fr;
			gap: 18px;
			background: var(--gh-card);
			border: 1px solid var(--gh-border);
			border-radius: 14px;
			padding: 18px;
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
			align-items: center;
		}

		.gh-banner img {
			width: 100%;
			border-radius: 12px;
			object-fit: cover;
		}

		.gh-banner h3 {
			margin: 0 0 6px;
			font-size: 19px;
			color: var(--gh-text);
		}

		.gh-banner p {
			margin: 0 0 10px;
			color: var(--gh-muted);
			font-size: 13px;
		}

		.gh-features {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
			gap: 12px;
			margin-top: 16px;
		}

		.gh-feature {
			background: var(--gh-card);
			border: 1px dashed var(--gh-border);
			border-radius: 12px;
			padding: 12px;
			display: flex;
			gap: 10px;
			align-items: center;
			font-weight: 700;
			color: var(--gh-text);
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.03);
		}

		.gh-feature span {
			font-size: 14px;
			color: var(--gh-muted);
			font-weight: 600;
		}

		/* ========================================
		   RESPONSIVE DESIGN - Mobile First
		   ======================================== */

		/* Mobile Phones (320px - 767px) */
		@media (max-width: 767px) {
			/* Strip banner */
			.gh-strip {
				font-size: 12px;
				padding: 10px 12px;
				margin-bottom: 12px;
				text-align: center;
			}

			/* Wrapper padding */
			.gh-wrap {
				padding: 0 12px 32px;
			}

			/* Hero section */
			.gh-hero {
				grid-template-columns: 1fr;
				padding: 20px 18px;
				gap: 16px;
			}

			.gh-hero h1 {
				font-size: 24px;
				margin-bottom: 6px;
			}

			.gh-hero p {
				font-size: 14px;
				margin-bottom: 12px;
			}

			.gh-hero .gh-pill {
				font-size: 12px;
				padding: 6px 12px;
			}

			.gh-hero .gh-cta {
				padding: 10px 16px;
				font-size: 14px;
				margin-top: 10px;
			}

			/* Features grid - stack on mobile */
			.gh-features {
				grid-template-columns: 1fr;
				gap: 8px;
				margin-top: 12px;
			}

			.gh-feature {
				padding: 10px;
				font-size: 13px;
			}

			.gh-feature span {
				font-size: 12px;
			}

			/* Hero image - hide on very small screens or reduce size */
			.gh-hero .gh-img-frame {
				padding: 8px;
			}

			/* Section spacing */
			.gh-section {
				margin-top: 20px;
			}

			/* Section headers */
			.gh-head h2 {
				font-size: 18px;
			}

			.gh-head a {
				font-size: 12px;
			}

			/* Product grid - 2 columns on mobile */
			.gh-grid {
				grid-template-columns: repeat(2, 1fr);
				gap: 10px;
			}

			/* Product cards */
			.gh-card {
				padding: 10px;
				gap: 8px;
			}

			.gh-card img {
				height: 140px;
			}

			.gh-card h3 {
				font-size: 14px;
			}

			.gh-desc {
				font-size: 11px;
				display: -webkit-box;
				-webkit-line-clamp: 2;
				-webkit-box-orient: vertical;
				overflow: hidden;
			}

			.gh-price {
				font-size: 16px;
			}

			.gh-meta {
				font-size: 10px;
			}

			.gh-badge {
				font-size: 10px;
				padding: 4px 8px;
			}

			.gh-btn {
				padding: 8px 10px;
				font-size: 12px;
			}

			/* Banner section */
			.gh-banner {
				grid-template-columns: 1fr;
				padding: 14px;
				gap: 12px;
			}

			.gh-banner h3 {
				font-size: 16px;
			}

			.gh-banner p {
				font-size: 12px;
			}

			/* Header adjustments */
			body.home .site-header {
				padding-left: 12px;
				padding-right: 12px;
			}
		}

		/* Small Mobile Phones (320px - 480px) */
		@media (max-width: 480px) {
			/* Single column product grid for very small screens */
			.gh-grid {
				grid-template-columns: 1fr;
			}

			.gh-card img {
				height: 200px;
			}

			.gh-hero h1 {
				font-size: 20px;
			}

			.gh-features {
				font-size: 12px;
			}
		}

		/* Tablets (768px - 1024px) */
		@media (min-width: 768px) and (max-width: 1024px) {
			/* Wrapper */
			.gh-wrap {
				padding: 0 20px 40px;
			}

			/* Hero section */
			.gh-hero {
				grid-template-columns: 1fr;
				padding: 24px 28px;
			}

			.gh-hero h1 {
				font-size: 28px;
			}

			.gh-hero p {
				font-size: 15px;
			}

			/* Features - 3 columns on tablet */
			.gh-features {
				grid-template-columns: repeat(3, 1fr);
				gap: 10px;
			}

			/* Product grid - 3 columns */
			.gh-grid {
				grid-template-columns: repeat(3, 1fr);
				gap: 12px;
			}

			.gh-card img {
				height: 160px;
			}

			/* Banner */
			.gh-banner {
				grid-template-columns: 1fr;
			}

			/* Header */
			body.home .site-header {
				padding-left: 24px;
				padding-right: 24px;
			}
		}

		/* Large Tablets / Small Desktops (1025px - 1280px) */
		@media (min-width: 1025px) and (max-width: 1280px) {
			.gh-wrap {
				padding: 0 24px 48px;
			}

			.gh-grid {
				grid-template-columns: repeat(4, 1fr);
			}
		}

		/* Large Desktops (1281px+) */
		@media (min-width: 1281px) {
			.gh-wrap {
				max-width: 1400px;
				padding: 0 40px 48px;
			}

			.gh-grid {
				grid-template-columns: repeat(5, 1fr);
			}

			.gh-hero {
				padding: 32px 40px;
			}
		}

		/* Extra Large Screens (1920px+) */
		@media (min-width: 1920px) {
			.gh-wrap {
				max-width: 1600px;
			}

			.gh-grid {
				grid-template-columns: repeat(6, 1fr);
			}
		}

		/* Landscape orientation adjustments for mobile */
		@media (max-width: 900px) and (orientation: landscape) {
			.gh-hero {
				grid-template-columns: 1.2fr 0.8fr;
			}

			.gh-features {
				grid-template-columns: repeat(3, 1fr);
			}

			.gh-grid {
				grid-template-columns: repeat(3, 1fr);
			}
		}

		/* Print styles */
		@media print {
			.gh-strip,
			.gh-btn,
			.gh-cta,
			.gh-head a {
				display: none;
			}

			.gh-hero,
			.gh-card,
			.gh-banner {
				box-shadow: none;
				border: 1px solid #ddd;
			}
		}
	</style>

	<div class="gh-strip"><?php echo esc_html( get_theme_mod( 'gh_strip_text', '⚡ Festive Mega Sale · Extra 10% on prepaid · Free returns' ) ); ?></div>
	<div class="gh-wrap">
		<section class="gh-hero">
			<div>
				<div class="gh-pill"><?php echo esc_html( get_theme_mod( 'gh_hero_pill', 'New Season · Lightning Deals' ) ); ?></div>
				<h1><?php echo esc_html( get_theme_mod( 'gh_hero_title', 'Top gadgets picked for you' ) ); ?></h1>
				<p><?php echo esc_html( get_theme_mod( 'gh_hero_description', 'Smartphones, audio, gaming, and smart home tech with festival-ready prices.' ) ); ?></p>
				<a class="gh-cta" href="<?php echo esc_url( get_theme_mod( 'gh_hero_button_url', '/shop/' ) ); ?>"><?php echo esc_html( get_theme_mod( 'gh_hero_button_text', 'Shop all deals →' ) ); ?></a>
				<div class="gh-features">
					<div class="gh-feature">
						<?php echo esc_html( get_theme_mod( 'gh_feature_1_icon', '🚚' ) ); ?> 
						<?php echo esc_html( get_theme_mod( 'gh_feature_1_text', 'Same-day dispatch' ) ); ?> 
						<span><?php echo esc_html( get_theme_mod( 'gh_feature_1_subtext', 'Metro cities' ) ); ?></span>
					</div>
					<div class="gh-feature">
						<?php echo esc_html( get_theme_mod( 'gh_feature_2_icon', '🛡️' ) ); ?> 
						<?php echo esc_html( get_theme_mod( 'gh_feature_2_text', '1-year warranty' ) ); ?> 
						<span><?php echo esc_html( get_theme_mod( 'gh_feature_2_subtext', 'Brand authorized' ) ); ?></span>
					</div>
					<div class="gh-feature">
						<?php echo esc_html( get_theme_mod( 'gh_feature_3_icon', '💳' ) ); ?> 
						<?php echo esc_html( get_theme_mod( 'gh_feature_3_text', 'Easy EMIs' ) ); ?> 
						<span><?php echo esc_html( get_theme_mod( 'gh_feature_3_subtext', 'No-cost on select banks' ) ); ?></span>
					</div>
				</div>
			</div>
			<div class="gh-img-frame">
				<img src="<?php echo esc_url( get_theme_mod( 'gh_hero_image', 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=900&q=80' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'gh_hero_title', 'Featured gadgets' ) ); ?>" />
			</div>
		</section>

		<section class="gh-section">
			<div class="gh-head">
				<h2><?php echo esc_html( get_theme_mod( 'gh_section_1_title', 'Top deals for you' ) ); ?></h2>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">View all</a>
			</div>
			<div class="gh-grid">
				<?php
				// Get featured or recent products
				$args = array(
					'post_type'      => 'product',
					'posts_per_page' => get_theme_mod( 'gh_section_1_count', 8 ),
					'orderby'        => 'date',
					'order'          => 'DESC',
					'post_status'    => 'publish',
					'meta_query'     => array(
						array(
							'key'     => '_stock_status',
							'value'   => 'instock',
							'compare' => '=',
						),
					),
				);

				$products = new WP_Query( $args );

				if ( $products->have_posts() ) :
					while ( $products->have_posts() ) : $products->the_post();
						global $product;
						?>
						<article class="gh-card">
							<?php if ( $product->is_on_sale() ) : ?>
								<div class="gh-badge">Sale</div>
							<?php elseif ( $product->is_featured() ) : ?>
								<div class="gh-badge">Hot</div>
							<?php endif; ?>
							
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
								<?php endif; ?>
							</a>
							
							<h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
							
							<?php if ( $product->get_short_description() ) : ?>
								<p class="gh-desc"><?php echo wp_trim_words( $product->get_short_description(), 8, '...' ); ?></p>
							<?php endif; ?>
							
							<div class="gh-price-row">
								<span class="gh-price"><?php echo $product->get_price_html(); ?></span>
								<?php if ( $product->is_on_sale() ) : ?>
									<span class="gh-meta">On Sale!</span>
								<?php else : ?>
									<span class="gh-meta">Free delivery</span>
								<?php endif; ?>
							</div>
							
							<a class="gh-btn" href="<?php echo esc_url( get_permalink() ); ?>">View Product</a>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					?>
					<p>No products found. Please add products in WooCommerce.</p>
					<?php
				endif;
				?>
			</div>
		</section>

		<?php if ( get_theme_mod( 'gh_banner_enable', true ) ) : ?>
		<section class="gh-section">
			<div class="gh-head">
				<h2><?php echo esc_html( get_theme_mod( 'gh_banner_section_title', 'Big-screen deals' ) ); ?></h2>
				<a href="<?php echo esc_url( get_theme_mod( 'gh_banner_button_url', '/product-category/televisions/' ) ); ?>"><?php echo esc_html( get_theme_mod( 'gh_banner_link_text', 'View TVs' ) ); ?></a>
			</div>
			<div class="gh-banner">
				<div>
					<h3><?php echo esc_html( get_theme_mod( 'gh_banner_title', '65" 4K QLED TVs from $699' ) ); ?></h3>
					<p><?php echo esc_html( get_theme_mod( 'gh_banner_description', 'HDR10+, 120Hz panels, bezel-less design, and built-in Chromecast.' ) ); ?></p>
					<a class="gh-btn" href="<?php echo esc_url( get_theme_mod( 'gh_banner_button_url', '/product-category/televisions/' ) ); ?>"><?php echo esc_html( get_theme_mod( 'gh_banner_button_text', 'Explore offers' ) ); ?></a>
				</div>
				<img src="<?php echo esc_url( get_theme_mod( 'gh_banner_image', 'https://images.unsplash.com/photo-1586828436765-75d79f4a8177?auto=format&fit=crop&w=1000&q=80' ) ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'gh_banner_title', 'Banner' ) ); ?>" />
			</div>
		</section>
		<?php endif; ?>

		<section class="gh-section">
			<div class="gh-head">
				<h2><?php echo esc_html( get_theme_mod( 'gh_section_2_title', 'More Products' ) ); ?></h2>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">View all</a>
			</div>
			<div class="gh-grid">
				<?php
				// Get more products (offset by the first section count)
				$section_1_count = get_theme_mod( 'gh_section_1_count', 8 );
				$args = array(
					'post_type'      => 'product',
					'posts_per_page' => get_theme_mod( 'gh_section_2_count', 8 ),
					'orderby'        => 'date',
					'order'          => 'DESC',
					'post_status'    => 'publish',
					'offset'         => $section_1_count,
					'meta_query'     => array(
						array(
							'key'     => '_stock_status',
							'value'   => 'instock',
							'compare' => '=',
						),
					),
				);

				$products = new WP_Query( $args );

				if ( $products->have_posts() ) :
					while ( $products->have_posts() ) : $products->the_post();
						global $product;
						?>
						<article class="gh-card">
							<?php if ( $product->is_on_sale() ) : ?>
								<div class="gh-badge">Sale</div>
							<?php elseif ( $product->is_featured() ) : ?>
								<div class="gh-badge">Featured</div>
							<?php endif; ?>
							
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
								<?php endif; ?>
							</a>
							
							<h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
							
							<?php if ( $product->get_short_description() ) : ?>
								<p class="gh-desc"><?php echo wp_trim_words( $product->get_short_description(), 8, '...' ); ?></p>
							<?php endif; ?>
							
							<div class="gh-price-row">
								<span class="gh-price"><?php echo $product->get_price_html(); ?></span>
								<?php if ( $product->is_on_sale() ) : ?>
									<span class="gh-meta">Special Price!</span>
								<?php else : ?>
									<span class="gh-meta">In Stock</span>
								<?php endif; ?>
							</div>
							
							<a class="gh-btn" href="<?php echo esc_url( get_permalink() ); ?>">View Product</a>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
