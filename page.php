<?php

 // Pagina padrao

if(have_posts()) : while(have_posts()) : the_post();

get_template_part('includes/header','interna');

?>

  <slide>
    <?php
$slider = get_field('slider_name');
putRevSlider((($slider=='')?'interna':$slider)); 
?>
  </slide>

</div>

<content id="main">
  <div class="container">

    <div class="main internal effect8">
      <div class="row">
        <div class="page-content">
          <div class="col-sm-12 col-md-4">
            <div class="thumb">
              <a class="image-zoom" href="<?php the_permalink(); ?>">
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
          <div class="col-sm-12 col-md-8">
            <div><h2 class="w-border"><?php the_title(); ?></h2></div>
            <div class="desc">
              <p><?php strip_tags(the_content()); ?></p>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
