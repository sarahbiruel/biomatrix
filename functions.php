<?php

add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// CUSTOM POST PRODUTOS

function init_custom_posts() {

    //thumbnails
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'padrao', 415, 276, true );
    add_image_size( 'interna-page', 640, 360 );
    add_image_size( 'interna-single', 1064, 406, true );

    $produtos = array(
        'name'               => 'Produtos',
        'singular_name'      => 'Produtos',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo',
        'edit_item'          => 'Editar',
        'new_item'           => 'Novo',
        'all_items'          => 'Todos',
        'view_item'          => 'Ver',
        'search_items'       => 'Pesquisar',
        'not_found'          => 'Não encontrado',
        'not_found_in_trash' => 'Não encontrado',
        'parent_item_colon'  => '',
        'menu_name'          => 'Produtos'
    );
    $exibe_produtos = array(
        'labels'             => $produtos,
        'public'             => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-cart',
        'taxonomies'         => array( 'category' ),
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_position'      => 7
    );

      $linhas = array(
          'name'               => 'Linhas de Produtos',
          'singular_name'      => 'Linhas',
          'add_new'            => 'Adicionar novo',
          'add_new_item'       => 'Adicionar novo',
          'edit_item'          => 'Editar',
          'new_item'           => 'Novo',
          'all_items'          => 'Todos',
          'view_item'          => 'Ver',
          'search_items'       => 'Pesquisar',
          'not_found'          => 'Não encontrado',
          'not_found_in_trash' => 'Não encontrado',
          'parent_item_colon'  => '',
          'menu_name'          => 'Linhas'
      );
      $exibe_linhas = array(
          'labels'             => $linhas,
          'public'             => true,
          'query_var'          => true,
          'capability_type'    => 'post',
          'menu_icon'          => 'dashicons-admin-users',
          'supports'           => array('title', 'editor', 'thumbnail'),
          'menu_position'      => 8
      );

      $grupo = array(
          'name'               => 'Grupo Agroceres',
          'singular_name'      => 'Grupo',
          'add_new'            => 'Adicionar novo',
          'add_new_item'       => 'Adicionar novo',
          'edit_item'          => 'Editar',
          'new_item'           => 'Novo',
          'all_items'          => 'Todos',
          'view_item'          => 'Ver',
          'search_items'       => 'Pesquisar',
          'not_found'          => 'Não encontrado',
          'not_found_in_trash' => 'Não encontrado',
          'parent_item_colon'  => '',
          'menu_name'          => 'Grupo Agroceres'
      );
      $exibe_grupo = array(
          'labels'             => $grupo,
          'public'             => true,
          'query_var'          => true,
          'capability_type'    => 'post',
          'menu_icon'          => 'dashicons-screenoptions',
          'supports'           => array('title', 'editor', 'thumbnail'),
          'menu_position'      => 9
      );

      $geral = array(
          'name'               => 'Informações',
          'singular_name'      => 'Informações',
          'add_new'            => 'Adicionar novo',
          'add_new_item'       => 'Adicionar novo',
          'edit_item'          => 'Editar',
          'new_item'           => 'Novo',
          'all_items'          => 'Todos',
          'view_item'          => 'Ver',
          'search_items'       => 'Pesquisar',
          'not_found'          => 'Não encontrado',
          'not_found_in_trash' => 'Não encontrado',
          'parent_item_colon'  => '',
          'menu_name'          => 'Informações'
      );
      $exibe_geral = array(
          'labels'             => $geral,
          'public'             => true,
          'query_var'          => true,
          'capability_type'    => 'post',
          'menu_icon'          => 'dashicons-admin-generic',
          'supports'           => array('title', 'editor', 'thumbnail'),
          'menu_position'      => 6
      );

      $geral = array(
          'name'               => 'Informações',
          'singular_name'      => 'Informações',
          'add_new'            => 'Adicionar novo',
          'add_new_item'       => 'Adicionar novo',
          'edit_item'          => 'Editar',
          'new_item'           => 'Novo',
          'all_items'          => 'Todos',
          'view_item'          => 'Ver',
          'search_items'       => 'Pesquisar',
          'not_found'          => 'Não encontrado',
          'not_found_in_trash' => 'Não encontrado',
          'parent_item_colon'  => '',
          'menu_name'          => 'Informações'
      );
      $exibe_geral = array(
          'labels'             => $geral,
          'public'             => true,
          'query_var'          => true,
          'capability_type'    => 'post',
          'menu_icon'          => 'dashicons-admin-generic',
          'supports'           => array('title', 'editor', 'thumbnail'),
          'menu_position'      => 6
      );

      register_post_type('linhas', $exibe_linhas);
      register_post_type('produtos', $exibe_produtos);
      register_post_type('grupo', $exibe_grupo);
      register_post_type('geral', $exibe_geral);


}

    add_action( 'init', 'init_custom_posts' );


function init_widget() {

  //WIDGETS

  register_sidebar(array(
      'name'          => 'Rodape1',
      'id'            => 'Rodape1',
      'before_widget' => '',
      'after_widget'   => '',
      'before_title'  => '<h3 class="title-white">',
      'after_title'   => '</h3>',
  ));

  register_sidebar(array(
      'name'          => 'Rodape2',
      'id'            => 'Rodape2',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="title-white">',
      'after_title'   => '</h3>',
  ));

  register_sidebar(array(
      'name'          => 'Rodape3',
      'id'            => 'Rodape3',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="title-white">',
      'after_title'   => '</h3>',
  ));
}

  add_action( 'init', 'init_widget' );

  //menu
  function clean_custom_menu( $theme_location, $current_url, $isMobile = false ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list  = '<nav class="menu">' ."\n";
        $menu_list .= '<ul class="main-nav">' ."\n";

        $count = 0;
        $submenu = false;

        foreach( $menu_items as $menu_item ) {

            $link = $menu_item->url;
            $title = $menu_item->title;

            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                $class = ($current_url.'/'== $link)?'active':'';
                $menu_list .= '<li class="item">' ."\n";
                $menu_link = 'href="'.$link.'"';
                $collapseMenu = '';
                if ((isset($menu_items[ $count + 1 ]))&&($menu_items[ $count + 1 ]->menu_item_parent==$menu_item->ID)) {
                  $menu_link="";
                  if($isMobile) {
                    $collapseMenu = 'role="button" data-toggle="collapse" href="#sub_'.$menu_item->ID.'"';
                  }
                  else {
                    $menu_link = 'href="'.$link.'"';
                    $collapseMenu = '';
                  }
                }
                $menu_list .= '<a '.$menu_link.' class="title '.$class.'" '.$collapseMenu.'><span>'.$title.'</span></a>' ."\n";
            }

            if ( $parent_id == $menu_item->menu_item_parent ) {
                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<ul id="sub_'.$menu_item->menu_item_parent.'" class="sub-menu text-center clearfix collapse">' ."\n";
                }
                $menu_list .= '<li class="item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title"><span>'.$title.'</span></a>' ."\n";
                $menu_list .= '</li>' ."\n";

                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</ul>' ."\n";
                    $submenu = false;
                }

            }

            if ((isset($menu_items[ $count + 1 ]))&&($menu_items[ $count + 1 ]->menu_item_parent != $parent_id )) {
                $menu_list .= '</li>' ."\n";
                $submenu = false;
            }

            $count++;
        }

        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</nav>' ."\n";

    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
    echo $menu_list;
}

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return ' [...]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

add_action('wp_enqueue_scripts','lScript');

function lScript() {
  //SCRIPTS
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', array(), "3.1.0", true);
  wp_enqueue_script('migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array('jquery'),"1.2.1", true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), true);
  wp_enqueue_script('ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), true);
  wp_enqueue_script('boxit', get_template_directory_uri() . '/js/jquery.selectBoxIt.min.js', array('jquery'), true);
}
