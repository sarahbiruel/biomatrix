<?php

//Template Name: Produtos

get_template_part('includes/header','interna');

?>

<slide>
  <?php putRevSlider('produtos'); ?>
</slide>

<content id="main">
  <div class="container">
    <!--<div id="products">
      <div class="row">
        <script type="text/javascript">
        $( document ).ready(function() {
          // Calls the selectBoxIt method on your HTML select box
          $(".filter select").selectBoxIt({

            // Uses the jQuery 'fadeIn' effect when opening the drop down
            showEffect: "fadeIn",

            // Hides the currently selected option from appearing when the drop down is opened
            hideCurrent: true,

            // Sets the jQuery 'fadeIn' effect speed to 400 milleseconds
            showEffectSpeed: 400,

            // Uses the jQuery 'fadeOut' effect when closing the drop down
            hideEffect: "fadeOut",

            // Sets the jQuery 'fadeOut' effect speed to 400 milleseconds
            hideEffectSpeed: 400
          });
        });
        </script>
        <div class="col-xs-12 col-sm-3 col-md-3 filter first">
          <div class="row">
            <div class="col-md-4 text-center">
              <label for="cultura"><p>Cultura</p></label>
            </div>
            <div class="col-md-8">
              <select>
                <option>Todos</option>
                <option>Milho</option>
                <option>Sorgo</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 filter">
          <div class="row">
            <div class="col-md-4 text-center">
              <label for="safra"><p>Safra</p></label>
            </div>
            <div class="col-md-8">
              <select>
                <option>Todas</option>
                <option>Verão</option>
                <option>Safrinha</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 filter">
          <div class="row">
            <div class="col-md-5 text-center no-padding">
              <label for="safra"><p>Finalidade de Uso</p></label>
            </div>
            <div class="col-md-7">
              <select>
                <option>Todas</option>
                <option>Grãos</option>
                <option>Silagem</option>
              </select>
            </div>
          </div>
        </div>
        <div class="hidden-xs col-sm-2 col-md-2 filter last">
          <div class="row">
            <div class="col-md-4 text-center no-padding">
              <label for="safra"><p>Região</p></label>
            </div>
            <div class="col-md-8">
              <select>
                <option>Todos</option>
                <option>Sul</option>
                <option>Sudeste</option>
                <option>Centro-Oeste</option>
                <option>Nordeste</option>
                <option>Norte</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="main internal effect8">
      <div class="row">
        <?php
        //$produtoDestaque = new WP_Query('post_type=produtos&cat=6');
        //if($produtoDestaque->have_posts()) : while($produtoDestaque->have_posts()) :$produtoDestaque->the_post();
        ?>
        <div class="col-sm-12">
          <h2 class="w-border">Linha de produtos Safra 16/17</h2>
          <div class="desc">
            <h2><strong></strong></h2>
            <p>Apresentamos nossa linha de produtos para a safra 2016/2017, com sementes híbridas de milho e sorgo desenvolvidas especialmente para a produção de grãos e silagem de alta qualidade, com excelentes produtividades.</p>
 
<p>A Sementes Biomatrix, empresa do grupo Agroceres, oferece produtos de excelente qualidade, resultado de anos de pesquisa e desenvolvimento nas áreas de agricultura, pecuária e nutrição animal, com o que há de melhor em genética e tecnologia de sementes para aumentar a produtividade no campo, com máxima adaptação e retorno ao agricultor e pecuarista.</p>
 
<p>Com atendimento exclusivo e diferenciado, nossa equipe de especialistas está sempre à disposição para recomendar o melhor produto e atender as diversas necessidades, seja na lavoura quanto na produção de mais leite e carne.Para nós da Sementes Biomatrix, o seu resultado e satisfação fazem parte da nossa missão.</p>
<br/>
<div class="container2">
    <div class="call-to-action">
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 call-text">
          <p>Faça o download do catálogo de produtos Safra 16/17 agora mesmo!</p>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 call-btn">
          <a href="http://www.mamweb.com.br/clientes/biomatrix/wp-content/uploads/2016/12/safra_16e17.pdf" target="_blank">
            <div class="row">
              <div class="col-md-3">
                <i class="glyphicon glyphicon-menu-right"></i>
              </div>
              <div class="col-md-9"><p>clique aqui</p></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
<br/>
<p><small><strong>Sobre o catálogo de produtos</strong><br/>
Todos os produtos e informações aqui apresentadas são provenientes de nosso extenso processo de pesquisa, conduzido durante a safra 15/16 por nossa equipe de agrônomos e consultores em nutrição animal, levando em consideração condições de clima regionais e protocolo de manejo específico para cada produto. Adversidades climáticas e a condução de plantio fora da recomendação feita por um de nossos especialistas, poderá afetar o desempenho do produto e sua entrega final. Antes de plantar consulte sempre um membro de nossa equipe.</small></p>
          </div>
        </div>
        <!--<div class="col-sm-12 col-md-8">
          <div class="thumbnail"><iframe src="https://www.youtube.com/embed/y-EtoPynn48" frameborder="0" allowfullscreen></iframe></div>
        </div>-->
      <?php //endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <div class="divisor"></div>
    <?php
    /*$categorias = array(
      7   => 'Milho',
      8   => 'Sorgo',
    );*/
    //foreach ($categorias as $i => $cat) {
    ?>
    <!--<div class="row">
      <h2 class="w-border"><?php echo $cat; ?></h2>
      <?php
      //$produtos = new WP_Query("post_type=produtos&cat=$i&posts_per_page=4");
      //if($produtos->have_posts()) : while($produtos->have_posts()) :$produtos->the_post();
      ?>
      <div class="col-sm-4 col-md-3">
        <div class="box-product">
          <div class="img-product">
            <?php /*if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
              . '/img/thumbnail-default.jpg" />';
            }*/ ?>
          </div>
          <div class="title-product"><h5>Confira os 3 principais destaques do produto</h5></div>
          <div class="table-product">
            <ul>
              <li class="text-center attr">
                <strong>Ciclo:</strong>
                <div class="desc-attr">
                  <div class="item-attr">1</div>
                  <div class="item-attr">2</div>
                  <div class="item-attr">3</div>
                  <div class="item-attr">4</div>
                  <div class="item-attr active">5</div>
                  <div class="item-attr">6</div>
                  <div class="item-attr">7</div>
                  <div class="item-attr">8</div>
                  <div class="item-attr">9</div>
                </div>
              </li>
              <li class="text-center attr">
                <strong>Tecnologia:</strong>
                <div class="desc-attr">
                  <div class="item-attr">1</div>
                  <div class="item-attr">2</div>
                  <div class="item-attr">3</div>
                  <div class="item-attr">4</div>
                  <div class="item-attr active">5</div>
                  <div class="item-attr">6</div>
                  <div class="item-attr">7</div>
                  <div class="item-attr">8</div>
                  <div class="item-attr">9</div>
                </div>
              </li>
              <li class="text-center attr">
                <strong>Resposta ao investimento:</strong>
                <div class="desc-attr">
                  <div class="item-attr">1</div>
                  <div class="item-attr">2</div>
                  <div class="item-attr">3</div>
                  <div class="item-attr">4</div>
                  <div class="item-attr active">5</div>
                  <div class="item-attr">6</div>
                  <div class="item-attr">7</div>
                  <div class="item-attr">8</div>
                  <div class="item-attr">9</div>
                </div>
              </li>
            </ul>
          </div>
          <a class="btnGreen" href="#">SAIBA MAIS<i class="icon"></i></a>
        </div>
      </div>
      <?php //endwhile; else : ?>
    <p>Não foram encontrados produtos nesta categoria.</p>
    <?php// endif; wp_reset_postdata();?>
    <?php //echo do_shortcode('[ajax_load_more post_type="produtos" category="'.$i.'" posts_per_page="4" images_loaded="true" button_label="Carregar mais" container_type="div"]');?>
   </div>-->
   <?php   //} ?>
  </div>

</div>
<?php
get_footer(); ?>
