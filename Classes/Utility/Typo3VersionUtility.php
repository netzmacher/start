<?php

namespace Netzmacher\Start\Utility;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2021 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
	 * @version 8.2.3
 * @since       5.3.8
 */
class Typo3VersionUtility
{

	/**
	 * get( ):
	 *
	 * @return  integer
	 * @version 8.2.3
	 * @since 5.3.8
	 */
	static public function get()
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

		return $TYPO3v;
	}

	/**
	 * isGreaterThan087( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isGreaterThan087(): int
	{
		$t3version = self::get();
		if( $t3version >= 8007000 )
		{
			return 1;
		}
		return 0;
	}

	/**
	 * isGreaterThan095( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isGreaterThan095(): int
	{
		$t3version = self::get();
		if( $t3version >= 9005000 )
		{
			return 1;
		}
		return 0;
	}

	/**
	 * isGreaterThan104( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isGreaterThan104(): int
	{
		$t3version = self::get();
		if( $t3version >= 10004000 )
		{
			return 1;
		}
		return 0;
	}

	/**
	 * isSmallerThan087( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isSmallerThan087(): int
	{
		$t3version = self::get();
		if( $t3version < 8007000 )
		{
			return 1;
		}
		return 0;
	}

	/**
	 * isSmallerThan095( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isSmallerThan095(): int
	{
		$t3version = self::get();
		if( $t3version < 9005000 )
		{
			return 1;
		}
		return 0;
	}

	/**
	 * isSmallerThan104( ):
	 *
	 * @return  int
	 * @version 8.2.3
	 * @since 8.2.3
	 */
	static public function isSmallerThan104(): int
	{
		$t3version = self::get();
		if( $t3version < 10004000 )
		{
			return 1;
		}
		return 0;
	}
}
