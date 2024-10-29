<?php
/**
 * Enable pinterest pin it button
 */
function bk_pinterest_button() {

	// Get the customizer data
	$enable = get_theme_mod( 'bk_pinterest_button_enable', 0 );

	if ( $enable ) {
		?>
		<script async defer data-pin-hover="true" data-pin-tall="true" data-pin-save="true" src="//assets.pinterest.com/js/pinit.js"></script>
		<?php
	}

}
add_action( 'wp_footer', 'bk_pinterest_button', 99 );
