<?php
/**The template file to display list of works.
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="under-nav"></div>
<section class="hero-content">
		<div class="work-hero-image">
			<div class="work-hero-text">
				<p>My Works</p>
			</div>
		</div>
</section>
<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">
		<h2 class="fp-title">My Works</h2>
		<?php if ( have_posts() ) : ?>
			<?php query_posts($query_string . '&order=ASC'); ?>
			<div class="fp-image-box grid-2_xs-1">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content', 'works' );
				?>
			<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>