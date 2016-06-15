<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'type'  => 'text',
        'label' => __( 'Заголовок', '{domain}' ),
    ),
    'text'  => array(
        'type'          => 'wp-editor',
        'label'         => __( 'Текст', '{domain}' ),
        'size'          => 'medium', // small, large
        'editor_height' => 400,
    ),
    'image' => array(
        'type'        => 'upload',
        'label'       => __( 'Изображение', '{domain}' ),
        'images_only' => true,
    )
);