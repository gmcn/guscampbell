<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="siteslides">

<?php if (function_exists('get_field')) : ?>
	<?php if(have_rows('banner_slides')): ?>

		<ul class="bxslider">

			<?php while(have_rows('banner_slides')) : the_row();

					// ACF Sub fields
					$slide_title = get_sub_field( 'slide_title' );
					$slide_image = get_sub_field( 'slide_image' );
					$slide_caption = get_sub_field( 'slide_caption' );
					$slide_url = get_sub_field( 'slide_url' ); ?>

				<li class="slide" style="background-image:url(<?php echo $slide_image; ?>); background-size: cover">

					<div class="vert-align">

            <!-- <img src=""> -->

						<h2 class="bxslider__title wow fadeInLeft"><?php echo $slide_title; ?></h2>

						<p class="bxslider__text wow fadeInLeft"><?php echo $slide_caption;  ?></p>

					</div>

				</li>

			<?php endwhile; ?>

		</ul>

	<?php endif; ?>
<?php endif; ?>

</div>
