<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link 	https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Worknet
 */

if ( ! is_active_sidebar( 'sidebar' ) ) { return; }

/**
 * The worknet_sidebars_before action hook
 */
do_action( 'worknet_sidebars_before' );

?><aside id="secondary" class="widget-area" role="complementary"><?php

	/**
	 * The worknet_sidebar_top action hook
	 */
	do_action( 'worknet_sidebar_top' );

	dynamic_sidebar( 'sidebar' );

	/**
	 * The worknet_sidebar_bottom action hook
	 */
	do_action( 'worknet_sidebar_bottom' );

?></aside><!-- #secondary --><?php

/**
 * The worknet_sidebars_after action hook
 */
do_action( 'worknet_sidebars_after' );
