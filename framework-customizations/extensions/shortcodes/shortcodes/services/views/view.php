<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .all-services__flex -->
    <h3><?php echo esc_attr( $atts['label'] ); ?></h3>
    <div class="all-services__flex">
        <?php foreach ( $atts['items'] as $item ) { ?>
            <!-- open .all-services__item -->
            <div class="all-services__item">
                <!-- open .all-services__item_thumb -->
                <div class="all-services__item_thumb">
                    <img src="<?php echo $item['item_img']['url']; ?>" alt=""/>
                </div>
                <!-- close .all-services__item_thumb -->
                <a href="<?php echo $item['item_link']; ?>">
                    <h4><?php echo $item['item_title']; ?></h4>
                </a>
                <div><?php echo $item['item_text']; ?></div>
            </div>
            <!-- close .all-services__item -->
        <?php } ?>
    </div>
    <!-- close .all-services__flex -->
</div>
<!-- close .container -->