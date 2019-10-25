<?php

/* 
 * This is a workaround:
 * 
 * - code doesn't run, if it is part of extension EXT:t3foundation
 * - code is running, if it is part of EXT:start (see below)
 * 
 * Internal: #i0268
 */

$typeGridelements = $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'];

$mediaExtended = 'media,
		--div--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:div.t3foundation,
		--palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,';
$typeGridelements = str_replace('media,', $mediaExtended, $typeGridelements);

$GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = $typeGridelements;
