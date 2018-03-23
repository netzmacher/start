<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * TYPO3 Version
 * **************************************************************************** */

list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;

/* * ****************************************************************************
 * Page TSConfig
 * **************************************************************************** */

switch( TRUE )
{
	case($typo3Version < 6000000):
		require( PATH_typo3conf . 'ext/start/Configuration/ExtTables/TYPO3_4.x.php' );
		break;
	case($typo3Version < 8000000):
		// #t1571, 170929, dwildt, ~
		require( PATH_typo3conf . 'ext/start/Configuration/ExtTables/TYPO3_7.x.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		// #t1571, 170929, dwildt, +
		require( PATH_typo3conf . 'ext/start/Configuration/ExtTables/Default.php' );
		break;
}


/* * ****************************************************************************
 * Backend Styling
 * **************************************************************************** */

//require_once( PATH_typo3conf . 'ext/start/Configuration/ExtTables/Extensions/Backend.php' );
\Netzmacher\Start\Backend\Extensions\Backend::Style();