<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;

switch( true )
{
	case($typo3Version < 7000000):
		$lllXml = 'LLL:EXT:cms/locallang_ttc.xml';
		break;
	default:
	case($typo3Version >= 7000000):
		$lllXml = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf';
		break;
}

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'cbfoundation_orbit' ][ 'showitem' ] = "--palette--;" . $lllXml . ":palette.general;general,
                                                                 --palette--;" . $lllXml . ":palette.header;header,
                                                                 --div--;" . $lllXml . ":tabs.images, image,
                                                                 --div--;" . $lllXml . ":tabs.appearance,
                                                                 --palette--;" . $lllXml . ":palette.frames;frames,
                                                                 --palette--;" . $lllXml . ":palette.image_settings;image_settings,
                                                                 --div--;" . $lllXml . ":tabs.access,
                                                                 --palette--;" . $lllXml . ":palette.visibility;visibility,
                                                                 --palette--;" . $lllXml . ":palette.access;access";
// #i0009, 170509, dwildt: +palette.imageblock
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'cbfoundation_clearing' ][ 'showitem' ] = "--palette--;" . $lllXml . ":palette.general;general,
                                                                    --palette--;" . $lllXml . ":palette.header;header,
                                                                    --div--;" . $lllXml . ":tabs.images, image,
                                                                    --div--;" . $lllXml . ":tabs.appearance,
                                                                    --palette--;" . $lllXml . ":palette.frames;frames,
                                                                    --palette--;" . $lllXml . ":palette.image_settings;image_settings,
                                                                    --palette--;" . $lllXml . ":palette.imageblock;imageblock,
                                                                    --div--;" . $lllXml . ":tabs.access,
                                                                    --palette--;" . $lllXml . ":palette.visibility;visibility,
                                                                    --palette--;" . $lllXml . ":palette.access;access";
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'cbfoundation_flexvid' ][ 'showitem' ] = "--palette--;" . $lllXml . ":palette.general;general,
                                                                    --palette--;" . $lllXml . ":palette.header;header,
                                                                    --palette--;Source, bodytext;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:palette.source,
                                                                    --div--;" . $lllXml . ":tabs.appearance,
                                                                    --palette--;" . $lllXml . ":palette.frames;frames,pi_flexform,
                                                                    --div--;" . $lllXml . ":tabs.access,
                                                                    --palette--;" . $lllXml . ":palette.visibility;visibility,
                                                                    --palette--;" . $lllXml . ":palette.access;access";
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ '*,cbfoundation_flexvid' ] = 'FILE:EXT:cb_foundation/Configuration/FlexForms/Flexvid.xml';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'cbfoundation_breadcrumbs' ][ 'showitem' ] = '--palette--;" . $lllXml . ":palette.general;general,header;" . $lllXml . ":header.ALT.div_formlabel,
                                                                       --div--;" . $lllXml . ":tabs.appearance,
                                                                       --palette--;" . $lllXml . ":palette.frames;frames,
                                                                       --div--;" . $lllXml . ":tabs.access,
                                                                       --palette--;" . $lllXml . ":palette.visibility;visibility,
                                                                       --palette--;" . $lllXml . ":palette.access;access,
                                                                       --div--;" . $lllXml . ":tabs.extended';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'cbfoundation_magellan' ][ 'showitem' ] = '--palette--;" . $lllXml . ":palette.general;general,header;" . $lllXml . ":header.ALT.div_formlabel,
                                                                       --div--;" . $lllXml . ":tabs.appearance,
                                                                       --palette--;" . $lllXml . ":palette.frames;frames,
                                                                       --div--;" . $lllXml . ":tabs.access,
                                                                       --palette--;" . $lllXml . ":palette.visibility;visibility,
                                                                       --palette--;" . $lllXml . ":palette.access;access,
                                                                       --div--;" . $lllXml . ":tabs.extended';

$temporaryColumns = array(
		'tx_cbfoundation_hide' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_hide',
				'config' => array(
						'type' => 'check',
						'default' => 0,
						'cols' => 9,
						'items' => array(
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_small', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_medium', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_large', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xlarge', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xxlarge', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_portrait', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_landscape', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_htouch', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_stouch', '' ),
						),
				)
		),
		'tx_cbfoundation_hidden' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_hidden',
				'config' => array(
						'type' => 'check',
						'default' => 0,
						'cols' => 5,
						'items' => array(
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_small', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_medium', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_large', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xlarge', '' ),
								array( 'LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_xxlarge', '' ),
						),
				)
		),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
				'tt_content', $temporaryColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
				'tt_content', 'tx_cbfoundation_visibility', 'tx_cbfoundation_hide, --linebreak--, tx_cbfoundation_hidden', ''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
				'tt_content', '--palette--;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_visibility;tx_cbfoundation_visibility', '', 'after:linkToTop'
);
