<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

$typo3Version =  Netzmacher\Start\Userfunc\Typo3VersionUserfunc::get();
switch( true )
{
	case($typo3Version < 10000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtLocalconf/ConfigurePlugin/09.5.php' );
		break;
	case($typo3Version >= 10000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtLocalconf/ConfigurePlugin/10.4.php' );
		break;
}