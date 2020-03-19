<?php
/**
 * Plugin Name: Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>It should always be activated</strong>.
 * Version:     1.0.1
 * Author:      WPBarista
 * - props to Bill Erickson
 */

// Plugin directory
define( 'EA_DIR' , plugin_dir_path( __FILE__ ) );

require_once( EA_DIR . '/inc/general.php' );
require_once( EA_DIR . '/inc/wordpress-cleanup.php' );
require_once( EA_DIR . '/inc/cpt-evergreen-posts.php' );
require_once( EA_DIR . '/inc/sample-shortcode.php' );
require_once( EA_DIR . '/inc/cust-tax-posts.php' );


