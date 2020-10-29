<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
	[
		'LLL:EXT:start/Resources/Private/Language/ContentElements/JumboTeaser/locallang_db.xml:jumbo.title',
		'start_jumboteaser',
		'ext-start-jumboteaser',
	],
	'textmedia',
	'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // 'list_type' does not apply here
    '*',
    // Flexform configuration schema file
    'FILE:EXT:start/Configuration/FlexForm/startJumbo.xml',
    // ctype
    'start_jumboteaser'
);

$GLOBALS['TCA']['tt_content']['types']['start_jumboteaser'] = [
	'showitem' => '
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
	--palette--;;general,
	--palette--;;headers,
	pi_flexform,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
	image,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
	--palette--;;frames,
	--palette--;;appearanceLinks,
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
	--palette--;;language,
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
	--palette--;;hidden,
	--palette--;;access,
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
	categories,
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
	rowDescription,
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
	',
];
