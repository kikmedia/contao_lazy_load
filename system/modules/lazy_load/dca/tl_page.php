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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'll_use';
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace('{sitemap_legend:hide}', '{lazy_load_legend:hide},ll_use;{sitemap_legend:hide}', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['ll_use'] = ',ll_range,ll_elements,ll_mode,ll_realSrcAttribute,ll_useFade,';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['ll_use'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_use'],
	'inputType'		=> 'checkbox',
	'exclude'		=> true,
	'eval'			=> array('tl_class'=>'m12', 'submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ll_range'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_range'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'default'		=> '200',
	'eval'			=> array('tl_class'=>'w50', 'rgxp'=>'digit', 'mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ll_elements'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_elements'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'default'		=> 'img',
	'eval'			=> array('tl_class'=>'w50', 'mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ll_mode'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_mode'],
	'inputType'		=> 'select',
	'exclude'		=> true,
	'default'		=> 'vertical',
	'options'		=> array('vertical', 'horizontal'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_page'],
	'eval'			=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ll_realSrcAttribute'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_realSrcAttribute'],
	'inputType'		=> 'text',
	'exclude'		=> true,
	'default'		=> 'data-src',
	'eval'			=> array('tl_class'=>'w50', 'mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ll_useFade'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['ll_useFade'],
	'inputType'		=> 'checkbox',
	'exclude'		=> true,
	'default'		=> '1',
	'eval'			=> array('tl_class'=>'w50')
);

?>