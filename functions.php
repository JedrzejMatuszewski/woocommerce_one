<?php

function load_stylesheets()
{
  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
  wp_register_script('custom',  get_template_directory_uri() . '/app.js', 'jquery', 1, true);
  wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');


// Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Register some menus
// register the nav
function register_my_menu()
{
  register_nav_menu('topnav', __('topnav'));
}
add_action('init', 'register_my_menu');

// let's add our custom class to the actual link tag    

function atg_menu_classes($classes, $item, $args)
{
  if ($args->theme_location == 'topnav') {
    $classes[] = 'nav-item nav-link js-scroll-trigger';
  }
  return $classes;
}


add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass)
{
  return preg_replace('/<a /', '<a class="nav-link js-scroll-trigger"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');



//add images sizes
add_image_size('post_image', 1100, 550, true);



// Add a widget

register_sidebar(

  array(

    'name'  => 'Page Sidebar',
    'id' => 'page-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'

  )

);


register_sidebar(

  array(

    'name'  => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'

  )

);


// add woocommerce support
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 360,
    'single_image_width'    => 600,

    'product_grid'          => array(
      'default_rows'    => 3,
      'min_rows'        => 2,
      'max_rows'        => 8,
      'default_columns' => 4,
      'min_columns'     => 2,
      'max_columns'     => 5,
    ),
  ));
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


/**
 * Filter payment gatways
 * Removed bacs and przelewy24
 */


function my_custom_available_payment_gateways($gateways)
{

  $chosen_shipping_rates = WC()->session->get('chosen_shipping_methods');

  if (in_array('flat_rate:3', $chosen_shipping_rates)) :
    unset($gateways['bacs']);
    unset($gateways['przelewy24']);
  endif;

  if (in_array('local_pickup:2', $chosen_shipping_rates)) :
    unset($gateways['bacs']);
    unset($gateways['przelewy24']);
  endif;

  return $gateways;
}
add_filter('woocommerce_available_payment_gateways', 'my_custom_available_payment_gateways');
