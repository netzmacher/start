<?php

$EM_CONF[ $_EXTKEY ] = array(
		'title' => 'Start TYPO3 Responsive!',
		'description' => 'Start extends TYPO3 with the responsive framework Foundation (Zurb), a dozen responsive Backend Layouts and some responsive Gridelements. It enables editors, to create responsive nested layouts within a few minutes. It extends some backend forms for controlling the display of content elements depending on devices like smartphones, tablets and desktops. It extends TYPO3 content elements and menus with some helpful responsive Foundation features. A template for a responsive newsletter is included.',
		'category' => 'templates',
		'author' => 'Dirk Wildt (Die Netzmacher)',
		'author_email' => 'http://wildt.at.die-netzmacher.de',
		'state' => 'stable',
		'internal' => '',
		'uploadfolder' => '0',
		'createDirs' => '',
		'clearCacheOnLoad' => 1,
		'version' => '4.5.4',
		'constraints' => array(
				'depends' => array(
						'refresh' => '',
						'typo3' => '6.2.0-9.9.99',
				),
				'conflicts' => array(
						'templavoila' => '',
				),
				'suggests' => array(
						'gridelements' => '1.0',
						'startcustomer' => '2.9.0',
						't3foundation' => '1.6.0',
				),
		),
);
