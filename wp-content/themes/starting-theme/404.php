<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<header class="entry-header">
	<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'starting-theme' ); ?></h1>
</header>

<div class="intro-container" style="background: #1c2a32">
  <div class="col-md-6 wow fadeInRight">
    <h1><?php esc_html_e( 'It looks like nothing was found at this location.', 'starting-theme' ); ?></h1>
  </div>
  <div class="col-md-3 col-md-offset-1 wow fadeInLeft">
    <h2>Maybe try one of the links above or a search?</h2>
    <p>
			<?php get_search_form(); ?>
		</p>
  </div>
  <div class="clear">

  </div>
</div>

<?php
get_footer();
