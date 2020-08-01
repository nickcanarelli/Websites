<?php

////////////////////////////////////////////////////////////////////
// Frontend Admin bar toggle
////////////////////////////////////////////////////////////////////

    show_admin_bar( false );

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "yboot";
    $developer_uri = "http://www.ydop.com";
    $shortname = "yBoot";



////////////////////////////////////////////////////////////////////
// Enqueue styles
////////////////////////////////////////////////////////////////////
    function yboot_theme_stylesheets(){
        //wp_register_style('fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400i,600i,700|Roboto+Condensed:400,700', array(), null, 'all' );
        //wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all' );

        //wp_enqueue_style( 'fonts');
        //wp_enqueue_style( 'bootstrap');

        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), null, 'all' );
    }
    add_action('wp_enqueue_scripts', 'yboot_theme_stylesheets');

////////////////////////////////////////////////////////////////////
// Enqueue login styles
////////////////////////////////////////////////////////////////////
    
    function yboot_login_styles() {
        wp_enqueue_style('login-styles', get_template_directory_uri() . '/assets/css/login-styles.css');
    }
    add_action( 'login_enqueue_scripts', 'yboot_login_styles' );

////////////////////////////////////////////////////////////////////
// Enqueue javascripts
////////////////////////////////////////////////////////////////////

    // include custom jQuery
    // function shapeSpace_include_custom_jquery() {

    //     wp_deregister_script('jquery');
    //     wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, false);

    // }
    // add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

    function yboot_theme_js(){        

        // // //Slick Slider
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/plugins/slick/slick.css', false, '1.6.0', false);
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/plugins/slick/slick-theme.css', false, '1.6.0', false);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/plugins/slick/slick.min.js', array('jquery'), '1.6.0', true);

        // // //Fancybox
        wp_enqueue_style('fancybox-styles', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', false, '3.0', false);
        wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '3.0', true);

        // // //Fancybox
        wp_enqueue_script('blazy', get_template_directory_uri() . '/assets/js/blazy.min.js', array('jquery'), '3.0', true);

        // // //Hover Intent
        // wp_enqueue_script('hover-intent', '//cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js', array('jquery'), '1.8.1', true);

        // // //MMenu
        wp_enqueue_style('mmenu-css', get_template_directory_uri() . '/assets/css/jquery.mmenu.all.css', false, '1', false);
        wp_enqueue_script('mmenu-js', get_template_directory_uri() . '/assets/js/jquery.mmenu.all.js', array('jquery'), '1', true);

        if(is_page_template('page-templates/page-gallery.php') || is_page_template('page-templates/page-service-area.php')) {
            // //Mix It Up
            wp_enqueue_script('mix-it-up', get_template_directory_uri() . '/assets/js/mixitup.min.js', array('jquery'), '3.0', true);
        }

        // Main Scripts
        wp_enqueue_script('scripts','/wp-content/themes/yboot/assets/js/main.js' ,array('jquery'),null,true);
    }
    add_action('wp_enqueue_scripts', 'yboot_theme_js');

    //----------------------------------------------------------/
    //  call the enqueue hook
    //----------------------------------------------------------/


////////////////////////////////////////////////////////////////////
// Place Main Stylesheet at the bottom of the head tag
////////////////////////////////////////////////////////////////////
function remove_default_stylesheet() {
    wp_dequeue_style( 'stylesheet' );
    wp_deregister_style( 'stylesheet' );

    wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0' ); 
    wp_enqueue_style( 'stylesheet' );

}

add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 9999 );


////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
        'upper_menu' => 'Upper Menu',
        'mobile_menu' => 'Mobile Menu',
        'footer_col_1' => 'Footer Column 1',
        'footer_col_2' => 'Footer Column 2',
        'footer_col_3' => 'Footer Column 3'
    ));

////////////////////////////////////////////////////////////////////
// Register Sidebar(s)
////////////////////////////////////////////////////////////////////

    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
////////////////////////////////////////////////////////////////////
// Add custom image sizes
////////////////////////////////////////////////////////////////////
    
    //Set the image size by cropping the image and defining a crop position:
    add_image_size( 'hero-lg', 1920, 800, array( 'center', 'center' ) );
    add_image_size( 'hero-sm', 1920, 400, array( 'center', 'center' ) );
    add_image_size( 'card-thumb', 450, 300, array( 'center', 'center' ) );
    add_image_size( 'service-thumb', 400, 300, array( 'center', 'center' ) );
    add_image_size( 'medium-lg', 768, 9999 );
    add_image_size( 'medium-lg-square', 768, 768, array( 'center', 'center' ) );
    add_image_size( 'small-banner', 200, 100, array( 'center', 'center' ) );

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Add support shortcodes in text widgets
////////////////////////////////////////////////////////////////////

    add_filter('widget_text', 'do_shortcode');

////////////////////////////////////////////////////////////////////
// SEO / code clean-up / optimization
////////////////////////////////////////////////////////////////////

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action('wp_head', 'wp_generator');
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
    //remove_action( 'wp_head', 'feed_links_extra', 3 ); // Uncomment if no blog
    //remove_action( 'wp_head', 'feed_links', 2 ); // Uncomment if no blog
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );  // oEmbed and REST are all related to WordPress "embed" feature that is very rarely used
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

    //Removes version query strings from css/js files
    function remove_cssjs_ver( $src ) {
        if( strpos( $src, '?ver=' ) )
            $src = remove_query_arg( 'ver', $src );
        return $src;
    }
    add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
    add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

////////////////////////////////////////////////////////////////////
// Main nav clean-up
////////////////////////////////////////////////////////////////////

    function nav_class_filter( $classesArray ) { 
        foreach($classesArray as $index=>$class){
            
            //Add dropdown (for bootstrap) class if menu item has children
            if(strpos($class, 'menu-item-has-children') !== false ){
                $classesArray[$index] = 'dropdown';
            }

        }
        return $classesArray;
    }
    add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);

////////////////////////////////////////////////////////////////////
// Remove specific pages from search by page id
////////////////////////////////////////////////////////////////////
function wpre_search_filter( $query ) {
  if ( ! $query->is_admin && $query->is_search && $query->is_main_query() ) {
    $query->set( 'post__not_in', array( 65 ) );
  }
}
add_action( 'pre_get_posts', 'wpre_search_filter' );

////////////////////////////////////////////////////////////////////
// Add Bootstrap styles to Gravity Forms
////////////////////////////////////////////////////////////////////

    function bootstrap_styles_for_gravityforms_fields($content, $field, $value, $lead_id, $form_id){
        
        // Currently only applies to most common field types, but could be expanded.
        
        if($field["type"] != 'hidden' && $field["type"] != 'list' && $field["type"] != 'multiselect' && $field["type"] != 'checkbox' && $field["type"] != 'fileupload' && $field["type"] != 'date' && $field["type"] != 'html' && $field["type"] != 'address') {
            $content = str_replace('class=\'medium', 'class=\'form-control medium', $content);
        }
        
        if($field["type"] == 'name' || $field["type"] == 'address' || $field["type"] == 'text' || $field["type"] == 'email' || $field["type"] == 'phone') {
            $content = str_replace('<input ', '<input class=\'form-control\' ', $content);
        }
        
        if($field["type"] == 'textarea') {
            $content = str_replace('class=\'textarea', 'class=\'form-control textarea', $content);
        }
        
        if($field["type"] == 'checkbox') {
            $content = str_replace('li class=\'', 'li class=\'checkbox ', $content);
            $content = str_replace('<input ', '<input style=\'margin-left:1px;\' ', $content);
        }
        
        if($field["type"] == 'radio') {
            $content = str_replace('li class=\'', 'li class=\'radio ', $content);
            $content = str_replace('<input ', '<input style=\'margin-left:1px;\' ', $content);
        }
        
        return $content;
        
    }
    add_filter("gform_field_content", "bootstrap_styles_for_gravityforms_fields", 10, 5);
    
    function form_submit_button($button, $form){
        return "<button type='submit' class='button --primary' id='gform_submit_button_{$form["id"]}'><span>" . $form["button"]["text"] . "</span></button>";
    }
    add_filter("gform_submit_button", "form_submit_button", 10, 2);

    function form_submit_button_3($button, $form){
        return "<button type='submit' class='button --primary' id='gform_submit_button_{$form["id"]}'><span class='icon-arrow-thin-right'></span></button>";
    }
    add_filter("gform_submit_button_3", "form_submit_button_3", 10, 2);

    add_filter( 'gform_field_value_customer_segment', 'customer_segment_populate_function' );
    function customer_segment_populate_function() {
        //pre-populate values based on the page
        if(is_page('homeowners')) {
            return 'homeowner'; 
        } elseif(is_page('construction-professionals')) {
            return 'builder';
        }
    }

    ////////////////////////////////////////////////////////////////////
    // Add ACF Theme Options Page
    ////////////////////////////////////////////////////////////////////
    if( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        acf_add_options_page(array(
            'page_title'    => 'Builder Partners',
            'menu_title'    => 'Builder Partners',
            'menu_slug'     => 'builder-partners',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        acf_add_options_page(array(
            'page_title'    => 'Gallery',
            'menu_title'    => 'Gallery',
            'menu_slug'     => 'general-gallery',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        
    }



    ////////////////////////////////////////////////////////////////////
    // Custom Taxonomies
    ////////////////////////////////////////////////////////////////////

    $prefix_tax = "tax_";

    $singular = 'Project Location';
    $plural = 'Project Locations';
    $cpt_to_apply = 'project';

    $args = array(
        'label'                 => $singular,
        'labels'                => array(
            'name'                          => $singular,
            'singular_name'                 => $singular,
            'menu_name'                     => $singular,
            'all_items'                     => 'All '.$singular,
            'edit_item'                     => 'Edit '.$singular,
            'view_item'                     => 'View '.$singular,
            'update_item'                   => 'Update '.$singular.' Name',
            'add_new_item'                  => 'Add New '.$singular,
            'new_item_name'                 => 'New '.$singular.' Name',
            'parent_item'                   => 'Parent '.$singular,
            'parent_item_colon'             => 'Parent '.$singular.':',
            'search_items'                  => 'Search '.$singular,
            'popular_items'                 => 'Popular '.$singular,
            'separate_items_with_commas'    => 'Separate '.$singular.' with commas',
            'add_or_remove_items'           => 'Add or remove '.$singular,
            'choose_from_most_used'         => 'Choose from the most used '.$singular,
            'not_found'                     => 'No '.$singular.' found',
        ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_admin_column'     => true,
        'description'           => '',
        'hierarchical'          => true,
        'query_var'             => true,
        'rewrite'               => array(
            'slug'          => sanitize_title($singular),
            'with_front'    => true
        ),
    );
    register_taxonomy( $prefix_tax.sanitize_title($plural), array($cpt_to_apply), $args );


////////////////////////////////////////////////////////////////////
//Sharpspring to Gravity Forms Connections
////////////////////////////////////////////////////////////////////

//Main Contact Form//
add_action( 'gform_after_submission_7', 'post_to_third_party_7', 10, 2 );

function post_to_third_party_7( $entry, $form ) {
  $baseURI = 'https://app-3QNHP9VX4U.marketingautomation.services/webforms/receivePostback/MzawMDE3NjGxBAA/';
  $endpoint = '84581b20-64b6-4501-9935-f1fd4105e9d1';
  $post_url = $baseURI . $endpoint;

  $field_id = 5; $field = GFFormsModel::get_field( $form, $field_id );
  $field_temp_5 = is_object( $field ) ? $field->get_value_export( $entry ) : '';
  $field_value_5 = str_replace(', ', ',', $field_temp_5);

  $field_id = 6; $field = GFFormsModel::get_field( $form, $field_id );
  $field_temp_6 = is_object( $field ) ? $field->get_value_export( $entry ) : '';
  $field_value_6 = str_replace(', ', ',', $field_temp_6);


  $body = array(
    'Name' => rgar( $entry, '1' ),
    'Email' => rgar( $entry, '2' ),
    'Phone' => rgar( $entry, '3' ),
    'Zip Code' => rgar( $entry, '9' ),
    'State' => rgar( $entry, '10' ),
    'PA County' => rgar( $entry, '11' ),
    'NY County' => rgar( $entry, '12' ),
    'MD County' => rgar( $entry, '13' ),
    'CT County' => rgar( $entry, '14' ),
    'MA County' => rgar( $entry, '15' ),
    'Customer Support Message' => rgar( $entry, '16' ),
    'Request Quote Message' => rgar( $entry, '17' ),
    'Customer Segment' => $field_value_5,
    'How May We Help You' => $field_value_6,
    'trackingid__sb' => $_COOKIE['__ss_tk']
  );

  
  $request = new WP_Http();

  $response = $request->post( $post_url, array( 'body' => $body ) );
}

//Ask a Question Form//
add_action( 'gform_after_submission_8', 'post_to_third_party_8', 10, 2 );

function post_to_third_party_8( $entry, $form ) {
  $baseURI = 'https://app-3QNHP9VX4U.marketingautomation.services/webforms/receivePostback/MzawMDE3NjGxBAA/';
  $endpoint = 'd98507cb-d0a1-4d8e-a311-9fdddb3f30aa';
  $post_url = $baseURI . $endpoint;

  $body = array(
    'Name' => rgar( $entry, '1' ),
    'Email' => rgar( $entry, '2' ),
    'Phone' => rgar( $entry, '3' ),
    'State' => rgar( $entry, '10' ),
    'PA County' => rgar( $entry, '11' ),
    'NY County' => rgar( $entry, '12' ),
    'MD County' => rgar( $entry, '13' ),
    'CT County' => rgar( $entry, '14' ),
    'MA County' => rgar( $entry, '15' ),
    'Customer Segment' => rgar( $entry, '5' ),
    //'Customer Segment' => $field_value_5,
    //'How may we help you' => $field_value_6,
    'Message' => rgar( $entry, '16' ),
    'trackingid__sb' => $_COOKIE['__ss_tk']
  );
  $request = new WP_Http();

  $response = $request->post( $post_url, array( 'body' => $body ) );
}

//Enews Subscribe Form//
add_action( 'gform_after_submission_6', 'post_to_third_party_6', 10, 2 );

function post_to_third_party_6( $entry, $form ) {
  $baseURI = 'https://app-3QNHP9VX4U.marketingautomation.services/webforms/receivePostback/MzawMDE3NjGxBAA/';
  $endpoint = '5c42a669-3f45-4cff-b6c1-cd1aa1fcf4ca';
  $post_url = $baseURI . $endpoint;

  $body = array(
    'Email' => rgar( $entry, '1' ),
    'Customer Segment' => rgar( $entry, '2' ),
    'trackingid__sb' => $_COOKIE['__ss_tk']
  );
  $request = new WP_Http();

  $response = $request->post( $post_url, array( 'body' => $body ) );
}


add_filter( 'gform_pre_render_9', 'add_readonly_script' );
function add_readonly_script( $form ) {
    ?>
 
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("li.gf_readonly input").attr("readonly","readonly");
        });
    </script>
 
    <?php
    return $form;
}

?>