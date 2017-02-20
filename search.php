<?php

 // The template for displaying Search Results pages.

get_template_part('includes/header','interna');

?>

  <slide>
    <?php putRevSlider('interna'); ?>
  </slide>

</div>

<content id="main">
  <div class="container">
    <div id="search">

      <div class="main internal effect8">
        <div class="row">
					<?php
					$s=get_search_query();
					$args = array(
					                's' =>$s
					            );
					    // The Query
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
					        _e("<h2 class='w-border'>Resultados para: ".get_query_var('s')."</h2>"); ?>
									<ul class="results">
										<?php
					        while ( $the_query->have_posts() ) {
					           $the_query->the_post();
					                 ?>
					                    <li>
					                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					                    </li>
					                 <?php
					        } ?> </ul> <?php
					    }else{
					?>
					        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
					        <div class="alert alert-info">
					          <p>Desculpe, não encontramos resultados da sua busca. Tente diferente palavras-chaves.</p>
					        </div>
					<?php } ?>
        </div>
      </div>

    </div>
  </div>
<?php get_footer(); ?>
