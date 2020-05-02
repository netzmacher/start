<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensionmanager;

if( !Extensionmanager::getProperty( 'gridelementsDisableCol' ) )
{
	ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/tx_gridelements/col.ts">');
}

if( !Extensionmanager::getProperty( 'gridelementsDisableAccordion' ) )
{
	ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/tx_gridelements/accordion.ts">');
}

if( !Extensionmanager::getProperty( 'gridelementsDisableTab' ) )
{
	ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/tx_gridelements/tab.ts">');
}



