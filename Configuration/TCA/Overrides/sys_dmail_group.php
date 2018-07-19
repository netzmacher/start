<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// #i0185, 180719, dwildt

/* * ****************************************************************************
 * TCA column sys_dmail_category
 * **************************************************************************** */

$temporaryColumns = array(
		'sys_dmail_category' => array(
				'label' => 'LLL:EXT:start/Configuration/TCA/Overrides/sys_dmail_group.xlf:sys_dmail_category',
				'config' => array(
						'type' => 'group',
						'internal_type' => 'db',
						'allowed' => 'sys_dmail_category',
						'size' => '3',
						'maxitems' => '22',
						'minitems' => '0',
						'show_thumbs' => '1',
						'wizards' => array(
								'suggest' => array(
										'type' => 'suggest',
								),
						),
				)
		),
);

ExtensionManagementUtility::addTCAcolumns(
				'sys_dmail_group'
				, $temporaryColumns
);

/* * ****************************************************************************
 * TCA type 5
 * **************************************************************************** */

$GLOBALS[ 'TCA' ][ 'sys_dmail_group' ][ 'types' ][ '5' ] = array(
		'showitem' => ''
		. 'type;;;;1-1-1, sys_language_uid, title;;;;3-3-3, description,'
		. '--div--;LLL:EXT:direct_mail/Resources/Private/Language/locallang_tca.xlf:sys_dmail_group.advanced,pages;;;;5-5-5,sys_dmail_category,'
		. 'whichtables'
);


/* * ****************************************************************************
 * Item for the type menu
 * **************************************************************************** */

$item = [
		'LLL:EXT:start/Configuration/TCA/Overrides/sys_dmail_group.xlf:sys_dmail_group.type.I.5'
		, '5'
];
ExtensionManagementUtility::addTcaSelectItem(
				'sys_dmail_group'
				, 'type'
				, $item
);

