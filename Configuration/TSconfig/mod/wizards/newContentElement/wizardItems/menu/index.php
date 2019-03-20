<?php

switch( TRUE )
{
	case($typo3Version < 8000000):
		TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/mod/wizards/newContentElement/wizardItems/menu/7.6/menu_type.ts">' );
		break;
	case($typo3Version >= 8000000):
	default:
		TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/mod/wizards/newContentElement/wizardItems/menu/Default/menu.ts">' );
		break;
}

