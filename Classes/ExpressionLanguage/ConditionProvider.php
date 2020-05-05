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
 * 
 * @internal #t5081
 * @internal https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/SymfonyExpressionLanguage/Index.html#sel-within-typoscript-conditions
 */

namespace Netzmacher\Start\ExpressionLanguage;

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ConditionProvider
 */
class ConditionProvider extends AbstractProvider
{
	

	public function __construct()
	{
		$this->expressionLanguageVariables = [
				'extension' => GeneralUtility::makeInstance( ExtensionWrapper::class )
		];
	}

}
