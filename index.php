<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<!-- open .banner -->
<section class="banner">
	<!-- open .fotorama -->
	<div class="fotorama" data-width="100%" data-height="500" data-fit="cover" data-nav="false" data-autoplay="4000" data-loop="true">
		<!-- open .banner__item -->
		<div class="banner__item" data-img="<?php bloginfo('template_directory'); ?>/img/slide1.png">
			<!-- open .container -->
			<div class="container">
				<!-- open .banner__item_description -->
				<div class="banner__item_description">
					<h3>Поисковое продвижение и раскрутка сайтов</h3>
					<p>Мы помогаем увеличивать продажи и доходность
					Вашего бизнеса, привлекаем новых клиентов.</p>
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
		<!-- open .banner__item -->
		<div class="banner__item" data-img="<?php bloginfo('template_directory'); ?>/img/slide2-1.png" >
			<!-- open .container -->
			<div class="container">
				<!-- open .banner__item_description -->
				<div class="banner__item_description">
					<h3>Поисковое продвижение и раскрутка сайтов</h3>
					<p>Мы продвигаем веб-сайты и создаем эффективные маркетинговые стратегии, целевой трафик и высокую конверсию.</p>
					<a href="#" class="banner_btn banner_services">Все наши услуги</a>
					<a href="#" class="banner_btn banner_order">Сделать заказ</a>
				</div>
				<!-- close .banner__item_description -->
				<!-- open .banner__item_img -->
				<div class="banner__item_img">
					<img src="<?php bloginfo('template_directory'); ?>/img/corp.png" alt="" />
				</div>
				<!-- close .banner__item_img -->
			</div>
			<!-- close .container -->
		</div>
		<!-- close .banner__item -->
		<!-- open .banner__item -->
		<div class="banner__item" data-img="<?php bloginfo('template_directory'); ?>/img/slide-3.png">
			<!-- open .container -->
			<div class="container">
				<!-- open .banner__item_description -->
				<div class="banner__item_description">
					<h3>Охват целевой аудитории в нужный момент</h3>
					<p>Заинтересованные пользователи увидят информацию о ваших товарах и услугах именно тогда, когда они ищут предлагаемые вами товары, услуги.</p>
					<a href="#" class="banner_btn banner_services">Все наши услуги</a>
					<a href="#" class="banner_btn banner_order">Сделать заказ</a>
				</div>
				<!-- close .banner__item_description -->
				<!-- open .banner__item_img -->
				<div class="banner__item_img">
					<img src="<?php bloginfo('template_directory'); ?>/img/internetmarketingwork.png" alt="" />
				</div>
				<!-- close .banner__item_img -->
			</div>
			<!-- close .container -->
		</div>
		<!-- close .banner__item -->
	</div>
	<!-- close .fotorama -->
	
</section>
<!-- close .banner -->

<?php get_footer(); // подключаем footer.php ?>