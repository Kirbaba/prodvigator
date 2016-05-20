<?php
/**
 * Шаблон рубрики (category.php)
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
                    <div class="blog__all">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // если посты есть - запускаем цикл wp ?>
                            <?php get_template_part( 'loop' ); // для отображения каждой записи берем шаблон loop.php ?>
                        <?php endwhile; // конец цикла
                        else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
                    </div>
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
                <?php pagination(); // пагинация, функция нах-ся в function.php ?>
			</div>
		</div>
    </section>
<?php get_template_part( 'partners' ); ?>
<?php get_footer(); // подключаем footer.php ?>