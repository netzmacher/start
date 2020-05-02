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
 * TCA Override tt_content
 * **************************************************************************** */


// #i0206, 190301, dwildt, 1+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartPagemedia' ] = 'app-txStartPagemedia';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartPagemedia' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'header' ];

switch( TRUE )
{
	case($typo3Version < 8000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/6.2/tt_content.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/Default/tt_content.php' );
		break;
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'Page Media'
		, 'txStartPagemedia'
		, 'app-txStartPagemedia'
				]
				, 'image'
				, 'after'
);
