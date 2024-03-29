<?php
/*
 * Plugin Name: yarnislecpt
 * Plugin URI: https://yarnisle.netsons.org
 * Description: CPT with description, link and download metafields
 * Author: Elisabetta Carrara
 * Author URI: https://www.elisabettacarrara.com
 * Licence: GPL3
 * Licence URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

// Register Custom Post Type
function download_post_type() {

	$labels = array(
		'name'                  => 'Downloads',
		'singular_name'         => 'Download',
		'menu_name'             => 'Downloads',
		'name_admin_bar'        => 'Download',
		'archives'              => 'Downloads Archives',
		'attributes'            => 'Downloads Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Download',
		'description'           => 'Downloads',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'downloads', $args );

}
add_action( 'init', 'download_post_type', 0 );
