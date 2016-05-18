<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .seo-b_title -->
    <div class="seo-b_title">
        <h3><span>Стоимость услуг </span> (в месяц)</h3>
    </div>
    <!-- close .seo-b_title -->
    <!-- open .seo-price__flex -->
    <div class="seo-price__flex">
        <?php foreach ( $atts['items'] as $item ) { ?>
            <!-- open .seo-price__item -->
            <div class="seo-price__item">
                <!-- open .seo-price__item_img -->
                <div class="seo-price__item_img">
                    <img src="<?php echo $item['item_img']['url']; ?>" alt=""/>
                </div>
                <!-- close .seo-price__item_img -->
                <h4><?php echo $item['item_text']; ?>
                    <span><?php echo $item['item_price']; ?></span>
                </h4>
            </div>
            <!-- close .seo-price__item -->
        <?php } ?>
    </div>
    <!-- close .seo-price__flex -->
</div>
<!-- close .container -->