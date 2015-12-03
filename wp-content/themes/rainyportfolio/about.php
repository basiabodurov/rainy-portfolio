<?php get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="entry-content">
			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<?php endif; ?>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<?php endif; ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php endif; ?>
</div><!--entry-content-->
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>