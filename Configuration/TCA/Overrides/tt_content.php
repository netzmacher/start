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
						'startImgCircle' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startImgCircle',
								'1' => 'startImgCircle img',
						),
						'startWoMargin' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startWoMargin',
								'1' => 'startWoMargin',
						),
						'startWoMarginLeft' => array(
						    '0' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclassdefined.startWoMarginLeft',
								'1' => 'startWoMarginLeft',
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
        , 'tx_start_additionalclass,tx_start_additionalclassdefined'
        , ''
);

ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content'
        , '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
        , ''
        , 'after:header'
);