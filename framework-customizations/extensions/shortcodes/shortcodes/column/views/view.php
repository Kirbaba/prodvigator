<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$class = fw_ext_builder_get_item_width( 'page-builder', $atts['width'] . '/frontend_class' );

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
    $bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$column_style = ( $bg_color ) ? 'style="' . esc_attr( $bg_color ) . '"' : '';

$custom_class = ( isset( $atts['class'] ) && $atts['class'] ) ? $atts['class'] : '';
?>
<div
    class="<?php echo esc_attr( $class ); ?><?php echo " " . esc_attr( $custom_class ); ?>" <?php echo $column_style; ?>>
    <?php echo do_shortcode( $content ); ?>
</div>
