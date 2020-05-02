<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Start', 'start', \Netzmacher\Refresh\Compatibility\Core\Utility\ExtensionManagementUtility::extRelPath('start') . 'ext_icon.gif' );
TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-start', '../typo3conf/ext/start/ext_icon.gif' );

/* * ****************************************************************************
 * RTE
 * **************************************************************************** */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/RTE.ts">' );
