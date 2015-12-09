<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-hero-content">
		<img src='<?php echo CFS()->get( "post_hero_image" );?>' />
	</div>

	<div class="work-content">
		<?php the_content(); ?>
		
	</div><!-- .work-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
