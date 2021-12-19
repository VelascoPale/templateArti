
<?php  

/******* Cargar menú *****************/

add_theme_support('menus');

function register_mis_menus() {
  register_nav_menus(
    array(
      'principal-menu' => __( 'Menu Principal' )
     
    )
  );
}
add_action( 'init', 'register_mis_menus' );

/************** Cargar hojas de estilos ******************/

function load_stylesheet(){

  wp_register_style('header', get_template_directory_uri() . '/style/header.css', array(), 1, 'all');
  wp_enqueue_style('header');

  wp_register_style('contenido', get_template_directory_uri() . '/style/contenido.css', array(), 1, 'all');
  wp_enqueue_style('contenido');

  wp_register_style('fonts', get_template_directory_uri() . '/style/fonts.css', array(), 1, 'all');
  wp_enqueue_style('fonts');

  wp_register_style('footer', get_template_directory_uri() . '/style/footer.css', array(), 1, 'all');
  wp_enqueue_style('footer');

  wp_register_style('galeria', get_template_directory_uri() . '/style/galeria.css', array(), 1, 'all');
  wp_enqueue_style('galeria');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');

/******** Cargar scripts **********/

function addjs(){

  wp_register_script('fix-aside', get_template_directory_uri()  .'/script/fixAside.js', array(), 1, 1, 1);
  wp_enqueue_script('fix-aside');

  wp_register_script('fix-asideN', get_template_directory_uri()  .'/script/fixAsideNormal.js', array(), 1, 1, 1);
  wp_enqueue_script('fix-asideN');

  wp_register_script('fix-nav', get_template_directory_uri()  .'/script/fixNav.js', array(), 1, 1, 1);
  wp_enqueue_script('fix-nav');

  wp_register_script('jquery', get_template_directory_uri()  .'/script/jquery-3.1.0.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery');

  
  wp_register_script('jqueryFlex', get_template_directory_uri()  .'/script/jquery.flexslider.js', array(), 1, 1, 1);
  wp_enqueue_script('jqueryFlex');

  wp_register_script('main', get_template_directory_uri()  .'/script/main.js', array(), 1, 1, 1);
  wp_enqueue_script('main');

  wp_register_script('carga', get_template_directory_uri()  .'/script/scriptCarga.js', array(), 1, 1, 1);
  wp_enqueue_script('carga');

  wp_register_script('custom', get_template_directory_uri()  .'/script/custom.js', array(), 1, 1, 1);
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'addjs');

?>


	