<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <h1><span>наши</span> услуги</h1>
    <!-- open .our-services__flex -->
    <div class="our-services__flex">
        <?php foreach ( $atts['items'] as $item ) { ?>
            <!-- open .our-services__item -->
            <div class="our-services__item">
                <img src="<?php echo $item['item_img']['url']; ?>" alt=""/>
                <p><?php echo $item['item_text']; ?></p>
            </div>
            <!-- close .our-services__item -->
        <?php } ?>
    </div>
    <!-- close .our-services__flex -->

</div>
<!-- close .container -->