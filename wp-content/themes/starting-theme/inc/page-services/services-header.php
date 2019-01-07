<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<div class="row serviceshead-wrapper wow fadeInUp no-gutter">
  <div class="col-md-6 servicesheadheight">
    <div class="vert-align">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="col-md-6 servicesheadheight" style="background: url('<?php echo $image[0]; ?>') center;">
    <?php //the_post_thumbnail(); ?>
  </div>
</div>
