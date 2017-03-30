<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temporaryColumns = array(
  'tx_start_additionalclass' => array(
    'exclude' => 0,
    'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclass',
    'config' => array(
      'type' => 'input',
      'size' => '30',
      'eval' => 'trim',
    )
  ),
  'tx_start_additionalclassdefined' => array(
    'exclude' => 0,
    'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined',
		'config' => array(
				'type' => 'select',
				'minitems' => 0,
				'maxitems' => 99,
				'items' => array(
						'' => array(
								'0' => '',
								'1' => '',
						),
						'startDivFonts' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
								'1' => '--div--',
						),
						'startFontLightOnDark' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startFontLightOnDark',
								'1' => 'startFontLightOnDark',
						),
						'startDivHyphens' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
								'1' => '--div--',
						),
						'startHyphensAuto' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startHyphensAuto',
								'1' => 'startHyphensAuto',
						),
						'startHyphensNone' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startHyphensNone',
								'1' => 'startHyphensNone',
						),
						'startDivImages' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
								'1' => '--div--',
						),
						'startImgCircle' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgCircle',
								'1' => 'startImgCircle',
						),
						'startImgCircleReset' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgCircleReset',
								'1' => 'startImgCircleReset',
						),
						'startImgWiShadow' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadow',
								'1' => 'startImgWiShadow',
						),
						'startImgWiShadowReset' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgWiShadowReset',
								'1' => 'startImgWiShadowReset',
						),
						'startFigCaptionHideForSmallOnly' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startFigCaptionHideForSmallOnly',
								'1' => 'startFigCaptionHideForSmallOnly',
						),
						'startDivMargin' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDiv',
								'1' => '--div--',
						),
						'startWoMarginLeft' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeft',
								'1' => 'startWoMarginLeft',
						),
						'startWoMargin' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeftRight',
								'1' => 'startWoMarginLeftRight',
						),
						'startWoMarginRight' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginRight',
								'1' => 'startWoMarginRight',
						),
						'startTopMinus1Em' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startTopMinus1Em',
								'1' => 'startTopMinus1Em',
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
        , '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
        , ''
        , 'after:header'
);