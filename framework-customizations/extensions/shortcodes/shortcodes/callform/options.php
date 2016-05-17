<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label' => array(
        'label' => __( 'Заголовок', 'unyson' ),
        'desc'  => __( 'Заголовок', 'unyson' ),
        'type'  => 'text',
        'value' => __( 'ЗАЧЕМ ТРАТИТЬ ВРЕМЯ, СИЛЫ И ДЕНЬГИ НА МАРКЕТИНГ, КОТОРЫЙ НЕ РАБОТАЕТ?', 'unyson' )
    ),
    'desc'  => array(
        'type'          => 'wp-editor',
        'label'         => __( 'Текст', '{domain}' ),
        'size'          => 'medium', // small, large
        'editor_height' => 200,
        'value'         => __( 'Мы разработаем маркетинговые кампании для вас так, что вы сможете спокойно заниматься тем, что вы умеете лучше всего – своим любимым делом.', 'unyson' )
    ),
    'phone' => array(
        'label' => __( 'Телефон', 'unyson' ),
        'desc'  => __( 'номер телефона', 'unyson' ),
        'type'  => 'text',
        'value' => __( '+3 222 555 66 77', 'unyson' )
    ),
);