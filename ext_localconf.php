<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

if ( TYPO3_MODE == 'BE' )
{

  /*   * ****************************************************************************
   * BackendLayoutDataProvider
   * **************************************************************************** */
  $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SC_OPTIONS' ][ 'BackendLayoutDataProvider' ][ 'start' ] = 'Netzmacher\\Start\\Provider\\BackendLayoutDataProvider';

}

// PageTSConfig
// #i0021, 150423, dwildt, +
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/ExtLocalconf/addPageTSConfig/tt_content/menu_type.txt">' );