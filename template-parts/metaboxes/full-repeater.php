<?php
/**
 * The markup for the Repeater metabox.
 *
 * @package 		Worknet
 */

wp_nonce_field( PARENT_THEME_SLUG, 'nonce_worknet_full_repeater' );

$atts['name'] 							= 'full-repeater';
$props['description'] 					= __( 'This repeating field is used for displaying blah blah. The Text Field above is also the name of the field.', 'worknet' );
$props['labels']['add'] 				= __( 'Add Fields', 'worknet' );
$props['labels']['edit'] 				= __( 'Edit Fields', 'worknet' );
$props['labels']['header'] 				= __( 'Fields', 'worknet' );
$props['labels']['remove'] 				= __( 'Remove Fields', 'worknet' );



$fields[0]['atts']['type'] 			= 'checkbox';
$fields[0]['atts']['name'] 			= 'full-peat-checkbox';
$fields[0]['props']['description'] 	= __( 'This is a checkbox.', 'worknet' );

$fields[1]['atts']['id'] 			= 'full-peat-color';
$fields[1]['atts']['name'] 			= 'full-peat-color';
$fields[1]['atts']['type'] 			= 'color';
$fields[1]['props']['description'] 	= __( 'This is a color field.', 'worknet' );
$fields[1]['props']['label'] 		= __( 'Color', 'worknet' );

$fields[2]['atts']['id'] 			= 'full-peat-date';
$fields[2]['atts']['name'] 			= 'full-peat-date';
$fields[2]['atts']['type'] 			= 'date';
$fields[2]['props']['description'] 	= __( 'This is a date field.', 'worknet' );
$fields[2]['props']['label'] 		= __( 'Date', 'worknet' );

$fields[3]['atts']['id'] 			= 'full-peat-editor';
$fields[3]['atts']['type'] 			= 'editor';
$fields[3]['props']['description'] 	= __( 'This is an editor field.', 'worknet' );
$fields[3]['props']['label'] 		= __( 'Editor', 'worknet' );

$fields[4]['atts']['id'] 			= 'full-peat-file';
$fields[4]['atts']['name'] 			= 'full-peat-file';
$fields[4]['atts']['type'] 			= 'file-upload';
$fields[4]['props']['label'] 		= __( 'File Field', 'worknet' );

$fields[5]['atts']['id'] 			= 'full-peat-image';
$fields[5]['atts']['name'] 			= 'full-peat-image';
$fields[5]['atts']['type'] 			= 'image-upload';
$fields[5]['props']['label'] 		= __( 'Image Field', 'worknet' );

$fields[6]['atts']['id'] 			= 'full-peat-radios';
$fields[6]['atts']['name'] 			= 'full-peat-radios';
$fields[6]['atts']['type'] 			= 'radio';
$fields[6]['props']['description'] 	= __( 'This is a set of radios.', 'worknet' );
$fields[6]['props']['selections'][] 	= array( 'label' => __( 'One', 'worknet' ), 'value' => 'one' );
$fields[6]['props']['selections'][] 	= array( 'label' => __( 'Two', 'worknet' ), 'value' => 'two' );
$fields[6]['props']['selections'][] 	= array( 'label' => __( 'Three', 'worknet' ), 'value' => 'three' );

$fields[7]['atts']['id'] 			= 'full-peat-menu';
$fields[7]['atts']['name'] 			= 'full-peat-menu';
$fields[7]['atts']['type'] 			= 'select-menu';
$fields[7]['props']['description'] 	= __( 'This is a menu selection field.', 'worknet' );
$fields[7]['props']['label'] 		= __( 'Menus', 'worknet' );

$fields[8]['atts']['id'] 			= 'full-peat-page';
$fields[8]['atts']['name'] 			= 'full-peat-page';
$fields[8]['atts']['type'] 			= 'select-page';
$fields[8]['props']['description'] 	= __( 'This is a page selection field.', 'worknet' );
$fields[8]['props']['label'] 		= __( 'Pages', 'worknet' );

$fields[9]['atts']['id'] 			= 'full-peat-select';
$fields[9]['atts']['name'] 			= 'full-peat-select';
$fields[9]['atts']['type'] 			= 'select';
$fields[9]['props']['description'] 	= __( 'Select an option.', 'worknet' );
$fields[9]['props']['label'] 		= __( 'Select Menu', 'worknet' );
$fields[9]['props']['selections'][] 	= array( 'label' => __( 'One', 'worknet' ), 'value' => 'one' );
$fields[9]['props']['selections'][] 	= array( 'label' => __( 'Two', 'worknet' ), 'value' => 'two' );
$fields[9]['props']['selections'][] 	= array( 'label' => __( 'Three', 'worknet' ), 'value' => 'three' );

$fields[10]['atts']['id'] 			= 'full-peat-tax';
$fields[10]['atts']['name'] 		= 'full-peat-tax';
$fields[10]['atts']['type'] 		= 'select-taxonomy';
$fields[10]['props']['description'] = __( 'This is a taxonomy selection field.', 'worknet' );
$fields[10]['props']['label'] 		= __( 'Taxonomies', 'worknet' );

$fields[11]['atts']['class'] 		= 'widefat repeater-title';
$fields[11]['atts']['id'] 			= 'full-peat-text';
$fields[11]['atts']['name'] 		= 'full-peat-text';
$fields[11]['atts']['type'] 		= 'text';
$fields[11]['props']['description'] = __( 'Text Field Description', 'worknet' );
$fields[11]['props']['label'] 		= __( 'Text Field', 'worknet' );

$fields[12]['atts']['id'] 			= 'full-peat-textarea';
$fields[12]['atts']['name'] 		= 'full-peat-textarea';
$fields[12]['atts']['type'] 		= 'textarea';
$fields[12]['props']['description'] = __( 'This is a textarea.', 'worknet' );
$fields[12]['props']['label'] 		= __( 'Textarea', 'worknet' );

$fields[13]['atts']['id'] 			= 'full-peat-time';
$fields[13]['atts']['name'] 		= 'full-peat-time';
$fields[13]['atts']['type'] 		= 'time';
$fields[13]['props']['description'] = __( 'This is a time field.', 'worknet' );
$fields[13]['props']['label'] 		= __( 'Time', 'worknet' );

if ( empty( $this->meta[$atts['name']] ) ) {

	$atts['value'] = array();

} else {

	$atts['value'] = $this->meta[$atts['name']][0];

}


//echo '<pre>'; print_r( $atts['value'] ); echo '</pre>';

$atts 	= apply_filters( 'rosh-field-atts-' . $atts['name'], $atts, $props );
$props 	= apply_filters( 'rosh-field-props-' . $atts['name'], $props, $atts );
$group 	= new Worknet_Field_Group( 'repeater', $atts, $props, $fields );
$group->display_group();

unset( $atts );
unset( $props );
unset( $fields );
unset( $group );
