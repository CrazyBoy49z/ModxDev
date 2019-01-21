<?php
/**
 * @author burgen.
 * @package ModxDev
 * @rewrite CrazyBoy49z
 * @date 09.01.2016
 * @time 13:50
 */
// Resources
$packages_in = array(
    'pdoTools' => array(
        'pagetitle' => 'pdoTools',
        'checked'   => 1,
        'desc'      => 'Микро-библиотека для быстрой выборки данных из СУБД MySql через PDO.',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/utilities/pdotools',
	    'category'  => 'system',
 	    'prov'      => 'modstore.pro',
    ),
	'MinifyX' => array(
        'pagetitle' => 'MinifyX',
        'checked'   => 0,
        'desc'      => 'Автоматизированное сжатие скриптов и стилей сайта.',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/utilities/minifyx',
		'prov'      => 'modstore.pro',
    ),
	'translit' => array(
        'pagetitle' => 'translit',
        'checked'   => 1,
        'desc'      => 'генерации дружественных url',
        'versions'  => '',
        'analog'    => 'yTranslit',
        'link'      => 'http://modx.com/extras/package/translit',
    ),
	'yTranslit' => array(
        'pagetitle' => 'yTranslit',
        'checked'   => 0,
        'desc'      => 'генерации дружественных url через api переводчика Яндекс.',
        'versions'  => '',
        'form'      => '',
        'analog'    => 'translit',
        'link'      => 'https://modstore.pro/packages/content/ytranslit',
    ),
	'Ace' => array(
        'pagetitle' => 'Ace',
        'checked'   => 1,
        'desc'      => 'Лучший редактор кода с подсветкой',
        'versions'  => '',
        'analog'    => 'CodeMirror',
        'link'      => 'https://modstore.pro/packages/content/ace',
    ),
	'CodeMirror' => array(
        'pagetitle' => 'CodeMirror',
        'checked'   => 0,
        'desc'      => 'Редактор кода с подсветкой',
        'versions'  => '',
        'analog'    => 'Ace',
        'link'      => 'http://modx.com/extras/package/codemirror',
    ),
	'CKEditor' => array(
        'pagetitle' => 'CKEditor',
        'checked'   => 0,
        'desc'      => 'Редактор текста в документах',
        'versions'  => '',
        'analog'    => 'TinyMCE',
        'link'      => 'http://modx.com/extras/package/ckeditor',
    ),
	'TinyMCE' => array(
        'pagetitle' => 'TinyMCE',
        'checked'   => 1,
        'desc'      => 'Редактор текста в документах',
        'versions'  => '',
        'analog'    => 'CKEditor',
        'link'      => 'http://modx.com/extras/package/tinymce',
    ),
	'ClientConfig' => array(
        'pagetitle' => 'ClientConfig',
        'checked'   => 0,
        'desc'      => 'клиентские настройки',
        'versions'  => '',
        'link'      => 'http://modx.com/extras/package/clientconfig',
    ),
	'miniShop2' => array(
        'pagetitle' => 'miniShop2',
        'checked'   => 0,
        'desc'      => 'компонент интернет-магазина',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/ecommerce/minishop2',
		'prov'      => 'modstore.pro',
    ),
	'looked' => array(
        'pagetitle' => 'looked',
        'checked'   => 0,
        'desc'      => 'Компонент даёт возможность добавить на сайт блок с последними просмотренными страницами (товарами) пользователем.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/looked',
    ),
	'modDevTools' => array(
        'pagetitle' => 'modDevTools',
        'checked'   => 0,
        'desc'      => 'Компонент для вывода кода используемых чанков и сниппетов на странице шаблона или чанка',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/utilities/moddevtools',
		'prov'      => 'modstore.pro',
    ),
	'debugParser' => array(
        'pagetitle' => 'debugParser',
        'checked'   => 1,
        'desc'      => 'Плагин для выявления узких мест сайта. Показывает все обработанные теги и затраченное время.',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/utilities/debugparser',
		'prov'      => 'modstore.pro',
    ),
	'controlErrorLog' => array(
        'pagetitle' => 'controlErrorLog',
        'checked'   => 1,
        'desc'      => 'Управление журналом ошибок.',
        'versions'  => '',
        'link'      => 'https://modstore.pro/packages/utilities/controlerrorlog',
		'prov'      => 'modstore.pro',
    ),
	'FormIt' => array(
		'pagetitle' => 'FormIt',
		'checked'   => 1,
		'desc'      => 'Динамические формы всередине MODX Revolution.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/formit',
	),
	'FormItBuilder' => array(
		'pagetitle' => 'FormItBuilder',
		'checked'   => 0,
		'desc'      => 'создание формы за допомогой json',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/formitbuilder',
	),
	'Console' => array(
        'pagetitle' => 'Console',
        'checked'   => 0,
        'desc'      => 'Консоль позволяет выполнять php-код с помощью простого интерфейса.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/console',
    ),
	'BackupMODX' => array(
        'pagetitle' => 'BackupMODX',
        'checked'   => 0,
        'desc'      => 'Backup MODX extra - это маленький виджет панели.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/backupmodx',
		'analog'    => 'Vapor',
    ),
	'Vapor' => array(
        'pagetitle' => 'Vapor',
        'checked'   => 0,
        'desc'      => 'Backup MODX extra',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/vapor',
		'analog'    => 'BackupMODX',
    ),
	'HTML2Minify' => array(
        'pagetitle' => 'HTML2Minify',
        'checked'   => 0,
        'desc'      => 'Один из способов, который поможет улучшить ответ сайта.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/html2minify',
    ),
	'Babel' => array(
        'pagetitle' => 'Babel',
        'checked'   => 0,
        'desc'      => 'Babel -  который помогает вам управлять своими многоязычными веб-сайтами, используя различные контексты.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/babel',
    ),
	'CloudFlare API Integration' => array(
        'pagetitle' => 'CloudFlare API Integration',
        'checked'   => 0,
        'desc'      => 'CloudFlare для вашего веб-сайта.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/purgecloudflare2',
    ),
	'dbAdmin' => array(
        'pagetitle' => 'dbAdmin',
        'checked'   => 0,
        'desc'      => 'Компонент, который дает возможность просматривать листинг таблиц базы данных в панели администратора ',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/dbadmin',
    ),
	'EmptyAlias' => array(
        'pagetitle' => 'EmptyAlias',
        'checked'   => 0,
        'desc'      => 'Утилита для отчета ресурсов с пустыми псевдонимами',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/emptyalias',
    ),
	'SEO Pro' => array(
        'pagetitle' => 'SEO Pro',
        'checked'   => 0,
        'desc'      => 'Оптимизации вашего сайта для поисковых систем',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/seopro',
    ),
	'SEO Tab' => array(
        'pagetitle' => 'SEO Tab',
        'checked'   => 0,
        'desc'      => 'Самый успешный инструмент оптимизации поисковой системы Google.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/seotab',
    ),
	'GoogleTagManagerMODX' => array(
        'pagetitle' => 'GoogleTagManagerMODX',
        'checked'   => 0,
        'desc'      => 'This Extra allows you to add Google Tag Manager tags to your website.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/googletagmanagermodx',
    ),
	'LogPageNotFound' => array(
        'pagetitle' => 'LogPageNotFound',
        'checked'   => 0,
        'desc'      => 'Logs all front-end requests that result in a page not found (404) error.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/logpagenotfound',
    ),
	'phpconsole' => array(
        'pagetitle' => 'phpconsole',
        'checked'   => 0,
        'desc'      => 'This extra integrates phpconsole.',
        'versions'  => '',
        'link'      => 'https://modx.com/extras/package/phpconsole',
    ),
	'GoogleCloudStorage' => array(
		'pagetitle' => 'GoogleCloudStorage',
		'checked'   => 0,
		'desc'      => 'Media source connector to Google Cloud Storage.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/googlecloudstorage',
	),
	'DropboxUploader' => array(
		'pagetitle' => 'DropboxUploader',
		'checked'   => 0,
		'desc'      => 'Upload files to a Dropbox account.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/dropboxuploader',
	),
	'ReCaptchaV2' => array(
		'pagetitle' => 'ReCaptchaV2',
		'checked'   => 0,
		'desc'      => 'ReCaptchaV2 integrates Version 2 of Google\'s ReCaptcha service into MODX as a FormIt hook.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/recaptchav2',
	),
	'AdminTools' => array(
		'pagetitle' => 'AdminTools',
		'checked'   => 1,
		'desc'      => 'Adds some features for MODX administrators and developers.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/admintools',
	),
	'simpleUpdater' => array(
		'pagetitle' => 'simpleUpdater',
		'checked'   => 1,
		'desc'      => 'MODX simple updater.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/modupdater',
	),
	'SmushIt' => array(
		'pagetitle' => 'SmushIt',
		'checked'   => 0,
		'desc'      => 'This snippet tries to optimise and compress PNG and JPEG images for better performance using the resmush.it optimisation API.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/smushit',
	),
	'AjaxForm' => array(
		'pagetitle' => 'AjaxForm',
		'checked'   => 0,
		'desc'      => 'Отправка форм через Ajax. Использует FormIt, но можно указать и свой сниппет.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/utilities/ajaxform',
	),
	'MIGX' => array(
		'pagetitle' => 'MIGX',
		'checked'   => 0,
		'desc'      => 'MIGX (multiItemsGridTv for modx) is a custom-tv-input-type for adding multiple items into one TV-value and a snippet for listing this items on your frontend.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/migx',
	),
	'Collections' => array(
		'pagetitle' => 'Collections',
		'checked'   => 0,
		'desc'      => 'Collections is a MODX Revolution Extra that adds a custom CollectionContainer resource class.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/collections',
	),
	'timerangetv' => array(
		'pagetitle' => 'TimerangeTV',
		'checked'   => 0,
		'desc'      => 'A custom Template Variable input type to create a timerange input',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/timerangetv',
	),
	'UiCMPGenerator' => array(
		'pagetitle' => 'UiCMPGenerator',
		'checked'   => 0,
		'desc'      => ' create custom database tables to be used via a snippet, plugin or CMP. ',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/uicmpgenerator',
	),
	'LikeDislike' => array(
		'pagetitle' => 'LikeDislike',
		'checked'   => 0,
		'desc'      => 'LikeDislike flexible extension of voting for MODX',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/likedislike',
	),
	'YMap' => array(
		'pagetitle' => 'YMap',
		'checked'   => 0,
		'desc'      => 'TV input of Yanex Maps in JS array format',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/ymap',
	),
	'CronManager' => array(
		'pagetitle' => 'CronManager',
		'checked'   => 0,
		'desc'      => 'With this Cron Manager you\'re able to link snippets to the servers crontab.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/cronmanager',
	),
	'VersionX' => array(
		'pagetitle' => 'VersionX',
		'checked'   => 0,
		'desc'      => 'VersionX is a utility tool for MODX Revolution ',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/versionx',
	),
	'PageLocker' => array(
		'pagetitle' => 'PageLocker',
		'checked'   => 0,
		'desc'      => 'PageLocker provides simple front-end password protection for individual or groups of pages.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/pagelocker',
	),
	'modFire' => array(
		'pagetitle' => 'modFire',
		'checked'   => 0,
		'desc'      => 'FirePHP package for MODx',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/modfire',
	),
	'NumberAbbreviation' => array(
		'pagetitle' => 'NumberAbbreviation',
		'checked'   => 0,
		'desc'      => 'Модификатор для сокращения больших чисел в формате 1.2K',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/content/numberabbreviation',
		'prov'      => 'modstore.pro',
	),
	'tvSuperSelect' => array(
		'pagetitle' => 'tvSuperSelect',
		'checked'   => 0,
		'desc'      => 'Тип TV, позволяющий вбивать значения «на ходу».',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/other/tvsuperselect',
		'prov'      => 'modstore.pro',
	),
	'mixedImage' => array(
		'pagetitle' => 'mixedImage',
		'checked'   => 0,
		'desc'      => 'custom TV - смешанная загрузка файла.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/photos-and-files/mixedimage',
		'prov'      => 'modstore.pro',
	),
	'FastUploadTV' => array(
		'pagetitle' => 'FastUploadTV',
		'checked'   => 0,
		'desc'      => 'Простая загрузка файлов',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/photos-and-files/fastuploadtv',
		'prov'      => 'modstore.pro',
	),
	'TVTable' => array(
		'pagetitle' => 'TVTable',
		'checked'   => 0,
		'desc'      => 'Дополнительное поле в виде таблицы',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/utilities/tvtable',
		'prov'      => 'modstore.pro',
	),
	'Tickets' => array(
		'pagetitle' => 'Tickets',
		'checked'   => 0,
		'desc'      => 'Компонент для создания и комментирования пользовательских страниц.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/users/tickets',
		'prov'      => 'modstore.pro',
	),
	'msTelegram' => array(
		'pagetitle' => 'msTelegram',
		'checked'   => 0,
		'desc'      => 'Уведомления о заказах в Telegram.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/alerts-mailing/mstelegram',
		'prov'      => 'modstore.pro',
	),
	'siteStatistics' => array(
		'pagetitle' => 'siteStatistics',
		'checked'   => 0,
		'desc'      => 'Управление статистикой посещаемости сайта в MODX',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/utilities/sitestatistics',
		'prov'      => 'modstore.pro',
	),
	'AjaxSnippet' => array(
		'pagetitle' => 'AjaxSnippet',
		'checked'   => 0,
		'desc'      => 'Компонент, для запуска сниппетов через Ajax. Позволяет подгружать блоки новостей или комментариев после загрузки основной страницы.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/utilities/ajaxsnippet',
		'prov'      => 'modstore.pro',
	),
	'ms2form' => array(
		'pagetitle' => 'ms2form',
		'checked'   => 0,
		'desc'      => 'Выводит форму для создания продукта minishop2 пользователем из фронтэнда.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/users/ms2form',
		'prov'      => 'modstore.pro',
	),
	'BannerY' => array(
		'pagetitle' => 'BannerY',
		'checked'   => 0,
		'desc'      => 'Компонент для управления баннерами на сайте.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/photos-and-files/bannery',
		'prov'      => 'modstore.pro',
	),
	'msDemoData' => array(
		'pagetitle' => 'msDemoData',
		'checked'   => 0,
		'desc'      => 'Демо данные для minishop - категории, товаров и производители.',
		'versions'  => '',
		'link'      => 'https://modstore.pro/packages/utilities/msdemodata',
		'prov'      => 'modstore.pro',
	),
	'Image+' => array(
		'pagetitle' => 'Image+',
		'checked'   => 0,
		'desc'      => 'Advanced Image custom template variable type.',
		'versions'  => '',
		'link'      => 'https://modx.com/extras/package/imageplustvinput',

	),

);

return $packages_in;
