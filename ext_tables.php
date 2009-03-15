<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

### columns for the page settings
$default_columns = array (
	'tx_metaext_alttitle' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_alttitle',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_metaext_copyright' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_copyright',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_metaext_publisher' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_publisher',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '80',	
			'eval' => 'trim',
		)
	),
	'tx_metaext_robots' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.0', '0'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.1', '1'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.2', '2'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.3', '3'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.4', '4'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_robots.I.5', '5'),
			),
			'size' => 1,	
			'maxitems' => 1,
		)
	),
	'tx_metaext_importance' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance',		
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.0', '0.1'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.1', '0.2'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.2', '0.3'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.3', '0.4'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.4', '0.5'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.5', '0.6'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.6', '0.7'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.7', '0.8'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.8', '0.9'),
				array('LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_importance.I.9', '1.0'),
			),
			'size' => 1,	
			'maxitems' => 1,
			'default' => '0.5',
		)
	),
);

### columns for the language overlay settings
$overlay_columns = array (
	'tx_metaext_alttitle' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:metaext/locallang_db.xml:pages.tx_metaext_alttitle',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'max' => '80',	
			'eval' => 'trim',
		)
	),
);


### add the columns to the TCA

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$default_columns,1);
t3lib_extMgm::addToAllTCAtypes('pages','tx_metaext_alttitle;;;;1-1-1','1,5','after:subtitle');
t3lib_extMgm::addToAllTCAtypes('pages','tx_metaext_copyright, tx_metaext_publisher, tx_metaext_robots, tx_metaext_importance','1,5','after:description');

t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay', $overlay_columns, 1);
t3lib_extMgm::addToAllTCAtypes('pages_language_overlay','tx_metaext_alttitle;;;;1-1-1','1,5','after:subtitle');


### Metatags Manager backend extension inside the info module
/*  
                                               ..... still needs to be coded ;)
if (TYPO3_MODE == 'BE')	{
	t3lib_extMgm::insertModuleFunction(
		'web_info',		
		'tx_metaext_modfunc1',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc1/class.tx_metaext_modfunc1.php',
		'LLL:EXT:metaext/locallang_db.xml:moduleFunction.tx_metaext_modfunc1'
	);
}
*/

t3lib_extMgm::addStaticFile($_EXTKEY,'static/', 'Metaext Config & Metatags');
?>