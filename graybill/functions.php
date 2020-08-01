<?php
/**
 * yscores functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yscores
 */

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "yscores";
    $developer_uri = "http://www.ydop.com";
    $shortname = "yscores";

////////////////////////////////////////////////////////////////////
// Include Files
////////////////////////////////////////////////////////////////////
include_once(get_stylesheet_directory().'/includes/modules/cpts.php');

////////////////////////////////////////////////////////////////////
// Enqueue styles
////////////////////////////////////////////////////////////////////
function yscores_theme_stylesheets(){

    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array(), null, 'all' );
    wp_enqueue_style( 'google-fonts');

    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), null, 'all' );
}
add_action('wp_enqueue_scripts', 'yscores_theme_stylesheets');

////////////////////////////////////////////////////////////////////
// Change favicon location and add touch icons
////////////////////////////////////////////////////////////////////

function favicon_filter( $favicon ) {
    
    echo '<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/yscores/assets/img/favicon/apple-touch-icon.png">'."\n";
    echo '<link rel="icon" type="image/png" href="/wp-content/themes/yscores/assets/img/favicon/favicon-32x32.png" sizes="32x32">'."\n";
    echo '<link rel="icon" type="image/png" href="/wp-content/themes/yscores/assets/img/favicon/favicon-16x16.png" sizes="16x16">'."\n";
    echo '<link rel="manifest" href="/wp-content/themes/yscores/assets/img/favicon/manifest.json">'."\n";
    echo '<link rel="mask-icon" href="/wp-content/themes/yscores/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">'."\n";
    echo '<meta name="theme-color" content="#ffffff">'."\n";
}
add_filter( 'wp_enqueue_scripts', 'favicon_filter' );

////////////////////////////////////////////////////////////////////
// Enqueue javascripts
////////////////////////////////////////////////////////////////////
function yscores_theme_js(){        

    // Vendor Scripts
    wp_enqueue_script('vendor-scripts','/wp-content/themes/yscores/assets/dist/vendor.min.js' ,array('jquery'),null,true);

    // Scrollmagic
    wp_enqueue_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array('jquery'), '2.0.5', true);
    wp_enqueue_script('scrollmagic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array('jquery'), '2.0.5', true);

    // mmenu
    wp_enqueue_script('mmenu', '//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.3/jquery.mmenu.all.js', array('jquery'), '2.0.5', true);

    // Main Scripts
	wp_enqueue_script('scripts','/wp-content/themes/yscores/assets/dist/theme.min.js' ,array('jquery'),null,true);

	// Slick
	wp_enqueue_script('swiper','https://unpkg.com/swiper/js/swiper.min.js' ,array(),null,true);
}
add_action('wp_enqueue_scripts', 'yscores_theme_js');

////////////////////////////////////////////////////////////////////
// Place Main Stylesheet at the bottom of the head tag
////////////////////////////////////////////////////////////////////
function remove_default_stylesheet() {
    wp_dequeue_style( 'stylesheet' );
    wp_deregister_style( 'stylesheet' );

    wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0' ); 
    wp_enqueue_style( 'stylesheet' );

	wp_enqueue_style('mmenu-styles', '//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.3/jquery.mmenu.all.css', false, '3.0', false);
	wp_enqueue_style('mmenu-styles');
    
    wp_register_style( 'vendor-stylesheet', get_stylesheet_directory_uri() . '/assets/dist/vendor.min.css', false, '1.0.0' ); 
    wp_enqueue_style( 'vendor-stylesheet' );

    wp_register_style( 'swiper-stylesheet', 'https://unpkg.com/swiper/css/swiper.min.css', false, '1.0.0' ); 
	wp_enqueue_style( 'swiper-stylesheet' );
	
	wp_register_style( 'theme-stylesheet', get_stylesheet_directory_uri() . '/assets/styles/css/graybill.css', false, '1.0.0' ); 
	wp_enqueue_style( 'theme-stylesheet' );
	
	wp_register_style( 'poynter-font', 'https://use.typekit.net/ztw4qvi.css', false, '1.0.0' );
	wp_enqueue_style( 'poynter-font' );

	wp_register_style( 'garamond-font', 'https://use.typekit.net/ztw4qvi.css', false, '1.0.0' );
	wp_enqueue_style( 'garamond-font' );
}

add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 9999 );


////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

register_nav_menus(array(
	'main_menu' => 'Main Menu',
	'header_menu' => 'Header Bar Menu'
));

////////////////////////////////////////////////////////////////////
// Register Sidebar(s)
////////////////////////////////////////////////////////////////////

function yscores_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yscores' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yscores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yscores_widgets_init' );

////////////////////////////////////////////////////////////////////
// Add ACF Theme Options Page
////////////////////////////////////////////////////////////////////
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Graybill Machines Settings',
        'menu_title'    => 'Graybill Settings',
        'menu_slug'     => 'graybill-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Homepage Settings',
		'menu_title'	=> 'Homepage Settings',
		'parent_slug'	=> 'graybill-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Project Portfolio Settings',
		'menu_title'	=> 'Project Settings',
		'parent_slug'	=> 'graybill-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Standard Design Settings',
		'menu_title'	=> 'Standard Design Settings',
		'parent_slug'	=> 'graybill-settings',
	));
    
}

////////////////////////////////////////////////////////////////////
// Theme Setup
////////////////////////////////////////////////////////////////////

if ( ! function_exists( 'yscores_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yscores_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yscores, use a find and replace
		 * to change 'yscores' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yscores', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'yscores_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'yscores_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yscores_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yscores_content_width', 640 );
}
add_action( 'after_setup_theme', 'yscores_content_width', 0 );


// disable gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// auto-scroll to Gravity Forms on Error
add_filter( 'gform_confirmation_anchor', '__return_true' );

// allow SVG uploads
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
	function add_current_nav_class($classes, $item) {
		
		// Getting the current post details
		global $post;
		
		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite[slug];
			
		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));
		
		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {
		
		   $classes[] = 'current-menu-item';
		
		}
		
		// Return the corrected set of classes to be added to the menu item
		return $classes;
	
	}
