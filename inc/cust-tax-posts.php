<?php 

// Register Custom Taxonomies
// @core plugin for Theme Name Here
// @incl recipe_event for post type: post, evergreen posts
// @incl post-course for posts, evergreen posts
// @incl diets for posts, evergreen posts
// @incl season for posts, evergreen posts
// 

if ( ! function_exists( 'wpb_custom_tax' ) ) {

	add_action( 'init', 'wpb_custom_tax', 0 );
	
	function wpb_custom_tax() {

	
	$labels = array(
		'name'                       => _x( 'Events', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Events', 'text_domain' ),
		'all_items'                  => __( 'All Events', 'text_domain' ),
		'parent_item'                => __( 'Parent Event', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Event:', 'text_domain' ),
		'new_item_name'              => __( 'New Event Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Event', 'text_domain' ),
		'edit_item'                  => __( 'Edit Event', 'text_domain' ),
		'update_item'                => __( 'Update Event', 'text_domain' ),
		'view_item'                  => __( 'View Event', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or Remove Events', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Events', 'text_domain' ),
		'search_items'               => __( 'Search Events', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Events', 'text_domain' ),
		'items_list'                 => __( 'Events List', 'text_domain' ),
		'items_list_navigation'      => __( 'Events List Navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'recipe_event', array( 'post','evergreen_posts' ), $args );
		
		
	$labels = array(
		'name'                       => _x( 'Courses', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Course', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Courses', 'text_domain' ),
		'all_items'                  => __( 'All Courses', 'text_domain' ),
		'new_item_name'              => __( 'New Course', 'text_domain' ),
		'add_new_item'               => __( 'Add Course', 'text_domain' ),
		'edit_item'                  => __( 'Edit Course', 'text_domain' ),
		'update_item'                => __( 'Update Course', 'text_domain' ),
		'view_item'                  => __( 'View Course Archive', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or Remove Courses', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Courses', 'text_domain' ),
		'search_items'               => __( 'Search Courses', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Courses Created Yet', 'text_domain' ),
		'items_list'                 => __( 'Courses', 'text_domain' ),
		'items_list_navigation'      => __( 'Courses Navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'post_course', array( 'post','evergreen_posts' ), $args );
		
	
	$labels = array(
		'name'                       => _x( 'Diets', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Diet', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Diets', 'text_domain' ),
		'all_items'                  => __( 'All Diets', 'text_domain' ),
		'new_item_name'              => __( 'New Diet', 'text_domain' ),
		'add_new_item'               => __( 'Add Diet', 'text_domain' ),
		'edit_item'                  => __( 'Edit Diet', 'text_domain' ),
		'update_item'                => __( 'Update Diet', 'text_domain' ),
		'view_item'                  => __( 'View Diet Archive', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or Remove Diets', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Diets', 'text_domain' ),
		'search_items'               => __( 'Search Diets', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Diets Created Yet', 'text_domain' ),
		'items_list'                 => __( 'Diets', 'text_domain' ),
		'items_list_navigation'      => __( 'Diets Navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'diets', array( 'post', 'evergreen_posts' ), $args );
		
			$labels = array(
		'name'                       => _x( 'Season', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Season', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Seasons', 'text_domain' ),
		'all_items'                  => __( 'All Seasons', 'text_domain' ),
		'new_item_name'              => __( 'New Season', 'text_domain' ),
		'add_new_item'               => __( 'Add Season', 'text_domain' ),
		'edit_item'                  => __( 'Edit Season', 'text_domain' ),
		'update_item'                => __( 'Update Season', 'text_domain' ),
		'view_item'                  => __( 'View Season Archive', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or Remove Seasons', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Seasons', 'text_domain' ),
		'search_items'               => __( 'Search Seasons', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Seasons Created Yet', 'text_domain' ),
		'items_list'                 => __( 'Seasons', 'text_domain' ),
		'items_list_navigation'      => __( 'Seasons Navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'season', array( 'post', 'evergreen_posts' ), $args );
}
}

