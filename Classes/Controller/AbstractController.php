<?php

namespace Netzmacher\Start\Controller;

use \Netzmacher\Start\Domain\Repository\PageRepository;

/* * *
 *
 * This file is part of the "Book a tile!" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * Class AbstractController
 */
abstract class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * pageRepository
	 * 
	 * @var \Netzmacher\Start\Domain\Repository\PageRepository
	 * @inject
	 */
	protected $pageRepository = null;

	/**
	 * @param PageRepository $pageRepository
	 * @return void
	 */
	public function injectPageRepository( PageRepository $pageRepository )
	{
		$this->pageRepository = $pageRepository;
	}

}