<?php 

// Register Custom Navigation Walker for bootstrap menu dropdowns
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  //theme support
  function wpb_theme_setup(){
    //add featured image functionality
    add_theme_support('post-thumbnails');

    //nav menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    //post formats made available in 'add post' backend
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  //gets fired after the setup hook
  add_action('after_setup_theme', 'wpb_theme_setup');

  //widget locations
  function wpb_init_widgets($id){

    register_sidebar(array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
  }

  add_action('widgets_init', 'wpb_init_widgets');

  require get_template_directory().'/includes/customizer.php';

?>
 
