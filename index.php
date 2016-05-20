<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<?php
if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'home-page' );
    endwhile;
else :
    get_template_part( 'template-parts/content', 'none' );
endif; ?>
<?php get_footer(); // подключаем footer.php ?>