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
//								[
//										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startLanguageWithIcons'
//										, 'startLanguageWithIcons'
//								],
								[
										'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:menu_type.startLanguageWithText'
										, 'startLanguageWithText'
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
								'startDivForm' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDivForm',
										'1' => '--div--',
								],
								'startFormLegendWo' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormLegendWo',
										'1' => 'startFormLegendWo',
								],
								'startFormFieldsetWoAll' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWoAll',
										'1' => 'startFormFieldsetWoAll',
								],
								'startFormFieldsetWiBorderTop' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderTop',
										'1' => 'startFormFieldsetWiBorderTop',
								],
								'startFormFieldsetWiBorderRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderRight',
										'1' => 'startFormFieldsetWiBorderRight',
								],
								'startFormFieldsetWiBorderBottom' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderBottom',
										'1' => 'startFormFieldsetWiBorderBottom',
								],
								'startFormFieldsetWiBorderLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderLeft',
										'1' => 'startFormFieldsetWiBorderLeft',
								],
								'startFormFieldsetWiPaddingTop' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingTop',
										'1' => 'startFormFieldsetWiPaddingTop',
								],
								'startFormFieldsetWiPaddingRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingRight',
										'1' => 'startFormFieldsetWiPaddingRight',
								],
								'startFormFieldsetWiPaddingBottom' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingBottom',
										'1' => 'startFormFieldsetWiPaddingBottom',
								],
								'startFormFieldsetWiPaddingLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingLeft',
										'1' => 'startFormFieldsetWiPaddingLeft',
								],
								'startDivLayout' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startContainer' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startContainer',
										'1' => 'startContainer',
								],
								'startWidth0250' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0250',
										'1' => 'startWidth0250',
								],
								'startWidth0375' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0375',
										'1' => 'startWidth0375',
								],
								'startWidth0500' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0500',
										'1' => 'startWidth0500',
								],
								'startWidth0625' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0625',
										'1' => 'startWidth0625',
								],
								'startWidth0750' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0750',
										'1' => 'startWidth0750',
								],
								'startWidth0875' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0875',
										'1' => 'startWidth0875',
								],
								'startWidth1000' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth1000',
										'1' => 'startWidth1000',
								],
								'startWidth1125' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth1125',
										'1' => 'startWidth1125',
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
		, 'EXT:start/Resources/Public/Images/Icons/txStartMenues.svg'
];
ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, $item
				, 'menu_sitemap_pages'
				, 'after'
);

/* * ****************************************************************************
 * CType txStartSubNav
 * **************************************************************************** */

$item = [
		'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartSubNav'
		, 'txStartSubNav'
		, 'EXT:start/Resources/Public/Images/Icons/txStartSubNav.svg'
];
ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, $item
				, 'menu_sitemap_pages'
				, 'after'
);

/* * ****************************************************************************
 * CType txStartTopNav
 * **************************************************************************** */

$item = [
		'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartTopNav'
		, 'txStartTopNav'
		, 'EXT:start/Resources/Public/Images/Icons/txStartTopNav.svg'
];
ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, $item
				, 'menu_sitemap_pages'
				, 'after'
);

/* * ****************************************************************************
 * TCA types
 * **************************************************************************** */

ExtensionManagementUtility::addToAllTCAtypes(
				'tt_content'
				, '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
				, ''
				, 'after:linkToTop'
);

// 180701, dwildt, -: imageheight and imagewidth doesn't respect 'c' (crop)
//// Allow to setup imageheight with 'c' like 100c
//unset($GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'eval' ]);
//unset($GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'range' ]);
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'max' ] = '5';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'size' ] = '5';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'type' ] = 'input';
//
//  // Allow to setup imagewidth with 'c' like 100c
//unset($GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'eval' ]);
//unset($GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'range' ]);
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'max' ] = '5';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'size' ] = '5';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'type' ] = 'input';

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'menu' ] = 'app-start';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartSubNav' ] = 'app-startsubnav';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartTopNav' ] = 'app-starttopnav';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_pages' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartSubNav' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_subpages' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartTopNav' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_subpages' ];