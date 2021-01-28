<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}


/* * ****************************************************************************
 * Plugin 1: Searchform
 * **************************************************************************** */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
				'Netzmacher.start'
				, 'Pi1'
				, array( 'Searchform' => 'searchform' )
//				, array( 'Searchform' => 'searchform' )
);
