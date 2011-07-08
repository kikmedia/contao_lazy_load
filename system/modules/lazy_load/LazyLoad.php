<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    lazy_load
 * @license    LGPL
 * @filesource
 */


class LazyLoad extends System
{
	/**
	 * Search for all img tags in the output html and replace the attributes
	 * 
	 * @param string $strContent
	 * @param string $strTemplate
	 * @return string
	 */
	public function replaceAttributes($strContent, $strTemplate)
	{
		// we have no status yet
		if ($GLOBALS['lazy_load'] == '')
		{
			$this->lazyLoadStatus();
		}

		// skip the template parsing if there is no lazy loading on this page
		if ($GLOBALS['lazy_load'] == 'no')
		{
			return $strContent;
		}

		return preg_replace_callback('~<img.*?(src=".*?").*?>~is', array($this, 'replaceAttributesCallback'), $strContent);
	}


	/**
	 * Add the .js Code for the lazy loading to the header
	 * 
	 * @param Database_Result $objPage
	 * @param Database_Result $objLayout
	 * @param Database_Result $objPageRegular
	 * @return void
	 */
	public function addJsCode(Database_Result $objPage, Database_Result $objLayout, PageRegular $objPageRegular)
	{
		$this->import('Database');
		$objRootPage = $this->Database->prepare('SELECT * FROM tl_page WHERE id=?')
									  ->execute($objPage->rootId);

		if ($objRootPage->ll_use != '')
		{
			// prepare the options
			$strRange				= ($objRootPage->ll_range != '') ? $objRootPage->ll_range : 200;
			$strElements			= ($objRootPage->ll_elements != '') ? $objRootPage->ll_elements : 'img';
			$strMode				= ($objRootPage->ll_mode != '') ? $objRootPage->ll_mode : 'vertical';
			$strUseFade				= ($objRootPage->ll_useFade != '') ? 'true' : 'false';
			$strRealSrcAttribute	= ($objRootPage->ll_realSrcAttribute != '') ? $objRootPage->ll_realSrcAttribute : 'data-src';

			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/lazy_load/html/LazyLoad.js';
			$GLOBALS['TL_HEAD'][] = '<script type="text/javascript">window.addEvent("domready",function() {var ll = new LazyLoad({container:document,range:' . $strRange . ',elements:"' . $strElements . '",mode:"' . $strMode . '",realSrcAttribute:"' . $strRealSrcAttribute . '",useFade:' . $strUseFade . '});});</script>';
		}
	}


	/**
	 * Check if on the current page lazy load is active and
	 * store the status in $GLOBALS so we don't have to detect
	 * this for every template again
	 * 
	 * @return void
	 */
	protected function lazyLoadStatus()
	{
		$this->import('Database');
		global $objPage;

		$objRootPage = $this->Database->prepare('SELECT * FROM tl_page WHERE id=?')
									  ->limit(1)
									  ->execute($objPage->rootId);

		if ($objRootPage->ll_use != '')
		{
			$GLOBALS['lazy_load_realSrcAttribute'] = $objRootPage->ll_realSrcAttribute;
			$GLOBALS['lazy_load'] = 'yes';
		}
		else
		{
			$GLOBALS['lazy_load'] = 'no';
		}
	}


	/**
	 * Preg Callback
	 * 
	 * @param preg_replace_callback $arrData
	 * @return string
	 */
	protected function replaceAttributesCallback($arrData)
	{
		// never replace the cron.php "image"
		if (strpos($arrData[0], 'cron.php'))
		{
			return $arrData[0];
		}

		//TODO: find a better solution, because this sucks
		$strUrl = substr($arrData[1], 5, -1);
		return str_replace($arrData[1], 'src="system/modules/lazy_load/html/blank.gif" ' . $GLOBALS['lazy_load_realSrcAttribute'] . '="' . $strUrl . '"', $arrData[0]);
	}
}

?>