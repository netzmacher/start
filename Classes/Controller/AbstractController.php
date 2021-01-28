<?php

namespace Netzmacher\Start\Controller;

use Netzmacher\Start\Utility\Typo3VersionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2021 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * AbstractController for the Start extension
 *
 * @package TYPO3
 * @subpackage start
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @version 8.2.5
 * @since 8.2.5
 */
abstract class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

	/**
	 * @var TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
	 */
	public $_oCObj;

	/**
	 * @var TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	private $_oObjectManager;

	/**
	 * @var \TYPO3\CMS\Frontend\Plugin\AbstractPlugin
	 */
	protected $_oPlugin;

	/**
	 * @var TYPO3\CMS\Core\TypoScript\TypoScriptService
	 */
	protected $_oTypoScriptService;

	/**
	 * @var ContentObjectRenderer
	 */
	protected $contentObject;

	/**
	 * TypoScript configuration
	 *
	 * @var array
	 */
	protected $conf;

	/**
	 * pageRepository
	 * 
	 * @var \Netzmacher\Start\Domain\Repository\PageRepository
	 */
	protected $pageRepository = null;

	/**
	 * @var string Extension key
	 */
	public $extKey = 'start';

	/**
	 * __construct(): Init the repositories
	 * 
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	public function __construct()
	{
		$objectManager = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Extbase\\Object\\ObjectManager' );
		$this->pageRepository = $objectManager->get( 'Netzmacher\\Start\\Domain\\Repository\\PageRepository' );
	}

	/**
	 * _initObjectCObj( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initObjectCObj()
	{
		$this->_oCObj = $this->_oObjectManager->get( 'TYPO3\\CMS\\Frontend\\ContentObject\\ContentObjectRenderer' );
		$this->_initObjectCObjData();
	}

	/**
	 * Initializes this object
	 *
	 * @return void
	 * @codeCoverageIgnore
	 * @throws InvalidSlotException
	 * @throws InvalidSlotReturnException
	 */
	private function _initObjectContent()
	{
		// @extensionScannerIgnoreLine Seems to be a false positive: getContentObject() is still correct in 9.0
		$this->contentObject = $this->configurationManager->getContentObject();
	}

	/**
	 * _initObjectCObjData( ) : Is needed, if in TypoScript is used: data = flexform : pi_flexform:...
	 * 													If it isn't set, data will be empty, and data[pi_flexform] too of course.
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initObjectCObjData()
	{
		$this->_oCObj->data = $this->contentObject->data;
	}

	/**
	 * _initObjectObjectManager( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initObjectObjectManager()
	{
		$this->_oObjectManager = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Extbase\\Object\\ObjectManager' );
	}

	/**
	 * _initObjectTypoScriptService( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initObjectTypoScriptService()
	{

		switch( true )
		{
			case(Typo3VersionUtility::isSmallerThan100()):
				$this->_oTypoScriptService = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Extbase\\Service\\TypoScriptService' );
				return;
			default:
				$this->_oTypoScriptService = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Core\\TypoScript\\TypoScriptService' );
				return;
		}
	}

	/**
	 * _cObjGetSingle( ) :
	 *
	 * @param array $record
	 * @return string $value
	 * @access protected
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	protected function cObjGetSingle( $record )
	{
		if( empty( $record ) )
		{
			return;
		}
		$name = $record[ '_typoScriptNodeValue' ];
		$conf = $this->_oTypoScriptService->convertPlainArrayToTypoScriptArray( $record );

		$value = $this->_oCObj->cObjGetSingle( $name, $conf );

		return $value;
	}

	/**
	 * initObjects( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	protected function initObjects()
	{
		$this->_initObjectObjectManager();
		$this->_initObjectContent();
		$this->_initObjectCObj();
		$this->_initObjectTypoScriptService();
	}

}
