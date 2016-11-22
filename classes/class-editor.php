<?php
/**
 * Customizations for the WordPress Editor.
 *
 * @since 			1.0.0
 * @package 		Worknet
 * @subpackage 		Worknet/classes
 */
class Worknet_Editor {

	/**
	 * Constructor
	 */
	public function __construct() {}

	/**
	 * Registers all the WordPress hooks and filters for this class.
	 */
	public function hooks() {

		add_action( 'admin_init', 			array( $this, 'add_editor_styles' ) );
		add_filter( 'tiny_mce_before_init', array( $this, 'add_format_options' ) );
		add_filter( 'mce_buttons', 			array( $this, 'add_first_row_buttons' ) );
		add_filter( 'mce_buttons_2', 		array( $this, 'add_second_row_buttons' ) );

	} // hooks()

	/**
	 * Adds a stylesheet to the editor.
	 */
	public function add_editor_styles() {

		add_editor_style( 'editor.css' );

	} // add_editor_styles()

	/**
	 * Add new styles to the TinyMCE "formats" menu dropdown
	 *
	 * @param 		string		$settings 		The current formats select settings.
	 * @return 		string 		$settings 		The modified formats select settings.
	 */
	public function add_format_options( $settings ) {

		$custom[0]['title'] 					= __( 'Text Formatting', 'worknet' );

		$custom[0]['items'][0]['title'] 		= __( 'Uppercase', 'worknet' );
		$custom[0]['items'][0]['inline'] 		= 'span';
		$custom[0]['items'][0]['classes'] 		= 'text-uppercase';

		$custom[0]['items'][1]['title'] 		= __( 'lowercase', 'worknet' );
		$custom[0]['items'][1]['inline'] 		= 'span';
		$custom[0]['items'][1]['classes'] 		= 'text-lowercase';



		$custom[1]['title'] 					= __( 'Floats', 'worknet' );

		$custom[1]['items'][0]['title'] 		= __( 'Float Right', 'worknet' );
		$custom[1]['items'][0]['inline'] 		= 'span';
		$custom[1]['items'][0]['classes'] 		= 'float-right';

		$custom[1]['items'][1]['title'] 		= __( 'Float Left', 'worknet' );
		$custom[1]['items'][1]['inline'] 		= 'span';
		$custom[1]['items'][1]['classes'] 		= 'float-left';



		$custom[2]['title'] 					= __( 'Content Blocks', 'worknet' );

		$custom[2]['items'][0]['title'] 		= __( 'Full Width', 'worknet' );
		$custom[2]['items'][0]['inline'] 		= 'div';
		$custom[2]['items'][0]['classes'] 		= 'worknet-cb-full-width';

		$custom[2]['items'][1]['title'] 		= __( 'First Half', 'worknet' );
		$custom[2]['items'][1]['block'] 		= 'p';
		$custom[2]['items'][1]['classes'] 		= 'worknet-cb-first-half';

		$custom[2]['items'][2]['title'] 		= __( 'Half', 'worknet' );
		$custom[2]['items'][2]['block'] 		= 'p';
		$custom[2]['items'][2]['classes'] 		= 'worknet-cb-half';

		$custom[2]['items'][3]['title'] 		= __( 'Third', 'worknet' );
		$custom[2]['items'][3]['block'] 		= 'p';
		$custom[2]['items'][3]['classes'] 		= 'worknet-cb-third';

		$custom[2]['items'][4]['title'] 		= __( 'Two Thirds', 'worknet' );
		$custom[2]['items'][4]['block'] 		= 'p';
		$custom[2]['items'][4]['classes'] 		= 'worknet-cb-two-thirds';

		$custom[2]['items'][5]['title'] 		= __( 'Last Third', 'worknet' );
		$custom[2]['items'][5]['block'] 		= 'p';
		$custom[2]['items'][5]['classes'] 		= 'worknet-cb-last-third';

		$custom[2]['items'][6]['title'] 		= __( 'Quarter', 'worknet' );
		$custom[2]['items'][6]['block'] 		= 'p';
		$custom[2]['items'][6]['classes'] 		= 'worknet-cb-quarter';

		$custom[2]['items'][7]['title'] 		= __( 'Last Quarter', 'worknet' );
		$custom[2]['items'][7]['block'] 		= 'p';
		$custom[2]['items'][7]['classes'] 		= 'worknet-cb-last-quarter';

		$custom[2]['items'][8]['title'] 		= __( 'Three Quarters', 'worknet' );
		$custom[2]['items'][8]['block'] 		= 'p';
		$custom[2]['items'][8]['classes'] 		= 'worknet-cb-three-quarters';



		$custom[3]['title'] 					= __( 'Flex Blocks', 'worknet' );

		$custom[3]['items'][0]['title'] 		= __( 'Flex Around', 'worknet' );
		$custom[3]['items'][0]['block'] 		= 'div';
		$custom[3]['items'][0]['classes'] 		= 'worknet-flex-around';

		$custom[3]['items'][1]['title'] 		= __( 'Flex Between', 'worknet' );
		$custom[3]['items'][1]['block'] 		= 'div';
		$custom[3]['items'][1]['classes'] 		= 'worknet-flex-tween';



		// $custom[2]['title'] 					= __( 'Theme Formatting', 'worknet' );
		//
		// $custom[2]['items'][0]['title'] 		= __( 'Letterbox', 'worknet' );
		// $custom[2]['items'][0]['block'] 		= 'p';
		// $custom[2]['items'][0]['classes'] 		= 'letterbox';
		//
		// $custom[2]['items'][1]['title'] 		= __( 'Letterbox Right', 'worknet' );
		// $custom[2]['items'][1]['block'] 		= 'p';
		// $custom[2]['items'][1]['classes'] 		= 'letterbox float-right';
		//
		// $custom[2]['items'][2]['title'] 		= __( 'Letterbox Left', 'worknet' );
		// $custom[2]['items'][2]['block'] 		= 'p';
		// $custom[2]['items'][2]['classes'] 		= 'letterbox float-left';
		//
		// $custom[2]['items'][3]['title'] 		= __( 'Line Behind - Text Center', 'worknet' );
		// $custom[2]['items'][3]['inline'] 		= 'span';
		// $custom[2]['items'][3]['classes'] 		= 'line-middle lm-text-center';
		//
		// $custom[2]['items'][4]['title'] 		= __( 'Line Behind - Text Left', 'worknet' );
		// $custom[2]['items'][4]['inline'] 		= 'span';
		// $custom[2]['items'][4]['classes'] 		= 'line-middle lm-text-left';
		//
		// $custom[2]['items'][5]['title'] 		= __( 'Line Behind - Text Right', 'worknet' );
		// $custom[2]['items'][5]['inline'] 		= 'span';
		// $custom[2]['items'][5]['classes'] 		= 'line-middle lm-text-right';
		//
		// $custom[2]['items'][6]['title'] 		= __( 'Content Block', 'worknet' );
		// $custom[2]['items'][6]['inline'] 		= 'div';
		// $custom[2]['items'][6]['classes'] 		= 'clear';



		$settings['style_formats_merge'] 	= true;
		$settings['style_formats'] 			= json_encode( $custom );

		return $settings;

	} // add_format_options()

	/**
	 * Add Formats Dropdown Menu To MCE
	 *
	 * @param 		array 		$buttons 		The current array of buttons.
	 * @return 		array 		$buttons 		The modifed array of buttons.
	 */
	function add_first_row_buttons( $buttons ) {

		array_push( $buttons, 'styleselect' ); // Adds Style select menu.
		return $buttons;

	} // add_first_row_buttons()

	/**
	 * Adds buttons to the second row in TinyMCE.
	 *
	 * @param 		array 		$buttons 		The current array of buttons.
	 * @return 		array 		$buttons 		The modified array of buttons.
	 */
	function add_second_row_buttons( $buttons ) {

		//array_unshift( $buttons, 'fontselect' ); // Adds Font select menu.
		//array_unshift( $buttons, 'fontsizeselect' ); // Adds Font Size select menu.

		$buttons[] = 'superscript'; // Adds Superscript button.
		$buttons[] = 'subscript'; // Adds Subscript button.

		return $buttons;

	} // add_second_row_buttons()

} // class
