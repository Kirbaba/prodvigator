<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.05.2016
 * Time: 11:50
 */

$options = array(
    'subimage' => array(
        'type'        => 'upload',
        'label'       => __( 'Второе изображение', '{domain}' ),
        'images_only' => true,
    ),
);