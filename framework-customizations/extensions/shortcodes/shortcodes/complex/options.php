<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label'    => array(
        'type'  => 'text',
        'label' => __( 'Заголовок', '{domain}' ),
    ),
    'duration' => array(
        'type'  => 'text',
        'label' => __( 'длительность', '{domain}' ),
    ),
    'items'    => array(
        'type'            => 'addable-box',
        'label'           => __( 'Перечень действий', 'unyson' ),
        'box-options'     => array(
            'item_title' => array(
                'type'  => 'text',
                'label' => __( 'Название', '{domain}' ),
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