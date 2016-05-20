<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
    $bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
    $bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}
$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr( $bg_color . $bg_image ) . '"' : '';
$custom_class    = ( isset( $atts['class'] ) && $atts['class'] ) ? $atts['class'] : '';
$custom_id       = ( isset( $atts['id'] ) && $atts['id'] ) ? 'id=' . $atts['id'] : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? '' : 'container';
?>

<section <?php echo esc_attr( $custom_id ); ?> class="<?php echo $custom_class; ?>" <?php echo $section_style; ?>>
    <div class="<?php echo esc_attr( $container_class ); ?>">
        <?php echo do_shortcode( $content ); ?>
    </div>
</section>
