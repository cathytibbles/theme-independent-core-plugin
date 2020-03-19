<?php 

/**
 * Display the video tag in the post
 * [video-link]
 * 
 * 
**/

function wpb_video_shortcode() {

$videosc ='<a id="video"></a>';
	return $videosc;
}

add_shortcode( 'video-link', 'wpb_video_shortcode');

