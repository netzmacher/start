<?php

namespace Netzmacher\Start\Backend\Extensions;

use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2018-2020 - Dirk Wildt <http://wildt.at.die-netzmacher.de/>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * @author      Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package     TYPO3
 * @subpackage  org
 * @version 8.10.0
 * @since 8.10.0
 */
class Backend
{

	/**
	 * @access public
	 * @return      void
	 * @version     8.10.0
	 * @since       8.10.0
	 */
	static public function Style()
	{
		if( TYPO3_MODE != 'BE' )
		{
			return;
		}

		SELF::_ExtConfUnserialize();
		if( SELF::_HostDisallowed() )
		{
			SELF::_ExtConfSerialize();
			return;
		}
		SELF::_BackendStyle();
		SELF::_BackendLogo();
		SELF::_ExtConfSerialize();
	}

	/**
	 * @access private
	 * @return      void
	 * @version     8.10.0
	 * @since       8.10.0
	 */
	static private function _BackendLogo()
	{
		$backendstyleDisabled = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ][ 'backendstyleDisabled' ];
		if( $backendstyleDisabled )
		{
			return;
		}

		$TYPO3_version = VersionNumberUtility::convertVersionNumberToInteger( TYPO3_version );

		switch( TRUE )
		{
			case ( $TYPO3_version < 7006000 ):
				$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
				$GLOBALS[ 'TBE_STYLES' ][ 'logo_login' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_loginLogo-v6.2.jpg';
				break;
			case ( $TYPO3_version < 8007000 ):
				$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
				break;
			default:
				// Is done above;
				break;
		}
	}

	/**
	 * @access private
	 * @return      void
	 * @version     8.10.0
	 * @since       8.10.0
	 */
	static private function _BackendStyle()
	{
		$backendstyleDisabled = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ][ 'backendstyleDisabled' ];

		if( $backendstyleDisabled )
		{
			return;
		}

		if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] );
		}

		// Login Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] ) )
		)
		{
			$loginLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginLogo.jpg';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] = $loginLogo;
		}

		// Login Background
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginBackgroundImage.jpg';
		}

		// Backend Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] ) )
		)
		{
			$backendLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] = $backendLogo;
		}

		// Favicon
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start.ico';
		}

		// loginHighlightColor
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] = '#FE5E00';
		}

		if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] );
		}
	}

	/**
	 * @access private
	 * @return      void
	 * @version     8.10.0
	 * @since       8.10.0
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
	 * @version     8.10.0
	 * @since       8.10.0
	 */
	static private function _ExtConfUnserialize()
	{
		if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );
		}
	}

	/**
	 * @access private
	 * @return      boolean
	 * @version     8.10.0
	 * @since       8.10.0
	 */
	static private function _HostDisallowed()
	{
		$backendstyleHosts = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ][ 'backendstyleHosts' ];

		// Any host isn't set, all hosts are allowed
		if( empty( $backendstyleHosts ) )
		{
			return FALSE;
		}

		$backendstyleHosts = str_replace( ' ', NULL, $backendstyleHosts );
		$arrBackendstyleHosts = explode( ',', $backendstyleHosts );
		// Current host is in the list of allowed hosts
		if( in_array( $_SERVER[ 'SERVER_NAME' ], $arrBackendstyleHosts ) )
		{
			return FALSE;
		}

		// Current host isn't in the list of allowed hosts
		return TRUE;
	}

}
