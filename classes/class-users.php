<?php

/**
 * A class of methods related to users and their profiles.
 *
 * @since 			1.0.0
 * @package 		Worknet
 * @subpackage 		Worknet/classes
 */
class Worknet_Users {

	/**
	 * Constructor
	 *
	 * @since 		1.0.0
	 */
	public function __construct() {}

	/**
	 * Registers all the WordPress hooks and filters for this class.
	 */
	public function hooks() {

		add_filter( 'user_contactmethods', array( $this, 'remove_contact_methods' ), 10, 1 );
		add_filter( 'user_contactmethods', array( $this, 'add_contact_methods' ), 10, 1 );

	} // hooks()

	/**
	 * Adds contact method fields to the user profiles.
	 *
	 * @param 		array 		$contactmethods 		The current contact methods.
	 * @return 		array 								The modified contact methods.
	 */
	public function add_contact_methods( $contactmethods ) {

		$contactmethods['linkedin'] 	= __( 'LinkedIn' , 'worknet' );
		$contactmethods['youtube'] 		= __( 'YouTube' , 'worknet' );
		$contactmethods['vimeo'] 		= __( 'Vimeo' , 'worknet' );
		$contactmethods['wordpress'] 	= __( 'WordPress' , 'worknet' );
		$contactmethods['pinterest'] 	= __( 'Pinterest' , 'worknet' );
		$contactmethods['instagram'] 	= __( 'Instagram' , 'worknet' );

		return $contactmethods;

	} // add_contact_methods()

	/**
	 * Removes contact method fields from the user profiles.
	 *
	 * @param 		array 		$contactmethods 		The current contact methods.
	 * @return 		array 								The modified contact methods.
	 */
	public function remove_contact_methods( $contactmethods ) {

		unset( $contactmethods[ 'aim' ] );
		unset( $contactmethods[ 'yim' ] );
		unset( $contactmethods[ 'jabber' ] );

		return $contactmethods;

	} // remove_contact_methods()

} // class
