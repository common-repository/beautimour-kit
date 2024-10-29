<?php
/**
 * Social share
 */
function velove_post_share() {
	?>
		<div class="entry-share">
			<?php if ( function_exists( 'zilla_likes' ) ) zilla_likes(); ?>
			<ul>
				<li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><i class="icon-facebook"></i><span class="screen-reader-text">Facebook</span></a></li>
				<li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( esc_attr( get_the_title( get_the_ID() ) ) ); ?>&amp;url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><i class="icon-twitter"></i><span class="screen-reader-text">Twitter</span></a></li>
				<li class="gplus"><a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><i class="icon-gplus"></i><span class="screen-reader-text">Google+</span></a></li>
				<li class="linkedin"><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>&amp;title=<?php echo urlencode( esc_attr( get_the_title( get_the_ID() ) ) ); ?>" target="_blank"><i class="icon-linkedin"></i><span class="screen-reader-text">Linkedin</span></a></li>
			</ul>
		</div>
	<?php
}
