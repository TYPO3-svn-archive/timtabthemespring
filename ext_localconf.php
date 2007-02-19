<?php
//
//	$Id$
//

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

//get EXT path
$PATH_timtab_theme_spring = t3lib_extMgm::extPath('timtab_theme_spring');

if (TYPO3_MODE == 'FE')	{
	require_once($PATH_timtab_theme_spring.'class.tx_timtabthemespring_fe.php');
}

//registering for several hooks
$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'][]      = 'tx_timtabthemespring_fe';
$TYPO3_CONF_VARS['EXTCONF']['ve_guestbook']['extraItemMarkerHook'][] = 'tx_timtabthemespring_fe';

?>