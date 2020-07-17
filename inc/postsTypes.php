<?php 
 /**
 * Post Type: Maintenance Checks.
 */

function cptui_register_my_cpts() {



$labels = [
    "name" => __( "Maintenance Checks", "m9c" ),
    "singular_name" => __( "Maintenance Check", "m9c" ),
    "menu_name" => __( "Maintenance Checks", "m9c" ),
    "all_items" => __( "All Maintenance Checks", "m9c" ),
    "add_new" => __( "Add new", "m9c" ),
    "add_new_item" => __( "Add new Maintenance Check", "m9c" ),
    "edit_item" => __( "Edit Maintenance Check", "m9c" ),
    "new_item" => __( "New Maintenance Check", "m9c" ),
    "view_item" => __( "View Maintenance Check", "m9c" ),
    "view_items" => __( "View Maintenance Checks", "m9c" ),
    "search_items" => __( "Search Maintenance Checks", "m9c" ),
    "not_found" => __( "No Maintenance Checks found", "m9c" ),
    "not_found_in_trash" => __( "No Maintenance Checks found in trash", "m9c" ),
    "parent" => __( "Parent Maintenance Check:", "m9c" ),
    "featured_image" => __( "Featured image for this Maintenance Check", "m9c" ),
    "set_featured_image" => __( "Set featured image for this Maintenance Check", "m9c" ),
    "remove_featured_image" => __( "Remove featured image for this Maintenance Check", "m9c" ),
    "use_featured_image" => __( "Use as featured image for this Maintenance Check", "m9c" ),
    "archives" => __( "Maintenance Check archives", "m9c" ),
    "insert_into_item" => __( "Insert into Maintenance Check", "m9c" ),
    "uploaded_to_this_item" => __( "Upload to this Maintenance Check", "m9c" ),
    "filter_items_list" => __( "Filter Maintenance Checks list", "m9c" ),
    "items_list_navigation" => __( "Maintenance Checks list navigation", "m9c" ),
    "items_list" => __( "Maintenance Checks list", "m9c" ),
    "attributes" => __( "Maintenance Checks attributes", "m9c" ),
    "name_admin_bar" => __( "Maintenance Check", "m9c" ),
    "item_published" => __( "Maintenance Check published", "m9c" ),
    "item_published_privately" => __( "Maintenance Check published privately.", "m9c" ),
    "item_reverted_to_draft" => __( "Maintenance Check reverted to draft.", "m9c" ),
    "item_scheduled" => __( "Maintenance Check scheduled", "m9c" ),
    "item_updated" => __( "Maintenance Check updated.", "m9c" ),
    "parent_item_colon" => __( "Parent Maintenance Check:", "m9c" ),
];

$args = [
    "label" => __( "Maintenance Checks", "m9c" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "m9e_checks",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "maintenance_check", "with_front" => true ],
    "query_var" => true,
    "menu_position" => 5,
    "menu_icon" => "dashicons-admin-tools",
    "supports" => [ "title", "editor", "thumbnail", "author" ],
    "taxonomies" => [ "urgency_level" ],
];

register_post_type( "maintenance_check", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
