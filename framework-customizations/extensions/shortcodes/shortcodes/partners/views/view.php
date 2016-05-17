<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <h2><?php echo esc_attr( $atts['label'] ); ?></h2>
    <!-- open .partners__flex -->
    <div class="partners__flex">
        <?php foreach ( $atts['items'] as $item ) { ?>
            <!-- open .partners__item -->
            <div class="partners__item">
                <a href="<?php echo $item['item_link']; ?>"><img src="<?php echo $item['item_img']['url']; ?>" alt=""/></a>
            </div>
            <!-- close .partners__item -->
        <?php } ?>
    </div>
    <!-- close .partners__flex -->
</div>
<!-- close .container -->