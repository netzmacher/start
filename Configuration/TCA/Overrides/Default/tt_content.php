<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensions\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaTtcontentDisabled' )){
	return;
}

// #t1578, 171001, dwildt, ~

/* * ****************************************************************************
 * columns: menu_type, tx_start_additionalclass, tx_start_additionalclassdefined
 * **************************************************************************** */

// #t1578, 171001, dwildt, +menu_type
$temporaryColumns = [
		'menu_type' => [
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingle',
						'items' => [
								[
										''
										, ''
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationBreadcrumbs'
										, 'startFoundationBreadcrumbs'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationIconbar'
										, 'startFoundationIconbar'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationIconbarFromDirs'
										, 'startFoundationIconbarFromDirs'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationIconbarStart'
										, 'startFoundationIconbarStart'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationSideNav'
										, 'startFoundationSideNav'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationSideNavFromDirs'
										, 'startFoundationSideNavFromDirs'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startFoundationTopBar'
										, 'startFoundationTopBar'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startGmenu'
										, 'startGmenu'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startGmenuFromDirs'
										, 'startGmenuFromDirs'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startThumbnails'
										, 'startThumbnails'
								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startThumbnailsFromDirs'
										, 'startThumbnailsFromDirs'
								],
						],
						'default' => ''
				]
		],
		'tx_start_additionalclass' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclass',
				'config' => [
						'type' => 'input',
						'size' => '30',
						'eval' => 'trim',
				]
		],
		'tx_start_additionalclassdefined' => [
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined',
				'config' => [
						'type' => 'select',
						  // #i0162, 180525, dwildt, 1+
						'enableMultiSelectFilterTextfield' => 1,
							// #t1668, 171206, dwildt, 1+
						'renderType' => 'selectMultipleSideBySide',
						'minitems' => 0,
						'maxitems' => 99,
						  // 180525, dwildt, 1+
						'size' => '20',
						'items' => [
								'' => [
										'0' => '',
										'1' => '',
								],
								'startDivBackground' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startBackgroundWhite' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startBackgroundWhite',
										'1' => 'startBackgroundWhite',
								],
								'startDivFonts' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startFontLightOnDark' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFontLightOnDark',
										'1' => 'startFontLightOnDark',
								],
								'startDivPanels' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startPanel' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanel',
										'1' => 'panel',
								],
								'startPanelRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelRadius',
										'1' => 'panel radius',
								],
								'startPanelCallout' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelCallout',
										'1' => 'panel callout',
								],
								'startPanelCalloutRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelCalloutRadius',
										'1' => 'panel callout radius',
								],
								'startDivShadow' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startShadow' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startShadow',
										'1' => 'startShadow',
								],
								'startDivTextAlign' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startTextAlignCenter' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignCenter',
										'1' => 'startTextAlignCenter',
								],
								'startTextAlignJustify' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignJustify',
										'1' => 'startTextAlignJustify',
								],
								'startTextAlignLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignLeft',
										'1' => 'startTextAlignLeft',
								],
								'startTextAlignRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignRight',
										'1' => 'startTextAlignRight',
								],
								'startDivHyphens' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startHyphensAuto' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startHyphensAuto',
										'1' => 'startHyphensAuto',
								],
								'startHyphensNone' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startHyphensNone',
										'1' => 'startHyphensNone',
								],
								'startDivImages' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startImgCircle' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startImgCircle',
										'1' => 'startImgCircle',
								],
								'startImgCircleReset' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startImgCircleReset',
										'1' => 'startImgCircleReset',
								],
								'startImgWiShadow' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadow',
										'1' => 'startImgWiShadow',
								],
								'startImgWiShadowReset' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadowReset',
										'1' => 'startImgWiShadowReset',
								],
								'startFigCaptionHideForSmallOnly' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFigCaptionHideForSmallOnly',
										'1' => 'startFigCaptionHideForSmallOnly',
								],
								'startDivMargin' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
//						'startWoMarginBottom' => [
//						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginBottom',
//								'1' => 'startWoMarginBottom',
//						],
								'startWiMarginDefault' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginDefault',
										'1' => 'startWiMarginDefault',
								],
								'startWoMarginLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeft',
										'1' => 'startWoMarginLeft',
								],
								'startWoMargin' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeftRight',
										'1' => 'startWoMarginLeftRight',
								],
								'startWoMarginRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginRight',
										'1' => 'startWoMarginRight',
								],
								'startTopMinus1Em' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startTopMinus1Em',
										'1' => 'startTopMinus1Em',
								],
						],
				],
		],
];

ExtensionManagementUtility::addTCAcolumns(
				'tt_content'
				, $temporaryColumns
);

/* * ****************************************************************************
 * Palette: menu_type; tx_start_additionalclass, tx_start_additionalclassdefined
 * **************************************************************************** */


ExtensionManagementUtility::addFieldsToPalette(
				'tt_content'
				, 'general'
				, 'menu_type'
				, 'after:CType'
);

ExtensionManagementUtility::addFieldsToPalette(
				'tt_content'
				, 'tx_start_palettecss'
				, ''
				. 'tx_start_additionalclass,'
				. '--linebreak--,'
				. 'tx_start_additionalclassdefined'
				, ''
);

/* * ****************************************************************************
 * CType menu
 * **************************************************************************** */

$item = [
		'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.menu'
		, 'menu'
		, 'EXT:start/ext_icon.svg'
];
ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, $item
				, 'menu_sitemap_pages'
				, 'after'
);

ExtensionManagementUtility::addToAllTCAtypes(
				'tt_content'
				, '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
				, ''
				// #i0161, 180524, dwildt, 1-/+
				//, 'after:appearanceLinks'
				, 'after:linkToTop'
);

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'menu' ] = 'app-start';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_pages' ];
