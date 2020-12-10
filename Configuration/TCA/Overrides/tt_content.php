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
$typo3Version = Netzmacher\Start\Utility\Typo3VersionUtility::get();

/* #84 Jumboteaser, 201016, fbostroem, +1 */
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/tt_content/jumboteaser.php' );

/* #90 Support Teaser Card Container, 201118, fbostroem +1 */
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/tt_content/teasercard.php' );

/* Headlineimage, 201204, fbostroem +1 */
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/tt_content/headlineimage.php' );

/* Jumpbox, 201209, fbostroem +1 */
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/tt_content/jumpbox.php' );


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
		, 'ext-start-pagemedia'
				]
				, 'image'
				, 'after'
);
