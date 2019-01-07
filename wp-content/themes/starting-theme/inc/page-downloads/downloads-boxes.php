
  <?php if( have_rows('downloads') ): ?>

	<div class="row downloads">

    <?php $i = 0; ?>

	<?php while( have_rows('downloads') ): the_row();

		// vars
		$download_title = get_sub_field('download_title');
		$download_description = get_sub_field('download_description');
    $download_file = get_sub_field('download_file');

		?>

		<div class="col-md-3 col-sm-6 wow fadeInLeft dl<?php echo $i++ ?>">
      <div class="download dlheight">

        <h1><?php echo $download_title ?></h1>
        <p>
          <?php echo $download_description ?>
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/download_icon.svg" alt="Download <?php echo $download_title ?>" />
        <a href="<?php echo $download_file ?>" download> Click To Download Now</a>

      </div>

		</div>

	<?php endwhile; ?>

  <?php if ($i == 7 || $i == 11 || $i == 15) { ?>

  <div class="col-md-3 col-sm-6 wow fadeInLeft dl<?php echo $i++ ?> dlheight">
    <div class="download dlheight">

      <div class="vert-align">
        <img class="wow rotateIn" src="<?php echo get_template_directory_uri(); ?>/images/guscampbell_dl_logo.svg" width="150px" alt="<?php echo $description ?>" />
      </div>

    </div>

  </div>

<?php } ?>

</div>

<?php endif; ?>
