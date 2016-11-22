<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Worknet
 */

get_header();

?><div id="primary" class="content-area content-sidebar"><?php

	/**
	 * The worknet_main_before action hook.
	 */
	do_action( 'worknet_main_before' );

	?><main id="main" role="main"><?php

	if ( have_posts() ) :

		/**
		 * The worknet_while_before action hook
		 *
		 * @hooked 		title_archive
		 * @hooked 		title_single_post
		 */
		do_action( 'worknet_while_before' );

		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * The worknet_entry_before action hook
			 */
			do_action( 'worknet_entry_before' );

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

			/**
			 * The worknet_entry_after action hook
			 *
			 * @hooked 		comments 		10
			 */
			do_action( 'worknet_entry_after' );

		endwhile;

		/**
		 * The worknet_while_after action hook
		 *
		 * @hooked 		posts_nav
		 */
		do_action( 'worknet_while_after' );

	else :

		/**
		 * The worknet_entry_before action hook
		 */
		do_action( 'worknet_entry_before' );

		get_template_part( 'template-parts/content', 'none' );

		/**
		 * The worknet_entry_after action hook
		 *
		 * @hooked 		comments 		10
		 */
		do_action( 'worknet_entry_after' );

	endif;

	?></main><!-- #main --><?php

	/**
	 * The worknet_main_after action hook.
	 *
	 * @hooked 		sidebar 		10
	 */
	do_action( 'worknet_main_after' );

?></div><!-- #primary --><?php

get_footer();
