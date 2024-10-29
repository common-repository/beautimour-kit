<?php
/**
 * Sticky sidebar Customizer
 */

/**
 * Register the customizer.
 */
function bk_sticky_sidebar_customize_register( $wp_customize ) {

	// Register new section: Sticky Sidebar
	$wp_customize->add_section( 'bk_sticky_sidebar' , array(
		'title'       => esc_html__( 'Sticky Sidebar', 'beautimour-kit' ),
		'panel'       => 'bk_options',
		'priority'    => 3
	) );

	// Register enable sticky sidebar setting
	$wp_customize->add_setting( 'bk_sticky_sidebar_enable', array(
		'default'           => 0,
		'sanitize_callback' => 'bk_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'bk_sticky_sidebar_enable', array(
		'label'             => esc_html__( 'Enable sticky sidebar', 'beautimour-kit' ),
		'section'           => 'bk_sticky_sidebar',
		'priority'          => 1,
		'type'              => 'checkbox'
	) );

	// Register margin top setting
	$wp_customize->add_setting( 'bk_sticky_sidebar_margin_top', array(
		'default'           => 30,
		'sanitize_callback' => 'bk_sanitize_number_absint',
	) );
	$wp_customize->add_control( 'bk_sticky_sidebar_margin_top', array(
		'label'             => esc_html__( 'Margin Top', 'beautimour-kit' ),
		'section'           => 'bk_sticky_sidebar',
		'priority'          => 3,
		'type'              => 'number',
		'input_attrs'       => array(
			'min'  => 0,
			'step' => 1
		)
	) );

}
add_action( 'customize_register', 'bk_sticky_sidebar_customize_register' );
