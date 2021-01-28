<?php

namespace Netzmacher\Start\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2021 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * AbstractController for the Start xtension
 *
 * @package TYPO3
 * @subpackage start
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @version 8.2.5
 * @since 8.2.5
 */
class FlexformValueUtility
{

	/**
	 * getFlexformValue():
	 *
	 * @param array flexform
	 * @param string label of the sheet
	 * @param string label of the field
	 * @param string method
	 * @param integer line
	 * @return mixed value from flexform
	 * @access public
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	public static function getFlexformValue( $xmlFlexform, $sheet, $field, $method, $line )
	{
		$NSprefix = '';
		$reportDocTag = false;

		$arrFlexform = GeneralUtility::xml2array( $xmlFlexform, $NSprefix, $reportDocTag );

		if( !isset( $arrFlexform[ 'data' ][ $sheet ][ 'lDEF' ][ $field ][ 'vDEF' ] ) )
		{
			// 191116, dwildt, ~: $this -> self
			self::_getFlexformValueDiePrompt( $sheet, $field, $method, $line );
			return;
		}

		return $arrFlexform[ 'data' ][ $sheet ][ 'lDEF' ][ $field ][ 'vDEF' ];
	}

	/**
	 * _getFlexformValueDiePrompt():
	 *
	 * @param array flexform
	 * @param string label of the sheet
	 * @param string label of the field
	 * @return mixed value from flexform
	 * @access private
	 * @version 8.2.5
	 * @since 8.2.5
	 */
	private static function _getFlexformValueDiePrompt( $sheet, $field, $method, $line )
	{
		$header = 'Oops: sheet.field missed!';
		$prompt = ''
						. 'ERROR<br />'
						. 'Current Flexform does\'t contain a sheet "' . $sheet . '" with field "' . $field . '"<br />'
						. 'Please save the Start-Plugin once!<br />'
						. '@ ' . $method . ' (#' . $line . ')'
		;
		//FlashmessageUtility::render( $header, $prompt, 'ERROR', $method, $line );
		die( $prompt );
	}

}
