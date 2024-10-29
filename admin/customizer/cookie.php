<?php
/**
 * Cookie Customizer
 */

/**
 * Register the customizer.
 */
function bk_cookie_customize_register( $wp_customize ) {

	// Register new section: Cookie Law
	$wp_customize->add_section( 'bk_cookie' , array(
		'title'    => esc_html__( 'Cookie Law', 'beautimour-kit' ),
		'panel'    => 'bk_options',
		'priority' => 1
	) );

	// Register enable eu cookie law setting
	$wp_customize->add_setting( 'bk_cookie_enable', array(
		'default'           => 0,
		'sanitize_callback' => 'bk_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bk_cookie_enable', array(
		'label'             => esc_html__( 'Show eu cookie law', 'beautimour-kit' ),
		'section'           => 'bk_cookie',
		'priority'          => 1,
		'type'              => 'checkbox'
	) );

	// Register eu cookie law text setting
	$wp_customize->add_setting( 'bk_cookie_text', array(
		'default'           => esc_html__( 'We use cookies to ensure you get the best experience on our website.', 'beautimour-kit' ),
		'sanitize_callback' => 'bk_sanitize_html'
	) );
	$wp_customize->add_control( 'bk_cookie_text', array(
		'label'             => esc_html__( 'Text', 'beautimour-kit' ),
		'section'           => 'bk_cookie',
		'priority'          => 3,
		'type'              => 'textarea'
	) );

	// Register eu cookie law backgroun color setting
	$wp_customize->add_setting( 'bk_cookie_bg_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'bk_sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bk_cookie_bg_color', array(
		'label'             => esc_html__( 'Background Color', 'beautimour-kit' ),
		'section'           => 'bk_cookie',
		'priority'          => 5
	) ) );

}
add_action( 'customize_register', 'bk_cookie_customize_register' );
