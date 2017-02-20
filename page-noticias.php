<?php

 //Template Name: Noticias

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('interna'); ?>
  </slide>

</div>

<content id="main">
  <div class="container">
    <div class="main internal effect8">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args =array(
        	'posts_per_page' => 5,
        	'post_type' => 'post',
          'cat' => 3,
          'post_status' => 'published',
        	'paged' => $paged,
        );
        $noticias = new WP_Query($args);
        if($noticias->have_posts()) : while($noticias->have_posts()) : $noticias->the_post(); ?>
        <div class="row new">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="thumb">
                <a class="image-zoom img-padrao" href="<?php the_permalink(); ?>">
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
            <div class="col-xs-12 col-sm-6 col-md-8">
              <h2 class="w-border"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="data">Publicado por <span><?php echo get_the_author(); ?></span> | <span><?php echo get_the_date(); ?></span></p>
              <p class="new-text"><?php echo strip_tags(get_the_excerpt()); ?></p>
              <div class="footer-text"><div class="post-more"><span><img src="<?php echo get_template_directory_uri() . '/img/icbalao.png' ?>"><a href="">4</a></span><div class=""><img src="<?php echo get_template_directory_uri() . '/img/icnoticia.png' ?>"><a href="<?php the_permalink(); ?>">Leia mais</a></div></div></div>
            </div>
        </div>

        <?php posts_nav_link(); ?>

    <?php endwhile; endif; wp_reset_postdata(); ?>


    </div>
  </div>

<?php get_footer(); ?>