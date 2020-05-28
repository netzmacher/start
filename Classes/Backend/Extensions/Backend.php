<?php

namespace Netzmacher\Start\Backend\Extensions;

use Netzmacher\Start\Backend\Extensionmanager;
use Netzmacher\Start\Utility\Typo3VersionUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2020 - Dirk Wildt <http://wildt.at.die-netzmacher.de/>
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
 * @subpackage  start
 * @version 7.0.1
 * @since 7.0.0
 */
class Backend
{

	/**
	 * @access public
	 * @return      void
	 * @version     7.0.2
	 * @since       7.0.0
	 */
	static public function Style()
	{
		if( TYPO3_MODE != 'BE' )
		{
			return;
		}

		if( SELF::_HostDisallowed() )
		{
			return;
		}
		SELF::_BackendStyle();
		SELF::_BackendLogo();
	}

	/**
	 * @access private
	 * @return      void
	 * @version     7.0.0
	 * @since       7.0.0
	 */
	static private function _BackendLogo()
	{
		$backendstyleDisabled = Extensionmanager::getProperty( 'backendstyleDisabled' );
		if( $backendstyleDisabled )
		{
			return;
		}

		switch( TRUE )
		{
			case ( Typo3VersionUtility::Get() < 7006000 ):
				$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
				$GLOBALS[ 'TBE_STYLES' ][ 'logo_login' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_loginLogo-v6.2.jpg';
				break;
			case ( Typo3VersionUtility::Get() < 8007000 ):
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
	 * @version     7.0.1
	 * @since       7.0.0
	 */
	static private function _BackendStyle()
	{
		$backendstyleDisabled = Extensionmanager::getProperty( 'backendstyleDisabled' );

		if( $backendstyleDisabled )
		{
			return;
		}

		// Login Logo
		if( empty( trim( Extensionmanager::getProperty( 'loginLogo', 'backend' ) ) ) )
		{
			$loginLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginLogo.jpg';
			Extensionmanager::setProperty( 'loginLogo', $loginLogo, 'backend' );
		}

		// Login Background
		if( empty( trim( Extensionmanager::getProperty( 'loginBackgroundImage', 'backend' ) ) ) )
		{
			$loginBackgroundImage = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginBackgroundImage.jpg';
			Extensionmanager::setProperty( 'loginBackgroundImage', $loginBackgroundImage, 'backend' );
		}

		// Backend Logo
		if( empty( trim( Extensionmanager::getProperty( 'backendLogo', 'backend' ) ) ) )
		{
			$backendLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			Extensionmanager::setProperty( 'backendLogo', $backendLogo, 'backend' );
		}
		// Favicon
		if( empty( trim( Extensionmanager::getProperty( 'backendFavicon', 'backend' ) ) ) )
		{
			if( filter_input( INPUT_GET, 'token' ) )
			{
				$backendFavicon = 'EXT:start/Resources/Public/Images/Backend/typo3_start_unlock.ico';
			}
			else
			{
				$backendFavicon = 'EXT:start/Resources/Public/Images/Backend/typo3_start_lock.ico';
			}
			Extensionmanager::setProperty( 'backendFavicon', $backendFavicon, 'backend' );
		}

		// loginHighlightColor
		if( empty( trim( Extensionmanager::getProperty( 'loginHighlightColor', 'backend' ) ) ) )
		{
			$loginHighlightColor = 'FE5E00';
			Extensionmanager::setProperty( 'loginHighlightColor', $loginHighlightColor, 'backend' );
		}

		// loginFootnote
		if( empty( trim( Extensionmanager::getProperty( 'loginFootnote', 'backend' ) ) ) )
		{
			$copyYear = 2014;
			$curYear = date( 'Y' );
			if( ($copyYear != $curYear ) )
			{
				$copyYear = $copyYear . '-' . $curYear;
			}
			$loginFootnote = '(c) ' . $copyYear . ' – die-netzmacher.de';
			Extensionmanager::setProperty( 'loginFootnote', $loginFootnote, 'backend' );
		}
	}

	/**
	 * @access private
	 * @return      boolean
	 * @version     7.0.0
	 * @since       7.0.0
	 */
	static private function _HostDisallowed()
	{
		$backendstyleHosts = Extensionmanager::getProperty( 'backendstyleHosts' );

		// Any host isn't set, all hosts are allowed
		if( empty( $backendstyleHosts ) )
		{
			return FALSE;
		}

		$backendstyleHosts = str_replace( ' ', NULL, $backendstyleHosts );
		$arrBackendstyleHosts = explode( ',', $backendstyleHosts );
		// Current host is in the list of allowed hosts
		if( in_array( filter_input( INPUT_SERVER, 'SERVER_NAME' ), $arrBackendstyleHosts ) )
		{
			return FALSE;
		}

		// Current host isn't in the list of allowed hosts
		return TRUE;
	}

}
