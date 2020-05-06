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

/* * ****************************************************************************
 * TCA Override pages
 * **************************************************************************** */

// ##i0325, 200506, dwildt, +
$typo3Version = Netzmacher\Start\Utility\Typo3VersionUtility::get();

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