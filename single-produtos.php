<?php

 // single page for products

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('interna'); ?>
  </slide>

</div>

<content id="main">
  <div class="container">
    <div class="main internal effect8">
      <div class="row">
        <?php
        if(have_posts()) : while(have_posts()) : the_post();
         ?>
          <div class="col-sm-12 col-md-4">
            <h1 class="w-border">Lançamento</h1>
            <div class="desc">
              <h2><strong><?php the_title(); ?></strong></h2>
              <?php the_content(); ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-8">
            <div class="thumb">
              <a class="image-zoom img-interna-page">
                <div class="image">
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail('interna-page');
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
                            . '/img/thumb-default-interna.jpg" />';
                    } ?>
                </div>
              </a>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="divisor"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="product-attributes">
            <h3 class="w-border">titulo</h3>
            <p>texto com imagem, se houver</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="product-table">
            <h3 class="w-border">titulo</h3>
            <div class="table">
              <div class="ask" style="background: green; color: white;">
                <i class="glyphicon glyphicon-search"><span>texto</span></i>
              </div>
              <div class="answer" style="background: darkgreen; color: white;">
                <p class="glyphicon glyphicon-search"><span>texto</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divisor"></div>
          <div class="col-sm-12 col-md-8">
            <div class="thumb">
              <a class="image-zoom">
                <div class="image">
                  imagem
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <h1 class="w-border">Depoimento</h1>
            <div class="desc">
              <h2><strong>titulo</strong></h2>
              conteudo
            </div>
          </div>
      </div>
  </div><!-- fecha main internal -->
<?php
 get_footer(); ?>
