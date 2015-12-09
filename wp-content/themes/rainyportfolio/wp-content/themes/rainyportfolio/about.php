<?php
/**
 Template Name: about page template
 *
 * @package Rainy's Portfolio
 */
 ?>
<?php get_header(); ?>

<div id="under-nav"></div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="entry-content">
			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="about-content">
					<?php the_content(); ?>
					<button class="resume-btn"><a href="path_to_file" download="proposed_file_name">Check Her Resume</a></button>
				</div><!-- .about-content -->

			</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php endif; ?>
</div><!--entry-content-->
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>