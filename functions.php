<?php
/**
 * This file is a core theme file and should not be edited.
 *
 * @package  Worknet
 * @author   dccmarketing
 * @license  GPL-2.0+
 * @link     https://codex.wordpress.org/Functions_File_Explained
 */

/**
 * Set the constants used throughout.
 */
define( 'PARENT_THEME_SLUG', 'worknet' );
define( 'PARENT_THEME_VERSION', '1.0.2' );

/**
 * Load Imagekit.
 */
require get_stylesheet_directory() . '/functions/imagekit.php';

/**
 * Load Themekit.
 */
require get_stylesheet_directory() . '/functions/themekit.php';

/**
 * Load Main Menu Walker.
 */
require get_stylesheet_directory() . '/classes/main-menu-walker.php';

/**
 * Load Autoloader
 */
require get_stylesheet_directory() . '/classes/class-autoloader.php';


/**
 * Create an instance of each class and load the hooks function.
 */
$classes[] = 'Authorbox';
$classes[] = 'Automattic';
$classes[] = 'Critical';
$classes[] = 'Customizer';
$classes[] = 'Editor';
$classes[] = 'Hidden_Search';
$classes[] = 'Menukit';
// $classes[] = 'Metabox_Demo';
// $classes[] = 'Metabox_Full_Repeater';
// $classes[] = 'Metabox_Post_Format';
// $classes[] = 'Metabox_Simple_Repeater';
// $classes[] = 'Metabox_Subtitle';
$classes[] = 'Setup';
$classes[] = 'Shortcode_Listmenu';
$classes[] = 'Shortcode_Search';
$classes[] = 'Slushicons';
$classes[] = 'Soliloquy';
$classes[] = 'Themehooks';
$classes[] = 'Users';
$classes[] = 'Utilities';

foreach ( $classes as $class ) {

	$class_name 	= 'Worknet_' . $class;
	$class_obj 		= new $class_name();

	add_action( 'after_setup_theme', array( $class_obj, 'hooks' ) );

}
