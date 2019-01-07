
  <?php if( have_rows('help_boxes') ): ?>

	<div class="row help-boxes">

    <?php $i = 0; ?>

	<?php while( have_rows('help_boxes') ): the_row();

		// vars
    $i++;
		$boxtitle = get_sub_field('box_title');
		$boxtag = get_sub_field('box_tag_line');
    $link = get_sub_field('box_link');
    $icon = get_sub_field('box_icon');

		?>

		<div class="col-md-6 wow fadeInRight">

      <div class="row matchheight box<?php echo $i ?>">
        <?php if( $link ): ?>
  				<a href="<?php echo $link; ?>">
  			<?php endif; ?>

        <div class="row box-content">
          <div class="col-md-3 col-md-offset-1">

            <img src="<?php echo $icon ?>" alt="<?php echo $boxtag ?>">

          </div>
          <div class="col-md-6">

            <h1><?php echo $boxtitle ?></h1>

            <p>
              <?php echo $boxtag ?>
            </p>

          </div>
        </div>

  			<?php if( $link ): ?>
  				</a>
  			<?php endif; ?>

        <div class="clear">

        </div>
      </div>



		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>
