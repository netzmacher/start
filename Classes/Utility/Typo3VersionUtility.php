<?php

namespace Netzmacher\Start\Utility;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2020 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 *
 * @author  Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package TYPO3
 * @subpackage  startgreen
 * @version     5.3.8
 * @since       5.3.8
 */
class Typo3VersionUtility
{

	/**
	 * get( ):
	 *
	 * @return  integer
	 * @version 5.3.8
	 * @since 5.3.8
	 */
	static function get()
	{
		static $TYPO3v = NULL;

		if( $TYPO3v !== NULL )
		{
			return $TYPO3v;
		}

		list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
		$version = ( ( int ) $main ) * 1000000;
		$version = $version + ( ( int ) $sub ) * 1000;
		$version = $version + ( ( int ) $bugfix ) * 1;
		$TYPO3v = $version;

		if( $TYPO3v >= 6000000 )
		{
			return $TYPO3v;
		}

		$prompt = '<h1>ERROR</h1>
        <h2>Unproper TYPO3 version</h2>
        <ul>
          <li>
            TYPO3 version is smaller than 6.0.0
          </li>
          <li>
            constant TYPO3_version: ' . TYPO3_version . '
          </li>
          <li>
            integer $TYPO3v: ' . ( int ) $TYPO3v . '
          </li>
          <li>
            ' . __METHOD__ . ' (#' . __LINE__ . ')
          </li>
        </ul>
          ';
		die( $prompt );
	}

}
