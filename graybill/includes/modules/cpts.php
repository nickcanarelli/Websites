<?php

add_action( 'init', 'yscores_register_cpts_taxes' );

function yscores_register_cpts_taxes() {
/**************************************************
** CPTs
***************************************************/
	$prefix = "cpt_";

	$singular = 'Example Post Type';
	$plural = 'Example Post Types';

	$args = array(
		'label'					=> $plural,
		'labels'				=> 	array(
			'name'					=> $plural,
			'singular_name'			=> $singular,
			'menu_name'				=> $plural,
			'name_admin_bar'		=> $singular,
			'all_items'				=> 'All '.$plural,
			'add_new'				=> 'Add New',
			'add_new_item'			=> 'Add New '.$singular,
			'edit_item'				=> 'Edit '.$singular,
			'new_item'				=> 'New '.$singular,
			'view_item'				=> 'View '.$singular,
			'search_items'			=> 'Search '.$plural,
			'not_found'				=> 'No '.$plural.' found',
			'not_found_in_trash'	=> 'No '.$plural.' found in Trash',
			'parent_item_colon'		=> 'Parent '.$singular.':',
			'update_item'			=> 'Update '.$singular,
			'items_list'			=> $plural.' list',
			'items_list_navigation'	=> $plural.' list navigation',
			'filter_items_list'		=> 'Filter '.$plural.' list',
			'parent' 				=> 'Parent ',$singular,
		),
		'description'			=> '',
		'public'				=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'    => true,
		'show_ui'				=> true,
		'show_in_nav_menus'     => false,
		'show_in_menu'			=> true,
		'show_in_admin_bar'     => true,
		'menu_position'         => 22,
		'menu_icon'				=> 'dashicons-format-status',
		'hierarchical'			=> false,
		'taxonomies'			=> array(),
		'has_archive'			=> true,
		'rewrite'				=> array(
			'slug'			=> sanitize_title($plural),
			'with_front'	=> true
		),
		'can_export'            => true,
	);

	register_post_type( $prefix.sanitize_title($plural), $args );

/**************************************************
** Taxonomies
***************************************************/

	// $prefix_tax = "tax_";

	// $singular = 'Example Tax Type';
	// $plural = 'Example Tax Types';
	// $cpt_to_apply = $prefix.'staff';

	// $args = array(
	// 	'label'					=> $plural,
	// 	'labels'				=> array(
	// 		'name'							=> $plural,
	// 		'singular_name'					=> $singular,
	// 		'menu_name'						=> $plural,
	// 		'all_items'						=> 'All '.$plural,
	// 		'edit_item'						=> 'Edit '.$singular,
	// 		'view_item'						=> 'View '.$singular,
	// 		'update_item'					=> 'Update '.$singular.' Name',
	// 		'add_new_item'					=> 'Add New '.$singular,
	// 		'new_item_name'					=> 'New '.$singular.' Name',
	//		'parent_item'					=> 'Parent '.$singular,
	//		'parent_item_colon'				=> 'Parent '.$singular.':',
	//		'search_items'					=> 'Search '.$plural,
	//		'popular_items'					=> 'Popular '.$plural,
	//		'separate_items_with_commas'	=> 'Separate '.$plural.' with commas',
	//		'add_or_remove_items'			=> 'Add or remove '.$plural,
	//		'choose_from_most_used'			=> 'Choose from the most used '.$plural,
	//		'not_found'						=> 'No '.$plural.' found',
	//	),
	//	'public'				=> true,
	//	'show_ui'				=> true,
	//	'show_in_menu'			=> true,
	//	'show_in_nav_menus'		=> true,
	//	'show_admin_column'		=> true,
	//	'description'			=> '',
	//	'query_var' 			=> true,
	//	'hierarchical'			=> true,
	//	'rewrite'				=> array(
	//		'slug'			=> sanitize_title($plural),
	//		'with_front'	=> false
	//	),
	//);
	
	//register_taxonomy( $prefix_tax.sanitize_title($plural), array($cpt_to_apply), $args );

}

?>