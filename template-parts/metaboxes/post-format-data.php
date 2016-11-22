<?php
/**
 * Template part for displaying a metabox.
 *
 * @package Worknet
 */

wp_nonce_field( PARENT_THEME_SLUG, 'nonce_worknet_post_format' );

$format = get_post_format();



$atts['id'] 			= 'post-audio';
$atts['name'] 			= 'post-audio';
$props['label'] 		= __( 'Post Audio URL', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

if ( FALSE === strpos( $atts['id'], $format ) ) {

	$class = 'hide';

}

?><div class="post-format-field <?php echo esc_attr( $class ); ?>" id="post_format_audio"><?php

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'url', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );

?></div><?php



$atts['id'] 			= 'post-image';
$atts['name'] 			= 'post-image';
$props['label'] 		= __( 'Post Image URL', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

if ( FALSE === strpos( $atts['id'], $format ) ) {

	$class = 'hide';

}

?><div class="post-format-field <?php echo esc_attr( $class ); ?>" id="post_format_image"><?php

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'image-upload', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );

?></div><?php



$atts['id'] 			= 'post-link';
$atts['name'] 			= 'post-link';
$props['label'] 		= __( 'Post Link URL', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

if ( FALSE === strpos( $atts['id'], $format ) ) {

	$class = 'hide';

}

?><div class="post-format-field <?php echo esc_attr( $class ); ?>" id="post_format_link"><?php

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'url', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );

?></div><?php



$atts['id'] 			= 'post-video';
$atts['name'] 			= 'post-video';
$props['label'] 		= __( 'Post Video URL', 'worknet' );

if ( ! empty( $this->meta[$atts['id']][0] ) ) {

	$atts['value'] = $this->meta[$atts['id']][0];

}

if ( FALSE === strpos( $atts['id'], $format ) ) {

	$class = 'hide';

}

?><div class="post-format-field <?php echo esc_attr( $class ); ?>" id="post_format_video"><?php

$atts 	= apply_filters( 'worknet-field-atts-' . $atts['id'], $atts, $props );
$props 	= apply_filters( 'worknet-field-props-' . $atts['id'], $props, $atts );
$field 	= new Worknet_Field( 'url', $atts, $props );
$field->display_field();

unset( $atts );
unset( $props );
unset( $field );

?></div>
