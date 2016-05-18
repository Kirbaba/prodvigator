<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'items' => array(
        'type'            => 'addable-box',
        'label'           => __( 'Услуги', 'unyson' ),
        'box-options'     => array(
            'item_img'   => array(
                'type'             => 'upload',
                'label'            => __( 'Изображение', 'unyson' ),
                'images_only'      => true,
                'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
            ),
            'item_text'  => array(
                'type'  => 'text',
                'label' => __( 'Название услуги', '{domain}' ),
            ),
            'item_price' => array(
                'type'  => 'text',
                'label' => __( 'Стоимость', '{domain}' ),
            ),
        ),
        'template'        => '{{- item_text }}', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', 'unyson' ),
        'sortable'        => true,
    )
);