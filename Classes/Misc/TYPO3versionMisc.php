<?php

namespace Netzmacher\Start\Misc;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2020 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * ************************************************************* */

/**
 * Class provides methods for the extension manager.
 *
 * @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage    start
 * @version  9.2.0
 * @since    9.2.0
 */
class TYPO3versionMisc
{

	/**
	 * Get() Get the current TYPO3 version in integer format
	 *
	 * @return  integer
	 * @access  public
	 * @version 9.2.0
	 * @since   9.2.0
	 */
	public static function Get()
	{
		static $version = null;

		if( $version != null )
		{
			return $version;
		}
		list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
		$version = ( ( int ) $main ) * 1000000;
		$version = $version + ( ( int ) $sub ) * 1000;
		$version = $version + ( ( int ) $bugfix ) * 1;

		return $version;
	}

}
