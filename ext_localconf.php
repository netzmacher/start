<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

if( TYPO3_MODE == 'BE' )
{

	/*	 * ****************************************************************************
	 * BackendLayoutDataProvider
	 * **************************************************************************** */
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SC_OPTIONS' ][ 'BackendLayoutDataProvider' ][ 'start' ] = 'Netzmacher\\Start\\Provider\\BackendLayoutDataProvider';
}

/* * ****************************************************************************
 * FE addRootLineFields
 * **************************************************************************** */
// #i0094, 170315, dwildt, 1+
$addRootLineFields = ''
				. 'tx_start_addressline,'
				. 'tx_start_email,'
				. 'tx_start_foundation_topbar_name,'
				. 'tx_start_foundation_topbar_title'
				;
$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'FE' ][ 'addRootLineFields' ] .= ($GLOBALS[ 'TYPO3_CONF_VARS' ][ 'FE' ][ 'addRootLineFields' ] ? ',' : '') . $addRootLineFields;

/* * ****************************************************************************
 * PageTSConfig
 * **************************************************************************** */
// #i0021, 150423, dwildt, +
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/ExtLocalconf/addPageTSConfig/tt_content/menu_type.txt">' );
