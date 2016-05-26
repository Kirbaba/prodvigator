<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .seo-b_title -->
    <div class="seo-b_title">
        <h3><span><?php echo $atts['blue_title']; ?></span> <?php echo $atts['black_title']; ?></h3>
    </div>
    <!-- close .seo-b_title -->

    <!-- open .seo-advantages_ribbon -->
    <div class="seo-advantages_ribbon"><span><?php echo $atts['ribbon']; ?></span></div>
    <!-- close .seo-advantages_ribbon -->

    <?php foreach ( $atts['items'] as $item ) { ?>
        <!-- open .seo-advantages__item -->
        <div class="seo-advantages__item">
            <!-- open .seo-advantages__item_thumb -->
            <div class="seo-advantages__item_thumb"><img src="<?php echo $item['item_image']['url']; ?>" alt=""/></div>
            <!-- close .seo-advantages__item_thumb -->
            <!-- open .seo-advantages__item_text -->
            <div class="seo-advantages__item_text">
                <p><b><?php echo $item['item_title']; ?></b><?php echo $item['item_text']; ?></p>
            </div>
            <!-- close .seo-advantages__item_text -->
        </div>
        <!-- close .seo-advantages__item -->
    <?php } ?>
    </ul>

</div>
<!-- close .container -->