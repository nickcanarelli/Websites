<?php

// Load Stylesheet
function load_stylesheets() {
  wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 1, 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load Scripts
function load_scripts() {
  wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), 1, 1, 1);

  wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array(), 1, 1, 1);
  wp_enqueue_script('bootstrap');

  wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), 1, 1, 1);
  wp_enqueue_script('popper');

  wp_register_script('ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js', array(), 1, 1, 1);
  wp_enqueue_script('ionicons');

  wp_register_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), 1, 1, 1);
  wp_enqueue_script('masonry');

  wp_register_script('masonry-activate', get_template_directory_uri() . '/assets/js/masonry-activate.js', array(), 1, 1, 1);
  wp_enqueue_script('masonry-activate');

  wp_register_script('sidebar-nav', get_template_directory_uri() . '/assets/js/sidebar-nav.js', array(), 1, 1, 1);
  wp_enqueue_script('sidebar-nav');

  wp_register_script('custom-select', get_template_directory_uri() . '/assets/js/custom-select.js', array(), 1, 1, 1);
  wp_enqueue_script('custom-select');

  wp_register_script('smooth-anchor', get_template_directory_uri() . '/assets/js/smooth-anchor.js', array(), 1, 1, 1);
  wp_enqueue_script('smooth-anchor');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Menu Support
add_theme_support('menus');

// Register menus
register_nav_menus(
  array (
    'header-nav' => __('Header Menu', 'theme'),
    'sidebar-nav' => __('Sidebar Menu', 'theme'),
    'footer-nav' => __('Footer Menu', 'theme'),
  )
);

// Add .nav-item to header menu LI
function add_header_nav_li_class( $classes, $item, $args ) {
  if ( 'header-nav' === $args->theme_location ) {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'add_header_nav_li_class', 10, 3 );

// Add .nav-link to header menu A
function add_header_nav_a_class( $atts, $item, $args ) {
    if( $args->theme_location == 'header-nav' ) {
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_header_nav_a_class', 10, 3 );

// Sitewide Custom Options (ACF)
if( function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
