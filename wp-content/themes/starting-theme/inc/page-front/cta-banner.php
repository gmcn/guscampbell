
  <?php if( have_rows('cta_boxes') ): ?>

	<div class="row cta-boxes">

    <?php $i = 0; ?>

	<?php while( have_rows('cta_boxes') ): the_row();

		// vars
    $i++;
		$cta_link = get_sub_field('cta_link');
		$cta_bg_image = get_sub_field('cta_bg_image');
		$cta_bg_colour = get_sub_field('cta_bg_colour');
    $cta_icon = get_sub_field('cta_icon');
    $cta_title = get_sub_field('cta_title');

		?>

		<div class="col-md-3 col-sm-6 wow fadeInLeft">

      <div class="row cta-box" style="background: url('<?php echo $cta_bg_image ?>') center <?php echo $cta_bg_colour ?>; background-size: cover">
        <?php if( $cta_link ): ?>
  				<a href="<?php echo $cta_link; ?>">
  			<?php endif; ?>

  			  <?php if( $cta_icon ): ?>

            <div class="img_wrapper">
              <img src="<?php echo $cta_icon; ?>" alt="<?php echo $cta_title  ?>" />
            </div>

  				<?php endif; ?>

  				<h2><?php echo $cta_title; ?></h2>

  			<?php if( $cta_link ): ?>
  				</a>
  			<?php endif; ?>

        <div class="clear">

        </div>
      </div>



		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>
