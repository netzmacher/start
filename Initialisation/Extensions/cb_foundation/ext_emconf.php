<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cb_foundation".
 *
 * Auto generated 03-10-2016 17:35
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Foundation framework (dev by dwildt)',
	'description' => 'Integration of Zurb Foundation CSS framework for TYPO3 websites.',
	'category' => 'templates',
	'author' => 'Charles Brunet',
	'author_email' => 'charles@cbrunet.net',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.5.8',
	'constraints' => 
	array (
		'depends' => 
		array (
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.0.0-7.99.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'clearcacheonload' => true,
);

