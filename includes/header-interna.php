<!doctype html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Sementes Biomatrix - Tecnologia e Confiança</title>
  <meta name="description" content="Here goes your SEO description">
  <meta name="author" content="Mamweb">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/component.css' ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/jquery.selectBoxIt.css' ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/biomatrix.css' ?>">

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div style="max-height: 645px;">
    <header>
      <div class="container">
        <div class="row">

          <!-- logo -->
          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-3">
            <div class="logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>">
              </a>
            </div>
          </div>

          <!-- menu normal-->
          <div class="hidden-xs hidden-sm hidden-md col-lg-7" style="position: static;">
            <?php
            global $wp;
            $current_url = home_url(add_query_arg(array(),$wp->request));

            clean_custom_menu('primary',$current_url);
            ?>
          </div>

          <!-- Pesquisa e menu responsivo -->
          <div class="col-xs-7 col-sm-7 col-md-offset-5 col-md-3 col-lg-offset-0 col-lg-2">
            <div class="bar-top">
              <!-- menu -->
              <div class="item-bar hidden-lg">
                <div class="responsive">
                  <a class="cursor" data-toggle="collapse" data-target="#menu2">
                    <div class="menu2"><img src="<?php echo get_template_directory_uri() . '/img/responsive.png'?>"></div>
                  </a>
                </div>
              </div>
              <!-- pesquisa -->
              <div class="item-bar">
                <div class="cursor">
                  <div id="morphsearch" class="morphsearch">
            				<form class="morphsearch-form" action="<?php echo home_url(); ?>">
            					<input class="morphsearch-input glyphicon glyphicon-search" name="s" type="search" placeholder="Pesquisar por..."/>
                      <i class="glyphicon glyphicon-search"></i>
                      <button class="morphsearch-submit" type="submit"><i class="glyphicon glyphicon-menu-right"></i></button>
            				</form>
            				<span class="morphsearch-close"></span>
            			</div>
                </div>
              </div>
              <!-- idiomas -->
              <div class="item-bar">
                <div class="idiomas">
                  <script type="text/javascript">
                  $( document ).ready(function() {
                  // Calls the selectBoxIt method on your HTML select box
                  $(".idiomas select").selectBoxIt({

                    // Uses the jQuery 'fadeIn' effect when opening the drop down
                    showEffect: "fadeIn",

                    // Hides the currently selected option from appearing when the drop down is opened
                    hideCurrent: true,

                    // Sets the jQuery 'fadeIn' effect speed to 400 milleseconds
                    showEffectSpeed: 400,

                    // Uses the jQuery 'fadeOut' effect when closing the drop down
                    hideEffect: false,

                    // Sets the jQuery 'fadeOut' effect speed to 400 milleseconds
                    //hideEffectSpeed: 400
                    });
                  });
                  </script>
                  <select>
                    <option><a href="#">POR</a></option>
                    <option><a href="#">ENG</a></option>
                    <option><a href="#">ESP</a></option>
                  </select>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </header>

    <div id="menu2" class="hidden-lg collapse" style="width:100%; position: absolute; z-index: 6;">
      <!-- menu responsivo -->
      <?php
      global $wp;
      $current_url = home_url(add_query_arg(array(),$wp->request));

      clean_custom_menu('primary',$current_url);
      ?>
    </div>
