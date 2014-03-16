<?php
/**
 * @package		Dayman Media
 * @subpackage	mod_afb_scroll
 * @copyright	Copyright (C) 2014 Dayman Media, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php' );

$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_afb_scroll/css/style.css');

$document->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$document->addScript('modules/mod_afb_scroll/js/jquery-ui-1.10.3.custom.min.js');
$document->addScript('modules/mod_afb_scroll/js/jquery.mousewheel.min.js');
$document->addScript('modules/mod_afb_scroll/js/jquery.kinetic.min.js');
$document->addScript('modules/mod_afb_scroll/js/jquery.smoothdivscroll-1.3-min.js');

$folder = $params->get('folder');
$images = ModAfbScrollHelper::getImages($params, $folder);	
	if (!count($images)) {
		echo JText::_('MOD_SLIDESHOW ERROR: NO IMAGES');
	return;
}


$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_afb_scroll', $params->get('layout', 'default'));

?>