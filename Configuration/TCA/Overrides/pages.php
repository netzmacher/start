<?php

use Netzmacher\Start\Backend\Extensionmanager;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaTtcontentDisabled' ) )
{
	return;
}

// #t1578, 171001, dwildt, ~

/* * ****************************************************************************
 * TYPO3 Version
 * **************************************************************************** */
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;


/* * ****************************************************************************
 * TCA Override pages
 * **************************************************************************** */


switch( TRUE )
{
	case($typo3Version < 8000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/6.2/pages.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/Default/pages.php' );
		break;
}