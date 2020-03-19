<?php

/*
 * dashboard edits
 * since 2.0
 * author: cathy Tibbles
 * add thumbs to post lists
 * add cpt to 'activity' widget on dashboard
 *
*/

add_image_size( 'fc-admin-post-featured-image', 120, 120, false );
 
// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'fc_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'fc_add_post_admin_thumbnail_column', 2);
 
// Add the column
function fc_add_post_admin_thumbnail_column($fc_columns){
	$fc_columns['fc_thumb'] = __('Featured Image');
	return $fc_columns;
}
 
// Let's manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'fc_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'fc_show_post_thumbnail_column', 5, 2);
 
// Here we are grabbing featured-thumbnail size post thumbnail and displaying it
function fc_show_post_thumbnail_column($fc_columns, $fc_id){
	switch($fc_columns){
		case 'fc_thumb':
		if( function_exists('the_post_thumbnail') )
			echo the_post_thumbnail( 'fc-admin-post-featured-image' );
		else
			echo 'hmm... your theme doesn\'t support featured image...';
		break;
	}
}

// add custom post type to the 'activity' widget on dashboard
// since 2.0
// bug: doesn't display default status - only published, need to add scheduled, draft, private

if ( is_admin() ) {
	add_filter( 'dashboard_recent_posts_query_args', 'wpb_add_cpt_dashboard_activity' );
	function wpb_add_cpt_dashboard_activity( $query ) {
		
		$post_types = get_post_types();
		$post_types = ['post', 'evergreen_posts'];
		if ( is_array( $query['post_type'] ) ) {
			$query['post_type'] = $post_types;
		} else {
			$temp = $post_types;
			$query['post_type'] = $temp;
		}
		return $query;
	}
}
