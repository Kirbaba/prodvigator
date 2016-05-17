<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'background_color' => array(
        'label' => __( 'Background Color', 'fw' ),
        'desc'  => __( 'Please select the background color', 'fw' ),
        'type'  => 'color-picker',
    ),
    'class'            => array(
        'label' => __( 'Custom class', 'fw' ),
        'desc'  => __( 'Insert custom class', 'fw' ),
        'type'  => 'text',
    )
);
