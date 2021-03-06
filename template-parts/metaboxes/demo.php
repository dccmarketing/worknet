<?php
/**
 * The markup for the Subtitle metabox.
 *
 * @package 		Worknet
 */

wp_nonce_field( PARENT_THEME_SLUG, 'nonce_worknet_demo' );



//echo '<pre>'; print_r( $this->meta ); echo '</pre>';



$atts['id'] 	= 'field-checkbox';
$atts['name'] 	= 'field-checkbox';
$props['label'] = __( 'This is a checkbox.', 'worknet' );

/**
 * This check is different from other fields. Only change the value for a checkbox
 * if the key exists in the meta array. Otherwise, leave it at the default value.
 * This handles a checked or unchecked default value.
 *
 * Checking for a not empty meta value while having a checked default value never
 * saves the unchecked state.
 */
if ( array_key_exists( $atts['id'], $this->meta ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'checkbox', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-color';
$atts['name'] 			= 'field-color';
$props['description'] 	= __( 'This is a color field.', 'worknet' );
$props['label'] 		= __( 'Color', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'color', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-date';
$atts['name'] 			= 'field-date';
$props['description'] 	= __( 'This is a date field.', 'worknet' );
$props['label'] 		= __( 'Date', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'date', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-editor';
$props['description'] 	= __( 'This is an editor field.', 'worknet' );
$props['settings'] 		= array( 'class' => '', );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'editor', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-file';
$atts['name'] 			= 'field-file';
$props['description'] 	= __( 'This is a file uploading field.', 'worknet' );
$props['label'] 		= __( 'File Upload', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'file-upload', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-form';
$atts['name'] 			= 'field-form';
$props['description'] 	= __( 'This is a form selection field.', 'worknet' );
$props['label'] 		= __( 'Forms', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts = apply_filters( 'worknet-field-' . $atts['id'], $atts );

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select-formidable-form', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-image';
$atts['name'] 			= 'field-image';
$props['description'] 	= __( 'This is a image uploading field.', 'worknet' );
$props['label'] 		= __( 'Image Upload', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'image-upload', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-radios';
$atts['name'] 			= 'field-radios';
$props['description'] 	= __( 'This is a set of radios.', 'worknet' );
$props['selections'][] 	= array( 'label' => __( 'One', 'worknet' ), 'value' => 'one' );
$props['selections'][] 	= array( 'label' => __( 'Two', 'worknet' ), 'value' => 'two' );
$props['selections'][] 	= array( 'label' => __( 'Three', 'worknet' ), 'value' => 'three' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'radio', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-menu';
$atts['name'] 			= 'field-menu';
$props['description'] 	= __( 'This is a menu selection field.', 'worknet' );
$props['label'] 		= __( 'Menus', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select-menu', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-page';
$atts['name'] 			= 'field-page';
$props['description'] 	= __( 'This is a page selection field.', 'worknet' );
$props['label'] 		= __( 'Pages', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select-page', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );

?></p><?php



$atts['id'] 			= 'field-slider';
$atts['name'] 			= 'field-slider';
$props['description'] 	= __( 'This is a slider selection field.', 'worknet' );
$props['label'] 		= __( 'Sliders', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select-slider', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-select';
$atts['name'] 			= 'field-select';
$props['description'] 	= __( 'This is a select field.', 'worknet' );
$props['label'] 		= __( 'Select', 'worknet' );
$props['selections'][] 	= array( 'label' => __( 'One', 'worknet' ), 'value' => 'one' );
$props['selections'][] 	= array( 'label' => __( 'Two', 'worknet' ), 'value' => 'two' );
$props['selections'][] 	= array( 'label' => __( 'Three', 'worknet' ), 'value' => 'three' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-tax';
$atts['name'] 			= 'field-tax';
$props['description'] 	= __( 'This is a taxonomy selection field.', 'worknet' );
$props['label'] 		= __( 'Taxonomies', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'select-taxonomy', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-text';
$atts['name'] 			= 'field-text';
$props['description'] 	= __( 'This is a text field.', 'worknet' );
$props['label'] 		= __( 'Text', 'worknet' );

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



$atts['id'] 			= 'field-textarea';
$atts['name'] 			= 'field-textarea';
$props['description'] 	= __( 'This is a textarea field.', 'worknet' );
$props['label'] 		= __( 'Textarea', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'textarea', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );



$atts['id'] 			= 'field-time';
$atts['name'] 			= 'field-time';
$props['description'] 	= __( 'This is a time field.', 'worknet' );
$props['label'] 		= __( 'Time', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'time', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );
