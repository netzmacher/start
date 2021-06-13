<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaTtcontentDisabled' ) )
{
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
		'tx_start_csscolor' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_csscolor',
				'description' => 'renderType=colorpicker',
				'config' => [
						'type' => 'input',
						'renderType' => 'colorpicker',
						'size' => 10,
				],
		],
		'tx_start_csscolorbe' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_csscolorbe',
				'description' => 'renderType=colorpicker',
				'config' => [
						'type' => 'input',
						'renderType' => 'colorpicker',
						'size' => 10,
				],
		],
		'tx_start_csscolorhref' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_csscolorhref',
				'description' => 'renderType=colorpicker',
				'config' => [
						'type' => 'input',
						'renderType' => 'colorpicker',
						'size' => 10,
				],
		],
		'tx_start_csscolorhrefhover' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_csscolorhrefhover',
				'description' => 'renderType=colorpicker',
				'config' => [
						'type' => 'input',
						'renderType' => 'colorpicker',
						'size' => 10,
				],
		],
		'tx_start_additionalclass' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclass',
				'config' => [
						'type' => 'input',
						'size' => '30',
						'eval' => 'trim',
				]
		],
		'tx_start_additionalclassdefined' => [
				'exclude' => 1,
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
						'size' => '5',
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
								'startBackgroundFixed' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startBackgroundFixed',
										'1' => 'startBackgroundFixed',
								),
								'startBackgroundScroll' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startBackgroundScroll',
										'1' => 'startBackgroundScroll',
								),
								'startDivEffect' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startEffectShake01' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startEffectShake01',
										'1' => 'startEffectShake01',
								),
								'startEffectZoom01' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startEffectZoom01',
										'1' => 'startEffectZoom01',
								),
								'startDivFonts' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startFontLightOnDark' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFontLightOnDark',
										'1' => 'startFontLightOnDark',
								],
								'startDivPanels' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startPanel' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startPanel',
										'1' => 'panel',
								],
								'startPanelRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startPanelRadius',
										'1' => 'panel radius',
								],
								'startPanelCallout' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startPanelCallout',
										'1' => 'panel callout',
								],
								'startPanelCalloutRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startPanelCalloutRadius',
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
								'startWiMarginAuto' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginAuto',
										'1' => 'startWiMarginAuto',
								),
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
								'startDivMarginGrid' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startWiMarginLeftRight8percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeftRight08percent',
										'1' => 'startWiMarginLeftRight08percent',
								),
								'startWiMarginLeft17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeft17percent',
										'1' => 'startWiMarginLeft17percent',
								),
								'startWiMarginLeftRight17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeftRight17percent',
										'1' => 'startWiMarginLeftRight17percent',
								),
								'startWiMarginLeftRight25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeftRight25percent',
										'1' => 'startWiMarginLeftRight25percent',
								),
								'startWiMarginLeft25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeft25percent',
										'1' => 'startWiMarginLeft25percent',
								),
								'startWiMarginLeftRight33percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginLeftRight33percent',
										'1' => 'startWiMarginLeftRight33percent',
								),
								'startWiMarginRight25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginRight25percent',
										'1' => 'startWiMarginRight25percent',
								),
								'startWiMarginRight17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginRight17percent',
										'1' => 'startWiMarginRight17percent',
								),
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
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								],
								'startContainer' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startContainer',
										'1' => 'startContainer',
								],
								'startWidth0125' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0125',
										'1' => 'startWidth0125',
								],
								'startWidth0250' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0250',
										'1' => 'startWidth0250',
								],
								'startWidth0375' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0375',
										'1' => 'startWidth0375',
								],
								'startWidth0500' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0500',
										'1' => 'startWidth0500',
								],
								'startWidth0625' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0625',
										'1' => 'startWidth0625',
								],
								'startWidth0750' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0750',
										'1' => 'startWidth0750',
								],
								'startWidth0875' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth0875',
										'1' => 'startWidth0875',
								],
								'startWidth1000' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth1000',
										'1' => 'startWidth1000',
								],
								'startWidth1125' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startWidth1125',
										'1' => 'startWidth1125',
								],
						],
				],
		],
		'tx_start_classbackground' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classbackground',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startBackgroundFixed' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classbackground.startBackgroundFixed',
										'1' => 'startBackgroundFixed',
								),
								'startBackgroundScroll' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classbackground.startBackgroundScroll',
										'1' => 'startBackgroundScroll',
								),
						],
				],
		],
		'tx_start_classcontainer' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'size' => '10',
						'items' => [
								'startContainer' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startContainer',
										'1' => 'startContainer',
								],
								'startWidth0125' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0125',
										'1' => 'startWidth0125',
								],
								'startWidth0250' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0250',
										'1' => 'startWidth0250',
								],
								'startWidth0375' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0375',
										'1' => 'startWidth0375',
								],
								'startWidth0500' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0500',
										'1' => 'startWidth0500',
								],
								'startWidth0625' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0625',
										'1' => 'startWidth0625',
								],
								'startWidth0750' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0750',
										'1' => 'startWidth0750',
								],
								'startWidth0875' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth0875',
										'1' => 'startWidth0875',
								],
								'startWidth1000' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth1000',
										'1' => 'startWidth1000',
								],
								'startWidth1125' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classcontainer.startWidth1125',
										'1' => 'startWidth1125',
								],
						],
				],
		],
		'tx_start_classeffect' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classeffect',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startEffectShake01' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classeffect.startEffectShake01',
										'1' => 'startEffectShake01',
								),
								'startEffectZoom01' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classeffect.startEffectZoom01',
										'1' => 'startEffectZoom01',
								),
						],
				],
		],
		'tx_start_classform' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'size' => 10,
						'items' => [
								'startFormLegendWo' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormLegendWo',
										'1' => 'startFormLegendWo',
								],
								'startFormFieldsetWoAll' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWoAll',
										'1' => 'startFormFieldsetWoAll',
								],
								'startFormFieldsetWiBorderTop' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiBorderTop',
										'1' => 'startFormFieldsetWiBorderTop',
								],
								'startFormFieldsetWiBorderRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiBorderRight',
										'1' => 'startFormFieldsetWiBorderRight',
								],
								'startFormFieldsetWiBorderBottom' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiBorderBottom',
										'1' => 'startFormFieldsetWiBorderBottom',
								],
								'startFormFieldsetWiBorderLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiBorderLeft',
										'1' => 'startFormFieldsetWiBorderLeft',
								],
								'startFormFieldsetWiPaddingTop' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiPaddingTop',
										'1' => 'startFormFieldsetWiPaddingTop',
								],
								'startFormFieldsetWiPaddingRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiPaddingRight',
										'1' => 'startFormFieldsetWiPaddingRight',
								],
								'startFormFieldsetWiPaddingBottom' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiPaddingBottom',
										'1' => 'startFormFieldsetWiPaddingBottom',
								],
								'startFormFieldsetWiPaddingLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classform.startFormFieldsetWiPaddingLeft',
										'1' => 'startFormFieldsetWiPaddingLeft',
								],
						],
				],
		],
		'tx_start_classimage' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startFigCaptionHideForSmallOnly' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage.startFigCaptionHideForSmallOnly',
										'1' => 'startFigCaptionHideForSmallOnly',
								],
								'startImgCircle' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage.startImgCircle',
										'1' => 'startImgCircle',
								],
								'startImgCircleReset' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage.startImgCircleReset',
										'1' => 'startImgCircleReset',
								],
								'startImgWiShadow' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage.startImgWiShadow',
										'1' => 'startImgWiShadow',
								],
								'startImgWiShadowReset' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classimage.startImgWiShadowReset',
										'1' => 'startImgWiShadowReset',
								],
						],
				],
		],
		
		
		'tx_start_classmargin' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startWiMarginAuto' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startWiMarginAuto',
										'1' => 'startWiMarginAuto',
								),
								'startWiMarginDefault' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startWiMarginDefault',
										'1' => 'startWiMarginDefault',
								],
								'startWoMarginLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startWoMarginLeft',
										'1' => 'startWoMarginLeft',
								],
								'startWoMargin' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startWoMarginLeftRight',
										'1' => 'startWoMarginLeftRight',
								],
								'startWoMarginRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startWoMarginRight',
										'1' => 'startWoMarginRight',
								],
								'startTopMinus1Em' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargin.startTopMinus1Em',
										'1' => 'startTopMinus1Em',
								],
						],
				],
		],

		
		'tx_start_classmargingrid' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'size' => 8,
						'items' => [
								'startWiMarginLeftRight8percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeftRight08percent',
										'1' => 'startWiMarginLeftRight08percent',
								),
								'startWiMarginLeft17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeft17percent',
										'1' => 'startWiMarginLeft17percent',
								),
								'startWiMarginLeftRight17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeftRight17percent',
										'1' => 'startWiMarginLeftRight17percent',
								),
								'startWiMarginLeftRight25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeftRight25percent',
										'1' => 'startWiMarginLeftRight25percent',
								),
								'startWiMarginLeft25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeft25percent',
										'1' => 'startWiMarginLeft25percent',
								),
								'startWiMarginLeftRight33percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginLeftRight33percent',
										'1' => 'startWiMarginLeftRight33percent',
								),
								'startWiMarginRight25percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginRight25percent',
										'1' => 'startWiMarginRight25percent',
								),
								'startWiMarginRight17percent' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classmargingrid.startWiMarginRight17percent',
										'1' => 'startWiMarginRight17percent',
								),
						],
				],
		],

		
		'tx_start_classpanel' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classpanel',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startPanel' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classpanel.startPanel',
										'1' => 'panel',
								],
								'startPanelRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classpanel.startPanelRadius',
										'1' => 'panel radius',
								],
								'startPanelCallout' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classpanel.startPanelCallout',
										'1' => 'panel callout',
								],
								'startPanelCalloutRadius' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classpanel.startPanelCalloutRadius',
										'1' => 'panel callout radius',
								],
						],
				],
		],
		'tx_start_classshadow' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classshadow',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startShadow' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classshadow.startShadow',
										'1' => 'startShadow',
								],
						],
				],
		],
		'tx_start_classtext' => [
				'exclude' => 1,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext',
				'config' => [
						'type' => 'select',
						'renderType' => 'selectSingleBox',
						'items' => [
								'startTextAlignCenter' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startTextAlignCenter',
										'1' => 'startTextAlignCenter',
								],
								'startTextAlignJustify' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startTextAlignJustify',
										'1' => 'startTextAlignJustify',
								],
								'startTextAlignLeft' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startTextAlignLeft',
										'1' => 'startTextAlignLeft',
								],
								'startTextAlignRight' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startTextAlignRight',
										'1' => 'startTextAlignRight',
								],
								'startHyphensAuto' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startHyphensAuto',
										'1' => 'startHyphensAuto',
								],
								'startHyphensNone' => [
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_classtext.startHyphensNone',
										'1' => 'startHyphensNone',
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
				, 'tx_start_palettecolor'
				, 'tx_start_csscolorbe,tx_start_csscolor,tx_start_csscolorhref,tx_start_csscolorhrefhover,'
				, ''
);

ExtensionManagementUtility::addFieldsToPalette(
				'tt_content'
				, 'tx_start_palettedeprecated'
				, ''
				. 'tx_start_additionalclassdefined,'
				, ''
);


ExtensionManagementUtility::addFieldsToPalette(
				'tt_content'
				, 'tx_start_paletteintegrator'
				, 'tx_start_additionalclass,'
				, ''
);

ExtensionManagementUtility::addFieldsToPalette(
				'tt_content'
				, 'tx_start_paletteproperties'
				, ''
				. 'tx_start_classbackground,'
				. 'tx_start_classcontainer,'
				. 'tx_start_classeffect,'
				. 'tx_start_classform,'
				. '--linebreak--,'
				. 'tx_start_classimage,'
				. 'tx_start_classmargin,'
				. 'tx_start_classmargingrid,'
				. 'tx_start_classpanel,'
				. '--linebreak--,'
				. 'tx_start_classshadow,'
				. 'tx_start_classtext,'
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
 * CType txStartBreadcrumbs
 * **************************************************************************** */

$item = [
		'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartBreadcrumbs'
		, 'txStartBreadcrumbs'
		, 'EXT:start/Resources/Public/Images/Icons/txStartBreadcrumbs.svg'
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
				, '--div--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:div.style,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:palette.deprecated;tx_start_palettedeprecated,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:palette.color;tx_start_palettecolor,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:palette.properties;tx_start_paletteproperties,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:palette.integrator;tx_start_paletteintegrator,'
				, ''
				, 'after:linkToTop'
);

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'menu' ] = 'ext-start';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartBreadcrumbs' ] = 'ext-start-breadcrumbs';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartSubNav' ] = 'ext-start-subnav';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'txStartTopNav' ] = 'ext-start-topnav';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_pages' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartBreadcrumbs' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_subpages' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartSubNav' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_subpages' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartTopNav' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'menu_subpages' ];
