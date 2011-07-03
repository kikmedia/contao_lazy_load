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


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_page']['ll_use']				= array('use lazy load', 'use lazy load in this page tree.');
$GLOBALS['TL_LANG']['tl_page']['ll_range']				= array('range', 'Please insert a range (in pixel) to the image with should be trigger the download. The default value is 200');
$GLOBALS['TL_LANG']['tl_page']['ll_elements']			= array('elements', 'Please enter all elements whith sould be lazy loaded. In Contao is only img implemented. Sorry for that. :( But if you donate me a coockie maybe i implement some more.');
$GLOBALS['TL_LANG']['tl_page']['ll_mode']				= array('mode', 'Please select a trigger mode.');
$GLOBALS['TL_LANG']['tl_page']['ll_realSrcAttribute']	= array('real attribute', 'Please insert the attributes name for the original image path. The default is "data-src" like in Google Images.');
$GLOBALS['TL_LANG']['tl_page']['ll_useFade']			= array('fade effect', 'Should loaded images fade in? Its a very nice effect :)');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_page']['vertical']				= 'vertical';
$GLOBALS['TL_LANG']['tl_page']['horizontal']			= 'horizontal';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_page']['lazy_load_legend'] = 'Lazy Load configuration';
?>