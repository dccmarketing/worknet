<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Worknet
 */

get_header();

?><div id="primary" class="content-area"><?php

	/**
	 * The worknet_main_before action hook.
	 */
	do_action( 'worknet_main_before' );

	?><main id="main" role="main"><?php

	/**
	 * The worknet_while_before action hook
	 *
	 * @hooked 		title_archive
	 * @hooked 		title_single_post
	 */
	do_action( 'worknet_while_before' );

	while ( have_posts() ) : the_post();

		/**
		 * The worknet_entry_before action hook
		 */
		do_action( 'worknet_entry_before' );

		get_template_part( 'template-parts/content', get_post_format() );

		/**
		 * The worknet_entry_after action hook
		 *
		 * @hooked 		comments 		10
		 */
		do_action( 'worknet_entry_after' );

	endwhile; // End of the loop.

	/**
	 * The worknet_while_after action hook
	 */
	do_action( 'worknet_while_after' );

	?></main><!-- #main --><?php

	/**
	 * The worknet_main_after action hook.
	 *
	 * @hooked 		sidebar 		10
	 */
	do_action( 'worknet_main_after' );

?></div><!-- #primary --><?php

get_footer();
