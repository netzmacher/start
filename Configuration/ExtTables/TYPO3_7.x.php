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
 * Enables the Include Static Templates
 * **************************************************************************** */

$_path = 'Configuration/TypoScript/';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Base/', 'Start [0.1.0]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Config/Language/De/', 'Start [0.2.0] +Language: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Base/Start/Gridelements/', 'Start [0.3.0] +Gridelements' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Foundation/', 'Start [1.0.0] Foundation' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'FoundationIcons/', 'Start [1.1.0] +Foundation Icons 3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Piwik/', 'Start [7.0.0] Piwik' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'EMail/', 'Start [8.0.0] +e-mail' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Labeling/De/', 'Start [9.0.0] +Labeling: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Extensions/tx_news/Imagefoundation/', 'Start [20.7.1] txnews images +lightbox (foundation)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $_path . 'Debug/', 'Start [99] Debug' );


/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Refresh\Compatibility\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-start', '../typo3conf/ext/start/ext_icon.gif' );

/* * ****************************************************************************
 * Methods for backend workflows
 * **************************************************************************** */

//require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY).'lib/flexform/class.tx_start_flexform.php');
// #i0205, 190301, dwildt, 1-
//require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY ) . 'Resources/Private/Language/Userfunc/class.tx_start_userfunc.php');

/* * ****************************************************************************
 * PageTSConfig
 * **************************************************************************** */

// #i0097, 170319, -
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/SectionFrame.ts">' );

/* * ****************************************************************************
 * RTE
 * **************************************************************************** */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/RTE.ts">' );
