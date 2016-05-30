<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!-- open .sitemap -->
<section class="sitemap">
    <!-- open .container -->
    <div class="container">
        <?php footer_menu( 'bottom' ); ?>
    </div>
    <!-- close .container -->
</section>
<!-- close .sitemap -->

<footer class="footer">
    <!-- open .container -->
    <div class="container">
        <!-- open .contact-info -->
        <article class="contact-info">
                <h3>Контакты:</h3>
                <h3><?= fw_get_db_customizer_option( 'address' ); ?></h3>
                <h3><?= fw_get_db_customizer_option( 'second_phone' ); ?></h3>

                <a href="#" class="contact-info_link">Карта проезда</a>    
        </article>
        <!-- close .contact-info -->
        <!-- open .footer__flex -->
        <div class="footer__flex">
            <!-- open .footer__contact -->
            <div class="footer__contact">
                <h3>Электронная почта: <br/><a
                        href="mailto:<?= fw_get_db_customizer_option( 'email' ); ?>"><?= fw_get_db_customizer_option( 'email' ); ?></a>
                </h3>
                <a href="/" class="footer__logo">
                    <img src="<?php $logo = fw_get_db_customizer_option( 'logo' );
                    echo $logo['url']; ?>" alt=""/>
                </a>
            </div>
            <!-- close .footer__contact -->
            
        </div>
        <!-- close .footer__flex -->
    </div>
    <!-- close .container -->
</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>