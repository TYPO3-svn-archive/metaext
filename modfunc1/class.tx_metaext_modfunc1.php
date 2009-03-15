<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 sensomedia.de <info@sensomedia.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */


require_once(PATH_t3lib.'class.t3lib_extobjbase.php');



/**
 * Module extension (addition to function menu) 'Metatags Manager' for the 'metaext' extension.
 *
 * @author	sensomedia.de <info@sensomedia.de>
 * @package	TYPO3
 * @subpackage	tx_metaext
 */
class tx_metaext_modfunc1 extends t3lib_extobjbase {

					/**
					 * Returns the module menu
					 *
					 * @return	Array with menuitems
					 */
					function modMenu()	{
						global $LANG;

						return Array (
							"tx_metaext_modfunc1_check" => "",
						);
					}

					/**
					 * Main method of the module
					 *
					 * @return	HTML
					 */
					function main()	{
							// Initializes the module. Done in this function because we may need to re-initialize if data is submitted!
						global $SOBE,$BE_USER,$LANG,$BACK_PATH,$TCA_DESCR,$TCA,$CLIENT,$TYPO3_CONF_VARS;

						$theOutput.=$this->pObj->doc->spacer(5);
						$theOutput.=$this->pObj->doc->section($LANG->getLL("title"),"This is to be coded yet... sorry for the inconvenience. the next version will have some functional content in here",0,1);

						$menu=array();
						$menu[]=t3lib_BEfunc::getFuncCheck($this->pObj->id,"SET[tx_metaext_modfunc1_check]",$this->pObj->MOD_SETTINGS["tx_metaext_modfunc1_check"]).$LANG->getLL("checklabel");
						$theOutput.=$this->pObj->doc->spacer(5);
						$theOutput.=$this->pObj->doc->section("Menu",implode(" - ",$menu),0,1);

						return $theOutput;
					}
				}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/metaext/modfunc1/class.tx_metaext_modfunc1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/metaext/modfunc1/class.tx_metaext_modfunc1.php']);
}

?>