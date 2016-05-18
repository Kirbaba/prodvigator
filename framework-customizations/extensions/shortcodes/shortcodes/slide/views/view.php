<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .banner__item -->
    <div class="contacts-banner__item">
        <!-- open .container -->
        <div class="container">
            <!-- open .banner__item_description -->
            <div class="contacts-banner__item_description">
                <h3><?php echo esc_attr( $atts['label'] ); ?></h3>
                <div><?php echo $atts['description']; ?></div>
                <span class="contacts-banner_arrow"></span>
            </div>
            <!-- close .banner__item_description -->
            <!-- open .banner__item_img -->
            <div class="contacts-banner__item_img">
                <img src="<?php echo esc_attr( $atts['slide_image']['url'] ); ?>" alt=""/>
            </div>
            <!-- close .banner__item_img -->
        </div>
        <!-- close .container -->
    </div>
    <!-- close .banner__item -->
</div>
<!-- close .container -->