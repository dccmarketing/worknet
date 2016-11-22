<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rosh
 */

/**
 * The worknet_html_before action hook
 */
do_action( 'worknet_html_before' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head><?php

		/**
		 * The worknet_head_top action hook
		 */
		do_action( 'worknet_head_top' );

		/**
		 * The worknet_head_content action hook
		 */
		do_action( 'worknet_head_content' );

		wp_head();

		/**
		 * The worknet_head_bottom action hook
		 */
		do_action( 'worknet_head_bottom' );

	?></head>
	<body <?php body_class(); ?>><?php

		/**
		 * The worknet_body_top action hook
		 *
		 * @hooked 		analytics_code 			10
		 * @hooked 		add_hidden_search		15
		 * @hooked 		skip_link 				20
		 */
		do_action( 'worknet_body_top' );

		/**
		 * The worknet_header_before action hook
		 */
		do_action( 'worknet_header_before' );

		?><header class="site-header" role="banner"><?php

			/**
			 * The worknet_header_top action hook
			 *
			 * @hooked 		header_wrap_start 		10
			 * @hooked 		site_branding_begin 	15
			 */
			do_action( 'worknet_header_top' );

			/**
			 * The header_content action hook
			 *
			 * @hooked 		title_site 			10
			 * @hooked 		site_description 	15
			 */
			do_action( 'worknet_header_content' );

			/**
			 * The worknet_header_bottom action hook
			 *
			 * @hooked 		worknet_header_bottom 	85
			 * @hooked 		header_wrap_end 	90
			 * @hooked 		menu_primary 		95
			 */
			do_action( 'worknet_header_bottom' );

		?></header><?php

		/**
		 * The worknet_header_after action hook
		 */
		do_action( 'worknet_header_after' );

		/**
		 * The worknet_content_before action hook
		 */
		do_action( 'worknet_content_before' );

		?><div id="content" class="site-content"><?php

			/**
			 * The worknet_content_top action hook
			 *
			 * @hooked 		breadcrumbs
			 */
			do_action( 'worknet_content_top' );
