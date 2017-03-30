<?php
$extensionClassesPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('cb_foundation') . 'Classes/';

$default = array(
        'AbstractElementController' => $extensionClassesPath . 'Controller/AbstractElementController.php',
        'ClearingController' => $extensionClassesPath . 'Controller/ClearingController.php',
        'FlexvidController' => $extensionClassesPath . 'Controller/FlexvidController.php',
        'OrbitController' => $extensionClassesPath . 'Controller/OrbitController.php',
);
return $default;