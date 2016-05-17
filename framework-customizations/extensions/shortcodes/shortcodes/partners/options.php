<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label' => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'МЫ ЯВЛЯЕМСЯ ОФИЦИАЛЬНЫМИ ПАРТНЕРАМИ', 'unyson' )
    ),
    'items' => array(
        'type'            => 'addable-box',
        'label'           => __( 'Партнеры', 'unyson' ),
        'box-options'     => array(
            'item_img'  => array(
                'type'             => 'upload',
                'label'            => __( 'Изображение', 'unyson' ),
                'images_only'      => true,
                'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
            ),
            'item_link' => array(
                'type'  => 'text',
                'label' => __( 'Ссылка на партнера', '{domain}' ),
            ),
        ),
        'template'        => '{{ item_link }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', 'unyson' ),
        'sortable'        => true,
    )
);