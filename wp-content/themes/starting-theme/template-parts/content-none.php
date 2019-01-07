<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<section class="no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'starting-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="intro-container" style="background: #1c2a32">
		<div class="col-md-6 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
		  <h1><?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'starting-theme' ); ?></h1>
		</div>
		<div class="col-md-3 col-md-offset-1 wow fadeInLeft">
		  <h2> Please try again with some different keywords.</h2>
		  <p>
		    <?php get_search_form(); ?></p>
		</div>
		<div class="clear">

		</div>
	</div>
</section><!-- .no-results -->
