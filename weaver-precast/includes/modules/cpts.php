<?php
add_action( 'init', 'weaver_register_cpts_taxes' );
function weaver_register_cpts_taxes() {
/**************************************************
** CPTs
***************************************************/
    $prefix = "cpt_";

    $singular = 'Career';
    $plural = 'Careers';

    $args = array(
        'label'                 => $plural,
        'labels'                =>  array(
            'name'                  => $plural,
            'singular_name'         => $singular,
            'menu_name'             => $plural,
            'name_admin_bar'        => $singular,
            'all_items'             => 'All '.$plural,
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New '.$singular,
            'edit_item'             => 'Edit '.$singular,
            'new_item'              => 'New '.$singular,
            'view_item'             => 'View '.$singular,
            'search_items'          => 'Search '.$plural,
            'not_found'             => 'No '.$plural.' found',
            'not_found_in_trash'    => 'No '.$plural.' found in Trash',
            'parent_item_colon'     => 'Parent '.$singular.':',
            'update_item'           => 'Update '.$singular,
            'items_list'            => $plural.' list',
            'items_list_navigation' => $plural.' list navigation',
            'filter_items_list'     => 'Filter '.$plural.' list',
            'parent'                => 'Parent ',$singular,
        ),
        'description'           => '',
        'public'                => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => false,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => '',
        'menu_icon'             => 'dashicons-format-aside',
        'hierarchical'          => false,
        'taxonomies'            => array(),
        'has_archive'           => true,
        'rewrite'               => array(
            'slug'          => sanitize_title($plural),
            'with_front'    => false
        ),
        'can_export'            => true,
    );

    register_post_type( $prefix.sanitize_title($plural), $args );

}

?>