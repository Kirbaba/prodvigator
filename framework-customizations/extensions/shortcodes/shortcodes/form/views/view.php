<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .h2 -->
    <h2><?php echo esc_attr( $atts['label'] ); ?></h2>
    <!-- close .h2 -->
    <input type="text" class="inspection_inp inspection_name" placeholder="Ваше имя*"/>
    <input type="text" class="inspection_inp inspection_site" placeholder="Сайт*"/>
    <input type="email" class="inspection_inp inspection_email" placeholder="e-mail*"/>
    <button class="inspection_btn">ПРОВЕРИТЬ</button>
</div>
<!-- close .container -->
<!-- open .inspection_image -->
<div class="inspection_image">
    <img src="<?php bloginfo( 'template_directory' ); ?>/img/2-1.png" alt=""/>
</div>
<!-- close .inspection_image -->