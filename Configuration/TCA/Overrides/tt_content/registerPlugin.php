<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * Plugin 1: Searchform
 * **************************************************************************** */

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
				'Start'
				, 'Pi1'
				, 'LLL:EXT:start/Resources/Private/Language/Flexform/Searchform.xlf:tt_content.Searchform'
				, TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Resources/Public/Images/Icons/txStartSearchform.svg'
);
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'list' ][ 'subtypes_excludelist' ][ 'start_pi1' ] = 'select_key,pages,recursive';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'list' ][ 'subtypes_addlist' ][ 'start_pi1' ] = 'pi_flexform';
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				'start_pi1'
				, 'FILE:EXT:start/Configuration/FlexForm/Plugin/Searchform/flexform.xml'
);