<?php

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
	return true;
}

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
	case xPDOTransport::ACTION_INSTALL:
	case xPDOTransport::ACTION_UPGRADE:
        if(!empty($options['resources'])){
            if (!empty($options['install_resources'])) {
                // get resources checked
	            foreach ($options['install_resources'] as $key => $resource) {
	                $page_add = $options['resources'][$resource];
	                resource($page_add);
	            }
            }
		} else {
			$modx->log(modX::LOG_LEVEL_INFO, 'Could not be completed because a <b>build.php</b> file not found.');
		}
		break;
	case
	xPDOTransport::ACTION_UNINSTALL:
		break;
}

function resource($attr) {
    global $modx;
    /* @var $resource modResource */
    if(!$resource = $modx->getObject('modResource', array('uri' => $attr['uri']))){
	    $resource = $modx->newObject('modResource');
	    $resource->fromArray($attr, '', true, true);
	    $resource->save();
    }else{
//	    $chBak =MODX_ASSETS_PATH.'backup/'.$resource->get('alias').' '.date("Y-m-d H:i:s").'.txt';
//	    file_put_contents($chBak,$resource->get('content'));
//	    $modx->log(modX::LOG_LEVEL_INFO, 'Cделано бекап чанка '.$chBak);
	    //unset($chBak);
    }
}

return true;

