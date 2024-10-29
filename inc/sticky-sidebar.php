<?php
/**
 * Enable sticky sidebar
 */
function bk_sticky_sidebar() {

	// Get the customizer data
	$enable = get_theme_mod( 'bk_sticky_sidebar_enable', 0 );
	$margin = get_theme_mod( 'bk_sticky_sidebar_margin_top', 30 );

	if ( $enable ) {
		?>
		<script type="text/javascript">
			( function( $ ) {
				$( function() {
					$( '.widget-area' ).theiaStickySidebar( {
						additionalMarginTop: <?php echo absint( $margin ); ?>
					} );
				} );
			}( jQuery ) );
		</script>
		<?php
	}

}
add_action( 'wp_footer', 'bk_sticky_sidebar', 99 );
