<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:start/Configuration/TCA/Overrides/tt_content/headlineimage.xlf:headlineimage.title',
		'txStartHeadlineimage',
		'ext-start-headlineimage',
				], 'textmedia', 'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:start/Configuration/FlexForm/startHeadlineimage.xml',
				// ctype
				'txStartHeadlineimage'
);

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'palettes' ][ 'tx_start_headlineimage_general' ] = [
		'showitem' => ''
		. 'CType, colPos,'
		,
		'canNotCollapse' => 1,
];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'palettes' ][ 'tx_start_headlineimage_header' ] = [
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
		'showitem' => '
				header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
				header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel, --linebreak--,
				header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
',
];

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartHeadlineimage' ] = [
		'showitem' => '
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
		--palette--;;tx_start_headlineimage_general,
		--palette--;;tx_start_headlineimage_header,
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
