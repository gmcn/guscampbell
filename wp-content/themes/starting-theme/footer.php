<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>


</div><!-- /.container-fluid -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>
		<div class="row">
			<div class="col-md-4 copyright">
					&copy; Gus Campbell <?php echo date('Y'); ?> | <a href="/privacy-policy">Privacy Policy</a>
					<!-- <span class="sep"> | </span> Cookie Policy <span class="sep"> | </span> Sitemap <span class="sep"> | </span> -->
			</div>
			<div class="col-md-4 col-md-offset-4 byline">
				Website by <a href="https://cornellstudios.com/" target="_blank">Cornell</a>
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_footer.png" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter_footer.png" /> -->
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>

</html>
