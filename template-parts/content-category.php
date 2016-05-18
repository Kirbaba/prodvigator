<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lestmebel
 */

?>
<div class="model__container">
    <div class="model__container--img">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php $sale = fw_get_db_post_option( get_the_ID(), 'sale_color', $default_value = null );
    $sale_title = fw_get_db_post_option( get_the_ID(), 'sale_title', $default_value = null );
    if ( ! empty( $sale ) && ! empty( $sale_title ) ) { ?>
        <span class="model__container--cat1" style="color: <?php echo $sale; ?>"><span><?php echo $sale_title; ?></span></span>
    <?php } ?>
    <?php the_title( '<span class="model__container--name">', '</span>' ); ?>
    <?php $subtitle = fw_get_db_post_option( get_the_ID(), 'subtitle', $default_value = null );
    if ( ! empty( $subtitle ) ) { ?>
        <span class="model__container--country">(<?php echo $subtitle; ?>)</span>
    <?php } ?>
    <?php $made = fw_get_db_post_option( get_the_ID(), 'made', $default_value = null );
    if ( ! empty( $made ) ) { ?>
        <span class="model__container--manuf">(<?php echo $made; ?>)</span>
    <?php } ?>
    <a class="model__container--order js-open-order-modal" href="#" data-id="<?php the_ID(); ?>">Заказать</a>
</div>
