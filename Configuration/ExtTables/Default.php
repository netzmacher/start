<?php

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
 * Enables the Include Static Templates
 * Add pagetree icons
 * Methods for backend workflows
 * **************************************************************************** */


/* * ****************************************************************************
 * Configuration by the extension manager
 * **************************************************************************** */

$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );

$beLanguage = $confArr[ 'beLanguage' ];
switch( $beLanguage )
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

$tempPath = 'Configuration/TypoScript/';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Base/', 'Start [01.1.1]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Config/Language/De/', 'Start [01.2.1] +Language: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Foundation/', 'Start [02.1.1] Foundation' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'FoundationIcons/', 'Start [02.2.1] +Foundation Icons 3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Foundation6x/', 'Start [02.2.2] +Upgrade Foundation 6.4.3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Piwik/', 'Start [07.1.1] Piwik' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'EMail/', 'Start [08.1.1] +e-mail' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Labeling/De/', 'Start [09.1.1] +Labeling: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Newsletter/', 'Start [20.2.1] Newsletter Popup' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/direct_mail/subscribe/', 'Start [20.3.1] Newsletter management (direct_mail)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/direct_mail/unsubscribe/', 'Start [20.3.1] Newsletter unsubscribe (direct_mail)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/gridelements/bootstrap/', 'Start [20.4.1] Gridelements (Bootstrap)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/gridelements/foundation/', 'Start [20.4.1] Gridelements (Foundation)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/tx_news/ImageFoundation/', 'Start [20.5.1] txnews images clearing-thumbs (Foundation)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/tt_address/subscribe/', 'Start [20.9.1] E-Mail subscribe (tt_address) [DEPRECATED!]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Extensions/tt_address/unsubscribe/', 'Start [20.9.1] E-Mail unsubscribe (tt_address) [DEPRECATED!]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Base/Demo/', 'Start [80.1.1] Demo' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Development/cssNotMinified/', 'Start [90.1.1] +CSS not minified' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Development/jsNotMinified/', 'Start [90.2.1] +JS not minified' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Debug/', 'Start [91.1.1] Debug' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Workaround/', 'Start [92.1.1] +Workaround ChangeLog #i0215' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Test/', 'Start [99.1.1] Test' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, $tempPath . 'Base/Start/Gridelements/', 'Start [DEPRECATED!] +Gridelements [USE 20.4.1!]' );

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
