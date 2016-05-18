<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$cfg = array();

$cfg['grid.columns'] = array(
    '1_12' => array(
        'title'          => '1/12',
        'backend_class'  => 'fw-col-sm-1',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-1',
    ),
    '1_6'  => array(
        'title'          => '1/6',
        'backend_class'  => 'fw-col-md-2',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-1 fw-col-md-2',
    ),
    '1_5'  => array(
        'title'          => '1/5',
        'backend_class'  => 'fw-col-sm-15',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-15',
    ),
    '1_4'  => array(
        'title'          => '1/4',
        'backend_class'  => 'fw-col-sm-3',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-3',
    ),
    '1_3'  => array(
        'title'          => '1/3',
        'backend_class'  => 'fw-col-sm-4',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-4',
    ),
    '1_2'  => array(
        'title'          => '1/2',
        'backend_class'  => 'fw-col-sm-6',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-6',
    ),
    '2_3'  => array(
        'title'          => '2/3',
        'backend_class'  => 'fw-col-sm-8',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-8',
    ),
    '3_4'  => array(
        'title'          => '3/4',
        'backend_class'  => 'fw-col-sm-9',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-9',
    ),
    '4_5'  => array(
        'title'          => '4/5',
        'backend_class'  => 'fw-col-md-8',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-10 fw-col-md-8',
    ),
    '5_6'  => array(
        'title'          => '5/6',
        'backend_class'  => 'fw-col-md-10',
        'frontend_class' => 'fw-col-xs-12 fw-col-sm-10',
    ),
    '1_1'  => array(
        'title'          => '1/1',
        'backend_class'  => 'fw-col-sm-12',
        'frontend_class' => 'fw-col-xs-12',
    ),
    'div'  => array(
        'title'          => 'div',
        'backend_class'  => '',
        'frontend_class' => '',
    ),
);

/**
 * @since 1.2.0
 */
$cfg['grid.row.class'] = false;