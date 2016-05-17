<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'count' => array(
        'label' => __( 'Количество записей', 'unyson' ),
        'desc'  => __( 'Количество записей на странице (-1 выведет все)', 'unyson' ),
        'type'  => 'text',
        'value' => __( '3', 'unyson' )
    ),
);