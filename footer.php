<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer class="footer">		
		<!-- open .container -->
		<div class="container">
			<!-- open .footer__flex -->
			<div class="footer__flex">
				<!-- open .footer__contact -->
				<div class="footer__contact">
					<h3>Электронная почта: <br />sales@generator.bz</h3>
				</div>
				<!-- close .footer__contact -->
				<a href="/" class="footer__logo">
					<img src="<?php bloginfo('template_directory'); ?>/img/Logotype.png" alt="" />
				</a>
			</div>
			<!-- close .footer__flex -->
		</div>
		<!-- close .container -->
	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>