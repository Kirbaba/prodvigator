<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_1' => array(
        'title'   => __( 'Контакты', '{domain}' ),
        'options' => array(
            'logo'        => array(
                'type'        => 'upload',
                'label'       => __( 'Логотип', '{domain}' ),
                'images_only' => true,
            ),
            'vk'          => array(
                'type'  => 'text',
                'value' => 'vk.com',
                'label' => __( 'Вконтакте', '{domain}' ),
            ),
            'fb'          => array(
                'type'  => 'text',
                'value' => 'fb.com',
                'label' => __( 'Facebook', '{domain}' ),
            ),
            'tw'           => array(
                'type'  => 'text',
                'value' => 'twitter.com',
                'label' => __( 'Twitter', '{domain}' ),
            ),
            'gplus'        => array(
                'type'  => 'text',
                'value' => 'plus.google.com',
                'label' => __( 'Google+', '{domain}' ),
            ),
            'phone'        => array(
                'type'  => 'text',
                'value' => '+7 (865) 258 94 62',
                'label' => __( 'Телефон', '{domain}' ),
            ),
            'second_phone' => array(
                'type'  => 'text',
                'value' => '+7 895 222 33 33',
                'label' => __( 'Второй телефон', '{domain}' ),
            ),
            'email'        => array(
                'type'  => 'text',
                'value' => 'sales@generator.bz',
                'label' => __( 'Email', '{domain}' ),
            ),
            'address'      => array(
                'type'  => 'text',
                'value' => 'г. Екатеринбург, ул. Крупносортщиков, 14, офис 417',
                'label' => __( 'Адрес', '{domain}' ),
            ),
            'button'       => array(
                'type'  => 'text',
                'value' => 'Free Seo Analisys',
                'label' => __( 'Текст кнопки', '{domain}' ),
            ),
            'button_link'  => array(
                'type'  => 'text',
                'value' => '/services',
                'label' => __( 'Ссылка для кнопки', '{domain}' ),
            ),
        ),
    ),
);