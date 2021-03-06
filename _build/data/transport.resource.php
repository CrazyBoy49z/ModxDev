<?php
/**
 * @author burgen.
 * @package ModxDev 
 * @rewrite CrazyBoy49z
 * @date 09.01.2016
 * @time 13:50
 */

$parent_id = 0;
$template_id = 0;
$parent_uri = 'system/';
$parent_uri_cabinet = 'cabinet/';
$parent_uri_service = 'service/';

$template_service = 'service';
$template_page = 'page';
$template_main = 'main';

try {
	$robots = file_get_contents($sources['source_core'].'/elements/robot.txt');
}
catch (Exception $e) {
//	print_r(MODX_BASE_PATH.PKG_NAME.'/core/components/'.PKG_NAME_LOWER.'/elements/robot.txt');
	print_r(  'error create robot.txt'. $e->getMessage());
}

// Resources
$resources_in = array(
    'system' => array(
	    'pagetitle' => 'system',
        'checked'   => 1,
        'blocked'   => 1,
        'desc'      => 'Основной контенер для служебных страниц',
        'template' => 0,
        'published' => 0,
        'hidemenu' => 1,
        'cacheable' => 0,
        'parent' => 0,
        'alias' => 'system',
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'content' =>'',
        'uri_override' => 1,
        'uri'  => 'system/',
    ),
	'service' => array(
		'pagetitle' => 'service',
        'checked'   => 1,
        'blocked'   => 1,
        'desc'      => 'контенер для страниц 403,404,503,sitemap,robots.txt',
        'template' => 0,
        'published' => 0,
        'hidemenu' => 1,
        'cacheable' => 0,
        'parent_uri' => $parent_uri,
        'alias' => 'service',
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'content' =>'',
        'uri_override' => 1,
        'uri'  => 'service/',
    ),
	'sitemap' => array(
		'pagetitle' => 'sitemap.xml',
        'checked'   => 1,
        'desc'      => 'формирование карты сайта xml (pdoSitemap)',
        'template' => 0,
        'published' => 1,
        'hidemenu' => 1,
        'parent_uri' => $parent_uri_service,
        'alias' => 'sitemap',
		'content_type' => 2,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'sitemap.xml',
        'content' =>'[[!pdoSitemap? &checkPermissions=`list`]]'
    )
    ,'robots' => array(
		'pagetitle' => 'robots.txt',
        'checked'   => 1,
        'desc'      => 'тоже самое что и robots.txt только ресурсом',
        'template' => 0,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'robots',
        'parent_uri' => $parent_uri_service,
        'content_type' => 3,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'robots.txt',
        'content' => $robots,
    )
    ,'error404' =>  array(
		'pagetitle' => 'Страница не найдена',
        'checked'   => 1,
        'desc'      => 'страница 404',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'error404',
        'content_type' => 1,
        'template_name' => $template_service,
        'parent_uri' => $parent_uri_service,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'error404.html',
        'content' => 'Страница не существует или вы не правильно ввели адрес'
    )
    ,'error403' =>  array(
		'pagetitle' => 'Доступ запрещен',
        'checked'   => 1,
        'desc'      => 'страница 403',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'template_name' => $template_service,
        'parent_uri' => $parent_uri_service,
        'alias' => 'error403',
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'error403.html',
        'content' => 'Доступ к этой странице запрещен'
    )
    ,'error503' =>  array(
		'pagetitle' => 'Сайт временно не доступен',
        'checked'   => 1,
        'desc'      => 'страница 503',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'template_name' => $template_service,
        'parent_uri' => $parent_uri_service,
        'alias' => 'error503',
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'error503.html',
        'content' => 'Сайт временно не доступен'
    )

    ,'search' =>  array('pagetitle' => 'Поиск',
        'checked'   => 0,
        'desc'      => 'страница для поиска по сайту',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'search',
        'template_name' => $template_page,
        'parent_uri' => $parent_uri,
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'search.html',
        'content' => ''
    )
    ,'cart' =>  array('pagetitle' => 'Корзина',
        'checked'   => 0,
        'desc'      => 'страница корзины со снипетами: [[!msCart?]][[!msOrder?]]',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'cart',
        'template_name' => $template_page,
        'parent_uri' => $parent_uri,
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'cart.html',
        'content' => '[[!msCart?]][[!msOrder?]]'
    )

    ,'cabinet' =>  array('pagetitle' => 'Личный кабинет',
        'checked'   => 0,
        'desc'      => 'контенер личного кабинета',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'cabinet',
        'template_name' => $template_page,
        'parent_uri' => $parent_uri,
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'cabinet/',
        'content' => ''
    )
    ,'auth' =>  array('pagetitle' => 'Вход на сайт',
        'checked'   => 0,
        'desc'      => 'страница входа на сайте и сниппетом [[!officeAuth]]',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'parent_uri' => $parent_uri,
        'alias' => 'auth',
        'content_type' => 1,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'cabinet/auth.html',
        'content' => '[[!officeAuth]]'
    )
    ,'profile' =>  array('pagetitle' => 'Профиль',
        'checked'   => 0,
        'desc'      => 'страница с профилем и сниппетом [[!officeProfile`]]',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'profile',
        'content_type' => 1,
        'template_name' => $template_page,
        'parent_uri' => $parent_uri_cabinet,
        'richtext' => 0,
        'searchable' => 1,
        'uri_override' => 1,
        'uri' => 'cabinet/profile.html',
        'content' => '[[!officeProfile`]]'
    )
    ,'orders' =>  array(
		'pagetitle' => 'Мои заказы',
        'checked'   => 0,
        'desc'      => 'страница с заказами и сниппетом [[!Office?action=`miniShop2`]]',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 1,
        'alias' => 'orders',
        'content_type' => 1,
        'template_name' => $template_page,
        'parent_uri' => $parent_uri_cabinet,
        'richtext' => 0,
        'searchable' => 0,
        'uri_override' => 1,
        'uri' => 'cabinet/orders.html',
        'content' => '[[!Office?action=`miniShop2`]]'
    )
    ,'catalog' =>  array('pagetitle' => 'Каталог',
        'checked'   => 0,
        'desc'      => 'страница каталог товаров minishop2 со снипетами: [[!msProducts?]]',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 0,
        'template_name' => $template_page,
        'alias' => 'catalog',
        'content_type' => 1,
        'class_key' => 'msCategory',
        'parent' => 0,
        'richtext' => 0,
        'searchable' => 1,
        'uri_override' => 1,
        'uri' => 'catalog.html',
        'content' => '[[!msProducts?]]'
    )
    ,'about' =>  array(
		'pagetitle' => 'О компании',
        'checked'   => 0,
        'desc'      => '',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 0,
        'alias' => 'about',
        'template_name' => $template_page,
        'content_type' => 1,
        'parent' => 0,
        'richtext' => 0,
        'searchable' => 1,
        'uri_override' => 1,
        'uri' => 'about.html',
        'content' => ''
    )
    ,'contacts' =>  array(
		'pagetitle' => 'Контакты',
        'checked'   => 0,
        'desc'      => '',
        'template' => $template_id,
        'published' => 1,
        'hidemenu' => 0,
        'template_name' => $template_page,
        'alias' => 'contacts',
        'content_type' => 1,
        'parent' => 0,
        'richtext' => 0,
        'searchable' => 1,
        'uri_override' => 1,
        'uri' => 'contacts.html',
        'content' => ''
    )
);
unset($robots);
return $resources_in;
