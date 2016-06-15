<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>
<!-- open .seo-forwhat -->
<section class="seo-forwhat">
    <!-- open .container -->
    <div class="container">
        <h1><?php echo esc_attr( $atts['title'] ); ?></h1>
        <!-- open .seo-forwhat_text -->
        <div class="seo-forwhat_text">
            <h4><?php echo $atts['text']; ?></h4>
        </div>
        <!-- close .seo-forwhat_text -->
        <!-- open .seo-forwhat_thumb -->
        <div class="seo-forwhat_thumb">
            <img src="<?php echo esc_attr( $atts['image']['url'] ); ?>" alt=""/>
        </div>
    </div>
    <!-- close .container -->
</section>
<!-- close .seo-forwhat -->