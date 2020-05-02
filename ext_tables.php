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
	case($typo3Version < 8000000):
		// #t1571, 170929, dwildt, ~
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtTables/TYPO3_6.2.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		// #t1571, 170929, dwildt, +
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtTables/Default.php' );
		break;
}


/* * ****************************************************************************
 * Backend Styling
 * **************************************************************************** */

//require_once( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtTables/Extensions/Backend.php' );
\Netzmacher\Start\Backend\Extensions\Backend::Style();

/* * ********************************************************************************************
 * Register Modules
 * ************************************************************************************************ */

// #i0242, 190615, dwildt, +
$typo3Version = Netzmacher\Start\Utility\Typo3VersionUtility::get();
if( TYPO3_MODE === 'BE' )
{
	switch( TRUE )
	{
		case($typo3Version < 7006000):
			// do nothing
			break;
		case($typo3Version < 8007000):
		case($typo3Version < 9000000):
		case($typo3Version >= 9000000):
		default:
			if( !Netzmacher\Start\Backend\Extensionmanager::getProperty( 'modulDisabled' ) )
			{
				\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
								'Netzmacher.Start'
								, 'web' // Make module a submodule of 'web'
								, 'md1' // Submodule key
								, '' // Position
								, [
						'Module' => 'list, banner, contact, layout, socialmedia, update, unit, wallpaper'
								]
								, [
						'access' => 'user,group'
						, 'icon' => 'EXT:start/Resources/Public/Icons/user_mod_md1.svg'
						, 'labels' => 'LLL:EXT:start/Resources/Private/Language/locallang_md1.xlf'
								,
								]
				);
			}
			break;
	}
}