<?php 
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  //theme support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    //nav menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  //gets fired after the setup hook
  add_action('after_setup_theme', 'wpb_theme_setup');

?>
 
