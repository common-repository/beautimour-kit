<?php
/**
 * EU Cookie law.
 */

/**
 * Custom colors
 */
function bk_cookie_custom_colors() {

	// Get the customizer value.
	$color = get_theme_mod( 'bk_cookie_bg_color', '#000000' );

	if ( $color != '#000000' ) : ?>
		<style type="text/css" media="screen">
			.cookie-law {
				background-color: <?php echo sanitize_hex_color( $color ); ?>;
			}
		</style>
	<?php endif;

}
add_action( 'wp_head', 'bk_cookie_custom_colors' );

/**
 * Display the data
 */
function bk_display_cookie_law() {

	// Get the customizer data
	$enable       = get_theme_mod( 'bk_cookie_enable', 0 );
	$default_text = esc_html__( 'We use cookies to ensure you get the best experience on our website.', 'beautimour-kit' );
	$text         = get_theme_mod( 'bk_cookie_text', $default_text );

	if ( $enable ) :
	?>
		<div class="cookie-law">
			<div class="container">
				<a class="close-banner" href="#">&times;</a>
				<?php echo wp_kses_post( $text ); ?>
			</div>
		</div>
	<?php
	endif;
}
add_action( 'wp_footer', 'bk_display_cookie_law', 1 );
