<?php
/**
 * Pinterest pin it button Customizer
 */

/**
 * Register the customizer.
 */
function bk_pinterest_button_customize_register( $wp_customize ) {

	// Register new section: Pinterest Button
	$wp_customize->add_section( 'bk_pinterest_button' , array(
		'title'    => esc_html__( 'Pinterest Button', 'beautimour-kit' ),
		'panel'    => 'bk_options',
		'priority' => 5
	) );

	// Register enable pinterest pin it button setting
	$wp_customize->add_setting( 'bk_pinterest_button_enable', array(
		'default'           => 0,
		'sanitize_callback' => 'bk_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bk_pinterest_button_enable', array(
		'label'             => esc_html__( 'Enable pinterest pin it button', 'beautimour-kit' ),
		'section'           => 'bk_pinterest_button',
		'priority'          => 1,
		'type'              => 'checkbox'
	) );

}
add_action( 'customize_register', 'bk_pinterest_button_customize_register' );
