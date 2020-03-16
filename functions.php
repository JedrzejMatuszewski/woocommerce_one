<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri(). '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('custom',  get_template_directory_uri(). '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');



// Add menus
add_theme_support('menus');


//Register some menus
     // register the nav
 function register_my_menu() {
    register_nav_menu('topnav',__( 'topnav' ));
   }
   add_action( 'init', 'register_my_menu' );

  // let's add our custom class to the actual link tag    
  
  function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'topnav') {
      $classes[] = 'nav-item nav-link js-scroll-trigger';
    }
    return $classes;
  }

  
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  
  function add_menuclass($ulclass) {
     return preg_replace('/<a /', '<a class="nav-link js-scroll-trigger"', $ulclass);
  }
  add_filter('wp_nav_menu','add_menuclass');