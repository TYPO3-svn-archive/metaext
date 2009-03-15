<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$_EXTCONF = unserialize($_EXTCONF);	// unserializing the configuration so we can use it here:

### switch on/off postprocessing 
if ($_EXTCONF['postprocessing'] == '1') {
	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output']['tx_metaext'] = 'EXT:metaext/lib/class.tx_metaext_postprocess.php:&tx_metaext_postprocess->formatOutput';
}
### switch on/off patch of constant editor (adding several new subcategories)
if ($_EXTCONF['extconsteditor'] == '1') {
    $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['t3lib/class.t3lib_tsparser_ext.php'] = t3lib_extMgm::extPath('metaext') . 'lib/class.ux_t3lib_tsparser_ext.php';
}
### switch on/off patch 6637 of tslib menu to introduce menu special=rootline .reverseOrder feature. obsolete with Typo3v4 >= 4.3 as this will be included in the core distribution then.
if ($_EXTCONF['patch6637'] == '1') {
    $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['tslib/class.tslib_menu.php'] = t3lib_extMgm::extPath('metaext') . 'lib/class.ux_tslib_menu.php';
}
### disable no_cache
if ($_EXTCONF['disableNoCacheParameter'] == '1') {
	$TYPO3_CONF_VARS['FE']['disableNoCacheParameter'] = '1';
}
?>
