<?php
/**
 * Template part for displaying posts.
 *
 * @package Rainy's Portfolio
 */

?>

		<?php if ( has_post_thumbnail() ) : ?>
		<div class="fp-image-container col-6_xs-12">
			<?php the_post_thumbnail( 'large' ); ?>
			<div class="fp-mask">
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			</div>	
		</div>
		<?php endif; ?>


	