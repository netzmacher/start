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
 * TCA Override tt_content
 * **************************************************************************** */


// #i0206, 190301, dwildt, 1+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartPagemedia' ] = 'ext-start-pagemedia';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartPagemedia' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'header' ];

// ##i0325, 200506, dwildt, +
$typo3Version = Netzmacher\Start\Userfunc\Typo3VersionUserfunc::get();

require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/tt_content/tt_content.php' );
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/Default/tt_content.php' );

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'Page Media'
		, 'txStartPagemedia'
		, 'ext-start-pagemedia'
				]
				, 'image'
				, 'after'
);
