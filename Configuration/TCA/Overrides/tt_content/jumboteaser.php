<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:start/Configuration/TCA/Overrides/tt_content/jumboteaser.xlf:jumboteaser.title',
		'txStartJumboteaser',
		'ext-start-jumboteaser',
				], 'textmedia', 'after'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
				// 'list_type' does not apply here
				'*',
				// Flexform configuration schema file
				'FILE:EXT:start/Configuration/FlexForm/startJumboteaser.xml',
				// ctype
				'txStartJumboteaser'
);

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'palettes' ][ 'txStartJumboteaserGeneral' ] = [
		'showitem' => ''
		. 'CType, colPos,'
		,
		'canNotCollapse' => 1,
];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'palettes' ][ 'txStartJumboteaserHeader' ] = [
		'showitem' => ''
		. 'header, header_layout,'
		,
		'canNotCollapse' => 1,
];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'txStartJumboteaser' ] = [
		'showitem' => '
	--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
		--palette--;;txStartJumboteaserGeneral,
		--palette--;;txStartJumboteaserHeader,
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
