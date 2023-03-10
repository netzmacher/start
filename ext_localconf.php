<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* #84 Jumboteaser, 201016, fbostroem, +18 */
/* * ****************************************************************************
 * Page- and User-TSConfig
 * **************************************************************************** */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.ts">' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/User/user.ts">' );

call_user_func( function ()
{
	if( TYPO3_MODE == 'BE' )
	{

		/*		 * ****************************************************************************
		 * BackendLayoutDataProvider
		 * **************************************************************************** */
		$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SC_OPTIONS' ][ 'BackendLayoutDataProvider' ][ 'start' ] = 'Netzmacher\\Start\\Provider\\BackendLayoutDataProvider';
	}

	/*	 * ****************************************************************************
	 * FE addRootLineFields
	 * **************************************************************************** */
	// #i0094, 170315, dwildt, 1+
	$addRootLineFields = ''
					. 'tx_start_addressline,'
					. 'tx_start_email,'
					. 'tx_start_foundation_topbar_name,'
					. 'tx_start_foundation_topbar_title,'
					. 'tx_start_megamenu,'
					. 'tx_start_phone,'
					. 'tx_start_phonelabel,'
					. 'tx_start_social_cloud,'
					. 'tx_start_social_facebook,'
					. 'tx_start_social_flickr,'
					. 'tx_start_social_github,'
					. 'tx_start_social_instagram,'
          . 'tx_start_pages_calendar,'
          . 'tx_start_pages_gdpr,'
          . 'tx_start_pages_news,'
          . 'tx_start_pages_newsletter,'
          . 'tx_start_pages_root,'
          . 'tx_start_pages_rss,'
					. 'tx_start_social_linkedin,'
					. 'tx_start_social_picasa,'
					. 'tx_start_social_pinterest,'
					. 'tx_start_social_spotify,'
					. 'tx_start_social_twitter,'
					. 'tx_start_social_vimeo,'
					. 'tx_start_social_youtube'
	;
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'FE' ][ 'addRootLineFields' ] .= ($GLOBALS[ 'TYPO3_CONF_VARS' ][ 'FE' ][ 'addRootLineFields' ] ? ',' : '') . $addRootLineFields;

	/*	 * ****************************************************************************
	 * PageTSConfig
	 * **************************************************************************** */

	// #i0204, 190301, dwildt, 1+, 12-
	require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TSconfig/mod.php' );

	// #t4909, 200414, dwildt, 1+
	//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/Page/tx_gridelements.ts">');
	require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TSconfig/Page/tx_gridelements.php' );

	// #v0608, 210107, dwildt, 1+
	require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TSconfig/Page/TCEFORM.php' );

	/*	 * ****************************************************************************
	 * Direct Mail Hooks
	 * **************************************************************************** */

	// #i0187, 180725, dwildt, 1+
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTCONF' ][ 'direct_mail' ][ 'mod2' ][ 'cmd_compileMailGroup' ][] = 'Netzmacher\Start\Backend\Extensions\DirectMail\RecipientList';
	// #i0185, 180719, dwildt, +
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTCONF' ][ 'direct_mail' ][ 'mod3' ][ 'cmd_compileMailGroup' ][] = 'Netzmacher\Start\Backend\Extensions\DirectMail\RecipientList';

	/*	 * ****************************************************************************
	 * RTE
	 * **************************************************************************** */

	// #i0220, 190320, dwildt, 1+
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'RTE' ][ 'Presets' ][ 'start' ] = 'EXT:start/Configuration/RTE/Start.yaml';
	// #i0225, #i0224, 190405, dwildt, 1+
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'RTE' ][ 'Presets' ][ 'startwiexternalplugin' ] = 'EXT:start/Configuration/RTE/StartWiExternalPlugin.yaml';

	/*	 * ****************************************************************************
	 * Register Nodes
	 * **************************************************************************** */

	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SYS' ][ 'formEngine' ][ 'nodeRegistry' ][ 1607954683 ] = [
			'nodeName' => 'StartTeasercardCountdowninfo',
			'priority' => 40,
			'class' => \Netzmacher\Start\Flexform\Teasercard\Countdownhelp::class,
	];

	/*	 * ****************************************************************************
	 * configurationPlugin
	 * **************************************************************************** */

	require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/ExtLocalconf/index.php' );
}
);
