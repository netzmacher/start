<?php

// #i0065, 160510, dwildt,+

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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content'
        , $temporaryColumn
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content'
        , 'tx_start_css'
        , 'tx_start_additionalclass'
        , ''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content'
        , '--palette--;LLL:EXT:start/Configuration/TCA/Overrides/tt_content.xlf:tx_start_css;tx_start_css'
        , ''
        , 'after:header'
);