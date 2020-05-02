<?php

if ( !defined( 'TYPO3_MODE' ) )
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
 * **************************************************************************** */


/* * ****************************************************************************
 * Configuration by the extension manager
 * **************************************************************************** */
$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );

$beLanguage = $confArr[ 'beLanguage' ];
switch ( $beLanguage )
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
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', 'Configuration/TypoScript/Base/',       'Start [1] Frontend');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', 'Configuration/TypoScript/Foundation/', 'Start [2] + Responsive');
    break;
  default:
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', 'Configuration/TypoScript/Base/',       'Start [1] Frontend');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', 'Configuration/TypoScript/Foundation/', 'Start [2] + Responsive');
    break;
}


/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */
switch ( true )
{
  case( $beLanguage == 'de' ):
    // German
    $TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Refresh\Compatibility\Core\Utility\ExtensionManagementUtility::extRelPath('start') . 'ext_icon.gif' );
    break;
  default:
    // English
    $TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Refresh\Compatibility\Core\Utility\ExtensionManagementUtility::extRelPath('start') . 'ext_icon.gif' );
    break;
}
t3lib_SpriteManager::addTcaTypeIcon( 'pages', 'contains-start', '../typo3conf/ext/start/ext_icon.gif' );


/* * ****************************************************************************
 * Methods for backend workflows
 * **************************************************************************** */

//require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('start').'lib/flexform/class.tx_start_flexform.php');
// #i0205, 190301, dwildt, 1-
//require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('start') . 'Resources/Private/Language/Userfunc/class.tx_start_userfunc.php');