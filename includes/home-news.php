<section style="position: relative; top: -60px; padding-top: 0px; padding-top: 30px;">
  <div class="container2">
    <div id="news">
      <h2 class="w-border">Últimas Notícias</h2>
        <div class="row">
          <div class="slider-news">
          <?php
            $noticias = new WP_Query('post_type=post&posts_per_page=9&cat=3');
            if($noticias->have_posts()) : while($noticias->have_posts()) : $noticias->the_post(); ?>
            <div class="col-md-4">
              <div class="thumb">
                <a class="image-zoom" href="<?php the_permalink(); ?>">
                  <div class="image">
                    <?php if ( has_post_thumbnail() ) {
                      echo the_post_thumbnail();
                     } ?>
                  </div>
                </a>
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <p><?php echo strip_tags(get_the_excerpt()); ?></p>
              </div>
            </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </div>
    </div>
  </div>
</section>
