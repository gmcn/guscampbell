<?php

//variables
$intro_bg_colour = get_field('background_colour');
$main_intro = get_field('main_intro');
$intro_sub_heading = get_field('intro_sub_heading');
$intro_paragraph = get_field('intro_paragraph');
 ?>

 <?php if ($main_intro) : ?>


<div class="intro-container" style="background: <?php echo $intro_bg_colour ?>">
  <div class="col-md-6 wow fadeInRight">
    <h1><?php echo $main_intro ?></h1>
  </div>
  <div class="col-md-5 col-lg-3 col-lg-offset-1 wow fadeInLeft">
    <h2><?php echo $intro_sub_heading ?></h2>
    <p>
      <?php echo $intro_paragraph ?>
    </p>
  </div>
  <div class="clear">

  </div>
</div>

<?php endif ?>
