<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .seo-b_title -->
    <div class="seo-b_title">
        <h3><span>Комплексное</span> SEO продвижение</h3>
    </div>
    <!-- close .seo-b_title -->
    <!-- open .seo-complex__item -->
    <div class="seo-complex__item">
        <!-- open .seo-complex__item_thumb -->
        <div class="seo-complex__item_thumb">
            <span><strong><?php echo $atts['duration']; ?></strong>месяц</span>
        </div>
        <!-- close .seo-complex__item_thumb -->
        <!-- open .seo-complex__item_text -->
        <div class="seo-complex__item_text">
            <h4><?php echo $atts['label']; ?></h4>
            <ul>
                <?php foreach ( $atts['items'] as $item ) { ?>
                    <li><?php echo $item['item_title']; ?></li>
                <?php } ?>
            </ul>
        </div>
        <!-- close .seo-complex__item_text -->
    </div>
    <!-- close .seo-complex__item -->
</div>
<!-- close .container -->