<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 *
 * INDEX
 *
 * Configuration by the extension manager
 *    Localization support
 * Enables the Include Static Templates
 * Add pagetree icons
 * Methods for backend workflows
 * PageTSConfig
 * RTE
 * **************************************************************************** */


/* * ****************************************************************************
 * Configuration by the extension manager
 * **************************************************************************** */

$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );

$beLanguage = $confArr[ 'beLanguage' ];
switch( $beLanguage )
{
	case( 'German'):
		$beLanguage = 'de';
		break;
	default:
		$beLanguage = 'default';
}

/* * ****************************************************************************
 * Enables the Include Static Templates
 * **************************************************************************** */

switch( true )
{
	case( $beLanguage == 'de' ):
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [1] +Sprache: Deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [1] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [2] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [2] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [7] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [8] +E-Mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [9] +Bezeichnungen: deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [99] Debug' );
		break;
	default:
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [1] +Language: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [1] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [2] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [2] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [7] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [8] +e-mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [9] +Labeling: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [99] Debug' );
		break;
}


/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */

switch( true )
{
	case( $beLanguage == 'de' ):
		// German
		$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Switcher\Compatibility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
		break;
	default:
		// English
		$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Switcher\Compatibility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
		break;
}
TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-start', '../typo3conf/ext/start/ext_icon.gif' );

/* * ****************************************************************************
 * Methods for backend workflows
 * **************************************************************************** */

//require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'lib/flexform/class.tx_start_flexform.php');
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY ) . 'lib/userfunc/class.tx_start_userfunc.php');

/* * ****************************************************************************
 * PageTSConfig
 * **************************************************************************** */

// #i0097, 170319, -
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSConfig/SectionFrame.ts">' );

/* * ****************************************************************************
 * RTE
 * **************************************************************************** */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSConfig/RTE.ts">' );
