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
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo( 'rdf_url' ); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo( 'rss_url' ); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo( 'comments_rss2_url' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

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
            <?php wp_nav_menu( array(
                'theme_location' => 'top',
            ) ); ?>
            <!--   <ul>
                   <li><a href="#">О компании</a></li>
                   <li><a href="#">Блог</a></li>
                   <li><a href="#">Контакты</a></li>
               </ul>-->
        </div>
        <!-- close .top-line__nav -->
        <!-- open .top-line__info -->
        <div class="top-line__info">
            <!-- open .top-line_social -->
            <div class="top-line_social">
                <a href="<?= fw_get_db_customizer_option( 'vk' ); ?>" class="top-line_social_btn"><i
                        class="fa fa-vk"></i></a>
                <a href="<?= fw_get_db_customizer_option( 'fb' ); ?>" class="top-line_social_btn"><i
                        class="fa fa-facebook"></i></a>
                <a href="<?= fw_get_db_customizer_option( 'tw' ); ?>" class="top-line_social_btn"><i
                        class="fa fa-twitter"></i></a>
                <a href="<?= fw_get_db_customizer_option( 'gplus' ); ?>" class="top-line_social_btn"><i
                        class="fa fa-google-plus"></i></a>
            </div>
            <!-- close .top-line_social -->
            <h3><?= fw_get_db_customizer_option( 'phone' ); ?></h3>
            <a href="#" class="top-line__info-btn">FREE SEO ANALYSIS</a>
        </div>
        <!-- close .top-line__info -->
    </div>
    <!-- close .container -->
</article>
<!-- close .top-line -->

<!-- NAVIGATION -->
<nav class="navigation">
    <ul class="container">
        <a href="/" class="navigation__logo">
            <img src="<?php $logo = fw_get_db_customizer_option( 'logo' );
            echo $logo['url']; ?>" alt=""/>
        </a>
        <a href="#" class="navigation__toggle"><span></span></a>
	<span class="js_mobile_nav">
		<li>
            <a class="drop" data-open="0" href="https://vk.com/">Интернет-маркетинг</a>
            <ul>
                <span class="container">
                    <li><a href="#">Контекстная реклама</a></li>
                    <li><a href="#">Таргетированная реклама</a></li>
                    <li><a href="#">E-mail маркетинг</a></li>
                </span>
            </ul>
		</li>
        <li>
            <a class="drop" data-open="0" href="#">Оптимизация и продвижение</a>
            <ul>
                <span class="container">
                    <li><a href="#">Продвижение сайта</a></li>
                    <li><a href="#">Продвижение молодых сайтов</a></li>
                    <li><a href="#">Технический аудит сайта</a></li>
                    <li><a href="#">Стоимость продвижения</a></li>
                </span>          
            </ul>
        </li>
        <li>
            <a class="drop" data-open="0" href="#">Консалтинг и аналитика</a>
            <ul>
                <span class="container">
                    <li><a href="#">Веб-аналитика</a></li>
                    <li><a href="#">Установка счетчиков </a></li>
                    <li><a href="#">Сплит-тестирование</a></li>
                    <li><a href="#">Аудит контекстной рекламы</a></li>
                </span>
            </ul>
        </li>
      </span>
    </ul>
</nav>