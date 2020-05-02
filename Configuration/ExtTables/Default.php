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

$extIcon = array(
		'identifier' => 'app-start'
		, 'key' => 'start' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start'
		, 'source' => 'EXT:start/ext_icon.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		$extIcon[ 'label' ]
		, $extIcon[ 'key' ]
		, $extIcon[ 'identifier' ]
);
$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];

$extIcon = array(
		'identifier' => 'app-startmenues'
		, 'key' => 'startmenues' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start Menues'
		, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartMenues.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$extIcon = array(
		'identifier' => 'app-startbreadcrumbs'
		, 'key' => 'startbreadcrumbs' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start breadcrumbs navigation'
		, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartBreadcrumbs.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$extIcon = array(
		'identifier' => 'app-startsubnav'
		, 'key' => 'startsubnav' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start top navigation'
		, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartSubNav.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$extIcon = array(
		'identifier' => 'app-starttopnav'
		, 'key' => 'starttopnav' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start top navigation'
		, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartTopNav.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);

$extIcon = array(
		'identifier' => 'app-txStartPagemedia'
		, 'key' => 'txStartPagemedia' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Page Media'
		, 'source' => 'EXT:start/ext_icon.svg'
		, 'source' => 'EXT:start/Resources/Public/Images/Icons/txStartPagemedia.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		$extIcon[ 'label' ]
		, $extIcon[ 'key' ]
		, $extIcon[ 'identifier' ]
);
$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];
