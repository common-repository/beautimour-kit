<?php
/**
 * Beautimour Extra Customizer
 */

// Loads the customizer settings
require_once( BK_ADMIN . 'customizer/cookie.php' );
require_once( BK_ADMIN . 'customizer/sidebar.php' );
require_once( BK_ADMIN . 'customizer/pinterest.php' );
require_once( BK_ADMIN . 'customizer/signature.php' );

/**
 * Custom customizer functions.
 */
function bk_customize_functions( $wp_customize ) {

	// Register new panel: Extra Options
	$wp_customize->add_panel( 'bk_options', array(
		'title'       => esc_html__( 'Extra Options', 'beautimour-kit' ),
		'description' => esc_html__( 'Extra options to customize the theme you used!.', 'beautimour-kit' ),
		'priority'    => 190,
	) );

}
add_action( 'customize_register', 'bk_customize_functions', 99 );
