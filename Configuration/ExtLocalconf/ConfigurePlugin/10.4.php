<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * Plugin 1: Searchform
 * **************************************************************************** */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
				'Netzmacher.Start'
				, 'Pi1'
				, [ \Netzmacher\Start\Controller\SearchformController::class => 'searchform' ]
//				, [ \Netzmacher\Start\Controller\SearchformController::class => 'searchform' ]
				
);
