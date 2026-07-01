<?php
/**
 * Tax Consultant: Block Patterns
 *
 * @since Tax Consultant 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Tax Consultant 1.0
 *
 * @return void
 */
function tax_consultant_register_block_patterns() {
	$tax_consultant_block_pattern_categories = array(
		'tax-consultant'    => array( 'label' => __( 'Tax Consultant', 'tax-consultant' ) ),
	);

	$tax_consultant_block_pattern_categories = apply_filters( 'tax_consultant_block_pattern_categories', $tax_consultant_block_pattern_categories );

	foreach ( $tax_consultant_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'tax_consultant_register_block_patterns', 9 );
