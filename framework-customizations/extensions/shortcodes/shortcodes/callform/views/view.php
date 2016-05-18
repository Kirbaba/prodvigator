<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- open .container -->
<div class="container">
    <!-- open .phonecall__content -->
    <div class="phonecall__content">
        <h2><?php echo esc_attr( $atts['label'] ); ?></h2>
        <?php echo $atts['desc']; ?>
        <h4>Звоните нам <b><?php echo esc_attr( $atts['phone'] ); ?></b> или <a href="/contacts" class="phonecall_btn">Заполните
                заявку онлайн</a></h4>
    </div>
    <!-- close .phonecall__content -->
</div>
<!-- close .container -->