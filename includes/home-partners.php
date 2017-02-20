<section style="padding-bottom: 50px;">
  <div class="container2">
    <div id="partners">
      <h2 class="w-border">Empresas do grupo Agroceres</h2>
      <div class="row">
        <div class="slider-partners">
          <?php
            $grupo = new WP_Query('post_type=grupo&posts_per_page=-1');
            if($grupo->have_posts()) : while ($grupo->have_posts()) : $grupo->the_post();
            ?>
            <div class="col-md-3">
              <a href="<?php echo get_field('site_url'); ?>" target="_blank">
                <?php if ( has_post_thumbnail() ) {
                  echo the_post_thumbnail();
                 } ?>
               </a>
             </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
