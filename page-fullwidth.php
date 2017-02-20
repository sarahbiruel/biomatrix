<?php

//Template Name: Full Width

if(have_posts()) : while(have_posts()) : the_post();

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
        <div class="page-content">
          <div class="col-sm-12">
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
