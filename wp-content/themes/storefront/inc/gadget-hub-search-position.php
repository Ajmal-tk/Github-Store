<?php
/**
 * Gadget Hub — Reposition WooCommerce product search bar
 *
 * Moves the header product search so it sits just above the primary
 * navigation menu, as its own row, without colliding with the
 * storefront_header_container_close hook at priority 41.
 *
 * @package storefront
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevent direct access.
}

function gadget_hub_reposition_product_search() {
	// Try removing from common Storefront/WooCommerce default priority.
	remove_action( 'storefront_header', 'storefront_product_search', 40 );

	// Re-add at priority 31 — safely between secondary_navigation (30)
	// and header_container_close (41), avoiding any collision.
	add_action( 'storefront_header', 'storefront_product_search', 31 );
}
add_action( 'init', 'gadget_hub_reposition_product_search' );