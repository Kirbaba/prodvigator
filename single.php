<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<!-- open .blog__container -->
<section class="blog">
    <!-- open .container -->
    <div class="container">
        <!-- open .blog__content -->
        <div class="blog__content">
            <!-- open .breadscrubs -->
            <?php if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
                fw_ext_breadcrumbs();
            } ?>
            <!-- close .breadscrubs -->
            <!-- open .blog__flex -->
            <div class="blog__flex">
                <!-- open .blog__all -->
                <div class="blog-single__all">
                    <?php if ( have_posts() ) {
                        while ( have_posts() ) : the_post(); // старт цикла ?>
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
                                <?php the_content(); // пост превью, до more ?>
                                <a href="/category/blog" class="blog__all_item_back"><i class="fa fa-long-arrow-left"
                                                                                        aria-hidden="true"></i>Назад ко
                                    всем статьям </a>
                            </div>
                            <!-- close .blog__all_item -->
                        <?php endwhile;
                    } // конец цикла ?>
                </div>
                <!-- close .blog__all -->
                <!-- open .blog__newest -->
                <div class="blog__newest">
                    <!-- open .blog__newest_title -->
                    <h4 class="blog__newest_title"><span>новое</span></h4>
                    <!-- close .blog__newest_title -->
                    <?php $new_query = new WP_Query( 'category_name=blog&posts_per_page=5&paged=0' );
                    while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
                        <!-- Do stuff... -->
                        <?php get_template_part( 'template-parts/blog', 'new' ); // для отображения каждой записи берем шаблон loop.php ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- close .blog__flex -->
        </div>
        <!-- close .blog__content -->
    </div>
    <!-- close .container -->
</section>
<?php get_template_part( 'partners' ); ?>
<?php get_footer(); // подключаем footer.php ?>
