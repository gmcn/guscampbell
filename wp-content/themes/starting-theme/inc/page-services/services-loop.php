<?php
$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );

?>

<div class="row services">

  <?php $i = 0; ?>

<?php while ( $child_query->have_posts() ) : $child_query->the_post();

$service_icon = get_field('service_icon');

?>

  <div class="col-md-12 col-lg-6 wow <?php if ( $i == 1 || $i == 3 || $i == 5 || $i == 7 ) { echo 'fadeInRight'; } else { echo 'fadeInLeft'; } ?> <?php echo $i++ ?> servicebox serviceheight clear">

    <div class="row no-gutter">

      <div class="col-md-6 servicecontentheight">
        <div class="vert-align">
          <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More ></a></p>
        </div>
      </div><!-- /.col-md-6 -->

      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <div class="col-md-6 servicecontentheight" style="background: url('<?php echo $image[0]; ?>') center; background-size: cover; backdrop-filter: blur(5px);">

        <div class="icon-wrapper">
          <div class="vert-align">
            <img src="<?php echo $service_icon ?>" width="150px">
          </div>
        </div>



      </div><!-- /.col-md-6 -->

    </div><!-- /.row -->
  </div><!-- /.col-md-6 -->
  <?php endwhile; wp_reset_postdata(); ?>

</div><!-- /.row -->
