<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * htaccess Generator
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
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
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    htaccess Generator
 * @license    LGPL
 * @filesource
 */


/**
 * Load the DC_File class.
 */
if (version_compare(VERSION, '3', '<')) {
    require(TL_ROOT . '/system/drivers/DC_File.php');
}

/**
 * Class DC_File_Htaccess
 *
 * Special version of DC_File that use the HtaccessConfig class.
 *
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <info@infinitysoft.de>
 * @package    htaccess Generator
 */
class DC_File_Htaccess extends DC_File
{
	/**
	 * @var HtaccessConfig
	 */
	protected $Config;
	
	/**
	 * Create the data container.
	 *
	 * @param $strTable string
	 */
	public function __construct($strTable)
	{
		$this->import('HtaccessConfig', 'Config');
		parent::__construct($strTable);
	}
}
