<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri( '/extensions/shortcodes/shortcodes/complex' );
wp_enqueue_style(
    'fw-shortcode-complex',
    $uri . '/static/css/styles.css'
);
wp_enqueue_script(
    'fw-shortcode-complex',
    $uri . '/static/js/scripts.js', array(), '', true
);
wp_localize_script( 'fw-shortcode-complex', 'myajax',
    array(
        'url' => admin_url( 'admin-ajax.php' )
    )
);