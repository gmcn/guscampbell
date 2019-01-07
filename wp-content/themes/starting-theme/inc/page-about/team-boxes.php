
  <?php if( have_rows('team') ): ?>

    <div class="row team-titans">
      <h1 id="team">Our Team</h1>
    </div>

	<div class="row team-members">

    <?php $i = 0; ?>

	<?php while( have_rows('team') ): the_row();

		// vars
		$profile_picture = get_sub_field('profile_picture');
    $profile_picture_align = get_sub_field('profile_picture_align');
		$profile_colour = get_sub_field('profile_colour');
    $member_name = get_sub_field('member_name');
    $member_title = get_sub_field('member_title');
    $role_description = get_sub_field('role_description');

		?>

		<div class="col-lg-6 col-md-12 team-member wow <?php if ( $i == 1 || $i == 3 ) { echo 'fadeInRight'; } else { echo 'fadeInLeft'; } ?> <?php echo $i++ ?>">

      <div class="row no-gutter">

        <div class="col-lg-6 team-member-profile" style="background: url('<?php echo $profile_picture ?>') center <?php echo $profile_picture_align ?>; background-size: cover">

          <div class="clear">

          </div>
        </div>

        <div class="col-lg-6 team-member-profile" style="background: <?php echo $profile_colour ?>">
          <div class="vert-align">
            <h1><?php echo $member_name ?></h1>
            <h2><?php echo $member_title ?></h2>
            <p>
              <?php echo $role_description ?>
            </p>
            <div class="clear">

            </div>
          </div>

        </div>

        <div class="clear">

        </div>
      </div>



		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>
