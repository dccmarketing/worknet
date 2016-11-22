<?php
/**
 * Rosh Customizer
 *
 * Contains methods for customizing the theme customization screen.
 *
 * @link 			https://codex.wordpress.org/Theme_Customization_API
 * @since 			1.0.0
 * @package 		Worknet
 * @subpackage 		Worknet/classes
 */
class Worknet_Customizer {

	/**
	 * Constructor
	 */
	public function __construct() {}

	/**
	 * Registers all the WordPress hooks and filters for this class.
	 */
	public function hooks() {

		add_action( 'customize_register', 	array( $this, 'register_panels' ) );
		add_action( 'customize_register', 	array( $this, 'register_sections' ) );
		add_action( 'customize_register', 	array( $this, 'register_fields' ) );
		add_action( 'wp_head', 				array( $this, 'header_output' ) );
		add_action( 'customize_register', 	array( $this, 'load_customize_controls' ), 0 );

	} // hooks()

	/**
	 * Registers custom panels for the Customizer
	 *
	 * @hooked 		customize_register
	 * @see			add_action( 'customize_register', $func )
	 * @link 		http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	 * @since 		1.0.0
	 * @param 		WP_Customize_Manager 		$wp_customize 		Theme Customizer object.
	 */
	public function register_panels( $wp_customize ) {

		// Register panels here

	} // register_panels()

	/**
	 * Registers custom sections for the Customizer
	 *
	 * Existing sections:
	 *
	 * Slug 				Priority 		Title
	 *
	 * title_tagline 		20 				Site Identity
	 * colors 				40				Colors
	 * header_image 		60				Header Image
	 * background_image 	80				Background Image
	 * nav_menus			100 			Navigation
	 * widgets 				110 			Widgets
	 * static_front_page 	120 			Static Front Page
	 * default 				160 			all others
	 *
	 * @hooked 		customize_register
	 * @see			add_action( 'customize_register', $func )
	 * @link 		http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	 * @since 		1.0.0
	 * @param 		WP_Customize_Manager 		$wp_customize 		Theme Customizer object.
	 */
	public function register_sections( $wp_customize ) {

		// Tablet Menu Section
		$wp_customize->add_section( 'tablet_menu',
			array(
				'active_callback' 	=> '',
				'capability'  		=> 'edit_theme_options',
				'description'  		=> esc_html__( '', 'worknet' ),
				'panel' 			=> 'nav_menus',
				'priority'  		=> 10,
				'theme_supports'  	=> '',
				'title'  			=> esc_html__( 'Tablet Menu Style', 'worknet' ),
			)
		);

	} // register_sections()

	/**
	 * Registers controls/fields for the Customizer
	 *
	 * Note: To enable instant preview, we have to actually write a bit of custom
	 * javascript. See live_preview() for more.
	 *
	 * Note: To use active_callbacks, don't add these to the selecting control, it apepars these conflict:
	 * 		'transport' => 'postMessage'
	 * 		$wp_customize->get_setting( 'field_name' )->transport = 'postMessage';
	 *
	 * @hooked 		customize_register
	 * @see			add_action( 'customize_register', $func )
	 * @link 		http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	 * @since 		1.0.0
	 * @param 		WP_Customize_Manager 		$wp_customize 		Theme Customizer object.
	 */
	public function register_fields( $wp_customize ) {

		// Enable live preview JS for default fields
		$wp_customize->get_setting( 'blogname' )->transport 		= 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport 	= 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



		// Site Identity Section Fields

		// Google Tag Manager Field
		$wp_customize->add_setting(
			'tag_manager',
			array(
				'default'  			=> '',
				'transport' 		=> 'postMessage'
			)
		);
		$wp_customize->add_control(
			'tag_manager',
			array(
				'description' 		=> esc_html__( 'Paste in the Google Tag Manager code here. Do not include the comment tags!', 'worknet' ),
				'label' 			=> esc_html__( 'Google Tag Manager', 'worknet' ),
				'priority' 			=> 90,
				'section' 			=> 'title_tagline',
				'settings' 			=> 'tag_manager',
				'type' 				=> 'textarea'
			)
		);
		$wp_customize->get_setting( 'tag_manager' )->transport = 'postMessage';


		// Tablet Menu Field
		$wp_customize->add_setting(
			'tablet_menu',
			array(
				'capability' 		=> 'edit_theme_options',
				'default'  			=> '',
				'transport' 		=> 'postMessage',
				'type' 				=> 'theme_mod'
			)
		);
		$wp_customize->add_control(
			'tablet_menu',
			array(
				'active_callback' 	=> '',
				'choices' 			=> array(
					'tablet-slide-ontop-from-left' 		=> esc_html__( 'Slide On Top from Left', 'worknet' ),
					'tablet-slide-ontop-from-right' 	=> esc_html__( 'Slide On Top from Right', 'worknet' ),
					'tablet-slide-ontop-from-top' 		=> esc_html__( 'Slide On Top from Top', 'worknet' ),
					'tablet-slide-ontop-from-bottom' 	=> esc_html__( 'Slide On Top from Bottom', 'worknet' ),
					'tablet-push-from-left' 			=> esc_html__( 'Push In from Left', 'worknet' ),
					'tablet-push-from-right' 			=> esc_html__( 'Push In from Right', 'worknet' ),
				),
				'description' 		=> esc_html__( 'Select how the tablet menu appears.', 'worknet' ),
				'label'  			=> esc_html__( 'Tablet Menu', 'worknet' ),
				'priority' 			=> 10,
				'section'  			=> 'tablet_menu',
				'settings' 			=> 'tablet_menu',
				'type' 				=> 'select'
			)
		);
		$wp_customize->get_setting( 'tablet_menu' )->transport = 'postMessage';





		// Register more fields here.

	} // register_fields()

	/**
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($mod_name) has no defined value, the CSS will not be output.
	 *
	 * @access 		public
	 * @since 		1.0.0
	 * @see 		header_output()
	 * @param 		string 		$selector 		CSS selector
	 * @param 		string 		$style 			The name of the CSS *property* to modify
	 * @param 		string 		$mod_name 		The name of the 'theme_mod' option to fetch
	 * @param 		string 		$prefix 		Optional. Anything that needs to be output before the CSS property
	 * @param 		string 		$postfix 		Optional. Anything that needs to be output after the CSS property
	 * @param 		bool 		$echo 			Optional. Whether to print directly to the page (default: true).
	 * @return 		string 						Returns a single line of CSS with selectors and a property.
	 */
	public function generate_css( $selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true ) {

		$return = '';
		$mod 	= get_theme_mod( $mod_name );
		
		if ( empty( $mod ) ) { return; }

		$return = sprintf('%s { %s:%s; }',
			$selector,
			$style,
			$prefix . $mod . $postfix
		);

		if ( $echo ) {

			echo $return;
			return;

		}

		return $return;

	} // generate_css()

	/**
	 * This will output the custom WordPress settings to the live theme's WP head.
	 *
	 * @hooked 		wp_head
	 * @access 		public
	 * @see 		add_action( 'wp_head', $func )
	 * @since 		1.0.0
	 */
	public function header_output() {

		?><!-- Customizer CSS -->
		<style type="text/css"><?php

			// pattern:
			// $this->generate_css( 'selector', 'style', 'mod_name', 'prefix', 'postfix', true );
			//
			// background-image example:
			// $this->generate_css( '.class', 'background-image', 'background_image_example', 'url(', ')' );

		?></style><!-- Customizer CSS --><?php

		/**
		 * Hides all but the first Soliloquy slide while using Customizer previewer.
		 */
		if ( is_customize_preview() ) {

			?><style type="text/css">

				li.soliloquy-item:not(:first-child) {
					display: none !important;
				}

			</style><!-- Customizer CSS --><?php

		}

	} // header_output()

	/**
	 * Returns TRUE based on which link type is selected, otherwise FALSE
	 *
	 * @param 	object 		$control 			The control object
	 * @return 	bool 							TRUE if conditions are met, otherwise FALSE
	 */
	public function states_of_country_callback( $control ) {

		$country_setting = $control->manager->get_setting('country')->value();

		if ( 'us_state' === $control->id && 'US' === $country_setting ) { return true; }
		if ( 'canada_state' === $control->id && 'CA' === $country_setting ) { return true; }
		if ( 'australia_state' === $control->id && 'AU' === $country_setting ) { return true; }
		if ( 'default_state' === $control->id && ! $this->custom_countries( $country_setting ) ) { return true; }

		return false;

	} // states_of_country_callback()

	/**
	 * Returns true if a country has a custom select menu
	 *
	 * @param 		string 		$country 			The country code to check
	 * @return 		bool 							TRUE if the code is in the array, FALSE otherwise
	 */
	public function custom_countries( $country ) {

		$countries = array( 'US', 'CA', 'AU' );

		return in_array( $country, $countries );

	} // custom_countries()

	/**
	 * Returns an array of countries or a country name.
	 *
	 * @param 		string 		$country 		Country code to return (optional)
	 * @return 		array|string 				Array of countries or a single country name
	 */
	public function country_list( $country = '' ) {

		$countries = array();

		$countries['AF'] = esc_html__( 'Afghanistan (‫افغانستان‬‎)', 'worknet' );
		$countries['AX'] = esc_html__( 'Åland Islands (Åland)', 'worknet' );
		$countries['AL'] = esc_html__( 'Albania (Shqipëri)', 'worknet' );
		$countries['DZ'] = esc_html__( 'Algeria (‫الجزائر‬‎)', 'worknet' );
		$countries['AS'] = esc_html__( 'American Samoa', 'worknet' );
		$countries['AD'] = esc_html__( 'Andorra', 'worknet' );
		$countries['AO'] = esc_html__( 'Angola', 'worknet' );
		$countries['AI'] = esc_html__( 'Anguilla', 'worknet' );
		$countries['AQ'] = esc_html__( 'Antarctica', 'worknet' );
		$countries['AG'] = esc_html__( 'Antigua and Barbuda', 'worknet' );
		$countries['AR'] = esc_html__( 'Argentina', 'worknet' );
		$countries['AM'] = esc_html__( 'Armenia (Հայաստան)', 'worknet' );
		$countries['AW'] = esc_html__( 'Aruba', 'worknet' );
		$countries['AC'] = esc_html__( 'Ascension Island', 'worknet' );
		$countries['AU'] = esc_html__( 'Australia', 'worknet' );
		$countries['AT'] = esc_html__( 'Austria (Österreich)', 'worknet' );
		$countries['AZ'] = esc_html__( 'Azerbaijan (Azərbaycan)', 'worknet' );
		$countries['BS'] = esc_html__( 'Bahamas', 'worknet' );
		$countries['BH'] = esc_html__( 'Bahrain (‫البحرين‬‎)', 'worknet' );
		$countries['BD'] = esc_html__( 'Bangladesh (বাংলাদেশ)', 'worknet' );
		$countries['BB'] = esc_html__( 'Barbados', 'worknet' );
		$countries['BY'] = esc_html__( 'Belarus (Беларусь)', 'worknet' );
		$countries['BE'] = esc_html__( 'Belgium (België)', 'worknet' );
		$countries['BZ'] = esc_html__( 'Belize', 'worknet' );
		$countries['BJ'] = esc_html__( 'Benin (Bénin)', 'worknet' );
		$countries['BM'] = esc_html__( 'Bermuda', 'worknet' );
		$countries['BT'] = esc_html__( 'Bhutan (འབྲུག)', 'worknet' );
		$countries['BO'] = esc_html__( 'Bolivia', 'worknet' );
		$countries['BA'] = esc_html__( 'Bosnia and Herzegovina (Босна и Херцеговина)', 'worknet' );
		$countries['BW'] = esc_html__( 'Botswana', 'worknet' );
		$countries['BV'] = esc_html__( 'Bouvet Island', 'worknet' );
		$countries['BR'] = esc_html__( 'Brazil (Brasil)', 'worknet' );
		$countries['IO'] = esc_html__( 'British Indian Ocean Territory', 'worknet' );
		$countries['VG'] = esc_html__( 'British Virgin Islands', 'worknet' );
		$countries['BN'] = esc_html__( 'Brunei', 'worknet' );
		$countries['BG'] = esc_html__( 'Bulgaria (България)', 'worknet' );
		$countries['BF'] = esc_html__( 'Burkina Faso', 'worknet' );
		$countries['BI'] = esc_html__( 'Burundi (Uburundi)', 'worknet' );
		$countries['KH'] = esc_html__( 'Cambodia (កម្ពុជា)', 'worknet' );
		$countries['CM'] = esc_html__( 'Cameroon (Cameroun)', 'worknet' );
		$countries['CA'] = esc_html__( 'Canada', 'worknet' );
		$countries['IC'] = esc_html__( 'Canary Islands (islas Canarias)', 'worknet' );
		$countries['CV'] = esc_html__( 'Cape Verde (Kabu Verdi)', 'worknet' );
		$countries['BQ'] = esc_html__( 'Caribbean Netherlands', 'worknet' );
		$countries['KY'] = esc_html__( 'Cayman Islands', 'worknet' );
		$countries['CF'] = esc_html__( 'Central African Republic (République centrafricaine)', 'worknet' );
		$countries['EA'] = esc_html__( 'Ceuta and Melilla (Ceuta y Melilla)', 'worknet' );
		$countries['TD'] = esc_html__( 'Chad (Tchad)', 'worknet' );
		$countries['CL'] = esc_html__( 'Chile', 'worknet' );
		$countries['CN'] = esc_html__( 'China (中国)', 'worknet' );
		$countries['CX'] = esc_html__( 'Christmas Island', 'worknet' );
		$countries['CP'] = esc_html__( 'Clipperton Island', 'worknet' );
		$countries['CC'] = esc_html__( 'Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))', 'worknet' );
		$countries['CO'] = esc_html__( 'Colombia', 'worknet' );
		$countries['KM'] = esc_html__( 'Comoros (‫جزر القمر‬‎)', 'worknet' );
		$countries['CD'] = esc_html__( 'Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)', 'worknet' );
		$countries['CG'] = esc_html__( 'Congo (Republic) (Congo-Brazzaville)', 'worknet' );
		$countries['CK'] = esc_html__( 'Cook Islands', 'worknet' );
		$countries['CR'] = esc_html__( 'Costa Rica', 'worknet' );
		$countries['CI'] = esc_html__( 'Côte d’Ivoire', 'worknet' );
		$countries['HR'] = esc_html__( 'Croatia (Hrvatska)', 'worknet' );
		$countries['CU'] = esc_html__( 'Cuba', 'worknet' );
		$countries['CW'] = esc_html__( 'Curaçao', 'worknet' );
		$countries['CY'] = esc_html__( 'Cyprus (Κύπρος)', 'worknet' );
		$countries['CZ'] = esc_html__( 'Czech Republic (Česká republika)', 'worknet' );
		$countries['DK'] = esc_html__( 'Denmark (Danmark)', 'worknet' );
		$countries['DG'] = esc_html__( 'Diego Garcia', 'worknet' );
		$countries['DJ'] = esc_html__( 'Djibouti', 'worknet' );
		$countries['DM'] = esc_html__( 'Dominica', 'worknet' );
		$countries['DO'] = esc_html__( 'Dominican Republic (República Dominicana)', 'worknet' );
		$countries['EC'] = esc_html__( 'Ecuador', 'worknet' );
		$countries['EG'] = esc_html__( 'Egypt (‫مصر‬‎)', 'worknet' );
		$countries['SV'] = esc_html__( 'El Salvador', 'worknet' );
		$countries['GQ'] = esc_html__( 'Equatorial Guinea (Guinea Ecuatorial)', 'worknet' );
		$countries['ER'] = esc_html__( 'Eritrea', 'worknet' );
		$countries['EE'] = esc_html__( 'Estonia (Eesti)', 'worknet' );
		$countries['ET'] = esc_html__( 'Ethiopia', 'worknet' );
		$countries['FK'] = esc_html__( 'Falkland Islands (Islas Malvinas)', 'worknet' );
		$countries['FO'] = esc_html__( 'Faroe Islands (Føroyar)', 'worknet' );
		$countries['FJ'] = esc_html__( 'Fiji', 'worknet' );
		$countries['FI'] = esc_html__( 'Finland (Suomi)', 'worknet' );
		$countries['FR'] = esc_html__( 'France', 'worknet' );
		$countries['GF'] = esc_html__( 'French Guiana (Guyane française)', 'worknet' );
		$countries['PF'] = esc_html__( 'French Polynesia (Polynésie française)', 'worknet' );
		$countries['TF'] = esc_html__( 'French Southern Territories (Terres australes françaises)', 'worknet' );
		$countries['GA'] = esc_html__( 'Gabon', 'worknet' );
		$countries['GM'] = esc_html__( 'Gambia', 'worknet' );
		$countries['GE'] = esc_html__( 'Georgia (საქართველო)', 'worknet' );
		$countries['DE'] = esc_html__( 'Germany (Deutschland)', 'worknet' );
		$countries['GH'] = esc_html__( 'Ghana (Gaana)', 'worknet' );
		$countries['GI'] = esc_html__( 'Gibraltar', 'worknet' );
		$countries['GR'] = esc_html__( 'Greece (Ελλάδα)', 'worknet' );
		$countries['GL'] = esc_html__( 'Greenland (Kalaallit Nunaat)', 'worknet' );
		$countries['GD'] = esc_html__( 'Grenada', 'worknet' );
		$countries['GP'] = esc_html__( 'Guadeloupe', 'worknet' );
		$countries['GU'] = esc_html__( 'Guam', 'worknet' );
		$countries['GT'] = esc_html__( 'Guatemala', 'worknet' );
		$countries['GG'] = esc_html__( 'Guernsey', 'worknet' );
		$countries['GN'] = esc_html__( 'Guinea (Guinée)', 'worknet' );
		$countries['GW'] = esc_html__( 'Guinea-Bissau (Guiné Bissau)', 'worknet' );
		$countries['GY'] = esc_html__( 'Guyana', 'worknet' );
		$countries['HT'] = esc_html__( 'Haiti', 'worknet' );
		$countries['HM'] = esc_html__( 'Heard & McDonald Islands', 'worknet' );
		$countries['HN'] = esc_html__( 'Honduras', 'worknet' );
		$countries['HK'] = esc_html__( 'Hong Kong (香港)', 'worknet' );
		$countries['HU'] = esc_html__( 'Hungary (Magyarország)', 'worknet' );
		$countries['IS'] = esc_html__( 'Iceland (Ísland)', 'worknet' );
		$countries['IN'] = esc_html__( 'India (भारत)', 'worknet' );
		$countries['ID'] = esc_html__( 'Indonesia', 'worknet' );
		$countries['IR'] = esc_html__( 'Iran (‫ایران‬‎)', 'worknet' );
		$countries['IQ'] = esc_html__( 'Iraq (‫العراق‬‎)', 'worknet' );
		$countries['IE'] = esc_html__( 'Ireland', 'worknet' );
		$countries['IM'] = esc_html__( 'Isle of Man', 'worknet' );
		$countries['IL'] = esc_html__( 'Israel (‫ישראל‬‎)', 'worknet' );
		$countries['IT'] = esc_html__( 'Italy (Italia)', 'worknet' );
		$countries['JM'] = esc_html__( 'Jamaica', 'worknet' );
		$countries['JP'] = esc_html__( 'Japan (日本)', 'worknet' );
		$countries['JE'] = esc_html__( 'Jersey', 'worknet' );
		$countries['JO'] = esc_html__( 'Jordan (‫الأردن‬‎)', 'worknet' );
		$countries['KZ'] = esc_html__( 'Kazakhstan (Казахстан)', 'worknet' );
		$countries['KE'] = esc_html__( 'Kenya', 'worknet' );
		$countries['KI'] = esc_html__( 'Kiribati', 'worknet' );
		$countries['XK'] = esc_html__( 'Kosovo (Kosovë)', 'worknet' );
		$countries['KW'] = esc_html__( 'Kuwait (‫الكويت‬‎)', 'worknet' );
		$countries['KG'] = esc_html__( 'Kyrgyzstan (Кыргызстан)', 'worknet' );
		$countries['LA'] = esc_html__( 'Laos (ລາວ)', 'worknet' );
		$countries['LV'] = esc_html__( 'Latvia (Latvija)', 'worknet' );
		$countries['LB'] = esc_html__( 'Lebanon (‫لبنان‬‎)', 'worknet' );
		$countries['LS'] = esc_html__( 'Lesotho', 'worknet' );
		$countries['LR'] = esc_html__( 'Liberia', 'worknet' );
		$countries['LY'] = esc_html__( 'Libya (‫ليبيا‬‎)', 'worknet' );
		$countries['LI'] = esc_html__( 'Liechtenstein', 'worknet' );
		$countries['LT'] = esc_html__( 'Lithuania (Lietuva)', 'worknet' );
		$countries['LU'] = esc_html__( 'Luxembourg', 'worknet' );
		$countries['MO'] = esc_html__( 'Macau (澳門)', 'worknet' );
		$countries['MK'] = esc_html__( 'Macedonia (FYROM) (Македонија)', 'worknet' );
		$countries['MG'] = esc_html__( 'Madagascar (Madagasikara)', 'worknet' );
		$countries['MW'] = esc_html__( 'Malawi', 'worknet' );
		$countries['MY'] = esc_html__( 'Malaysia', 'worknet' );
		$countries['MV'] = esc_html__( 'Maldives', 'worknet' );
		$countries['ML'] = esc_html__( 'Mali', 'worknet' );
		$countries['MT'] = esc_html__( 'Malta', 'worknet' );
		$countries['MH'] = esc_html__( 'Marshall Islands', 'worknet' );
		$countries['MQ'] = esc_html__( 'Martinique', 'worknet' );
		$countries['MR'] = esc_html__( 'Mauritania (‫موريتانيا‬‎)', 'worknet' );
		$countries['MU'] = esc_html__( 'Mauritius (Moris)', 'worknet' );
		$countries['YT'] = esc_html__( 'Mayotte', 'worknet' );
		$countries['MX'] = esc_html__( 'Mexico (México)', 'worknet' );
		$countries['FM'] = esc_html__( 'Micronesia', 'worknet' );
		$countries['MD'] = esc_html__( 'Moldova (Republica Moldova)', 'worknet' );
		$countries['MC'] = esc_html__( 'Monaco', 'worknet' );
		$countries['MN'] = esc_html__( 'Mongolia (Монгол)', 'worknet' );
		$countries['ME'] = esc_html__( 'Montenegro (Crna Gora)', 'worknet' );
		$countries['MS'] = esc_html__( 'Montserrat', 'worknet' );
		$countries['MA'] = esc_html__( 'Morocco (‫المغرب‬‎)', 'worknet' );
		$countries['MZ'] = esc_html__( 'Mozambique (Moçambique)', 'worknet' );
		$countries['MM'] = esc_html__( 'Myanmar (Burma) (မြန်မာ)', 'worknet' );
		$countries['NA'] = esc_html__( 'Namibia (Namibië)', 'worknet' );
		$countries['NR'] = esc_html__( 'Nauru', 'worknet' );
		$countries['NP'] = esc_html__( 'Nepal (नेपाल)', 'worknet' );
		$countries['NL'] = esc_html__( 'Netherlands (Nederland)', 'worknet' );
		$countries['NC'] = esc_html__( 'New Caledonia (Nouvelle-Calédonie)', 'worknet' );
		$countries['NZ'] = esc_html__( 'New Zealand', 'worknet' );
		$countries['NI'] = esc_html__( 'Nicaragua', 'worknet' );
		$countries['NE'] = esc_html__( 'Niger (Nijar)', 'worknet' );
		$countries['NG'] = esc_html__( 'Nigeria', 'worknet' );
		$countries['NU'] = esc_html__( 'Niue', 'worknet' );
		$countries['NF'] = esc_html__( 'Norfolk Island', 'worknet' );
		$countries['MP'] = esc_html__( 'Northern Mariana Islands', 'worknet' );
		$countries['KP'] = esc_html__( 'North Korea (조선 민주주의 인민 공화국)', 'worknet' );
		$countries['NO'] = esc_html__( 'Norway (Norge)', 'worknet' );
		$countries['OM'] = esc_html__( 'Oman (‫عُمان‬‎)', 'worknet' );
		$countries['PK'] = esc_html__( 'Pakistan (‫پاکستان‬‎)', 'worknet' );
		$countries['PW'] = esc_html__( 'Palau', 'worknet' );
		$countries['PS'] = esc_html__( 'Palestine (‫فلسطين‬‎)', 'worknet' );
		$countries['PA'] = esc_html__( 'Panama (Panamá)', 'worknet' );
		$countries['PG'] = esc_html__( 'Papua New Guinea', 'worknet' );
		$countries['PY'] = esc_html__( 'Paraguay', 'worknet' );
		$countries['PE'] = esc_html__( 'Peru (Perú)', 'worknet' );
		$countries['PH'] = esc_html__( 'Philippines', 'worknet' );
		$countries['PN'] = esc_html__( 'Pitcairn Islands', 'worknet' );
		$countries['PL'] = esc_html__( 'Poland (Polska)', 'worknet' );
		$countries['PT'] = esc_html__( 'Portugal', 'worknet' );
		$countries['PR'] = esc_html__( 'Puerto Rico', 'worknet' );
		$countries['QA'] = esc_html__( 'Qatar (‫قطر‬‎)', 'worknet' );
		$countries['RE'] = esc_html__( 'Réunion (La Réunion)', 'worknet' );
		$countries['RO'] = esc_html__( 'Romania (România)', 'worknet' );
		$countries['RU'] = esc_html__( 'Russia (Россия)', 'worknet' );
		$countries['RW'] = esc_html__( 'Rwanda', 'worknet' );
		$countries['BL'] = esc_html__( 'Saint Barthélemy (Saint-Barthélemy)', 'worknet' );
		$countries['SH'] = esc_html__( 'Saint Helena', 'worknet' );
		$countries['KN'] = esc_html__( 'Saint Kitts and Nevis', 'worknet' );
		$countries['LC'] = esc_html__( 'Saint Lucia', 'worknet' );
		$countries['MF'] = esc_html__( 'Saint Martin (Saint-Martin (partie française))', 'worknet' );
		$countries['PM'] = esc_html__( 'Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)', 'worknet' );
		$countries['WS'] = esc_html__( 'Samoa', 'worknet' );
		$countries['SM'] = esc_html__( 'San Marino', 'worknet' );
		$countries['ST'] = esc_html__( 'São Tomé and Príncipe (São Tomé e Príncipe)', 'worknet' );
		$countries['SA'] = esc_html__( 'Saudi Arabia (‫المملكة العربية السعودية‬‎)', 'worknet' );
		$countries['SN'] = esc_html__( 'Senegal (Sénégal)', 'worknet' );
		$countries['RS'] = esc_html__( 'Serbia (Србија)', 'worknet' );
		$countries['SC'] = esc_html__( 'Seychelles', 'worknet' );
		$countries['SL'] = esc_html__( 'Sierra Leone', 'worknet' );
		$countries['SG'] = esc_html__( 'Singapore', 'worknet' );
		$countries['SX'] = esc_html__( 'Sint Maarten', 'worknet' );
		$countries['SK'] = esc_html__( 'Slovakia (Slovensko)', 'worknet' );
		$countries['SI'] = esc_html__( 'Slovenia (Slovenija)', 'worknet' );
		$countries['SB'] = esc_html__( 'Solomon Islands', 'worknet' );
		$countries['SO'] = esc_html__( 'Somalia (Soomaaliya)', 'worknet' );
		$countries['ZA'] = esc_html__( 'South Africa', 'worknet' );
		$countries['GS'] = esc_html__( 'South Georgia & South Sandwich Islands', 'worknet' );
		$countries['KR'] = esc_html__( 'South Korea (대한민국)', 'worknet' );
		$countries['SS'] = esc_html__( 'South Sudan (‫جنوب السودان‬‎)', 'worknet' );
		$countries['ES'] = esc_html__( 'Spain (España)', 'worknet' );
		$countries['LK'] = esc_html__( 'Sri Lanka (ශ්‍රී ලංකාව)', 'worknet' );
		$countries['VC'] = esc_html__( 'St. Vincent & Grenadines', 'worknet' );
		$countries['SD'] = esc_html__( 'Sudan (‫السودان‬‎)', 'worknet' );
		$countries['SR'] = esc_html__( 'Suriname', 'worknet' );
		$countries['SJ'] = esc_html__( 'Svalbard and Jan Mayen (Svalbard og Jan Mayen)', 'worknet' );
		$countries['SZ'] = esc_html__( 'Swaziland', 'worknet' );
		$countries['SE'] = esc_html__( 'Sweden (Sverige)', 'worknet' );
		$countries['CH'] = esc_html__( 'Switzerland (Schweiz)', 'worknet' );
		$countries['SY'] = esc_html__( 'Syria (‫سوريا‬‎)', 'worknet' );
		$countries['TW'] = esc_html__( 'Taiwan (台灣)', 'worknet' );
		$countries['TJ'] = esc_html__( 'Tajikistan', 'worknet' );
		$countries['TZ'] = esc_html__( 'Tanzania', 'worknet' );
		$countries['TH'] = esc_html__( 'Thailand (ไทย)', 'worknet' );
		$countries['TL'] = esc_html__( 'Timor-Leste', 'worknet' );
		$countries['TG'] = esc_html__( 'Togo', 'worknet' );
		$countries['TK'] = esc_html__( 'Tokelau', 'worknet' );
		$countries['TO'] = esc_html__( 'Tonga', 'worknet' );
		$countries['TT'] = esc_html__( 'Trinidad and Tobago', 'worknet' );
		$countries['TA'] = esc_html__( 'Tristan da Cunha', 'worknet' );
		$countries['TN'] = esc_html__( 'Tunisia (‫تونس‬‎)', 'worknet' );
		$countries['TR'] = esc_html__( 'Turkey (Türkiye)', 'worknet' );
		$countries['TM'] = esc_html__( 'Turkmenistan', 'worknet' );
		$countries['TC'] = esc_html__( 'Turks and Caicos Islands', 'worknet' );
		$countries['TV'] = esc_html__( 'Tuvalu', 'worknet' );
		$countries['UM'] = esc_html__( 'U.S. Outlying Islands', 'worknet' );
		$countries['VI'] = esc_html__( 'U.S. Virgin Islands', 'worknet' );
		$countries['UG'] = esc_html__( 'Uganda', 'worknet' );
		$countries['UA'] = esc_html__( 'Ukraine (Україна)', 'worknet' );
		$countries['AE'] = esc_html__( 'United Arab Emirates (‫الإمارات العربية المتحدة‬‎)', 'worknet' );
		$countries['GB'] = esc_html__( 'United Kingdom', 'worknet' );
		$countries['US'] = esc_html__( 'United States', 'worknet' );
		$countries['UY'] = esc_html__( 'Uruguay', 'worknet' );
		$countries['UZ'] = esc_html__( 'Uzbekistan (Oʻzbekiston)', 'worknet' );
		$countries['VU'] = esc_html__( 'Vanuatu', 'worknet' );
		$countries['VA'] = esc_html__( 'Vatican City (Città del Vaticano)', 'worknet' );
		$countries['VE'] = esc_html__( 'Venezuela', 'worknet' );
		$countries['VN'] = esc_html__( 'Vietnam (Việt Nam)', 'worknet' );
		$countries['WF'] = esc_html__( 'Wallis and Futuna', 'worknet' );
		$countries['EH'] = esc_html__( 'Western Sahara (‫الصحراء الغربية‬‎)', 'worknet' );
		$countries['YE'] = esc_html__( 'Yemen (‫اليمن‬‎)', 'worknet' );
		$countries['ZM'] = esc_html__( 'Zambia', 'worknet' );
		$countries['ZW'] = esc_html__( 'Zimbabwe', 'worknet' );

		if ( ! empty( $country ) ) {

			return $countries[$country];

		}

		return $countries;

	} // country_list()

	/**
	 * Loads files for Custom Controls.
	 *
	 * @hooked
	 */
	public function load_customize_controls() {

		$files[] = 'control-editor.php';
		$files[] = 'control-layout-picker.php';
		$files[] = 'control-multiple-checkboxes.php';
		$files[] = 'control-select-category.php';
		$files[] = 'control-select-menu.php';
		$files[] = 'control-select-post.php';
		$files[] = 'control-select-post-type.php';
		//$files[] = 'control-select-recent-post.php';
		$files[] = 'control-select-tag.php';
		$files[] = 'control-select-taxonomy.php';
		$files[] = 'control-select-user.php';

		foreach ( $files as $file ) {

			require_once( trailingslashit( get_stylesheet_directory() ) . 'classes/customizer/' . $file );

		}

	} // load_customize_controls()

	/**
	 * Returns an array of the Australian states and Territories.
	 * The optional parameters allows for returning just one state.
	 *
	 * @param 		string 		$state 		The state to return.
	 * @return 		array 					An array containing states.
	 */
	private function states_list_australia( $state = '' ) {

		$states = array();

		$states['ACT'] = esc_html__( 'Australian Capital Territory', 'worknet' );
		$states['NSW'] = esc_html__( 'New South Wales', 'worknet' );
		$states['NT' ] = esc_html__( 'Northern Territory', 'worknet' );
		$states['QLD'] = esc_html__( 'Queensland', 'worknet' );
		$states['SA' ] = esc_html__( 'South Australia', 'worknet' );
		$states['TAS'] = esc_html__( 'Tasmania', 'worknet' );
		$states['VIC'] = esc_html__( 'Victoria', 'worknet' );
		$states['WA' ] = esc_html__( 'Western Australia', 'worknet' );

		if ( ! empty( $state ) ) {

			return $states[$state];

		}

		return $states;

	} // states_list_australia()



	/**
	 * Returns an array of the Canadian states and Territories.
	 * The optional parameters allows for returning just one state.
	 *
	 * @param 		string 		$state 		The state to return.
	 * @return 		array 					An array containing states.
	 */
	private function states_list_canada( $state = '' ) {

		$states = array();

		$states['AB'] = esc_html__( 'Alberta', 'worknet' );
		$states['BC'] = esc_html__( 'British Columbia', 'worknet' );
		$states['MB'] = esc_html__( 'Manitoba', 'worknet' );
		$states['NB'] = esc_html__( 'New Brunswick', 'worknet' );
		$states['NL'] = esc_html__( 'Newfoundland and Labrador', 'worknet' );
		$states['NT'] = esc_html__( 'Northwest Territories', 'worknet' );
		$states['NS'] = esc_html__( 'Nova Scotia', 'worknet' );
		$states['NU'] = esc_html__( 'Nunavut', 'worknet' );
		$states['ON'] = esc_html__( 'Ontario', 'worknet' );
		$states['PE'] = esc_html__( 'Prince Edward Island', 'worknet' );
		$states['QC'] = esc_html__( 'Quebec', 'worknet' );
		$states['SK'] = esc_html__( 'Saskatchewan', 'worknet' );
		$states['YT'] = esc_html__( 'Yukon', 'worknet' );

		if ( ! empty( $state ) ) {

			return $states[$state];

		}

		return $states;

	} // states_list_canada()

	/**
	 * Returns an array of the US states and Territories.
	 * The optional parameters allows for returning just one state.
	 *
	 * @param 		string 		$state 		The state to return.
	 * @return 		array 					An array containing states.
	 */
	private function states_list_unitedstates( $state = '' ) {

		$states = array();

		$states['AL'] = esc_html__( 'Alabama', 'worknet' );
		$states['AK'] = esc_html__( 'Alaska', 'worknet' );
		$states['AZ'] = esc_html__( 'Arizona', 'worknet' );
		$states['AR'] = esc_html__( 'Arkansas', 'worknet' );
		$states['CA'] = esc_html__( 'California', 'worknet' );
		$states['CO'] = esc_html__( 'Colorado', 'worknet' );
		$states['CT'] = esc_html__( 'Connecticut', 'worknet' );
		$states['DE'] = esc_html__( 'Delaware', 'worknet' );
		$states['DC'] = esc_html__( 'District of Columbia', 'worknet' );
		$states['FL'] = esc_html__( 'Florida', 'worknet' );
		$states['GA'] = esc_html__( 'Georgia', 'worknet' );
		$states['HI'] = esc_html__( 'Hawaii', 'worknet' );
		$states['ID'] = esc_html__( 'Idaho', 'worknet' );
		$states['IL'] = esc_html__( 'Illinois', 'worknet' );
		$states['IN'] = esc_html__( 'Indiana', 'worknet' );
		$states['IA'] = esc_html__( 'Iowa', 'worknet' );
		$states['KS'] = esc_html__( 'Kansas', 'worknet' );
		$states['KY'] = esc_html__( 'Kentucky', 'worknet' );
		$states['LA'] = esc_html__( 'Louisiana', 'worknet' );
		$states['ME'] = esc_html__( 'Maine', 'worknet' );
		$states['MD'] = esc_html__( 'Maryland', 'worknet' );
		$states['MA'] = esc_html__( 'Massachusetts', 'worknet' );
		$states['MI'] = esc_html__( 'Michigan', 'worknet' );
		$states['MN'] = esc_html__( 'Minnesota', 'worknet' );
		$states['MS'] = esc_html__( 'Mississippi', 'worknet' );
		$states['MO'] = esc_html__( 'Missouri', 'worknet' );
		$states['MT'] = esc_html__( 'Montana', 'worknet' );
		$states['NE'] = esc_html__( 'Nebraska', 'worknet' );
		$states['NV'] = esc_html__( 'Nevada', 'worknet' );
		$states['NH'] = esc_html__( 'New Hampshire', 'worknet' );
		$states['NJ'] = esc_html__( 'New Jersey', 'worknet' );
		$states['NM'] = esc_html__( 'New Mexico', 'worknet' );
		$states['NY'] = esc_html__( 'New York', 'worknet' );
		$states['NC'] = esc_html__( 'North Carolina', 'worknet' );
		$states['ND'] = esc_html__( 'North Dakota', 'worknet' );
		$states['OH'] = esc_html__( 'Ohio', 'worknet' );
		$states['OK'] = esc_html__( 'Oklahoma', 'worknet' );
		$states['OR'] = esc_html__( 'Oregon', 'worknet' );
		$states['PA'] = esc_html__( 'Pennsylvania', 'worknet' );
		$states['RI'] = esc_html__( 'Rhode Island', 'worknet' );
		$states['SC'] = esc_html__( 'South Carolina', 'worknet' );
		$states['SD'] = esc_html__( 'South Dakota', 'worknet' );
		$states['TN'] = esc_html__( 'Tennessee', 'worknet' );
		$states['TX'] = esc_html__( 'Texas', 'worknet' );
		$states['UT'] = esc_html__( 'Utah', 'worknet' );
		$states['VT'] = esc_html__( 'Vermont', 'worknet' );
		$states['VA'] = esc_html__( 'Virginia', 'worknet' );
		$states['WA'] = esc_html__( 'Washington', 'worknet' );
		$states['WV'] = esc_html__( 'West Virginia', 'worknet' );
		$states['WI'] = esc_html__( 'Wisconsin', 'worknet' );
		$states['WY'] = esc_html__( 'Wyoming', 'worknet' );
		$states['AS'] = esc_html__( 'American Samoa', 'worknet' );
		$states['AA'] = esc_html__( 'Armed Forces America (except Canada)', 'worknet' );
		$states['AE'] = esc_html__( 'Armed Forces Africa/Canada/Europe/Middle East', 'worknet' );
		$states['AP'] = esc_html__( 'Armed Forces Pacific', 'worknet' );
		$states['FM'] = esc_html__( 'Federated States of Micronesia', 'worknet' );
		$states['GU'] = esc_html__( 'Guam', 'worknet' );
		$states['MH'] = esc_html__( 'Marshall Islands', 'worknet' );
		$states['MP'] = esc_html__( 'Northern Mariana Islands', 'worknet' );
		$states['PR'] = esc_html__( 'Puerto Rico', 'worknet' );
		$states['PW'] = esc_html__( 'Palau', 'worknet' );
		$states['VI'] = esc_html__( 'Virgin Islands', 'worknet' );

		if ( ! empty( $state ) ) {

			return $states[$state];

		}

		return $states;

	} // states_list_unitedstates()

} // class
