<?php

$_path = 'Configuration/TypoScript/';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Base/', 'Start [0.1.0]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Config/Language/De/', 'Start [0.2.0] +Language: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Base/Start/Gridelements/', 'Start [0.3.0] +Gridelements' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Foundation/', 'Start [1.0.0] Foundation' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'FoundationIcons/', 'Start [1.1.0] +Foundation Icons 3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Piwik/', 'Start [7.0.0] Piwik' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'EMail/', 'Start [8.0.0] +e-mail' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Labeling/De/', 'Start [9.0.0] +Labeling: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $_path . 'Extensions/tx_news/Imagefoundation/', 'Start [20.7.1] txnews images +lightbox (foundation)' );
