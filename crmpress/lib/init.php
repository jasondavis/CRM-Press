<?php 
/**
 *
 * This is the init.php file for the CRM Press theme.
 * DO NOT EDIT THIS FILE! IT WILL BE OVERRIDEN WITH FUTURE UPDATES.
 * If you wish to make customizations, please make a child theme instead.
 *
 */

add_action( 'crmpress_init', 'crmpress_constants' );
/**
 *
 * This function adds all the constants that can be used for the CRM Press framework.
 *
 * @since 1.0
 *
 */
function crmpress_constants() {

	// Define directory constants
	define( 'PARENT_DIR', get_template_directory() );
	define( 'CHILD_DIR', get_stylesheet_directory() );
	define( 'CRMPRESS_IMAGES_DIR', PARENT_DIR . '/images' );
	define( 'CRMPRESS_LIB_DIR', PARENT_DIR . '/lib' );
	define( 'CRMPRESS_ADMIN_DIR', CRMPRESS_LIB_DIR . '/admin' );
	define( 'CRMPRESS_BUILD_DIR', CRMPRESS_LIB_DIR . '/build' );
	define( 'CRMPRESS_METABOX_DIR', CRMPRESS_LIB_DIR . '/metabox' );
	define( 'CRMPRESS_CSS_DIR', CRMPRESS_LIB_DIR . '/css' );
	define( 'CRMPRESS_FUNCTIONS_DIR', CRMPRESS_LIB_DIR . '/functions' );
	define( 'CRMPRESS_JS_DIR', CRMPRESS_LIB_DIR . '/js' );
	define( 'CRMPRESS_RESOURCES_DIR', CRMPRESS_LIB_DIR . '/resources' );
	define( 'CRMPRESS_WIDGETS_DIR', CRMPRESS_LIB_DIR . '/widgets' );
	
	// Define URL constants
	define( 'PARENT_URL', get_template_directory_uri() );
	define( 'CHILD_URL', get_stylesheet_directory_uri() );
	define( 'CRMPRESS_IMAGES_URL', PARENT_URL . '/images' );
	define( 'CRMPRESS_LIB_URL', PARENT_URL . '/lib' );
	define( 'CRMPRESS_ADMIN_URL', CRMPRESS_LIB_URL . '/admin' );
	define( 'CRMPRESS_BUILD_URL', CRMPRESS_LIB_URL . '/build' );
	define( 'CRMPRESS_METABOX_URL', CRMPRESS_LIB_URL . '/metabox' );
	define( 'CRMPRESS_CSS_URL', CRMPRESS_LIB_URL . '/css' );
	define( 'CRMPRESS_FUNCTIONS_URL', CRMPRESS_LIB_URL . '/functions' );
	define( 'CRMPRESS_JS_URL', CRMPRESS_LIB_URL . '/js' );
	define( 'CRMPRESS_RESOURCES_URL', CRMPRESS_LIB_URL . '/resources' );
	define( 'CRMPRESS_WIDGETS_URL', CRMPRESS_LIB_URL . '/widgets' );
	
}
	
add_action( 'crmpress_init', 'crmpress_mobilize_framework' );
/**
 *
 * This function kick-starts our framework by initializing all of our structure files.
 *
 * The following hooks are added to this function by default:
 *
 * crmpress_pre_framework 
 *
 * @since 1.0
 *
 */
function crmpress_mobilize_framework() {

	do_action( 'crmpress_pre_framework' );

	// Load the framework
	load_template( CRMPRESS_LIB_DIR . '/theme.php' );
	
	// Load classes
	load_template( CRMPRESS_METABOX_DIR . '/metabox-setup.php' );
	load_template( CRMPRESS_METABOX_DIR . '/init.php' );
	
	// Load CSS
	load_template( CRMPRESS_CSS_DIR . '/mobilize-css.php' );
	
	// Load functions
	load_template( CRMPRESS_FUNCTIONS_DIR . '/register-nav.php' );
	load_template( CRMPRESS_FUNCTIONS_DIR . '/register-sidebar.php' );
	load_template( CRMPRESS_FUNCTIONS_DIR . '/register-taxonomies.php' );

	// Load admin structure
	load_template( CRMPRESS_ADMIN_DIR . '/menu-labelling.php' );
	load_template( CRMPRESS_ADMIN_DIR . '/dashboard.php' );
	load_template( CRMPRESS_ADMIN_DIR . '/removals.php' );
	load_template( CRMPRESS_ADMIN_DIR . '/postscreen.php' );
	load_template( CRMPRESS_ADMIN_DIR . '/default-categories.php' );
	
	// Load javascript
	load_template( CRMPRESS_JS_DIR . '/mobilize-js.php' );
	
	// Load build
	load_template( CRMPRESS_BUILD_DIR . '/header.php' );
	load_template( CRMPRESS_BUILD_DIR . '/content.php' );
	load_template( CRMPRESS_BUILD_DIR . '/post.php' );
	load_template( CRMPRESS_BUILD_DIR . '/home.php' );
	load_template( CRMPRESS_BUILD_DIR . '/footer.php' );
	
	// Load resources
	load_template( CRMPRESS_RESOURCES_DIR . '/notes.php' );
	load_template( CRMPRESS_RESOURCES_DIR . '/file-type-uploads.php' );
	load_template( CRMPRESS_RESOURCES_DIR . '/icon-dir.php' );
	
	// Load widgets
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-active-projects.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-activity-graph.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-forwarded.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-inquiry-result.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-inquiry.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-old-prospects.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-other-stats.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-poc.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-project-sources.php' );
	load_template( CRMPRESS_WIDGETS_DIR . '/widget-referral.php' );

	// Load helper functions
	load_template( CRMPRESS_RESOURCES_DIR . '/core-functions.php' );
	
}

add_action( 'crmpress_init', 'crmpress_theme_support' );
/**
 *
 * This function adds all the theme support that CRM Press needs.
 *
 * @since 1.0
 *
 */
function crmpress_theme_support() {

	add_theme_support( 'post-thumbnails' );
	add_editor_style();

}

// Fire the crmpress_init hook
do_action( 'crmpress_init' );