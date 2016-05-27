<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'blue_title' => array(
        'type'  => 'text',
        'label' => __( 'Голубой заголовок', '{domain}' ),
    ),
    'black_text' => array(
        'type'  => 'text',
        'label' => __( 'Черный заголовок', '{domain}' ),
    ),
    'ribbon'     => array(
        'type'  => 'text',
        'label' => __( 'Текст на ленточке', '{domain}' ),
    ),
    'items'      => array(
        'type'            => 'addable-box',
        'label'           => __( 'Преимущества', 'unyson' ),
        'box-options'     => array(
            'item_image' => array(
                'type'             => 'upload',
                'label'            => __( 'Изображение', 'unyson' ),
                'images_only'      => true,
                'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
            ),
            'item_title' => array(
                'type'  => 'text',
                'label' => __( 'Заголовок', '{domain}' ),
            ),
            'item_text'  => array(
                'type'  => 'text',
                'label' => __( 'Описание', '{domain}' ),
            ),
        ),
        'template'        => '{{- item_title }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', 'unyson' ),
        'sortable'        => true,
    )
);