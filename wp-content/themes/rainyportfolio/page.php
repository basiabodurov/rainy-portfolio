<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="under-nav"></div>
	<div id="primary" class="content-area">
		<div class="contact-hero-image">
			<a href="#hero-scroll-dest" class="smoothScroll hero-scroll">Contact Me</a>
		</div>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

