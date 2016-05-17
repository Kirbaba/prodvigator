<?php get_header(); ?> 

	<!-- open .contacts-banner -->
	<section class="contacts-banner">
		<!-- open .container -->
		<div class="container">
			<!-- open .banner__item -->
                <div class="contacts-banner__item">
                    <!-- open .container -->
                    <div class="container">
                        <!-- open .banner__item_description -->
                        <div class="contacts-banner__item_description">
                            <h3>Вы уже определились с выбором  и готовы начать сотрудничество?</h3>
                            <p>Просто заполните форму ниже и мы свяжемся с вами в ближайшее время. Если вам нужна срочная помощь, пожалуйста, свяжитесь с нами напрямую, используя информацию ниже.                            
                            </p>
                            <span class="contacts-banner_arrow"></span>
                        </div>
                        <!-- close .banner__item_description -->
                        <!-- open .banner__item_img -->
                        <div class="contacts-banner__item_img">
                        	<img src="<?php bloginfo('template_directory'); ?>/img/email-marketing-services.png" alt="" />
                        </div>
                        <!-- close .banner__item_img -->
                    </div>
                    <!-- close .container -->
                </div>
                <!-- close .banner__item -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .contacts-banner -->

	<!-- open .contacts-content -->
	<section class="contacts-content">
		<!-- open .container -->
		<div class="container">
			<!-- open .h3 -->
			<h3>Контакты</h3>
			<!-- close .h3 -->
			<!-- open .contacts-content__info -->
			<div class="contacts-content__info">
				<!-- open .contacts-content__info_item -->
				<div class="contacts-content__info_item">
					<strong>Телефон</strong>
					<p>+7 895 222 33 33</p>
					<p>+7 495 587 45 61</p>
				</div>
				<!-- close .contacts-content__info_item -->
				<!-- open .contacts-content__info_item -->
				<div class="contacts-content__info_item">
					<strong>E-mail:</strong>
					<p><a href="mailto:prodvigator@gmail.com">prodvigator@gmail.com</a></p>
				</div>
				<!-- close .contacts-content__info_item -->
				<!-- open .contacts-content__info_item -->
				<div class="contacts-content__info_item">
					<strong>Адрес:</strong>
					<p>г.Москва, ул. Юлбилейная 15,</p>
				</div>
				<!-- close .contacts-content__info_item -->
				
				<!-- open .contacts-content__info_item -->
				<div class="contacts-content__info_item">
					<!-- open #map -->
					<div id="contacts_map" width="100%" height="250" /></div>
					<!-- close #map -->
				</div>
				<!-- close .contacts-content__info_item -->
				



			</div>
			<!-- close .contacts-content__info -->
			<!-- open .contacts-content__form -->
			<div class="contacts-content__form">
				<form action="#">
					<label for="contacts-content__form_name">Ваше ФИО*</label>
					<input type="text" class="contacts-content__form_inp" name="contacts-content__form_name" id="contacts-content__form_name"/>

					<label for="contacts-content__form_email">Email*</label>
					<input type="email" class="contacts-content__form_inp" name="contacts-content__form_email" id="contacts-content__form_email"/>

					<!-- open .contacts-content__form_shortbox -->
					<div class="contacts-content__form_shortbox">
						<label for="contacts-content__form_site">Сайт*</label>
						<input type="text" class="contacts-content__form_inp" name="contacts-content__form_site" id="contacts-content__form_site"/>	
					</div>
					<!-- close .contacts-content__form_shortbox -->
					
					<!-- open .contacts-content__form_shortbox -->
					<div class="contacts-content__form_shortbox">
						<label for="contacts-content__form_phone">Телефон*</label>
						<input type="tel" class="contacts-content__form_inp" name="contacts-content__form_phone" id="contacts-content__form_phone"/>	
					</div>
					<!-- close .contacts-content__form_shortbox -->
					
					
					<label for="contacts-content__form_text">Комментарии</label>
					<textarea name="contacts-content__form_text" id="contacts-content__form_text" class="contacts-content__form_text"></textarea>

					<button class="contacts-content__form_btn">Отправить</button>
				</form>
			</div>
			<!-- close .contacts-content__form -->
		</div>
		<!-- close .container -->
	</section>
	<!-- close .contacts-content -->

<?php get_template_part('partners'); ?>
<?php get_template_part('sitemap'); ?>
<?php get_template_part('contact-info'); ?>
<?php get_footer(); ?> 