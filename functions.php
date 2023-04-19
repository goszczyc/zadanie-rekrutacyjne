<?php
// Defines
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));


// General
require_once __DIR__ . '/src/php/general/general.php';
// ACF options page
require_once __DIR__ . '/src/php/acf/options.php';
// Menu array
require_once __DIR__ . '/src/php/menu/wp-menu-array.php';

// Custom post types

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');



/*************** ALLOW SVG ***************/
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Custom excerpt length
function wpdocs_custom_excerpt_length($length)
{
	return 60;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/////////////////////
// FORCE WP UPDATE //
/////////////////////

// add_filter( 'allow_dev_auto_core_updates', '__return_true' );           // Enable development updates
// add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // Enable minor updates
// add_filter( 'allow_major_auto_core_updates', '__return_true' );         // Enable major updates
add_filter('allow_minor_auto_core_updates', '__return_true');

// add_filter( 'auto_update_translation', '__return_false' );               // Disable translation file updates
// add_filter( 'auto_update_translation', '__return_true' );                // Enable translation file updates
add_filter('auto_update_translation', '__return_true');


function wps_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);

function my_deregister_scripts()
{
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);