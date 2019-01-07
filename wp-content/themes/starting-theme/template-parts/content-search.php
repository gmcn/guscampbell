<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<div class="col-sm-4 searchmatch">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php starting_theme_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
	</article><!-- #post-## -->
</div>