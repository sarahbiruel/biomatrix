<section id="main" style="">
  <div class="container">
    <div class="main effect8">
      <?php
        $principal = new WP_Query('post_type=post&cat=2');
        if($principal->have_posts()) : while($principal->have_posts()) : $principal->the_post(); ?>
        <div class="row">
          <div class="col-md-6">
            <?php if ( has_post_thumbnail() ) {
            	echo the_post_thumbnail();
            } else {
              echo get_template_directory_uri() .'/img/thumbnail-home.png';
            }?>
          </div>
          <div class="col-md-6">
              <a href="#"><h2><?php the_title(); ?></h2></a>
              <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata();?>
    </div>
  </div>
</section>
