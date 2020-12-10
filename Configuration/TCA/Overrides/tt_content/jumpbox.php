<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:start/Configuration/TCA/Overrides/tt_content/jumpbox.xlf:jumpbox.title',
		'txStartJumpbox',
		'ext-start-jumpbox',
				], 'textmedia', 'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:start/Configuration/FlexForm/startJumpbox.xml',
				// ctype
				'txStartJumpbox'
);

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'palettes' ][ 'tx_start_jumpbox_header' ] = [
		'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
		'showitem' => '
header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel, --linebreak--,
header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel, --linebreak--,
subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel, --linebreak--,
header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
',
];

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartJumpbox' ] = [
		'showitem' => '
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
		--palette--;;general,
		--palette--;;headers,
		pi_flexform,
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
