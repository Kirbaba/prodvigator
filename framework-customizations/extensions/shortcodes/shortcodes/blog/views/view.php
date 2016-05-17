<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<?php
$args  = array(
    'numberposts' => $atts['count'], // тоже самое что posts_per_page
    'offset'      => 0,
    'category'    => 'blog',
    'post_type'   => 'post',
    'post_status' => 'publish'
);
$posts = get_posts( $args );
?>
<!-- open .container -->
<div class="container">
    <h3>новое в блоге <a href="/category/blog" class="home-blog_all">Посмотреть весь блог</a></h3>
    <!-- open .home-blog__flex -->
    <div class="home-blog__flex">
        <?php foreach ( $posts as $post ) {
            setup_postdata( $post ); ?>
            <!-- open .home-blog__item -->
            <div class="home-blog__item">
                <!-- open .home-blog__item_thumb -->
                <div class="home-blog__item_thumb">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
                    <img src="<?php echo $url; ?>" alt="">
                </div>
                <!-- close .home-blog__item_thumb -->
                <small class="home-blog_date"><?php echo mysql2date( 'j.m.Y', $post->post_date ); ?></small>
                <h5><?php echo $post->post_title; ?></h5>
                <div><?php the_content( '...' ); ?></div>
                <a href="<?php echo $post->guid; ?>" class="home-blog__item_open"><i class="fa fa-angle-right"
                                                                                     aria-hidden="true"></i></a>
            </div>
            <!-- close .home-blog__item -->
        <?php } ?>
    </div>
</div>