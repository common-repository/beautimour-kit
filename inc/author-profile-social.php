<?php
/**
 * Register custom social info fields.
 */

function bk_author_profile_extra_social( $contactmethods ) {
	$contactmethods['twitter']     = esc_html__( 'Twitter URL', 'beautimour-kit' );
	$contactmethods['facebook']    = esc_html__( 'Facebook URL', 'beautimour-kit' );
	$contactmethods['gplus']       = esc_html__( 'Google Plus URL', 'beautimour-kit' );
	$contactmethods['instagram']   = esc_html__( 'Instagram URL', 'beautimour-kit' );
	$contactmethods['pinterest']   = esc_html__( 'Pinterest URL', 'beautimour-kit' );
	$contactmethods['linkedin']    = esc_html__( 'Linkedin URL', 'beautimour-kit' );
	$contactmethods['dribbble']    = esc_html__( 'Dribbble URL', 'beautimour-kit' );

	return $contactmethods;
}
add_filter( 'user_contactmethods', 'bk_author_profile_extra_social' );
