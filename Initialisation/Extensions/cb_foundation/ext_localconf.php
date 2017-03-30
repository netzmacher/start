<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// #i0006, 170227, dwildt, ~
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Cbrunet.' . $_EXTKEY, 'Orbit',	array('Orbit' => 'show'), array(),
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Cbrunet.' . $_EXTKEY, 'Clearing',	array('Clearing' => 'show'), array(),
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Cbrunet.' . $_EXTKEY, 'Flexvid',	array('Flexvid' => 'show'), array(),
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT);

//\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
//		'Cbrunet.' . $_EXTKEY, 'Orbit',	array('Orbit' => 'show'),	array('Orbit' => 'show'));
//\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
//		'Cbrunet.' . $_EXTKEY, 'Clearing',	array('Clearing' => 'show'),	array('Clearing' => 'show'));
//\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
//		'Cbrunet.' . $_EXTKEY, 'Flexvid',	array('Flexvid' => 'show'),	array('Flexvid' => 'show'));

if(TYPO3_MODE == 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['cbfoundation'] = 'EXT:cb_foundation/Classes/Hooks/CmsLayout.php:Cbrunet\CbFoundation\Hooks\CmsLayout';
}