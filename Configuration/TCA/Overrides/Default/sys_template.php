<?php

$tempPath = 'Configuration/TypoScript/';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Base/', 'Start [01.1.1]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Config/Language/De/', 'Start [01.2.1] +Language: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Foundation/', 'Start [02.1.1] Foundation' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'FoundationIcons/', 'Start [02.2.1] +Foundation Icons 3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Foundation6x/', 'Start [02.2.2] +Upgrade Foundation 6.4.3' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Piwik/', 'Start [07.1.1] Piwik' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'EMail/', 'Start [08.1.1] +e-mail' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Labeling/De/', 'Start [09.1.1] +Labeling: German' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Bootstrap/Base/', 'Start [10.1.1] Bootstrap' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Bootstrap/Fonts/', 'Start [10.1.2] Bootstrap Fonts' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Newsletter/', 'Start [20.2.1] Newsletter Popup' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/direct_mail/subscribe/', 'Start [20.3.1] Newsletter subscribe (direct_mail)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/direct_mail/unsubscribe/', 'Start [20.3.1] Newsletter unsubscribe (direct_mail)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/gridelements/bootstrap/', 'Start [20.4.1] Gridelements (Bootstrap)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/gridelements/foundation/', 'Start [20.4.1] Gridelements (Foundation)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/indexed_search/', 'Start [20.5.1] Indexed Search' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/tx_news/ImageFoundation/', 'Start [20.6.1] txnews images +lightbox (Foundation)' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Base/Demo/', 'Start [80.1.1] Demo' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Development/cssNotMinified/', 'Start [90.1.1] +CSS not minified' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Development/jsNotMinified/', 'Start [90.2.1] +JS not minified' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Workaround/', 'Start [92.1.1] +Workaround ChangeLog #i0215' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Test/', 'Start [99.1.1] Test' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Base/Start/Gridelements/', 'Start [DEPRECATED!] +Gridelements [USE 20.4.1!]' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/tt_address/subscribe/', 'Start [XX.X.X] [DEPRECATED!] Use [20.3.1] Subscribe (tt_address) ' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( 'start', $tempPath . 'Extensions/tt_address/unsubscribe/', 'Start [XX.X.X] [DEPRECATED!] Use [20.3.1] Unsubscribe (tt_address)' );
