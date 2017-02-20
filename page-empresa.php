<?php

 //Template Name: Empresa


if(have_posts()) : while(have_posts()) : the_post();

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('quemsomos'); ?>
  </slide>

</div>

<content id="main">
  <div class="container">
    <div id="products">
      <div class="row">
        <div class="col-md-12">
          <ul class="indice">
            <?php
            $empresa = new WP_Query('post_type=post&cat=5&orderby=title&order=ASC');
            if($empresa->have_posts()) : while($empresa->have_posts()) : $empresa->the_post();
            $post_slug = get_post_field( 'post_name', get_post());
             ?>
              <li><a class="scrollsuave" href="#<?php echo $post_slug?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
    </div>

    <div class="main internal effect8">
      <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="desc">
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
            </div>          </div>
      </div>
      <div class="divisor"></div>
      <div class="row new">


        <?php
        $empresa = new WP_Query('post_type=post&cat=5&order=ASC&orderby=title');
        if($empresa->have_posts()) : while($empresa->have_posts()) : $empresa->the_post();
        $post_slug = get_post_field( 'post_name', get_post());
        ?>
        <div class="bloco-empresa">
          <div class="col-md-4">
            <div class="thumb">
              <a class="image-zoom img-padrao">
                <div class="image">
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail('padrao');
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
                            . '/img/thumbnail-default.jpg" />';
                    } ?>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-8 ">
            <h3 class="w-border"><a name="<?php echo $post_slug?>"><?php the_title(); ?></a></h3>
             <p><?php echo strip_tags($post->post_content); ?></p>
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div> <!-- row new -->
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
