<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rosh
 */

			/**
			 * The worknet_content_bottom action hook
			 */
			do_action( 'worknet_content_bottom' );

		?></div><!-- #content --><?php

		/**
		 * The worknet_content_after action hook
		 */
		do_action( 'worknet_content_after' );

		/**
		 * The worknet_footer_before action hook
		 */
		do_action( 'worknet_footer_before' );

		?><footer class="site-footer" id="colophon" role="contentinfo"><?php

			/**
			 * The worknet_footer_top action hook
			 *
			 * @hooked 		footer_wrap_begin
			 */
			do_action( 'worknet_footer_top' );

			/**
			 * The worknet_footer_content action hook
			 *
			 * @hooked 		footer_content 			20
			 */
			do_action( 'worknet_footer_content' );

			/**
			 * The worknet_footer_bottom action hook
			 *
			 * @hooked 		footer_wrap_end
			 */
			do_action( 'worknet_footer_bottom' );

		?></footer><!-- #colophon --><?php

	/**
	 * The worknet_footer_after action hook
	 */
	do_action( 'worknet_footer_after' );

	wp_footer();

	/**
	 * The worknet_body_bottom action hook
	 */
	do_action( 'worknet_body_bottom' );

	?></body>
</html>
