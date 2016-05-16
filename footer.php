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
<!-- open .contact-info -->
<section class="contact-info">
    <!-- open .container -->
    <div class="container">
        <h3>Контакты:</h3>
        <h3>г. Екатеринбург, ул. Крупносортщиков, 14, офис 417</h3>
        <h3>+7 895 222 22 22</h3>

        <a href="#" class="contact-info_link">Карта проезда</a>
    </div>
    <!-- close .container -->
</section>
<!-- close .contact-info -->
<footer class="footer">
    <!-- open .container -->
    <div class="container">
        <!-- open .footer__flex -->
        <div class="footer__flex">
            <!-- open .footer__contact -->
            <div class="footer__contact">
                <h3>Электронная почта: <br/><a
                        href="mailto:<?= fw_get_db_customizer_option( 'email' ); ?>"><?= fw_get_db_customizer_option( 'email' ); ?></a>
                </h3>
            </div>
            <!-- close .footer__contact -->
            <a href="/" class="footer__logo">
                <img src="<?php $logo = fw_get_db_customizer_option( 'logo' );
                echo $logo['url']; ?>" alt=""/>
            </a>
        </div>
        <!-- close .footer__flex -->
    </div>
    <!-- close .container -->
</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>