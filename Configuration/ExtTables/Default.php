<?php

use Netzmacher\Start\Backend\Extensionmanager;

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
 * Add pagetree icons
 * Methods for backend workflows
 * **************************************************************************** */


/* * ****************************************************************************
 * Configuration by the extension manager
 * **************************************************************************** */

$beLanguage = Extensionmanager::getProperty( 'beLanguage' );
switch( $beLanguage )
{
	case( 'German'):
		$beLanguage = 'de';
		break;
	default:
		$beLanguage = 'default';
}

/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

	// Should correpond with Configuration/TCA/Overrides/6.2/pages.php and Default/pages.php
$extIcons = [
		'ext-start' => [
				'identifier' => 'ext-start'
				, 'key' => 'start' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Start'
				, 'source' => 'EXT:start/ext_icon.svg'
		],
		'ext-start-breadcrumbs' => [
				'identifier' => 'ext-start-breadcrumbs'
				, 'key' => 'startbreadcrumbs' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Start breadcrumbs navigation'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartBreadcrumbs.svg'
		],
		'ext-start-menues' => [
				'identifier' => 'ext-start-menues'
				, 'key' => 'startmenues' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Start Menues'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartMenues.svg'
		],
		'ext-start-subnav' => [
				'identifier' => 'ext-start-subnav'
				, 'key' => 'startsubnav' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Start top navigation'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartSubNav.svg'
		],
		'ext-start-topnav' => [
				'identifier' => 'ext-start-topnav'
				, 'key' => 'starttopnav' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Start top navigation'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartTopNav.svg'
		],
		'ext-start-jumboteaser' => [
				'identifier' => 'ext-start-jumboteaser'
				, 'key' => 'txStartJumboteaser' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Page Media'
				, 'source' => 'EXT:start/ext_icon.svg'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartJumboteaser.svg'
		],
		'ext-start-pagemedia' => [
				'identifier' => 'ext-start-pagemedia'
				, 'key' => 'txStartPagemedia' // <- Key must be the part behind contain- of the identifier!
				, 'label' => 'Page Media'
				, 'source' => 'EXT:start/ext_icon.svg'
				, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartPagemedia.svg'
		],
];

foreach( $extIcons as $extIcon )
{
	$iconRegistry->registerIcon(
					$extIcon[ 'identifier' ]
					, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
					, [ 'source' => $extIcon[ 'source' ] ]
	);
}