<?php

declare(strict_types = 1);

/*
 * (c) 2020-2021 - This file is part of the package Netzmacher\Start
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

/**
 * Extension condition
 * 
 * @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage    start
 * @version  8.2.8
 * @since    8.0.1
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
	 * 
	 * @version 8.0.1
	 * @since 8.0.1
	 */
	public static function isLoaded( $extensionKey ): bool
	{
		$isLoaded = ExtensionManagementUtility::isLoaded( $extensionKey );
		return $isLoaded;
	}

	/**
	 * @return bool
	 * 
	 * @version 8.2.8
	 * @since 8.2.8
	 */
	public static function isLoadedPowermail( ): bool
	{
		return self::isLoaded('powermail');
	}

	/**
	 * @return bool
	 * 
	 * @version 8.2.8
	 * @since 8.2.8
	 */
	public static function isLoadedTxnews( ): bool
	{
		return self::isLoaded('tx_news');
	}

	/**
	 * @param string $extensionKey
	 * @return bool
	 * 
	 * @version 8.0.1
	 * @since 8.0.1
	 */
	public static function isNotLoaded( $extensionKey ): bool
	{
		$isLoaded = !ExtensionManagementUtility::isLoaded( $extensionKey );
		return $isLoaded;
	}

}
