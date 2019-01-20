<?php
$chunk = array(
	'tpl.header' =>array(
			'filename' => 'header',
			'checked'   => 1,
			'desc'      => 'Чанк верхней части сайта.',
	),
	'tpl.footer' =>array(
			'filename' => 'footer',
			'checked'   => 1,
			'desc'      => 'Чанк нижней части сайта.',
	),
	'tpl.crumbs' =>array(
			'filename' => 'crumbs',
			'checked'   => 1,
			'desc'      => 'Чанк с хлебними крошками.',
	),
	'tpl.product.row' =>array(
			'filename' => 'product.row',
			'checked'   => 0,
			'desc'      => 'Пример страници продуктов.',
	),
	'tpl.product.mini.row' =>array(
			'filename' => 'product.mini.row',
			'checked'   => 0,
			'desc'      => 'Пример страници продуктов.',
	),
);

foreach ($chunk as $k => $v) {
	$chunks[$k] = array(
		'name' => $k,
		'description' => $v['desc'],
		'checked'=> $v['checked'],
		'desc'=>$v['desc'],
		'snippet' => file_get_contents(SOURCE_CORE.'/elements/chunks/chunk.'.$v['filename'].'.tpl'),
		'static' => BUILD_CHUNK_STATIC,
		'source' => 1,
		'static_file' => 'core/components/'.PKG_NAME_LOWER.'/elements/chunks/chunk.'.$v['filename'].'.tpl',
	);
}
return $chunks;