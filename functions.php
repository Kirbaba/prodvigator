<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

/**
 * Load Parser compatibility file.
 */
require_once get_template_directory() . '/lib/Parser.php';

/**
 * Load Bootstrap menu compatibility file.
 */
require_once get_template_directory() . '/lib/bootstrap_menu.php';

/**
 * Load clean comments menu compatibility file.
 */
require_once get_template_directory() . '/lib/clean_comments_constructor.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}
register_nav_menus(array( // Регистрируем 2 меню
	'top'     => 'Верхнее', // Верхнее
	'bottom'  => 'Внизу', // Внизу
	'primary' => 'Главное' // Внизу
));
// включаем поддержку миниатюр
add_theme_support( 'post-thumbnails' );
// задаем размер миниатюрам 250x150
set_post_thumbnail_size( 250, 150 );
// добавляем еще один размер картинкам 400x400 с обрезкой
add_image_size( 'big-thumb', 400, 400, true ); 
register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));
function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text'    => 'Назад', // текст назад
    	'next_text'    => 'Вперед', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
 	if( is_array( $links ) ) { // если пагинация есть
	    echo '<ul class="pagination">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
	        else echo "<li>$link</li>"; 
	    }
	   	echo '</ul>';
	 }
}

// приклеем ф-ю на добавление скриптов в футер
add_action( 'wp_footer', 'add_scripts' ); 
function add_scripts() { // добавление скриптов
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
	// wp_enqueue_script('libs',get_template_directory_uri().'/js/libs.min.js','','',true); // добавляем свой

    wp_enqueue_script('yndex-map', 'http://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');
    wp_enqueue_script('custom-scripts', get_template_directory_uri().'/js/script.js','','',true); // бутстрап
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
	wp_localize_script('main', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
}

// приклеем ф-ю на добавление стилей в хедер
add_action( 'wp_print_styles', 'add_styles' ); 
function add_styles() { // добавление стилей
    if(is_admin()) return false; // если мы в админке - ничего не делаем
	wp_enqueue_style( 'libs', get_template_directory_uri().'/css/libs.min.css' );// бутстрап
     wp_enqueue_style( 'font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', '1');  
    
    wp_enqueue_style( 'custom-styles', get_template_directory_uri().'/css/style.min.css' ); 
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
}

//Debug
function prn($content) {
	echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
	print_r ( $content );
	echo '</pre>';
}

//sidebar
function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
	if (is_active_sidebar( 'sidebar' )) { // если есть
		echo 'col-sm-9'; // пишем класс на 80% ширины
	} else { // если нет
		echo 'col-sm-12'; // контент на всю ширину
	}
}

//custom menu
function footer_menu( $theme_location ) {
	if ( ( $theme_location ) && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $theme_location ] ) ) {
		$menu       = get_term( $locations[ $theme_location ], 'nav_menu' );
		$menu_items = wp_get_nav_menu_items( $menu->term_id );

		$menu_list = '<div class="sitemap__flex">' . "\n";
		$count     = 0;
		foreach ( $menu_items as $menu_item ) {
			$link  = $menu_item->url;
			$title = $menu_item->title;

			if ( ! $menu_item->menu_item_parent ) {
				$parent_id = $menu_item->ID;
				$menu_list .= '<ul class="sitemap__item">';
				$menu_list .= '<li>' . "\n";
				$menu_list .= '<a class="sitemap__item_section" href="' . $link . '" >' . $title . '</a>' . "\n";
				$menu_list .= '</li>' . "\n";
			}

			if ( $parent_id == $menu_item->menu_item_parent ) {
				$menu_list .= '<li>' . "\n";
				$menu_list .= '<a href="' . $link . '" class="title">' . $title . '</a>' . "\n";
				$menu_list .= '</li>' . "\n";

			}

			if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) {
				$menu_list .= '</ul>';
			}
			$count ++;
		}

		$menu_list .= '</div>' . "\n";

	} else {
		$menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
	}
	echo $menu_list;
}

function primary_menu( $theme_location ) {
    if ( ( $theme_location ) && ( $locations = get_nav_menu_locations() ) && isset( $locations[ $theme_location ] ) ) {
        $menu       = get_term( $locations[ $theme_location ], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items( $menu->term_id );

        $menu_list = '<span class="js_mobile_nav">' . "\n";
        $count     = 0;
        foreach ( $menu_items as $menu_item ) {
            $link  = $menu_item->url;
            $title = $menu_item->title;

            if ( ! $menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                $menu_list .= '<li>' . "\n";
                $menu_list .= '<a class="drop" data-open="0" href="' . $link . '">' . $title . '</a>' . "\n";
                $menu_list .= '<ul>' . "\n";
                $menu_list .= ' <span class="container">' . "\n";
            }

            if ( $parent_id == $menu_item->menu_item_parent ) {
                $menu_list .= '<li><a href="' . $link . '" >' . $title . '</a></li>' . "\n";
            }

            if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) {
                $menu_list .= '</span></ul></li>';
            }
            $count ++;
        }

        $menu_list .= '</span>' . "\n";

    } else {
        $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
}
