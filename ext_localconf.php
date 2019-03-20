<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

call_user_func( function ()
{
	// #t1578, 171001, dwildt, ~

	/*	 * ****************************************************************************
	 * TYPO3 Version
	 * **************************************************************************** */
	list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
	$version = ( ( int ) $main ) * 1000000;
	$version = $version + ( ( int ) $sub ) * 1000;
	$version = $version + ( ( int ) $bugfix ) * 1;
	$typo3Version = $version;

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
					. 'tx_start_social_facebook,'
					. 'tx_start_social_flickr,'
					. 'tx_start_social_github,'
					. 'tx_start_social_googleplus,'
					. 'tx_start_social_instagram,'
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
	require( PATH_typo3conf . 'ext/start/Configuration/TSconfig/mod.php' );
//	// #t1578, 171001, dwildt, ~
//	switch( TRUE )
//	{
//		case($typo3Version < 8000000):
//			$addPageTsConfig = '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/ExtLocalconf/PageTSConfig/7.6/tt_content/menu_type.ts">';
//			break;
//		case($typo3Version >= 8000000):
//		default:
//			$addPageTsConfig = '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/ExtLocalconf/PageTSConfig/Default/tt_content/menu.ts">';
//			break;
//	}
//	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( $addPageTsConfig );

	/*	 * ****************************************************************************
	 * Direct Mail Hooks
	 * **************************************************************************** */

	// #i0187, 180725, dwildt, 1+
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTCONF' ][ 'direct_mail' ][ 'mod2' ][ 'cmd_compileMailGroup' ][] = 'Netzmacher\Start\Backend\Extensions\DirectMail\RecipientList';
	// #i0185, 180719, dwildt, +
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTCONF' ][ 'direct_mail' ][ 'mod3' ][ 'cmd_compileMailGroup' ][] = 'Netzmacher\Start\Backend\Extensions\DirectMail\RecipientList';
	
	// #i0220, 190320, dwildt, 1+
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['start'] = 'EXT:start/Configuration/RTE/Start.yaml';
} );
