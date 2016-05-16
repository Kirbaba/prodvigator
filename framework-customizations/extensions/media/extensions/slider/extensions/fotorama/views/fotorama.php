<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/**
 * @var array $data
 */

if ( isset( $data['slides'] ) ): ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            fotoramaResize();
        });
        jQuery(window).resize(function () {
            fotoramaResize();
        });
        function fotoramaResize() {
            var $fotoramaDiv = jQuery('.fotorama').fotorama();
            var fotorama = $fotoramaDiv.data('fotorama');

            if (jQuery(window).width() <= 980) {
                fotorama.resize({
                    height: 700
                });
            }
            if (jQuery(window).width() <= 320) {
                fotorama.resize({
                    height: 700
                });
            }
        }
    </script>
    <!-- open .fotorama -->
    <div class="fotorama" data-width="100%" data-height="450" data-transition="crossfade" data-fit="cover"
         data-nav="false" data-autoplay="5000" data-loop="true">
        <?php foreach ( $data['slides'] as $slide ): ?>
            <?php if ( $slide['src'] ) : ?>
                <!-- open .banner__item -->
                <div class="banner__item" data-img="<?php echo esc_attr( $slide['src'] ); ?>">
                    <!-- open .container -->
                    <div class="container">
                        <!-- open .banner__item_description -->
                        <div class="banner__item_description">
                            <h3><?php echo esc_attr( $slide['title'] ); ?></h3>
                            <p><?php echo esc_attr( $slide['desc'] ); ?></p>
                            <a href="#" class="banner_btn banner_services">Все наши услуги</a>
                            <a href="#" class="banner_btn banner_order">Сделать заказ</a>
                        </div>
                        <!-- close .banner__item_description -->
                        <!-- open .banner__item_img -->
                        <div class="banner__item_img"></div>
                        <!-- close .banner__item_img -->
                    </div>
                    <!-- close .container -->
                </div>
                <!-- close .banner__item -->
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <!-- close .fotorama -->
<?php endif; ?>
