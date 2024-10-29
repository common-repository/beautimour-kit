<?php
/**
 * Signature Customizer
 */

/**
 * Register the customizer.
 */
function bk_signature_customize_register( $wp_customize ) {

	// Register new section: Signature
	$wp_customize->add_section( 'bk_signature' , array(
		'title'       => esc_html__( 'Signature', 'beautimour-kit' ),
		'description' => esc_html__( 'The signature will appear at the bottom of each post.', 'beautimour-kit' ),
		'panel'       => 'bk_options',
		'priority'    => 7
	) );

	// Register signature upload setting
	$wp_customize->add_setting( 'bk_signature_image', array(
		'default'           => '',
		'sanitize_callback' => 'bk_sanitize_number_absint',
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'bk_signature_image', array(
		'label'             => esc_html__( 'Signature', 'beautimour-kit' ),
		'section'           => 'bk_signature',
		'priority'          => 1,
		'mime_type'         => 'image',
	) ) );

}
add_action( 'customize_register', 'bk_signature_customize_register' );
