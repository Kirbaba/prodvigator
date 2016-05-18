<?php get_header(); ?>
<?php if ( have_posts() ) {
    while ( have_posts() ) : the_post(); // старт цикла ?>
        <?php the_content(); // контент ?>
    <?php endwhile;
} // конец цикла ?>
<?php get_footer(); ?> 