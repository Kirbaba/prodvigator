<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label' => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'Мы помогаем эффективно продвигать бизнес и увеличивать продажи', 'unyson' )
    ),
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
            'item_title' => array(
                'type'  => 'text',
                'label' => __( 'Заголовок', '{domain}' ),
            ),
            'item_link'  => array(
                'type'  => 'text',
                'label' => __( 'Ссылка на услугу', '{domain}' ),
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