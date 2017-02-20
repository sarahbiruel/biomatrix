<?php

 //Template Name: Noticias

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('interna'); ?>
  </slide>

</div>

<content id="main" style="position: relative; top:-280px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="main internal">
        <div class="row">
            <div class="col-md-12">
              <h1 class="w-border"><?php the_title(); ?></h1>
              <div class="thumb">
                <a class="image-zoom img-interna-single" href="<?php the_permalink(); ?>">
                  <div class="image">
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail('interna-single');
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
                            . '/img/thumb-default-single.jpg" />';
                    } ?>
                  </div>
                </a>
              </div>
              <div class="content">
                <p class="data">Publicado por <span><?php echo get_the_author(); ?></span> | <span><?php echo get_the_date(); ?></span></p>
                <div class="text"><?php the_content(); ?></div>
              </div>
            </div>
        </div>
    </div>
  </div>
<?php endwhile; endif; ?>
</content>


<?php get_footer(); ?>
