<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensions\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaPagesDisabled' )){
	return;
}

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
		'tx_start_social_facebook' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_facebook',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_flickr' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_flickr',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_github' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_github',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_googleplus' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_googleplus',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_instagram' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_instagram',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_linkedin' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_linkedin',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_picasa' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_picasa',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_pinterest' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_pinterest',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_spotify' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_spotify',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_twitter' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_twitter',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_vimeo' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_vimeo',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
						'eval' => 'trim',
				)
		),
		'tx_start_social_youtube' => array(
				'exclude' => 0,
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_youtube',
				'config' => array(
						'type' => 'input',
						'size' => '30',
						'max' => '192',
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

ExtensionManagementUtility::addFieldsToPalette(
				'pages'
				, 'tx_start_palettesocialmedia'
				, 'tx_start_social_facebook,tx_start_social_flickr,tx_start_social_github,'
				. '--linebreak--,'
				. 'tx_start_social_googleplus,tx_start_social_instagram,tx_start_social_linkedin,'
				. '--linebreak--,'
				. 'tx_start_social_picasa,tx_start_social_pinterest,tx_start_social_spotify,'
				. '--linebreak--,'
				. 'tx_start_social_twitter,tx_start_social_vimeo,tx_start_social_youtube'
				, ''
);

ExtensionManagementUtility::addToAllTCAtypes(
				'pages'
				, ''
				. '--div--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_divstart,'
				. '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettecontactdata;tx_start_palettecontactdata,'
				. '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettesocialmedia;tx_start_palettesocialmedia,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettefoundation;tx_start_palettefoundation,'
				, ''
				, 'after:categories'
);

	// #i0220, 190320, dwildt, 4+
ExtensionManagementUtility::registerPageTSConfigFile(
    'start',
    'Configuration/TSconfig/Page/RTE/Start.ts',
    'Start [1.0.0] RTE with search, spellchecking and youtube');

ExtensionManagementUtility::registerPageTSConfigFile(
    'start',
    'Configuration/TSconfig/Page/RTE/StartWiExternalPlugin.ts',
    'Start [1.0.0] RTE with additional plugins');