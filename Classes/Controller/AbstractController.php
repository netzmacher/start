<?php

namespace Netzmacher\Start\Controller;

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2021 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * Class AbstractController
 * 
 * @version 8.0.1
 * @since 5.1.0
 */
abstract class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

	/**
	 * pageRepository
	 * 
	 * @var \Netzmacher\Start\Domain\Repository\PageRepository
	 */
	protected $pageRepository = null;

	/**
	 * __construct(): Init the repositories
	 * 
	 * @version 8.0.1
	 * @since 8.0.1
	 */
	public function __construct()
	{
		$objectManager = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Extbase\\Object\\ObjectManager' );
		$this->pageRepository = $objectManager->get( 'Netzmacher\\Start\\Domain\\Repository\\PageRepository' );
	}

}
