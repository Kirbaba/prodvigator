<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>


<!-- open .seo-forwhat -->
<section class="seo-forwhat page-company">
    <!-- open .container -->
    <div class="container">
        <h3><?php echo esc_attr( $atts['label'] ); ?></h3>
        <!-- open .seo-forwhat_text -->
        <div class="seo-forwhat_text">
            <?php echo $atts['desc']; ?>
        </div>
        <!-- close .seo-forwhat_text -->
        <!-- open .seo-forwhat_thumb -->
        <div class="seo-forwhat_thumb">
            <img src="<?php echo $atts['image']['url']; ?>" alt=""/>
        </div>
    </div>
    <!-- close .container -->
</section>
<!-- close .seo-forwhat -->