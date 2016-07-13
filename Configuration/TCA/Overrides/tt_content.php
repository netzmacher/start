<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temporaryColumn = array(
  'tx_start_additionalclass' => array(
    'exclude' => 0,
    'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_additionalclass',
    'config' => array(
      'type' => 'input',
      'size' => '30',
      'eval' => 'trim',
    )
  ),
);
ExtensionManagementUtility::addTCAcolumns(
        'tt_content'
        , $temporaryColumn
);
ExtensionManagementUtility::addFieldsToPalette(
        'tt_content'
        , 'tx_start_palettecss'
        , 'tx_start_additionalclass'
        , ''
);

ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content'
        , '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_palettecss;tx_start_palettecss'
        , ''
        , 'after:header'
);