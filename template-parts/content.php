<?php
/**
 * Template part for displaying posts.
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

	?><header class="entry-header content"><?php

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

		/* translators: %s: Name of current post */
		the_content( sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'worknet' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'worknet' ),
			'after'  => '</div>',
		) );

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
