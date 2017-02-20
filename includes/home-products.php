<section class="section-grey" style="padding-bottom:30px;">
  <div class="container2">
    <div class="row">
      <div class="slider-products">
        <?php
        $lines = new WP_Query('post_type=linhas&posts_per_page=3');
        if($lines->have_posts()) : while ($lines->have_posts()) : $lines->the_post();
        ?>
        <div class="col-md-4 box">
          <div class="icon-product">
            <div class="box-green">
              <div class="box-white">
                <?php if ( has_post_thumbnail() ) {
                  echo the_post_thumbnail();
                 } ?>
              </div>
            </div>
          </div>
          <div class="title-product"><?php the_title(); ?></div>
          <div class="text-product"><p><?php substr(the_content(),0,50); ?><a href="http://www.mamweb.com.br/clientes/biomatrix/produtos/">Clique aqui e saiba mais</a></p></div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
