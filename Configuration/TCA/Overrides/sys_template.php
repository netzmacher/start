<?php

switch( TRUE )
{
	case($typo3Version < 8000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/6.2/sys_template.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TCA/Overrides/Default/sys_template.php' );
		break;
}