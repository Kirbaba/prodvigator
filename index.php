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
	<div class="fotorama" data-width="100%" data-height="450" data-transition="crossfade" data-fit="cover" data-nav="false" data-autoplay="5000" data-loop="true">
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

<!-- open .inspection -->
<section class="inspection">
	<!-- open .container -->
	<div class="container">
		<!-- open .h2 -->
		<h2>ГОТОВНОСТЬ САЙТА К ПРОДВИЖЕНИЮ</h2>
		<!-- close .h2 -->
		<form action="#">
			<input type="text" class="inspection_inp" placeholder="Ваше имя*" />
			<input type="text" class="inspection_inp"  placeholder="Сайт*"/>
			<input type="email" class="inspection_inp"  placeholder="e-mail*"/>
			<button class="inspection_btn">ПРОВЕРИТЬ</button></form>
	</div>
	<!-- close .container -->
	<!-- open .inspection_image -->
	<div class="inspection_image">
		<img src="<?php bloginfo('template_directory'); ?>/img/2-1.png" alt="" />
	</div>
	<!-- close .inspection_image -->
</section>
<!-- close .inspection -->

<!-- open .infographic -->
<section class="infographic">
	<!-- open .container -->
	<div class="container">
		<!-- open .infographic__flex -->
		<div class="infographic__flex">
				<!-- close .infographic__flex -->
			<h3>продвижение и раскрутка сайтов, <span>которые работают на вас!</span></h3>
			<!-- open .infographic__thumb -->
			<div class="infographic__thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/yourbusiness.png" alt="" />
			</div>
			<!-- close .infographic__thumb -->
			<!-- open .infographic__text -->
			<div class="infographic__text">
				<p>В агентстве интернет-маркетинга <b>ПРОДВИГАТОР</b> вы можете заказать все услуги, необходимые для <b>продвижения бизнеса в интернет</b>. Агентство интернет маркетинга ПРОДВИГАТОР использует передовые технологии рекламы в интернет и эффективное продвижение сайтов заказчиков в Интернете. Кроме поисковой оптимизации и контекстной рекламы мы применяем и другие методы, которые помогают увеличивать продажи и использовать сайт с максимальной отдачей. </p>
				<p>  <b>Ведение вашего бизнеса является непростым делом!</b> Поэтому в ПРОДВИГАТОРе мы все сделали так, чтобы избавить вас от дополнительных забот о продвижении сайта и интернет-маркетинге. Мы понимаем, как нужно много времени, сил и средств, чтобы управлять кампанией, людьми, производственными процессами, поставками и продажами. </p>
				<p>   Разве есть у вас еще время, чтобы следить за дополнительными контрактами и счет-фактурами? Мы предлагаем полностью управляемое решение из одних рук. У вас будет один контакт, один счет и один отчет в месяц... Что может быть проще, чем это? </p>
				<a href="" class="infographic__text_btn">Все наши услуги</a>
			</div>
			<!-- close .infographic__text -->
		</div>
		
	</div>
	<!-- close .container -->
</section>
<!-- close .infographic -->

<!-- open .whyweare -->
<section class="whyweare">
	<!-- open .container -->
	<div class="container">
		<h2>Эффективный интернет-маркетинг</h2>
		<p><em>Мы все знаем почему вы здесь. Вам нужно увеличить продажи, количество <br /> заказов и клиентов, конверсии на сайте.</em></p>

		<!-- open .whyweare__attention -->
		<div class="whyweare__attention">
			<p><em>Не волнуйтесь, вы находитесь в нужном месте и на нужном сайте.</em></p>
			<h3><span>Почему выбирают продвигатор?</span></h3>
		</div>
		<!-- close .whyweare__attention -->
		
		<!-- open .whyweare__flex -->
		<div class="whyweare__flex">
			<!-- open .whyweare__item -->
			<div class="whyweare__item">
				<!-- open .whyweare__item_text -->
				<div class="whyweare__item_text">
					<h4>Интернет-маркетинг нацеленный на результат</h4>
					<p>Ваш успех – это наш успех. Мы заинтересованы в нем. Все наши услуги нацелены на то, чтобы помочь вам увеличить количество ваших клиентов, продвинуть ваш сайт в ТОП и увеличить его видимость, трафик и конверсии. Результатом нашей работы является не просто появление сайтов заказчика в результатах поисковых систем, а реальная конверсия посетителей сайта в клиентов. Мы будем работать, помогая вам достичь ваших целей как можно быстрее, а затем продолжим работать над тем, чтобы вы могли их превзойти!</p>
				</div>
				<!-- close .whyweare__item_text -->
				<!-- open .whyweare__item_icon -->
				<div class="whyweare__item_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/1.png" alt="" />
				</div>
				<!-- close .whyweare__item_icon -->
			</div>
			<!-- close .whyweare__item -->
			<!-- open .whyweare__item -->
			<div class="whyweare__item">
				<!-- open .whyweare__item_icon -->
				<div class="whyweare__item_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/2.png" alt="" />
				</div>
				<!-- close .whyweare__item_icon -->
				<!-- open .whyweare__item_text -->
				<div class="whyweare__item_text">
					<h4>Специализированные кампании для каждого клиента</h4>
					<p>Не бывает двух одинаковых предприятий, почему маркетинговые и рекламные кампании должны быть одинаковыми? Мы уверены, что каждый веб-сайт и каждый бизнес имеют свои уникальные потребности и, поэтому каждая рекламная кампания должна быть спроектирована так, чтобы отвечать этим уникальным потребностям. Например, новый сайт с для компании с локальным рынком сбыта имеет совершенно иную стратегию раскрутки и продвижения, чем сайт-ветеран для компании с национальным или интернациональным рынком. 100% наших рекомендаций разработаны именно для вас и для ваших специфических задач.</p>
				</div>
				<!-- close .whyweare__item_text -->
				
			</div>
			<!-- close .whyweare__item -->
			<!-- open .whyweare__item -->
			<div class="whyweare__item">
				<!-- open .whyweare__item_text -->
				<div class="whyweare__item_text">
					<h4>Раскрутка и продвижение сайтов из одних рук</h4>
					<p>Мы предлагаем услуги от сопровождения сайта, поисковой оптимизации и контекстной рекламы до управления репутацией бренда. Почему? Потому, что ваш веб-сайт и интернет-маркетинг должны работать вместе, в комплексе. Многие маркетинговые кампании провалились потому, что веб-сайт не работал должным образом. Мы предлагаем решения, которые учитывают работу каждого элемента сайта и маркетинговых кампаний, которые работают вместе и дают лучший шанс на успех и увеличение прибыльности.</p>
				</div>
				<!-- close .whyweare__item_text -->
				<!-- open .whyweare__item_icon -->
				<div class="whyweare__item_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/3.png" alt="" />
				</div>
				<!-- close .whyweare__item_icon -->
			</div>
			<!-- close .whyweare__item -->
			<!-- open .whyweare__item -->
			<div class="whyweare__item">
				<!-- open .whyweare__item_icon -->
				<div class="whyweare__item_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/4.png" alt="" />
				</div>
				<!-- close .whyweare__item_icon -->
				<!-- open .whyweare__item_text -->
				<div class="whyweare__item_text">
					<h4>Квалифицированные специалисты с богатым опытом</h4>
					<p>Нужно много времени, сил и знаний, чтобы делать эту работу. Нашим специалистам по плечу раскрутка сайта и реклама в интернет для самых разных клиентов: от завода до небольшого интернет-магазина. 
					 Квалификация наших специалистов подтверждена Google, Яндекс, а также удовлетворенными заказчиками. Мы работаем вместе над каждым проектом, чтобы вы могли достичь максимальных успехов. В нашем арсенале продвижение сайтов, управление контекстной рекламой, видео и таргетированнная реклама. Постоянное обучение и обмен опытом открывают новые возможности коммуникаций, совершенствования и в конечном счете, к еще большему успеху кампаний клиента. Ведь верно говорят, что, две головы лучше, чем одна!
					</p>
				</div>
				<!-- close .whyweare__item_text -->
				
			</div>
			<!-- close .whyweare__item -->
			<!-- open .whyweare__item -->
			<div class="whyweare__item">
				<!-- open .whyweare__item_text -->
				<div class="whyweare__item_text">
					<h4>Отличный клиентоориентиованный сервис</h4>
					<p>Каждому новому клиенту предоставляется выделенный аккаунт-менеджер. Этот человек всегда доступен для ваших вопросов и поддержки. Даже, если ваш менеджер не доступен, вы можете выяснить все вопросы с любым человеком из нашей команды. Мы знаем, что время – деньги и понимаем, насколько вам важно быстро прояснить все вопросы и получить нужные ответы.</p>
				</div>
				<!-- close .whyweare__item_text -->
				<!-- open .whyweare__item_icon -->
				<div class="whyweare__item_icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/5.png"  alt="" />
				</div>
				<!-- close .whyweare__item_icon -->
			</div>
			<!-- close .whyweare__item -->	
		</div>
		<!-- close .whyweare__flex -->
		
	</div>
	<!-- close .container -->
</section>
<!-- close .whyweare -->	

<!-- open .phonecall -->
<section class="phonecall">
	<!-- open .container -->
	<div class="container">
		<!-- open .phonecall__content -->
		<div class="phonecall__content">
			<h2>Зачем тратить время, силы и деньги на маркетинг, который не работает?</h2>
			<p>Мы разработаем маркетинговые кампании для вас так, что вы сможете спокойно заниматься тем, что вы умеете лучше всего – своим любимым делом.</p>
			<h4>Звоните нам   <b>+3 222 555 66 77</b> или <a href="" class="phonecall_btn">Заполните заявку онлайн</a></h4>
		</div>
		<!-- close .phonecall__content -->
	</div>
	<!-- close .container -->
</section>
<!-- close .phonecall -->	

<!-- open .home-blog -->
<section class="home-blog">
	<!-- open .container -->
	<div class="container">
		<h3>новое в блоге <a href="" class="home-blog_all">Посмотреть весь блог</a></h3>
		<!-- open .home-blog__flex -->
		<div class="home-blog__flex">
			<!-- open .home-blog__item -->
			<div class="home-blog__item">
				<!-- open .home-blog__item_thumb -->
				<div class="home-blog__item_thumb">
					<img src="<?php bloginfo('template_directory'); ?>/img/thumb-gazifikaciya-01-370x200.png" alt="" />
				</div>
				<!-- close .home-blog__item_thumb -->
				<small class="home-blog_date">10.05.2015</small>
				<h5>Расширился список документов для изменения фасада здания</h5>
				<p>Контент в разработке. Расширился список документов для изменения фасада здания. Расширился список документов для изменения фасада здания. Расширился список документов </p>
				<a href="#" class="home-blog__item_open"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
			<!-- close .home-blog__item -->
			<!-- open .home-blog__item -->
			<div class="home-blog__item">
				<!-- open .home-blog__item_thumb -->
				<div class="home-blog__item_thumb">
					<img src="<?php bloginfo('template_directory'); ?>/img/thumb-pereplanirivka-01-370x200.png" alt="" />
				</div>
				<!-- close .home-blog__item_thumb -->
				<small class="home-blog_date">10.05.2015</small>
				<h5>Расширился список документов для изменения фасада здания</h5>
				<p>Контент в разработке. Расширился список документов для изменения фасада здания. Расширился список документов для изменения фасада здания. Расширился список документов </p>
				<a href="#" class="home-blog__item_open"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
			<!-- close .home-blog__item -->
			<!-- open .home-blog__item -->
			<div class="home-blog__item">
				<!-- open .home-blog__item_thumb -->
				<div class="home-blog__item_thumb">
					<img src="<?php bloginfo('template_directory'); ?>/img/thumb-pereplanirivka-02-370x200.png" alt="" />
				</div>
				<!-- close .home-blog__item_thumb -->
				<small class="home-blog_date">10.05.2015</small>
				<h5>Расширился список документов для изменения фасада здания</h5>
				<p>Контент в разработке. Расширился список документов для изменения фасада здания. Расширился список документов для изменения фасада здания. Расширился список документов </p>
				<a href="#" class="home-blog__item_open"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
			<!-- close .home-blog__item -->
		</div>
		<!-- close .home-blog__flex -->
	</div>
	<!-- close .container -->
</section>
<!-- close .home-blog -->

<!-- open .partners -->
<section class="partners">
	<!-- open .container -->
	<div class="container">
		<h2>Мы являемся официальными партнерами</h2>
		<!-- open .partners__flex -->
		<div class="partners__flex">
			<!-- open .partners__item -->
			<div class="partners__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/googlelogo.png" alt="" />
			</div>
			<!-- close .partners__item -->
			<!-- open .partners__item -->
			<div class="partners__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/yandexlogo.png" alt="" />
			</div>
			<!-- close .partners__item -->
			<!-- open .partners__item -->
			<div class="partners__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/1CBitrixLogo.png" alt="" />
			</div>
			<!-- close .partners__item -->	
		</div>
		<!-- close .partners__flex -->
		
	</div>
	<!-- close .container -->
</section>
<!-- close .partners -->




<?php get_footer(); // подключаем footer.php ?>