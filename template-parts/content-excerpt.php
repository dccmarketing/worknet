<?php
/**
 * Template part for displaying post excerpts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Worknet
 */

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

	/**
	 * The worknet_entry_top action hook.
	 */
	do_action( 'worknet_entry_top' );

	?><header class="entry-header justcontent"><?php

		/**
		 * @hooked 		title_entry 		10
		 * @hooked 		title_page 			10
		 * @hooked 		title_search 		10
		 * @hooked 		posted_on 			20
		 */
		do_action( 'worknet_entry_header_content' );

	?></header><!-- .entry-header --><?php

	/**
	 * The worknet_entry_content_before action hook.
	 */
	do_action( 'worknet_entry_content_before' );

	?><div class="entry-content"><?php

		the_excerpt();

	?></div><!-- .entry-content --><?php

	/**
	 * The worknet_entry_content_after action hook.
	 */
	do_action( 'worknet_entry_content_after' );

	?><footer class="entry-footer"><?php

		/**
		 * The worknet_entry_footer action hook.
		 *
		 * @hooked 		entry_categories_links() 		10
		 * @hooked		entry_tags_links() 				15
		 * @hooked		entry_comments_links() 			20
		 * @hooked 		entry_edit_link() 				25
		 */
		do_action( 'worknet_entry_footer_content' );

	?></footer><!-- .entry-footer --><?php

	/**
	 * The worknet_entry_bottom action hook.
	 */
	do_action( 'worknet_entry_bottom' );

?></article><!-- #post-## -->
