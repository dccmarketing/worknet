<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Worknet
 */

?><form action="/" class="<?php

	echo apply_filters( 'worknet_search_form_class', 'search-form' );

	?>" method="get" role="search" >
	<label class="screen-reader-text" for="site-search"><?php

		echo apply_filters( 'worknet_search_form_label', _x( 'Search for:', 'label', 'worknet' ) );

	?></label>
	<input class="<?php

		echo apply_filters( 'worknet_search_field_class', 'search-field' );

		?>" id="site-search" name="s" placeholder="<?php

		echo apply_filters( 'worknet_search_form_placeholder', esc_attr_x( 'Search &hellip;', 'placeholder', 'worknet' ) );

	?>" title="<?php

		echo apply_filters( 'worknet_search_form_label', esc_attr_x( 'Search for:', 'label', 'worknet' ) );

	?>" type="search" value="<?php

		get_search_query();

	?>"  />
	<button type="submit" class="<?php

		echo apply_filters( 'worknet_search_button_class', 'search-submit' );

		?>">
		<span class="screen-reader-text"><?php

			echo apply_filters( 'worknet_search_form_button_text', esc_attr_x( 'Search', 'submit button', 'worknet' ) );

		?></span>
		<span class="search-icon"><?php worknet_the_svg( 'search', 'hidden-search-icon' ); ?></span>
	</button>
</form>
