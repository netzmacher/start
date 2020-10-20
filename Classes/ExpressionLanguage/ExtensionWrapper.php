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
 * @subpackage    start
 * @version  7.0.0
 * @since    7.0.0
 * @internal #t5081
 */

namespace Netzmacher\Start\ExpressionLanguage;

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
	public function isLoaded( $extensionKey ): bool
	{
		$isLoaded = ExtensionManagementUtility::isLoaded( $extensionKey );

//		if( $extensionKey == 'slick' )
//		{
//			var_dump( __METHOD__, __LINE__, $extensionKey, $isLoaded );
//			die();
//		}

		return $isLoaded;
	}

}
