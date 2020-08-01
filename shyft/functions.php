<?php
/**
 * Jobify Classic child theme.
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Classic 1.0.0
 */

// matchHeight
wp_enqueue_script( 'shyft-matchHeight-script', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.js', array( 'jquery' ), '20160104', true );
	
// Main Script
wp_enqueue_script( 'shyft-main-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '20160104', true );

function localize_vars() {
    return array(
        'stylesheet_directory' => get_stylesheet_directory_uri()
    );
}

function hiw_scripts() {
	if (is_page( array('how-it-works', 'pricing') ) ) {
		// Deregister default WP jQuery -> Register updated jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js", false, null);
		wp_enqueue_script('jquery');
		// Smooth Anchor
		wp_enqueue_script( 'shyft-smooth-anchor', get_stylesheet_directory_uri() . '/js/smooth-anchor.js', array(), '1.0.0', true );
	}
    if (is_page( array('how-it-works') ) ) {
		// Tween Max
		wp_enqueue_script( 'shyft-tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array(), '2.0.2', true );
		// Scroll Magic
		wp_enqueue_script( 'shyft-scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js', array(), '2.0.7', true );
		// GASP
		wp_enqueue_script( 'shyft-gasp-animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js', array(), '2.0.7', true );
		// SVG Animation
		wp_enqueue_script( 'shyft-svg-anim', get_stylesheet_directory_uri() . '/js/svg-anim.js', array(), '1.0.0', true );
	}
	if (is_page( array('pricing') ) ) {
		// Readmore.js
		wp_enqueue_script( 'shyft-readmore', get_stylesheet_directory_uri() . '/js/readmore.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'hiw_scripts' );



function jobify_child_styles() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jobify_child_styles', 20 );

// Post ID from slug (needed for few page headers on single custom post type templates)
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

//* Add support for additional mime types
function shyft_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'shyft_mime_types');


/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Testimonials'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_admin_menu_items');