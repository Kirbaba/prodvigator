<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<!-- open .container -->
<div class="container">
    <!-- open .infographic__flex -->
    <div class="infographic__flex">
        <!-- close .infographic__flex -->
        <h3>продвижение и раскрутка сайтов, <span>которые работают на вас!</span></h3>
        <!-- open .infographic__thumb -->
        <div class="infographic__thumb">
            <img src="<?php echo $atts['image']['url']; ?>" alt=""/>
        </div>
        <!-- close .infographic__thumb -->
        <!-- open .infographic__text -->
        <div class="infographic__text">
            <div><?php echo $atts['text']; ?></div>
            <a href="" class="infographic__text_btn">Все наши услуги</a>
        </div>
        <!-- close .infographic__text -->
    </div>
</div>
<!-- close .container -->