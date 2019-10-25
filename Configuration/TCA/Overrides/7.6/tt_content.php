<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temporaryColumns = array(
		'tx_start_additionalclass' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclass',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'eval' => 'trim',
				)
		),
		'tx_start_additionalclassdefined' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined',
				'config' => array(
						'type' => 'select',
						// #t1668, 171206, dwildt, 1+
						'renderType' => 'selectMultipleSideBySide',
						'minitems' => 0,
						'maxitems' => 99,
						'items' => array(
								'' => array(
										'0' => '',
										'1' => '',
								),
								'startDivBackground' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startBackgroundWhite' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startBackgroundWhite',
										'1' => 'startBackgroundWhite',
								),
								'startDivFonts' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startFontLightOnDark' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startFontLightOnDark',
										'1' => 'startFontLightOnDark',
								),
								'startDivPanels' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startPanel' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanel',
										'1' => 'panel',
								),
								'startPanelRadius' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelRadius',
										'1' => 'panel radius',
								),
								'startPanelCallout' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelCallout',
										'1' => 'panel callout',
								),
								'startPanelCalloutRadius' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startPanelCalloutRadius',
										'1' => 'panel callout radius',
								),
								'startDivShadow' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startShadow' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startShadow',
										'1' => 'startShadow',
								),
								'startDivTextAlign' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startTextAlignCenter' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignCenter',
										'1' => 'startTextAlignCenter',
								),
								'startTextAlignJustify' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignJustify',
										'1' => 'startTextAlignJustify',
								),
								'startTextAlignLeft' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignLeft',
										'1' => 'startTextAlignLeft',
								),
								'startTextAlignRight' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startTextAlignRight',
										'1' => 'startTextAlignRight',
								),
								'startDivHyphens' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startHyphensAuto' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startHyphensAuto',
										'1' => 'startHyphensAuto',
								),
								'startHyphensNone' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startHyphensNone',
										'1' => 'startHyphensNone',
								),
								'startDivImages' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startImgCircle' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startImgCircle',
										'1' => 'startImgCircle',
								),
								'startImgCircleReset' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startImgCircleReset',
										'1' => 'startImgCircleReset',
								),
								'startImgWiShadow' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadow',
										'1' => 'startImgWiShadow',
								),
								'startImgWiShadowReset' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadowReset',
										'1' => 'startImgWiShadowReset',
								),
								'startFigCaptionHideForSmallOnly' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startFigCaptionHideForSmallOnly',
										'1' => 'startFigCaptionHideForSmallOnly',
								),
								'startDivMargin' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
//						'startWoMarginBottom' => array(
//						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginBottom',
//								'1' => 'startWoMarginBottom',
//						),
								'startWiMarginDefault' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWiMarginDefault',
										'1' => 'startWiMarginDefault',
								),
								'startWoMarginLeft' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeft',
										'1' => 'startWoMarginLeft',
								),
								'startWoMargin' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeftRight',
										'1' => 'startWoMarginLeftRight',
								),
								'startWoMarginRight' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginRight',
										'1' => 'startWoMarginRight',
								),
								'startTopMinus1Em' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startTopMinus1Em',
										'1' => 'startTopMinus1Em',
								),
								'startDivForm' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startDivForm',
										'1' => '--div--',
								),
								'startFormLegendWo' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormLegendWo',
										'1' => 'startFormLegendWo',
								),
								'startFormFieldsetWoAll' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWoAll',
										'1' => 'startFormFieldsetWoAll',
								),
								'startFormFieldsetWiBorderTop' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderTop',
										'1' => 'startFormFieldsetWiBorderTop',
								),
								'startFormFieldsetWiBorderRight' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderRight',
										'1' => 'startFormFieldsetWiBorderRight',
								),
								'startFormFieldsetWiBorderBottom' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderBottom',
										'1' => 'startFormFieldsetWiBorderBottom',
								),
								'startFormFieldsetWiBorderLeft' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiBorderLeft',
										'1' => 'startFormFieldsetWiBorderLeft',
								),
								'startFormFieldsetWiPaddingTop' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingTop',
										'1' => 'startFormFieldsetWiPaddingTop',
								),
								'startFormFieldsetWiPaddingRight' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingRight',
										'1' => 'startFormFieldsetWiPaddingRight',
								),
								'startFormFieldsetWiPaddingBottom' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingBottom',
										'1' => 'startFormFieldsetWiPaddingBottom',
								),
								'startFormFieldsetWiPaddingLeft' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_additionalclassdefined.startFormFieldsetWiPaddingLeft',
										'1' => 'startFormFieldsetWiPaddingLeft',
								),
								'startDivLayout' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
										'1' => '--div--',
								),
								'startContainer' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startContainer',
										'1' => 'startContainer',
								),
								'startWidth0250' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0250',
										'1' => 'startWidth0250',
								),
								'startWidth0375' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0375',
										'1' => 'startWidth0375',
								),
								'startWidth0500' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0500',
										'1' => 'startWidth0500',
								),
								'startWidth0625' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0625',
										'1' => 'startWidth0625',
								),
								'startWidth0750' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0750',
										'1' => 'startWidth0750',
								),
								'startWidth0875' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth0875',
										'1' => 'startWidth0875',
								),
								'startWidth1000' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth1000',
										'1' => 'startWidth1000',
								),
								'startWidth1125' => array(
										'0' => 'LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_additionalclassdefined.startWidth1125',
										'1' => 'startWidth1125',
								),
						),
				),
		),
);

ExtensionManagementUtility::addTCAcolumns(
				'tt_content'
				, $temporaryColumns
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

ExtensionManagementUtility::addToAllTCAtypes(
				'tt_content'
				, '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
				, ''
				// #i0161, 180524, dwildt, 1-/+
				//, 'after:appearanceLinks'
				, 'after:linkToTop'
);
