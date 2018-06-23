<?php

use Netzmacher\Start\Backend\Extensions\Extensionmanager;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaTtcontentDisabled' )){
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
 * TCA Override tt_content
 * **************************************************************************** */

switch( TRUE )
{
	case($typo3Version < 8000000):
		require( PATH_typo3conf . 'ext/start/Configuration/TCA/Overrides/7.6/tt_content.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		require( PATH_typo3conf . 'ext/start/Configuration/TCA/Overrides/Default/tt_content.php' );
		break;
}
