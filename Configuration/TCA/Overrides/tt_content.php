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
						'startDivHyphens' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDivHyphens',
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
						'startDivMargin' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDivMargin',
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
						'startDivMisc' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startDivMisc',
								'1' => '--div--',
						),
						'startImgCircle' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgCircle',
								'1' => 'startImgCircle img',
						),
				),
				'renderType' => 'selectSingleBox',
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
        , 'tx_start_additionalclass,tx_start_additionalclassdefined'
        , ''
);

ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content'
        , '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
        , ''
        , 'after:header'
);