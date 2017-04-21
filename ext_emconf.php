<?php

$EM_CONF[$_EXTKEY] = array(
  'title' => 'Start TYPO3 Responsive!',
  'description' => 'Start TYPO3 Responsive! (start) extends TYPO3 with the responsive framework Foundation (Zurb), a dozen responsive Backend Layouts and some responsive Grid Elements. It enables editors, to create responsive nested layouts within a few minutes. It extends some backend forms for controlling the display of content elements depending on devices like smartphones, tablets and desktops. It extends TYPO3 content elements and menus with some helpful responsive Foundation features. A template for a responsive newsletter is included. Manual: http://start-typo3-responsive.de/typo3conf/ext/start/doc/manual.pdf. ',
  'category' => 'be',
  'author' => 'Dirk Wildt (Die Netzmacher)',
  'author_email' => 'http://wildt.at.die-netzmacher.de',
  'state' => 'beta',
  'internal' => '',
  'uploadfolder' => '0',
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '2.5.10',
  'constraints' => array(
    'depends' => array(
      'cb_foundation' => '1.5.7',
      'typo3' => '6.2.0-7.6.99',
    ),
    'conflicts' => array(
      'templavoila' => '',
    ),
    'suggests' => array(
      'startcustomer' => '',
    ),
  ),
);