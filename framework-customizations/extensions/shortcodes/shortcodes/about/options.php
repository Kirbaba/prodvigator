<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label' => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'О компании', 'unyson' )
    ),
    'image' => array(
        'type'             => 'upload',
        'label'            => __( 'Изображение', 'unyson' ),
        'images_only'      => true,
        'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
    ),
    'desc'  => array(
        'type'          => 'wp-editor',
        'label'         => __( 'Текст', '{domain}' ),
        'tinymce'       => true,
        'teeny'         => true,
        'reinit'        => true,
        'wpautop'       => false,
        'size'          => 'large', // small, large
        'editor_height' => 400,
    ),
);