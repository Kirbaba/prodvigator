<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label'    => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'Эффективный интернет-маркетинг', 'unyson' )
    ),
    'sublabel' => array(
        'label' => __( 'Подзаголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'Мы все знаем почему вы здесь. Вам нужно увеличить продажи, количество 
заказов и клиентов, конверсии на сайте.', 'unyson' )
    ),
    'items'    => array(
        'type'            => 'addable-box',
        'label'           => __( 'Преимущества', 'unyson' ),
        'box-options'     => array(
            'item_title' => array(
                'type'  => 'text',
                'label' => __( 'Название', '{domain}' ),
            ),
            'item_img'   => array(
                'type'             => 'upload',
                'label'            => __( 'Изображение', 'unyson' ),
                'images_only'      => true,
                'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
            ),
            'item_text'  => array(
                'type'          => 'wp-editor',
                'label'         => __( 'Текст', '{domain}' ),
                'size'          => 'small', // small, large
                'editor_height' => 200,
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