<?php

namespace Netzmacher\Start\Controller;

use Netzmacher\Start\Utility\FlexformValueUtility;

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
 * Class for rendering the search form
 *
 * @package TYPO3
 * @subpackage xblog
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @version 8.2.5
 * @since 8.2.5
 */
class SearchformController extends AbstractController
{
	/**
	 * @var string path to the language file
	 */
	//public $sLanguageFilePath = 'Resources/Private/Language/Search.xlf';

	/**
	 * @var string mode: user || typoscript
	 */
	private $_mode;

	/**
	 * @var string pi_flexform data in XML format
	 */
	private $_piFlexform;

	/**
	 * _getValueDependingOnMode( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _getValueDependingOnMode( $sheet, $field, $method, $line )
	{
		switch( $this->_mode )
		{
			case('typoscript'):
				$value = $this->settings[ $sheet ][ $field ];
				break;
			case('user'):
				$value = FlexformValueUtility::getFlexformValue( $this->_piFlexform, $sheet, $field, $method, $line );
				break;
		}
		return $value;
	}

	/**
	 * _initialise( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initialise()
	{
		$this->initObjects();
		$this->_initialisePiFlexform();
		$this->_initialiseMode();
	}

	/**
	 * _initialiseMode( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initialiseMode()
	{
		$this->_mode = FlexformValueUtility::getFlexformValue( $this->_piFlexform, 'mode', 'mode', __METHOD__, __LINE__ );

		switch( $this->_mode )
		{
			case('typoscript'):
			case('user'):
				return;
			default:
				$this->_initialiseModeDie();
		}
	}

	/**
	 * _initialisePiFlexform( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initialisePiFlexform()
	{
		$this->_piFlexform = $this->contentObject->data[ 'pi_flexform' ];
	}

	/**
	 * _initialiseModeDie( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _initialiseModeDie()
	{
		$header = 'Oops: mode isn\'t defined!';
		$prompt = ''
						. 'ERROR<br />'
						. 'Current Flexform hasn\'t a proper value. Mode is "' . $this->_mode . '" but must be one of "typoscript" or "user".<br />'
						. 'Please save the Start-Searchform-Plugin once!<br />'
						. '@ ' . __METHOD__ . ' (#' . __LINE__ . ')'
		;
		//FlashmessageUtility::render( $header, $prompt, 'ERROR', $method, $line );
		die( $prompt );
	}

	/**
	 * _viewAssignList( ) :
	 *
	 * @return void
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private function _viewAssignList()
	{
		$this->view->assignMultiple(
						array(
									// first both parameter MUST correspond with plugin.tx_start_pi1.settings
								'actionparam' => $this->_getValueDependingOnMode( 'action', 'param', __METHOD__, __LINE__ )
								, 'actionvalue' => $this->_getValueDependingOnMode( 'action', 'value', __METHOD__, __LINE__ )
								, 'controllerparam' => $this->_getValueDependingOnMode( 'controller', 'param', __METHOD__, __LINE__ )
								, 'controllervalue' => $this->_getValueDependingOnMode( 'controller', 'value', __METHOD__, __LINE__ )
								, 'formmethod' => $this->_getValueDependingOnMode( 'form', 'method', __METHOD__, __LINE__ )
								, 'formpid' => $this->_getValueDependingOnMode( 'form', 'pid', __METHOD__, __LINE__ )
								, 'inputname' => $this->_getValueDependingOnMode( 'input', 'name', __METHOD__, __LINE__ )
								, 'inputplaceholder' => $this->_getValueDependingOnMode( 'input', 'placeholder', __METHOD__, __LINE__ )
						)
		);
	}

	/**
	 * searchformAction( ) : 
	 *
	 * @return void
	 * @access public
	 * @version 8.2.5
	 * @since 8.2.5
	 *
	 */
	public function searchformAction()
	{
		$this->_initialise();
		$this->_viewAssignList();
	}

}
