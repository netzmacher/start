<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensionmanager;

if( !Extensionmanager::getProperty( 'responsiveimagesDisabled' ) )
{
	ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/TCEFORM/sys_file_reference/crop.ts">');
}