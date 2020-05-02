<?php

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TSconfig/mod/wizards/newContentElement/wizardItems/common/txStartPagemedia.ts">' );
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'start' ) . 'Configuration/TSconfig/mod/wizards/newContentElement/wizardItems/menu/index.php' );