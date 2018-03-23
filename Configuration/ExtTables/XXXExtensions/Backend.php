<?php

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
	case($typo3Version < 9000000):
		// #t1571, 170929, dwildt, ~
		require( PATH_typo3conf . 'ext/start/Configuration/ExtTables/Extensions/8.7/Backend.php' );
		break;
	case($typo3Version >= 9000000):
	default:
		// #t1571, 170929, dwildt, +
		require( PATH_typo3conf . 'ext/start/Configuration/ExtTables/Extensions/9.0/Backend.php' );
		break;
}