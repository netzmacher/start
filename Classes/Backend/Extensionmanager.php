<?php

namespace Netzmacher\Start\Backend;

use Netzmacher\Start\Utility\Typo3VersionUtility;

/* * *************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2020 - Dirk Wildt, http://wildt.at.die-netzmacher.de
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
 * @version 7.0.0
 * @since 7.0.0
 */
class Extensionmanager
{

	/**
	 * @var mixed
	 */
	static private $_extConf = '';

	/**
	 * @var array
	 */
	static private $_wasSerialised = false;

	/**
	 * _initExtConf
	 * 
	 * @params string $extKey
	 * @access private
	 * @return      void
	 * @version     7.0.0
	 * @since       7.0.0
	 */
	static private function _initExtConf( $extKey )
	{
		switch( TRUE )
		{
			case(Typo3VersionUtility::Get() < 10000000):
				self::$_extConf = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ $extKey ];
				break;
			case(Typo3VersionUtility::Get() >= 10000000):
			default:
				self::$_extConf = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ $extKey ];
				break;
		}
	}

	/**
	 * _ExtConfSerialize()
	 * 
	 * @params string $extKey
	 * @access private
	 * @return      void
	 * @version     7.0.0
	 * @since       7.0.0
	 */
	static private function _ExtConfSerialize( $extKey )
	{
		// do not serialize in TYPO2 10.x
		switch( self::$_wasSerialised && Typo3VersionUtility::Get() < 10000000 )
		{
			case(true):
				self::$_extConf = serialize( self::$_extConf );
				break;
			case(false):
				// do nothing
				break;
		}
		switch( TRUE )
		{
			case(Typo3VersionUtility::Get() < 10000000):
				$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ $extKey ] = self::$_extConf;
				break;
			case(Typo3VersionUtility::Get() >= 10000000):
			default:
				$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ $extKey ] = self::$_extConf;
				break;
		}
		return;
	}

	/**
	 * @access private
	 * @return      void
	 * @version     7.0.0
	 * @since       7.0.0
	 */
	static private function _ExtConfUnserialize()
	{
		if( !is_array( self::$_extConf ) )
		{
			self::$_extConf = unserialize( self::$_extConf );
			self::$_wasSerialised = true;
		}
	}

	/**
	 * getProperty()
	 * 
	 * @param string		$key: Key of the extension manager
	 * @param string		$extKey: extension key
	 * @return string		$value: corresponding value
	 * @access private
	 * @version 7.0.0
	 * @since 7.0.0
	 */
	static public function getProperty( $key, $extKey = 'start' )
	{
		self::_initExtConf( $extKey );
		self::_ExtConfUnserialize();
//		var_dump( __METHOD__, __LINE__, self::$_extConf );
//		die();
		$value = self::$_extConf[ $key ];
		self::_ExtConfSerialize( $extKey );

		return $value;
	}

	/**
	 * setProperty()
	 * 
	 * @param string		$key: Key of the extension manager
	 * @param string		$value: 
	 * @param string		$extKey: extension key
	 * @return void
	 * @access private
	 * @version 7.0.0
	 * @since 7.0.0
	 */
	static public function setProperty( $key, $value, $extKey = 'start' )
	{
		self::_initExtConf( $extKey );
		self::_ExtConfUnserialize();
		self::$_extConf[ $key ] = $value;
		self::_ExtConfSerialize( $extKey );
	}

}
