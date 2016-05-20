<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>

<!-- open .blog__all_item -->
<div class="blog__all_item">
    <span class="blog_date"><?php the_time( 'j.m.Y' ); ?></span>
    <strong><?php the_title(); ?></strong>
    <!-- open .blog__all_item_thumb -->
    <div class="blog__all_item_thumb">
        <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail( 'full' ); ?>
        <?php } ?>
	</div>
    <!-- close .blog__all_item_thumb -->
    <?php the_content( '' ); // пост превью, до more ?>
    <a href="<?php the_permalink(); ?>" class="blog__all_item_open">Читать далее <i class="fa fa-long-arrow-right"
                                                                                    aria-hidden="true"></i></a>
</div>
<!-- close .blog__all_item -->