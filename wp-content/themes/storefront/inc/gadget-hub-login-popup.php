<?php
/**
 * Gadget Hub – Header Login UI + Popup.
 *
 * Adds a prominent Login button in the header for guests,
 * shows username + Logout when logged in, and displays
 * a login popup when guests click Cart / My Account.
 *
 * @package storefront
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output header login / account UI.
 *
 * Hooked into `storefront_header` after the primary navigation
 * but before the header cart, so it sits nicely in the menu bar.
 */
function gh_header_account_area() {
	// Only show on the frontend.
	if ( is_admin() ) {
		return;
	}

	$account_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url();

	echo '<div class="gh-header-account">';

	if ( is_user_logged_in() ) {
		$current_user = wp_get_current_user();
		$username     = $current_user && $current_user->display_name ? $current_user->display_name : $current_user->user_login;

		$logout_url = wp_logout_url( home_url( '/' ) );

		echo '<span class="gh-header-user">Hi, ' . esc_html( $username ) . '</span>';
		echo '<a class="gh-logout-btn" href="' . esc_url( $logout_url ) . '">' . esc_html__( 'Log Out', 'storefront' ) . '</a>';
	} else {
		// For guests, show a bold Login button that also opens the popup.
		echo '<a class="gh-login-btn gh-login-trigger" href="' . esc_url( $account_url ) . '">' . esc_html__( 'Log In', 'storefront' ) . '</a>';
	}

	echo '</div>';
}
add_action( 'storefront_header', 'gh_header_account_area', 55 );

/**
 * Inline styles for header login button and popup.
 */
function gh_login_popup_styles() {
	?>
	<style>
		/* Header account area */
		.site-header .gh-header-account {
			display: flex;
			align-items: center;
			gap: 10px;
			margin-left: auto;
			font-size: 14px;
		}

		.gh-header-user {
			color: #111827;
			font-weight: 600;
			white-space: nowrap;
		}

		.gh-login-btn,
		.gh-logout-btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 8px 18px;
			border-radius: 999px;
			font-size: 13px;
			font-weight: 700;
			text-decoration: none;
			border: none;
			cursor: pointer;
			transition: all 0.18s ease;
			white-space: nowrap;
		}

		.gh-login-btn {
			background: linear-gradient(135deg, #2563eb, #1d4ed8);
			color: #fff;
			box-shadow: 0 8px 18px rgba(37, 99, 235, 0.35);
		}

		.gh-login-btn:hover {
			background: linear-gradient(135deg, #1d4ed8, #1e40af);
			box-shadow: 0 10px 22px rgba(37, 99, 235, 0.45);
			transform: translateY(-1px);
		}

		.gh-logout-btn {
			background: #f3f4f6;
			color: #374151;
			border: 1px solid #e5e7eb;
		}

		.gh-logout-btn:hover {
			background: #e5e7eb;
			color: #111827;
		}

		@media (max-width: 768px) {
			.site-header .gh-header-account {
				font-size: 13px;
			}

			.gh-login-btn,
			.gh-logout-btn {
				padding: 6px 14px;
			}
		}

		/* Popup overlay */
		#gh-login-modal-overlay {
			position: fixed;
			inset: 0;
			background: rgba(15, 23, 42, 0.55);
			display: none;
			align-items: center;
			justify-content: center;
			z-index: 9999;
		}

		#gh-login-modal-overlay.gh-open {
			display: flex;
		}

		/* Popup card */
		.gh-login-modal {
			background: #ffffff;
			border-radius: 18px;
			box-shadow: 0 30px 80px rgba(15, 23, 42, 0.45);
			max-width: 420px;
			width: 90%;
			padding: 24px 24px 20px;
			position: relative;
			overflow: hidden;
		}

		.gh-login-modal::before {
			content: '';
			position: absolute;
			inset: 0;
			background: radial-gradient(circle at top left, rgba(59, 130, 246, 0.15), transparent 60%);
			pointer-events: none;
		}

		.gh-login-modal-header {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-bottom: 12px;
			position: relative;
			z-index: 1;
		}

		.gh-login-modal-title {
			font-size: 20px;
			font-weight: 700;
			color: #111827;
		}

		.gh-login-modal-subtitle {
			font-size: 13px;
			color: #6b7280;
			margin-bottom: 14px;
			position: relative;
			z-index: 1;
		}

		.gh-login-close {
			background: transparent;
			border: none;
			cursor: pointer;
			font-size: 18px;
			line-height: 1;
			color: #6b7280;
			padding: 4px;
		}

		.gh-login-close:hover {
			color: #111827;
		}

		/* Form tweaks */
		.gh-login-modal form {
			position: relative;
			z-index: 1;
		}

		.gh-login-modal label {
			font-size: 13px;
			font-weight: 600;
			color: #374151;
		}

		.gh-login-modal input[type="text"],
		.gh-login-modal input[type="password"] {
			width: 100%;
			border-radius: 10px;
			border: 1px solid #d1d5db;
			padding: 8px 10px;
			font-size: 14px;
		}

		.gh-login-modal input[type="text"]:focus,
		.gh-login-modal input[type="password"]:focus {
			outline: none;
			border-color: #2563eb;
			box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.3);
		}

		.gh-login-modal input[type="submit"] {
			width: 100%;
			margin-top: 10px;
			border-radius: 999px;
			background: linear-gradient(135deg, #2563eb, #1d4ed8);
			border: none;
			color: #fff;
			font-weight: 700;
			padding: 9px 0;
			cursor: pointer;
			box-shadow: 0 12px 26px rgba(37, 99, 235, 0.4);
			transition: all 0.18s ease;
		}

		.gh-login-modal input[type="submit"]:hover {
			background: linear-gradient(135deg, #1d4ed8, #1e40af);
			box-shadow: 0 16px 34px rgba(37, 99, 235, 0.5);
			transform: translateY(-1px);
		}

		.gh-login-modal-footer {
			margin-top: 10px;
			font-size: 12px;
			color: #6b7280;
			text-align: center;
			position: relative;
			z-index: 1;
		}

		.gh-login-modal-footer a {
			color: #2563eb;
			font-weight: 600;
			text-decoration: none;
		}

		.gh-login-modal-footer a:hover {
			text-decoration: underline;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'gh_login_popup_styles' );

/**
 * Render login popup markup in the footer.
 */
function gh_login_popup_markup() {
	// If user is already logged in, we still keep markup for JS but it will not be used.
	$login_title      = get_theme_mod( 'gh_login_title', 'Welcome back' );
	$login_subtitle   = get_theme_mod( 'gh_login_subtitle', 'Log in to view your cart, track orders, and access My Account.' );
	$footer_text      = get_theme_mod( 'gh_login_footer_text', 'New to Gadget Hub?' );
	$footer_link_text = get_theme_mod( 'gh_login_footer_link_label', 'Create an account' );
	$button_label     = get_theme_mod( 'gh_login_button_label', 'Continue' );
	$custom_register  = trim( (string) get_theme_mod( 'gh_login_register_url', '' ) );

	if ( $custom_register ) {
		$register_url = $custom_register;
	} elseif ( function_exists( 'wc_get_page_permalink' ) ) {
		// WooCommerce My Account shows login + register on same page; use #register to scroll to sign-up form.
		$register_url = wc_get_page_permalink( 'myaccount' ) . '#register';
	} else {
		$register_url = wp_registration_url();
	}
	?>
	<div id="gh-login-modal-overlay" aria-hidden="true">
		<div class="gh-login-modal" role="dialog" aria-modal="true" aria-labelledby="gh-login-modal-title">
			<div class="gh-login-modal-header">
				<div>
					<div class="gh-login-modal-title" id="gh-login-modal-title"><?php echo esc_html( $login_title ); ?></div>
				</div>
				<button type="button" class="gh-login-close" aria-label="<?php esc_attr_e( 'Close login', 'storefront' ); ?>">&times;</button>
			</div>
			<p class="gh-login-modal-subtitle">
				<?php echo esc_html( $login_subtitle ); ?>
			</p>
			<?php
			// Native WordPress login form.
			wp_login_form(
				array(
					'echo'           => true,
					'remember'       => true,
					'form_id'        => 'gh-loginform',
					'label_username' => __( 'Email or Username', 'storefront' ),
					/* translators: Login button label in popup */
					'label_log_in'   => $button_label,
				)
			);
			?>
			<div class="gh-login-modal-footer">
				<?php echo esc_html( $footer_text ); ?>
				<?php if ( $register_url ) : ?>
					<a href="<?php echo esc_url( $register_url ); ?>"><?php echo esc_html( $footer_link_text ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'wp_footer', 'gh_login_popup_markup' );

/**
 * On My Account page, scroll to the registration form when URL has #register.
 * WooCommerce shows login (left) and register (right) on the same page.
 */
function gh_myaccount_register_anchor() {
	if ( ! function_exists( 'is_account_page' ) || ! is_account_page() ) {
		return;
	}
	?>
	<script>
		(function() {
			function scrollToRegister() {
				if (window.location.hash !== '#register') return;
				var registerCol = document.querySelector('.woocommerce .u-column2, .woocommerce .col-2, #customer_login .col-2');
				if (registerCol) {
					registerCol.id = 'register';
					registerCol.scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			}
			if (document.readyState === 'loading') {
				document.addEventListener('DOMContentLoaded', scrollToRegister);
			} else {
				scrollToRegister();
			}
		})();
	</script>
	<?php
}
add_action( 'wp_footer', 'gh_myaccount_register_anchor', 5 );

/**
 * Popup behavior:
 *  - If user is NOT logged in, clicking Cart or My Account opens the popup instead of navigating.
 *  - Header Login button also opens the popup.
 */
function gh_login_popup_script() {
	$cart_url      = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '';
	$myaccount_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url();
	$is_logged_in  = is_user_logged_in() ? 'true' : 'false';
	?>
	<script>
		(function() {
			var ghIsLoggedIn = <?php echo $is_logged_in; ?>;
			var ghCartUrl = <?php echo $cart_url ? '"' . esc_js( $cart_url ) . '"' : 'null'; ?>;
			var ghMyAccountUrl = <?php echo $myaccount_url ? '"' . esc_js( $myaccount_url ) . '"' : 'null'; ?>;

			function ready(fn) {
				if (document.readyState !== 'loading') {
					fn();
				} else {
					document.addEventListener('DOMContentLoaded', fn);
				}
			}

			function openModal() {
				var overlay = document.getElementById('gh-login-modal-overlay');
				if (!overlay) return;
				overlay.classList.add('gh-open');
				overlay.setAttribute('aria-hidden', 'false');
				var firstInput = overlay.querySelector('input[type="text"], input[type="password"]');
				if (firstInput) {
					setTimeout(function() {
						firstInput.focus();
					}, 50);
				}
			}

			function closeModal() {
				var overlay = document.getElementById('gh-login-modal-overlay');
				if (!overlay) return;
				overlay.classList.remove('gh-open');
				overlay.setAttribute('aria-hidden', 'true');
			}

			ready(function() {
				if (ghIsLoggedIn) {
					return;
				}

				var overlay = document.getElementById('gh-login-modal-overlay');
				if (!overlay) return;

				// Close handlers.
				overlay.addEventListener('click', function(e) {
					if (e.target === overlay) {
						closeModal();
					}
				});
				var closeBtn = overlay.querySelector('.gh-login-close');
				if (closeBtn) {
					closeBtn.addEventListener('click', function(e) {
						e.preventDefault();
						closeModal();
					});
				}

				// Elements that should trigger the popup for guests.
				var triggers = [];

				// Header login button.
				triggers = triggers.concat([].slice.call(document.querySelectorAll('.gh-login-trigger')));

				// Desktop cart link.
				triggers = triggers.concat([].slice.call(document.querySelectorAll('a.cart-contents')));

				// Handheld footer cart & account links.
				triggers = triggers.concat([].slice.call(document.querySelectorAll('.storefront-handheld-footer-bar .cart a, .storefront-handheld-footer-bar .my-account a')));

				// Any My Account / Cart menu links that point directly to those URLs.
				if (ghCartUrl) {
					triggers = triggers.concat([].slice.call(document.querySelectorAll('a[href="' + ghCartUrl + '"]')));
				}
				if (ghMyAccountUrl) {
					triggers = triggers.concat([].slice.call(document.querySelectorAll('a[href="' + ghMyAccountUrl + '"]')));
				}

				// Do not intercept clicks inside the login popup (e.g. "Create an account" link).
				triggers = triggers.filter(function(el) {
					return !overlay.contains(el);
				});

				triggers.forEach(function(el) {
					el.addEventListener('click', function(e) {
						e.preventDefault();
						openModal();
					});
				});
			});
		})();
	</script>
	<?php
}
add_action( 'wp_footer', 'gh_login_popup_script', 100 );

