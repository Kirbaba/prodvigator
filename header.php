<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); // выводи тайтл, функция лежит в functions.php ?></title>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	
	<!-- open .top-line -->
	<article class="top-line">
		<!-- open .container -->
		<div class="container">
				<!-- open .top-line__nav -->
			<div class="top-line__nav">
				<ul>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<!-- close .top-line__nav -->
			<!-- open .top-line__info -->
			<div class="top-line__info">
				<!-- open .top-line_social -->
				<div class="top-line_social">
					<a href="#" class="top-line_social_btn"><i class="fa fa-vk"></i></a>
					<a href="#" class="top-line_social_btn"><i class="fa fa-facebook"></i></a>
					<a href="#" class="top-line_social_btn"><i class="fa fa-twitter"></i></a>
					<a href="#" class="top-line_social_btn"><i class="fa fa-google-plus"></i></a>
				</div>
				<!-- close .top-line_social -->
				<h3>+7 495 29 09 640 </h3>
				<a href="#" class="top-line__info-btn">FREE SEO ANALYSIS</a>
			</div>
			<!-- close .top-line__info -->
		</div>
		<!-- close .container -->
		
	</article>
	<!-- close .top-line -->

	<!-- open .navigation -->
	<nav class="navigation">
		<!-- open .container -->
		<div class="container">
			<!-- open .navigation__logo -->
			<a href="/" class="navigation__logo">
				<img src="<?php bloginfo('template_directory'); ?>/img/Logotype.png" alt="" />
			</a>
			<!-- close .navigation__logo -->
			<a href="#" class="navigation__toggle"></a>
			<!-- open .navigation__menu -->
			<ul class="navigation__menu">
				<li><a href="#">Интернет-маркетинг</a></li>
				<li><a href="#">Оптимизация и продвижение</a></li>
				<li><a href="#">Консалтинг и аналитика</a></li>
			</ul>
			<!-- close .navigation__menu -->
		</div>
		<!-- close .container -->
	</nav>
	<!-- close .navigation -->