<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * Plugin 1: Searchform
 * **************************************************************************** */

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
				[
		'LLL:EXT:start/Resources/Private/Language/Flexform/Searchform.xlf:tt_content.Searchform'
		, 'start_pi1'
		, 'EXT:start/Resources/Public/Images/Icons/txStartSearchform.svg'
				]
				, 'list_type'
				, 'start'
);
