<?php

declare(strict_types = 1);

/*
 * (c) 2020 - This file is part of the package Netzmacher\Start
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

/**
 * Extension condition
 * 
 * @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage    xblog
 * @version  0.10.9
 * @since    0.10.9
 */

namespace Netzmacher\Start\Userfunc;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * ExtensionWrapper
 */
class ExtensionWrapper
{

	/**
	 * @param string $extensionKey
	 * @return bool
	 */
	public static function isLoaded( $extensionKey ): bool
	{
		return ExtensionManagementUtility::isLoaded( $extensionKey );
	}

	/**
	 * @param string $extensionKey
	 * @return bool
	 */
	public static function isNotLoaded( $extensionKey ): bool
	{
		return !ExtensionManagementUtility::isLoaded( $extensionKey );
	}

}
