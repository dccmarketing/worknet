<?php
/**
 * The markup for the Subtitle metabox.
 *
 * @package 		Worknet
 */

wp_nonce_field( PARENT_THEME_SLUG, 'nonce_worknet_subtitle' );

$atts['id'] 			= 'subtitle';
$atts['name'] 			= 'subtitle';

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'text', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );
