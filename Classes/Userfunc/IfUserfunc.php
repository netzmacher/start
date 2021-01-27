<?php

declare(strict_types = 1);

namespace Netzmacher\Start\Userfunc;

use Netzmacher\Start\Backend\Extensionmanager;
use Netzmacher\Start\Utility\Typo3VersionUtility;

/*
 * (c) 2021 - This file is part of the package Netzmacher\Start
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

/**
 * @author    Dirk Wildt (verdigado eG), dirk.wildt@verdigado.com
 * @package    TYPO3
 * @subpackage    start
 * @version  8.2.3
 * @since    8.2.3
 */
class IfUserfunc
{

	/**
	 * enableResponsiveimages( ):
	 * 
	 * @return int
	 * @version  8.2.3
	 * @since    8.2.3
	 */
	public static function enableResponsiveimages(): int
	{
		// RETURN 0, if property responsiveimagesDisabled is true in the extension manager
		if( Extensionmanager::getProperty( 'responsiveimagesDisabled' ) )
		{
			return 0;
		}
		// RETURN 0, if current TYPO3 version is smaller than 10.4
		if( Typo3VersionUtility::isSmallerThan104() )
		{
			return 0;
		}

		// Prperty responsiveimagesDisabled isn't true and TYPO3 Version is >= 10.4
		return 1;
	}

}
