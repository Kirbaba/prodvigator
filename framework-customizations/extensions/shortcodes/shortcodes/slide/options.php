<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label'       => array(
        'type'  => 'text',
        'label' => __( 'Заголовок', '{domain}' ),
    ),
    'description' => array(
        'type'          => 'wp-editor',
        'label'         => __( 'Описание', '{domain}' ),
        'size'          => 'small', // small, large
        'editor_height' => 400,
    ),
    'slide_image' => array(
        'type'        => 'upload',
        'label'       => __( 'Изображение', 'unyson' ),
        'images_only' => true,
    ),
);