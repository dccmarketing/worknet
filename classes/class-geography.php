<?php

class Worknet_Geography {
	
	var $country;
	
	var $state;
	
	public function __construct() {}
		
	public function hooks() {
		
		
		
	} // hooks()
	
	/**
	 * Returns an array of countries or a country name.
	 *
	 * @param 		string 		$country 		Country code to return (optional)
	 * @return 		array|string 				Array of countries or a single country name
	 */
	protected function country_list( $country = '' ) {

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
	 * Returns either a single country name or an array of countries.
	 * 
	 * @param 		string 			$country 		Optional country abbreviation.
	 * @return 		string|array 					Country name or array of countries.
	 */
	public function get_countries( $country = '' ) {
		
		return $this->country_list( $country );
		
	} // get_countries()
	
	/**
	 * Returns either a single state name or an array of states.
	 * 
	 * @param 		string 			$country 		Country abbreviation or name.
	 * @param 		string 			$state 			State abbreviation or name.
	 * @return 		string|array 					State name, abbreviation, or array of states.
	 */
	public function get_state( $country, $state, $return = '' ) {
		
		if ( empty( $country ) ) { return FALSE; }
		if ( empty( $state ) ) { return FALSE; }
		
		switch( $country ) {
			
			case 'Australia'	: 
			case 'AUS' 			: return $this->get_states_australia( $state, $return ); break;
			case 'Canada' 		: 
			case 'CAN' 			: return $this->get_states_canada( $state, $return ); break;
			case 'US' 			: 
			case 'United States': return $this->get_states_us( $state, $return ); break;
			
		}
		
	} // get_state()
	
	/**
	 * Returns an array of the Australian states and Territories.
	 * 
	 * The optional $state parameter can be either the abbreviation or the name of
	 * a state. The abbreviation will return the states full name. The name will
	 * return the state's abbreviation.
	 *
	 * The optional $return parameters allows for returning either an array 
	 * of state names or an array of state abbreviations. Names is the default.
	 * To return the array of abbreviations, make $return either "abbreviations"
	 * or "abbrs".
	 *
	 * @param 		string 				$state 			The state to return.
	 * @param 		string 				$return 		Optional value to specify returning
	 * 														either the array or state name or
	 * 														state abbreviations.
	 * @return 		array/string 						An array of states, state name,
	 *														or state abbreviation.
	 */
	protected function get_states_australia( $state = '', $return = '' ) {

		$names = array();
		$names['ACT'] = esc_html__( 'Australian Capital Territory', 'worknet' );
		$names['NSW'] = esc_html__( 'New South Wales', 'worknet' );
		$names['NT' ] = esc_html__( 'Northern Territory', 'worknet' );
		$names['QLD'] = esc_html__( 'Queensland', 'worknet' );
		$names['SA' ] = esc_html__( 'South Australia', 'worknet' );
		$names['TAS'] = esc_html__( 'Tasmania', 'worknet' );
		$names['VIC'] = esc_html__( 'Victoria', 'worknet' );
		$names['WA' ] = esc_html__( 'Western Australia', 'worknet' );
		
		$abbrs = array();
		$abbrs['Australian Capital Territory'] 	= esc_html__( 'ACT', 'worknet' );
		$abbrs['New South Wales'] 				= esc_html__( 'NSW', 'worknet' );
		$abbrs['Northern Territory' ] 			= esc_html__( 'NT', 'worknet' );
		$abbrs['Queensland'] 					= esc_html__( 'QLD', 'worknet' );
		$abbrs['South Australia' ] 				= esc_html__( 'SA', 'worknet' );
		$abbrs['Tasmania'] 						= esc_html__( 'TAS', 'worknet' );
		$abbrs['Victoria'] 						= esc_html__( 'VIC', 'worknet' );
		$abbrs['Western Australia' ] 			= esc_html__( 'WA', 'worknet' );
		
		if ( empty( $state ) ) {
			
			if ( 'abbreviations' === $return || 'abbrs' === $return ) {
				
				return $abbrs;
				
			} else {
			
				return $names;
				
			}
			
		}
		
		if ( 3 < count( $state ) ) {
			
			return $abbrs[$state];
			
		} else {
			
			return $names[$state];
			
		}

	} // get_states_australia()
	
	/**
	 * Returns an array of the Canadian states and Territories.
	 * 
	 * The optional $state parameter can be either the abbreviation or the name of
	 * a state. The abbreviation will return the states full name. The name will
	 * return the state's abbreviation.
	 *
	 * The optional $return parameters allows for returning either an array 
	 * of state names or an array of state abbreviations. Names is the default.
	 * To return the array of abbreviations, make $return either "abbreviations"
	 * or "abbrs".
	 *
	 * @param 		string 				$state 			The state to return.
	 * @param 		string 				$return 		Optional value to specify returning
	 * 														either the array or state name or
	 * 														state abbreviations.
	 * @return 		array/string 						An array of states, state name,
	 *														or state abbreviation.
	 */
	protected function get_states_canada( $state = '', $return = '' ) {

		$names = array();
		$names['AB'] = esc_html__( 'Alberta', 'worknet' );
		$names['BC'] = esc_html__( 'British Columbia', 'worknet' );
		$names['MB'] = esc_html__( 'Manitoba', 'worknet' );
		$names['NB'] = esc_html__( 'New Brunswick', 'worknet' );
		$names['NL'] = esc_html__( 'Newfoundland and Labrador', 'worknet' );
		$names['NT'] = esc_html__( 'Northwest Territories', 'worknet' );
		$names['NS'] = esc_html__( 'Nova Scotia', 'worknet' );
		$names['NU'] = esc_html__( 'Nunavut', 'worknet' );
		$names['ON'] = esc_html__( 'Ontario', 'worknet' );
		$names['PE'] = esc_html__( 'Prince Edward Island', 'worknet' );
		$names['QC'] = esc_html__( 'Quebec', 'worknet' );
		$names['SK'] = esc_html__( 'Saskatchewan', 'worknet' );
		$names['YT'] = esc_html__( 'Yukon', 'worknet' );
		
		$abbrs = array();
		$abbrs['Alberta'] 					= esc_html__( 'AB', 'worknet' );
		$abbrs['British Columbia'] 			= esc_html__( 'BC', 'worknet' );
		$abbrs['Manitoba'] 					= esc_html__( 'MB', 'worknet' );
		$abbrs['New Brunswick'] 			= esc_html__( 'NB', 'worknet' );
		$abbrs['Newfoundland and Labrador'] = esc_html__( 'NL', 'worknet' );
		$abbrs['Newfoundland'] 				= esc_html__( 'NL', 'worknet' );
		$abbrs['Labrador'] 					= esc_html__( 'NL', 'worknet' );
		$abbrs['Northwest Territories'] 	= esc_html__( 'NT', 'worknet' );
		$abbrs['Nova Scotia'] 				= esc_html__( 'NS', 'worknet' );
		$abbrs['Nunavut'] 					= esc_html__( 'NU', 'worknet' );
		$abbrs['Ontario'] 					= esc_html__( 'ON', 'worknet' );
		$abbrs['Prince Edward Island'] 		= esc_html__( 'PE', 'worknet' );
		$abbrs['Quebec'] 					= esc_html__( 'QE', 'worknet' );
		$abbrs['Saskatchewan'] 				= esc_html__( 'SK', 'worknet' );
		$abbrs['Yukon'] 					= esc_html__( 'YT', 'worknet' );

		if ( empty( $state ) ) {
			
			if ( 'abbreviations' === $return || 'abbrs' === $return ) {
				
				return $abbrs;
				
			} else {
			
				return $names;
				
			}
			
		}
		
		if ( 2 < count( $state ) ) {
			
			return $abbrs[$state];
			
		} else {
			
			return $names[$state];
			
		}

	} // get_states_canada()
	
	/**
	 * Returns the abbreviation for a state or an array of states.
	 *
	 * The optional $state parameter can be either the abbreviation or the name of
	 * a state. The abbreviation will return the states full name. The name will
	 * return the state's abbreviation.
	 *
	 * The optional $return parameters allows for returning either an array 
	 * of state names or an array of state abbreviations. Names is the default.
	 * To return the array of abbreviations, make $return either "abbreviations"
	 * or "abbrs".
	 *
	 * @param 		string 				$state 			The state abbreviation.
	 * @param 		string 				$return 		Optional value to specify returning
	 * 														either the array or state name or
	 * 														state abbreviations.
	 * @return 		string|srray 		$states 		Either the name of a state
	 *                                    					or an array of state names.
	 */
	protected function get_states_us( $state = '', $return = '' ) {

		$names 			= array();
		$names['AL'] 	= esc_html__( 'Alabama', 'worknet' );
		$names['AK'] 	= esc_html__( 'Alaska', 'worknet' );
		$names['AZ'] 	= esc_html__( 'Arizona', 'worknet' );
		$names['AR'] 	= esc_html__( 'Arkansas', 'worknet' );
		$names['CA'] 	= esc_html__( 'California', 'worknet' );
		$names['CO'] 	= esc_html__( 'Colorado', 'worknet' );
		$names['CT'] 	= esc_html__( 'Connecticut', 'worknet' );
		$names['DE'] 	= esc_html__( 'Delaware', 'worknet' );
		$names['DC'] 	= esc_html__( 'District of Columbia', 'worknet' );
		$names['FL'] 	= esc_html__( 'Florida', 'worknet' );
		$names['GA'] 	= esc_html__( 'Georgia', 'worknet' );
		$names['HI'] 	= esc_html__( 'Hawaii', 'worknet' );
		$names['ID'] 	= esc_html__( 'Idaho', 'worknet' );
		$names['IL'] 	= esc_html__( 'Illinois', 'worknet' );
		$names['IN'] 	= esc_html__( 'Indiana', 'worknet' );
		$names['IA'] 	= esc_html__( 'Iowa', 'worknet' );
		$names['KS'] 	= esc_html__( 'Kansas', 'worknet' );
		$names['KY'] 	= esc_html__( 'Kentucky', 'worknet' );
		$names['LA'] 	= esc_html__( 'Louisiana', 'worknet' );
		$names['ME'] 	= esc_html__( 'Maine', 'worknet' );
		$names['MD'] 	= esc_html__( 'Maryland', 'worknet' );
		$names['MA'] 	= esc_html__( 'Massachusetts', 'worknet' );
		$names['MI'] 	= esc_html__( 'Michigan', 'worknet' );
		$names['MN'] 	= esc_html__( 'Minnesota', 'worknet' );
		$names['MS'] 	= esc_html__( 'Mississippi', 'worknet' );
		$names['MO'] 	= esc_html__( 'Missouri', 'worknet' );
		$names['MT'] 	= esc_html__( 'Montana', 'worknet' );
		$names['NE'] 	= esc_html__( 'Nebraska', 'worknet' );
		$names['NV'] 	= esc_html__( 'Nevada', 'worknet' );
		$names['NH'] 	= esc_html__( 'New Hampshire', 'worknet' );
		$names['NJ'] 	= esc_html__( 'New Jersey', 'worknet' );
		$names['NM'] 	= esc_html__( 'New Mexico', 'worknet' );
		$names['NY'] 	= esc_html__( 'New York', 'worknet' );
		$names['NC'] 	= esc_html__( 'North Carolina', 'worknet' );
		$names['ND'] 	= esc_html__( 'North Dakota', 'worknet' );
		$names['OH'] 	= esc_html__( 'Ohio', 'worknet' );
		$names['OK'] 	= esc_html__( 'Oklahoma', 'worknet' );
		$names['OR'] 	= esc_html__( 'Oregon', 'worknet' );
		$names['PA'] 	= esc_html__( 'Pennsylvania', 'worknet' );
		$names['RI'] 	= esc_html__( 'Rhode Island', 'worknet' );
		$names['SC'] 	= esc_html__( 'South Carolina', 'worknet' );
		$names['SD'] 	= esc_html__( 'South Dakota', 'worknet' );
		$names['TN'] 	= esc_html__( 'Tennessee', 'worknet' );
		$names['TX'] 	= esc_html__( 'Texas', 'worknet' );
		$names['UT'] 	= esc_html__( 'Utah', 'worknet' );
		$names['VT'] 	= esc_html__( 'Vermont', 'worknet' );
		$names['VA'] 	= esc_html__( 'Virginia', 'worknet' );
		$names['WA'] 	= esc_html__( 'Washington', 'worknet' );
		$names['WV'] 	= esc_html__( 'West Virginia', 'worknet' );
		$names['WI'] 	= esc_html__( 'Wisconsin', 'worknet' );
		$names['WY'] 	= esc_html__( 'Wyoming', 'worknet' );
		$names['AS'] 	= esc_html__( 'American Samoa', 'worknet' );
		$names['AA'] 	= esc_html__( 'Armed Forces America (except Canada)', 'worknet' );
		$names['AE'] 	= esc_html__( 'Armed Forces Africa/Canada/Europe/Middle East', 'worknet' );
		$names['AP'] 	= esc_html__( 'Armed Forces Pacific', 'worknet' );
		$names['FM'] 	= esc_html__( 'Federated States of Micronesia', 'worknet' );
		$names['GU'] 	= esc_html__( 'Guam', 'worknet' );
		$names['MH'] 	= esc_html__( 'Marshall Islands', 'worknet' );
		$names['MP'] 	= esc_html__( 'Northern Mariana Islands', 'worknet' );
		$names['PR'] 	= esc_html__( 'Puerto Rico', 'worknet' );
		$names['PW'] 	= esc_html__( 'Palau', 'worknet' );
		$names['VI'] 	= esc_html__( 'Virgin Islands', 'worknet' );
		
		$abbrs 										= array();
		$abbrs['Alabama'] 							= esc_html__( 'AL', 'worknet' );
		$abbrs['Alaska'] 							= esc_html__( 'AK', 'worknet' );
		$abbrs['Arizona'] 							= esc_html__( 'AZ', 'worknet' );
		$abbrs['Arkansas'] 							= esc_html__( 'AR', 'worknet' );
		$abbrs['California'] 						= esc_html__( 'CA', 'worknet' );
		$abbrs['Colorado'] 							= esc_html__( 'CO', 'worknet' );
		$abbrs['Connecticut'] 						= esc_html__( 'CT', 'worknet' );
		$abbrs['Delaware'] 							= esc_html__( 'DE', 'worknet' );
		$abbrs['Florida'] 							= esc_html__( 'FL', 'worknet' );
		$abbrs['Georgia'] 							= esc_html__( 'GA', 'worknet' );
		$abbrs['Hawaii'] 							= esc_html__( 'HI', 'worknet' );
		$abbrs['Idaho'] 							= esc_html__( 'ID', 'worknet' );
		$abbrs['Illinois'] 							= esc_html__( 'IL', 'worknet' );
		$abbrs['Indiana'] 							= esc_html__( 'IN', 'worknet' );
		$abbrs['Iowa'] 								= esc_html__( 'IA', 'worknet' );
		$abbrs['Kansas'] 							= esc_html__( 'KS', 'worknet' );
		$abbrs['Kentucky'] 							= esc_html__( 'KY', 'worknet' );
		$abbrs['Louisiana'] 						= esc_html__( 'LA', 'worknet' );
		$abbrs['Maine'] 							= esc_html__( 'ME', 'worknet' );
		$abbrs['Maryland'] 							= esc_html__( 'MD', 'worknet' );
		$abbrs['Massachusetts'] 					= esc_html__( 'MA', 'worknet' );
		$abbrs['Michigan'] 							= esc_html__( 'MI', 'worknet' );
		$abbrs['Minnesota'] 						= esc_html__( 'MN', 'worknet' );
		$abbrs['Mississippi'] 						= esc_html__( 'MS', 'worknet' );
		$abbrs['Missouri'] 							= esc_html__( 'MO', 'worknet' );
		$abbrs['Montana'] 							= esc_html__( 'MT', 'worknet' );
		$abbrs['Nebraska'] 							= esc_html__( 'NE', 'worknet' );
		$abbrs['Nevada'] 							= esc_html__( 'NV', 'worknet' );
		$abbrs['New Hampshire'] 					= esc_html__( 'NH', 'worknet' );
		$abbrs['New Jersey'] 						= esc_html__( 'NJ', 'worknet' );
		$abbrs['New Mexico'] 						= esc_html__( 'NM', 'worknet' );
		$abbrs['New York'] 							= esc_html__( 'NY', 'worknet' );
		$abbrs['North Carolina'] 					= esc_html__( 'NC', 'worknet' );
		$abbrs['North Dakota'] 						= esc_html__( 'ND', 'worknet' );
		$abbrs['Ohio'] 								= esc_html__( 'OH', 'worknet' );
		$abbrs['Oklahoma'] 							= esc_html__( 'OK', 'worknet' );
		$abbrs['Oregon'] 							= esc_html__( 'OR', 'worknet' );
		$abbrs['Pennsylvania'] 						= esc_html__( 'PA', 'worknet' );
		$abbrs['Rhode Island'] 						= esc_html__( 'RI', 'worknet' );
		$abbrs['South Carolina'] 					= esc_html__( 'SC', 'worknet' );
		$abbrs['South Dakota'] 						= esc_html__( 'SD', 'worknet' );
		$abbrs['Tennessee'] 						= esc_html__( 'TN', 'worknet' );
		$abbrs['Texas'] 							= esc_html__( 'TX', 'worknet' );
		$abbrs['Utah'] 								= esc_html__( 'UT', 'worknet' );
		$abbrs['Vermont'] 							= esc_html__( 'VT', 'worknet' );
		$abbrs['Virginia'] 							= esc_html__( 'VA', 'worknet' );
		$abbrs['Washington'] 						= esc_html__( 'WA', 'worknet' );
		$abbrs['West Virginia'] 					= esc_html__( 'WV', 'worknet' );
		$abbrs['Wisconsin'] 						= esc_html__( 'WI', 'worknet' );
		$abbrs['Wyoming'] 							= esc_html__( 'WY', 'worknet' );
		
		$abbrs['American Samoa'] 					= esc_html__( 'AS', 'worknet' );
		$abbrs['Armed Forces America'] 				= esc_html__( 'AA', 'worknet' );
		$abbrs['Armed Forces Africa'] 				= esc_html__( 'AE', 'worknet' );
		$abbrs['Armed Forces Canada'] 				= esc_html__( 'AE', 'worknet' );
		$abbrs['Armed Forces Europe'] 				= esc_html__( 'AE', 'worknet' );
		$abbrs['Armed Forces Middle East'] 			= esc_html__( 'AE', 'worknet' );
		$abbrs['Armed Forces Pacific'] 				= esc_html__( 'AP', 'worknet' );
		$abbrs['Federated States of Micronesia'] 	= esc_html__( 'FM', 'worknet' );
		$abbrs['Micronesia'] 						= esc_html__( 'FM', 'worknet' );
		$abbrs['Guam'] 								= esc_html__( 'GU', 'worknet' );
		$abbrs['Marshall Islands'] 					= esc_html__( 'MH', 'worknet' );
		$abbrs['Northern Mariana Islands'] 			= esc_html__( 'MP', 'worknet' );
		$abbrs['Puerto Rico'] 						= esc_html__( 'PR', 'worknet' );
		$abbrs['Palau'] 							= esc_html__( 'PW', 'worknet' );
		$abbrs['Virgin Islands'] 					= esc_html__( 'VI', 'worknet' );

		if ( empty( $state ) ) {
			
			if ( 'abbreviations' === $return || 'abbrs' === $return ) {
				
				return $abbrs;
				
			} else {
			
				return $names;
				
			}
			
		}
		
		if ( 2 < count( $state ) ) {
			
			return $abbrs[$state];
			
		} else {
			
			return $names[$state];
			
		}

	} // get_states_us()
	
} // class