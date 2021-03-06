<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'is_fullwidth'     => array(
        'label' => __( 'Full Width', 'fw' ),
        'type'  => 'switch',
    ),
    'background_color' => array(
        'label' => __( 'Background Color', 'fw' ),
        'desc'  => __( 'Please select the background color', 'fw' ),
        'type'  => 'color-picker',
    ),
    'background_image' => array(
        'label'   => __( 'Background Image', 'fw' ),
        'desc'    => __( 'Please select the background image', 'fw' ),
        'type'    => 'background-image',
        'choices' => array(//	in future may will set predefined images
        )
    ),
    'class'            => array(
        'label' => __( 'Custom class', 'fw' ),
        'desc'  => __( 'Insert custom class', 'fw' ),
        'type'  => 'text',
    ),
    'id'               => array(
        'label' => __( 'Custom id', 'fw' ),
        'desc'  => __( 'Insert custom id', 'fw' ),
        'type'  => 'text',
    )
);
