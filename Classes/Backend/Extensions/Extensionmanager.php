<?php

namespace Netzmacher\Start\Backend\Extensions;

/* * *************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2018 Dirk Wildt, http://wildt.at.die-netzmacher.de
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 * ************************************************************* */

/**
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage  start
 *
 * @version 4.2.0
 * @since 4.2.0
 * @internal #i0179, #i0180
 */
class Extensionmanager
{

	/**
	 * @access private
	 * @return      void
	 * @version     4.2.0
	 * @since       4.2.0
	 */
	static private function _ExtConfSerialize()
	{
		if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );
		}
	}

	/**
	 * @access private
	 * @return      void
	 * @version     4.2.0
	 * @since       4.2.0
	 */
	static private function _ExtConfUnserialize()
	{
		if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );
		}
	}

	/**
	 * Return backendLayoutsDisabled
	 *
	 * @access private
	 * @param string		$key: Key of the extension manager
	 * @return string		$value: corresponding value
	 * @version 4.2.0
	 * @since 4.2.0
	 */
	static public function getProperty( $key )
	{
		SELF::_ExtConfUnserialize();
		$value = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ][ $key ];
		SELF::_ExtConfSerialize();

		return $value;
	}

}
