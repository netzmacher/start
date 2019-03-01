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

switch( true )
{
	case( $beLanguage == 'de' ):
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [01.1.1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [01.2.1] +Sprache: Deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [01.2.2] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [02.1.1] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [02.2.2] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation6x/', 'Start [02.9.1] +Upgrade Foundation 6.4.3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [07.1.1] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [08.1.1] +E-Mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [09.1.1] +Bezeichnungen: deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Newsletter/', 'Start [20.2.1] Newsletter Popup' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/direct_mail/subscribe/', 'Start [20.3.1] Newsletter verwalten (direct_mail)' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/direct_mail/unsubscribe/', 'Start [20.3.1] Newsletter kündigen (direct_mail)' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/tt_address/subscribe/', 'Start [20.4.1] E-Mail eintragen (tt_address) [VERALTET!]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/tt_address/unsubscribe/', 'Start [20.4.1] E-Mail austragen (tt_address) [VERALTET!]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Demo/', 'Start [80.1.1] Demo' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [98.1.1] Debug' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Test/', 'Start [99.1.1] Test' );
		break;
	default:
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [01.1.1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [01.2.1] +Language: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [01.2.2] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [02.1.1] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [02.2.1] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation6x/', 'Start [02.2.2] +Upgrade Foundation 6.4.3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [07.1.1] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [08.1.1] +e-mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [09.1.1] +Labeling: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Newsletter/', 'Start [20.2.1] Newsletter Popup' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/direct_mail/subscribe/', 'Start [20.3.1] Newsletter management (direct_mail)' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/direct_mail/unsubscribe/', 'Start [20.3.1] Newsletter unsubscribe (direct_mail)' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/tt_address/subscribe/', 'Start [20.4.1] E-Mail subscribe (tt_address) [DEPRECATED!]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Extensions/tt_address/unsubscribe/', 'Start [20.4.1] E-Mail unsubscribe (tt_address) [DEPRECATED!]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Demo/', 'Start [80.1.1] Demo' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [98.1.1] Debug' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Test/', 'Start [99.1.1] Test' );
		break;
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