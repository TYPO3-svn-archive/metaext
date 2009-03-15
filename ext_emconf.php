<?php

########################################################################
# Extension Manager/Repository config file for ext: "metaext"
#
# Auto generated 15-03-2009 19:52
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Config, Metatag & SEO Features',
	'description' => 'This extension provides you with an editable set of all the important \'config\' parameters including multilanguage settings, adds additional metatag fields to the page module and provides global settings for some of them (those who make sense to be filled globaly). It also comes with a configurable html post processor which is able to remove html comments (if not inside script/style tag) & redundant whitespace, making a nice indentation and even reorder the tags within the html header (eg. pushing title & metatags on top).',
	'category' => 'be',
	'author' => 'Michael \'Iggy\' Rudolph - sensomedia.de',
	'author_email' => 'info@sensomedia.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages,pages_language_overlay',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'sensomedia.de',
	'version' => '0.2.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:18:{s:9:".htaccess";s:4:"cad3";s:9:"ChangeLog";s:4:"c829";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"1f84";s:12:"ext_icon.gif";s:4:"76f6";s:17:"ext_localconf.php";s:4:"d170";s:14:"ext_tables.php";s:4:"7426";s:14:"ext_tables.sql";s:4:"feba";s:16:"locallang_db.xml";s:4:"a428";s:14:"doc/manual.sxw";s:4:"d83e";s:36:"lib/class.tx_metaext_postprocess.php";s:4:"07bc";s:35:"lib/class.ux_t3lib_tsparser_ext.php";s:4:"2442";s:27:"lib/class.ux_tslib_menu.php";s:4:"e650";s:38:"modfunc1/class.tx_metaext_modfunc1.php";s:4:"932f";s:22:"modfunc1/locallang.xml";s:4:"a40c";s:20:"static/constants.txt";s:4:"037f";s:13:"static/lib.ts";s:4:"8e2e";s:16:"static/setup.txt";s:4:"613e";}',
	'suggests' => array(
	),
);

?>