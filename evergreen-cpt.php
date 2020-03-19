<?php 
/*
 * add custom post type "Evergreen Posts"
 * https://wordpress.org/support/article/post-types/
*/

//function to wrap all cpt's
function wpb_cpts() { 

$labels = array(
 'name'                  => _x( 'Evergreen Posts', 'Post Type General Name', 'text_domain' ),
 'singular_name'         => _x( 'Evergreen Post', 'Post Type Singular Name', 'text_domain' ),
 'menu_name'             => __( 'Evergreen Posts', 'text_domain' ),
 'name_admin_bar'        => __( 'Evergreen Posts', 'text_domain' ),
 'archives'              => __( 'Evergreen Post Archives', 'text_domain' ),
 'attributes'            => __( 'Evergreen Post Attributes', 'text_domain' ),
 'parent_item_colon'     => __( 'Evergreen Post Parent:', 'text_domain' ),
 'all_items'             => __( 'All Evergreen Posts', 'text_domain' ),
 'add_new_item'          => __( 'Add New Evergreen Post', 'text_domain' ),
 'add_new'               => __( 'Add New Evergreen Post', 'text_domain' ),
 'new_item'              => __( 'New Evergreen Post', 'text_domain' ),
 'edit_item'             => __( 'Edit Evergreen Post', 'text_domain' ),
 'update_item'           => __( 'Update Evergreen Post', 'text_domain' ),
 'view_item'             => __( 'View Evergreen Post', 'text_domain' ),
 'view_items'            => __( 'View Evergreen Post', 'text_domain' ),
 'search_items'          => __( 'Search Evergreen Post', 'text_domain' ),
 'not_found'             => __( 'Not found', 'text_domain' ),
 'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
 'featured_image'        => __( 'Featured Image', 'text_domain' ),
 'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
 'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
 'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
 'insert_into_item'      => __( 'Insert into Evergreen Post', 'text_domain' ),
 'uploaded_to_this_item' => __( 'Uploaded to this Evergreen Post', 'text_domain' ),
 'items_list'            => __( 'Evergreen Posts list', 'text_domain' ),
 'items_list_navigation' => __( 'Evergreen Posts navigation', 'text_domain' ),
 'filter_items_list'     => __( 'Filter Evergreen Posts', 'text_domain' ),
 );
 
 
 $args = array(
 'label'                 => __( 'Evergreen Posts', 'text_domain' ),
 'description'           => __( 'New posts with a date-less permalink.', 'text_domain' ),
 'labels'                => $labels,
 
 //add custom taxonomies here
 'taxonomies'            => array( 'recipe_event', 'category', 'post_tag', 'post_course', 'season', 'diets' ),
 'hierarchical'          => false,
 'supports'              => array ('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'thumbnail', 'custom-fields' ),
 'public'                => true,
 'show_ui'               => true,
 'show_in_menu'          => true,
 'menu_position'         => 4,
 
 //add dashicon here
 'menu_icon'             => 'dashicons-smiley',
 'show_in_admin_bar'     => true,
 'show_in_nav_menus'     => true,
 'can_export'            => true,
 'has_archive'           => true,
 'exclude_from_search'   => false,
 'publicly_queryable'    => true,
 'capability_type'       => 'post',
 
 //cannot use '/'
 'rewrite'            => array( 'slug' => 'article' ),
 );
 register_post_type( 'evergreen_posts', $args );
}

add_action( 'init', 'wpb_cpts', 0 );
