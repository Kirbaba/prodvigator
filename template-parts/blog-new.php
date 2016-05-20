<!-- open .blog__newest_item -->
<div class="blog__newest_item">
    <!-- open .blog__newest_item_thumb -->
    <div class="blog__newest_item_thumb">
        <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail( 'full' ); ?>
        <?php } ?>
    </div>
    <!-- close .blog__newest_item_thumb -->
    <!-- open .blog__newest_item_text -->
    <div class="blog__newest_item_text">
        <span class="blog_date"><?php the_time( 'j.m.Y' ); ?></span>
        <strong><?php the_title(); ?></strong>
        <!-- open .blog__newest_item_open -->
        <a href="<?php the_permalink(); ?>" class="blog__newest_item_open">Читать далее</a>
        <!-- close .blog__newest_item_open -->
    </div>
    <!-- close .blog__newest_item_text -->
</div>
<!-- close .blog__newest_item -->