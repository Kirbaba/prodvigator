<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <h2><?php echo esc_attr( $atts['label'] ); ?></h2>
    <p><em><?php echo esc_attr( $atts['sublabel'] ); ?></em></p>
    <!-- open .whyweare__attention -->
    <div class="whyweare__attention">
        <p><em><?php echo esc_attr( $atts['blue_sublabel'] ); ?></em></p>
        <h3><span><?php echo esc_attr( $atts['blue_label'] ); ?></span></h3>
    </div>
    <!-- close .whyweare__attention -->
    <?php $i = 0; ?>
    <!-- open .whyweare__flex -->
    <div class="whyweare__flex">
        <?php foreach ( $atts['items'] as $item ) { ?>

            <!-- open .whyweare__item -->
            <div class="whyweare__item">
                <?php if ( $i % 2 == 0 ) { ?>
                    <!-- open .whyweare__item_text -->
                    <div class="whyweare__item_text">
                        <h4><?php echo $item['item_title']; ?></h4>
                        <div><?php echo $item['item_text']; ?></div>
                    </div>
                    <!-- close .whyweare__item_text -->
                    <!-- open .whyweare__item_icon -->
                    <div class="whyweare__item_icon">
                        <img src="<?php echo $item['item_img']['url']; ?>" alt=""/>
                    </div>
                    <!-- close .whyweare__item_icon -->
                <?php } else { ?>
                    <!-- open .whyweare__item_icon -->
                    <div class="whyweare__item_icon">
                        <img src="<?php echo $item['item_img']['url']; ?>" alt=""/>
                    </div>
                    <!-- close .whyweare__item_icon -->
                    <!-- open .whyweare__item_text -->
                    <div class="whyweare__item_text">
                        <h4><?php echo $item['item_title']; ?></h4>
                        <div><?php echo $item['item_text']; ?></div>
                    </div>
                    <!-- close .whyweare__item_te   xt -->
                <?php }; ?>
            </div>
            <!-- close .whyweare__item -->
            <?php $i ++; ?>
        <?php } ?>
    </div>
    <!-- close .whyweare__flex -->
</div>
<!-- close .container -->