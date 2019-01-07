<?php
$content = get_the_content();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<?php if ($content) : ?>

<div class="row pagecontent">
  <div class="col-md-6 wow fadeInLeft contentheight">
    <div class="content--wrapper">
      <?php echo the_content();  ?>
    </div>

  </div>
  <div class="col-md-6 wow fadeInRight contentheight" style="background: url('<?php echo $image[0]; ?>') top; background-size: cover;">

  </div>
</div>

<?php endif; ?>
