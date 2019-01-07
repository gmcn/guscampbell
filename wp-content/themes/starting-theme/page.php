<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<header class="entry-header">
	<h1 class="entry-title"><?php the_title() ?></h1>
</header>

		<?php include(locate_template("inc/page/intro.php")); ?>
		<?php include(locate_template("inc/page-about/team-boxes.php")); ?>
		<?php include(locate_template("inc/page-downloads/downloads-boxes.php")); ?>
		<?php include(locate_template("inc/page/content.php")); ?>
		<?php include(locate_template("inc/page/services-page-footer.php")); ?>



<?php
//get_sidebar();
get_footer();
