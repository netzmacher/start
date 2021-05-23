<?php

use Netzmacher\Start\Backend\Extensionmanager;
use Netzmacher\Start\Userfunc\Typo3VersionUserfunc;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if( !Extensionmanager::getProperty( 'responsiveimagesDisabled' ) )
{
	if( !Typo3VersionUserfunc::isSmallerThan104() )
	{
		ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/TCEFORM/sys_file_reference/crop.ts">' );
	}
}