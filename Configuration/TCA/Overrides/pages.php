<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temporaryColumns = array(
		'tx_start_addressline' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_addressline',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_email' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_email',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '128',
						'eval' => 'trim',
				)
		),
		'tx_start_foundation_topbar_name' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_foundation_topbar_name',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '128',
						'eval' => 'trim',
				)
		),
		'tx_start_foundation_topbar_title' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_foundation_topbar_title',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '128',
						'eval' => 'trim',
				)
		),
);

ExtensionManagementUtility::addTCAcolumns(
				'pages'
				, $temporaryColumns
);

ExtensionManagementUtility::addFieldsToPalette(
				'pages'
				, 'tx_start_palettecontactdata'
				, 'tx_start_addressline,tx_start_email'
				, ''
);

ExtensionManagementUtility::addFieldsToPalette(
				'pages'
				, 'tx_start_palettefoundation'
				, 'tx_start_foundation_topbar_name,tx_start_foundation_topbar_title'
				, ''
);

ExtensionManagementUtility::addToAllTCAtypes(
				'pages'
				, ''
				. '--div--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_divstart,'
				. '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettecontactdata;tx_start_palettecontactdata,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettefoundation;tx_start_palettefoundation,'
				, ''
				, 'after:categories'
);
