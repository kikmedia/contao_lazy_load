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
$GLOBALS['TL_LANG']['tl_page']['ll_use']				= array('Lazy Load aktivieren', 'Aktivieren Sie Lazy Load für diesen Seitenbaum');
$GLOBALS['TL_LANG']['tl_page']['ll_range']				= array('Abstand', 'Bitte geben Sie den Abstand (in Pixeln) zum Bild ein, wenn der Download des Bildes starten soll. Standard: 200');
$GLOBALS['TL_LANG']['tl_page']['ll_elements']			= array('Elemente', 'Bitte geben Sie alle Elemente an für welche Lazy Load verwendet werden soll. Aktuell wird nur "img" unterstützt.');
$GLOBALS['TL_LANG']['tl_page']['ll_mode']				= array('Modus', 'Bitte geben Sie den Lade-Modus an.');
$GLOBALS['TL_LANG']['tl_page']['ll_realSrcAttribute']	= array('Attribute des Pfades', 'Bitte geben Sie das Attribut an in welches der originale Pfad kopiert werden soll. Standard: "data-src"');
$GLOBALS['TL_LANG']['tl_page']['ll_useFade']			= array('sanftes Einblenden', 'Möchten Sie ein sanftes Einblenden der Bilder aktivieren?');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_page']['vertical']				= 'vertikal';
$GLOBALS['TL_LANG']['tl_page']['horizontal']			= 'horizontal';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_page']['lazy_load_legend'] = 'Lazy Load konfigurieren';
?>