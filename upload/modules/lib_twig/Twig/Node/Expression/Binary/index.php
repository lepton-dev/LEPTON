<?php

/**
 * This file is part of an ADDON for use with LEPTON Core.
 * This ADDON is released under the GNU GPL.
 * Additional license terms can be seen in the info.php of this module.
 *
 * @module          Twig Template Engine
 * @author          LEPTON Project
 * @copyright       2012-2016 LEPTON  Project
 * @link            http://www.lepton-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see info.php of this module
 *
 */

// try to include LEPTON class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	if (defined('LEPTON_VERSION')) include(LEPTON_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
	include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php'); 
} else {
	$subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));	$dir = $_SERVER['DOCUMENT_ROOT'];
	$inc = false;
	foreach ($subs as $sub) {
		if (empty($sub)) continue; $dir .= '/'.$sub;
		if (file_exists($dir.'/framework/class.secure.php')) { 
			include($dir.'/framework/class.secure.php'); $inc = true;	break; 
		} 
	}
	if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include LEPTON class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}
// end include LEPTON class.secure.php

?>