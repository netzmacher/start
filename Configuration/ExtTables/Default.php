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
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [1] +Sprache: Deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [1] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [2] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [2] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation6x/', 'Start [2] +Upgrade Foundation 6.4.3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [7] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [8] +E-Mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [9] +Bezeichnungen: deutsch' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [98] Debug' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Test/', 'Start [99] Test' );
		break;
	default:
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/', 'Start [1]' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Config/Language/De/', 'Start [1] +Language: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base/Start/Gridelements/', 'Start [1] +Gridelements' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation/', 'Start [2] Foundation' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/FoundationIcons/', 'Start [2] +Foundation Icons 3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Foundation6x/', 'Start [2] +Upgrade Foundation 6.4.3' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Piwik/', 'Start [7] Piwik' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/EMail/', 'Start [8] +e-mail' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Labeling/De/', 'Start [9] +Labeling: German' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Debug/', 'Start [98] Debug' );
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Test/', 'Start [99] Test' );
		break;
}

/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIcon = array(
		'identifier' => 'app-start'
		, 'key' => 'start'	 // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Start'
		, 'source' => 'EXT:start/ext_icon.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		$extIcon[ 'label' ]
		, $extIcon[ 'key' ]
		, $extIcon[ 'identifier' ]
);
$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];

/* * ****************************************************************************
 * Methods for backend workflows
 * **************************************************************************** */

require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY ) . 'lib/userfunc/class.tx_start_userfunc.php');
