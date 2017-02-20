<?php

 //Template Name: Contato

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('contato'); ?>
  </slide>

</div>

<content id="main">
  <div class="container">
    <div id="contact">

      <div class="main internal effect8">
        <div class="row">
          <?php
            if (have_posts()) : while (have_posts()) : the_post();
           ?>
            <div class="col-sm-12 col-md-4">
              <h2 class="w-border">Fale Conosco</h2>
              <div class="form"><?php echo do_shortcode('[contact-form-7 id="101" title="Formulário de contato 1"]'); ?></div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="mapa"><?php echo do_shortcode('[om_gmap zoom="9" lat="-18.5708864" lng="-46.5056236" infowindow=""]'); ?></div>
              <div class="desc">
                <?php the_content(); ?>
                <p>
                </p>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>

    </div>
  </div>
<?php get_footer(); ?>
