<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use Netzmacher\Start\Backend\Extensionmanager;

// Should correpond with Configuration/ExtTables/Default.php
$extIcons = [
    'ext-start'           => [
        'identifier' => 'ext-start'
        , 'key'        => 'start' // <- Key must be the part behind contain- of the identifier!
        , 'label'      => 'Start'
        , 'source'     => 'EXT:start/ext_icon.svg'
    ],
    'ext-start-pagemedia' => [
        'identifier' => 'ext-start-pagemedia'
        , 'key'        => 'txStartPagemedia' // <- Key must be the part behind contain- of the identifier!
        , 'label'      => 'Page Media'
        , 'source'     => 'EXT:start/ext_icon.svg'
        , 'source'     => 'EXT:start/Resources/Public/Images/Icons/txStartPagemedia.svg'
    ],
];

foreach ( $extIcons as $extIcon )
{
  $TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][]           = [
      $extIcon[ 'label' ]
      , $extIcon[ 'key' ]
      , $extIcon[ 'identifier' ]
  ];
  $TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];
}

// #i0180, 180622, dwildt, 3+
if ( Extensionmanager::getProperty( 'tcaPagesDisabled' ) )
{
  return;
}

$temporaryColumns = array(
    'tx_start_addressline'             => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_addressline',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_email'                   => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_email',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '128',
            'eval' => 'trim',
        )
    ),
    'tx_start_foundation_topbar_name'  => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_foundation_topbar_name',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '128',
            'eval' => 'trim',
        )
    ),
    'tx_start_foundation_topbar_title' => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_foundation_topbar_title',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '128',
            'eval' => 'trim',
        )
    ),
    'tx_start_megamenu'                => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_megamenu',
        'config'  => array(
            'type'          => 'group',
            'internal_type' => 'db',
            'allowed'       => 'pages',
            'maxitems'      => '1',
            'size'          => '1',
        )
    ),
    'tx_start_pages_calendar'          => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_calendar',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_pages_gdpr'              => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_gdpr',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_pages_news'              => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_news',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_pages_newsletter'        => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_newsletter',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_pages_root'              => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_root',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_pages_rss'               => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_pages_rss',
        'config'  => [
            'type'                => 'select',
            'renderType'          => 'selectTree',
            'foreign_table'       => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'items'               => [
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionInherit',
                    -1,
                ],
                [
                    'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:optionNoPage',
                    0,
                ],
            ],
            'maxitems'            => 1,
            'size'                => 20,
            'behaviour'           => [
                'allowLanguageSynchronization' => true,
            ],
            'treeConfig'          => [
                'parentField' => 'pid',
                'appearance'  => [
                    'expandAll'  => true,
                    'showHeader' => true,
                ],
            ],
        ],
    ],
    'tx_start_phone'                   => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_phone',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '128',
            'eval' => 'trim',
        )
    ),
    'tx_start_phonelabel'              => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_phonelabel',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '128',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_facebook'         => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_facebook',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_flickr'           => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_flickr',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_github'           => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_github',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_instagram'        => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_instagram',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_linkedin'         => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_linkedin',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_picasa'           => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_picasa',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_pinterest'        => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_pinterest',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_spotify'          => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_spotify',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_twitter'          => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_twitter',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_vimeo'            => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_vimeo',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
    'tx_start_social_youtube'          => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_youtube',
        'config'  => array(
            'type' => 'input',
            'size' => '30',
            'max'  => '192',
            'eval' => 'trim',
        )
    ),
);

ExtensionManagementUtility::addTCAcolumns(
        'pages'
        , $temporaryColumns
);

ExtensionManagementUtility::addFieldsToPalette(
        'pages'
        , 'tx_start_palettecontactdata'
        , 'tx_start_addressline,tx_start_email'
        . ',--linebreak--,'
        . ',tx_start_phone,tx_start_phonelabel'
        , ''
);

ExtensionManagementUtility::addFieldsToPalette(
        'pages'
        , 'tx_start_palettefoundation'
        , 'tx_start_foundation_topbar_name,tx_start_foundation_topbar_title'
        , ''
);

ExtensionManagementUtility::addFieldsToPalette(
        'pages'
        , 'tx_start_palettenavigation'
        , 'tx_start_megamenu'
        , ''
);

ExtensionManagementUtility::addFieldsToPalette(
        'pages'
        , 'tx_start_palettepages'
        , 'tx_start_pages_root,tx_start_pages_calendar,tx_start_pages_gdpr,'
        . '--linebreak--,'
        . 'tx_start_pages_news,tx_start_pages_newsletter,tx_start_pages_rss,'
        , ''
);

ExtensionManagementUtility::addFieldsToPalette(
        'pages'
        , 'tx_start_palettesocialmedia'
        , 'tx_start_social_facebook,tx_start_social_flickr,tx_start_social_github,'
        . '--linebreak--,'
        . 'tx_start_social_instagram,tx_start_social_linkedin,'
        . '--linebreak--,'
        . 'tx_start_social_picasa,tx_start_social_pinterest,tx_start_social_spotify,'
        . '--linebreak--,'
        . 'tx_start_social_twitter,tx_start_social_vimeo,tx_start_social_youtube'
        , ''
);

ExtensionManagementUtility::addToAllTCAtypes(
        'pages'
        , ''
        . '--div--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_divstart,'
        . '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettecontactdata;tx_start_palettecontactdata,'
        . '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettesocialmedia;tx_start_palettesocialmedia,'
        . '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettefoundation;tx_start_palettefoundation,'
        . '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettenavigation;tx_start_palettenavigation,'
// 211013, dwildt, 2-: Pages should managed by the module. Editing dirctly can cause unwanted effects.
//        . '--div--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_divpages,'
//        . '	 --palette--;LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_palettepages;tx_start_palettepages,'
        , ''
        , 'after:categories'
);

// #i0220, 190320, dwildt, 4+
ExtensionManagementUtility::registerPageTSConfigFile(
        'start'
        , 'Configuration/TSconfig/Page/RTE/Start.ts'
        , 'Start [1.0.0] RTE with search, spellchecking and youtube'
);

ExtensionManagementUtility::registerPageTSConfigFile(
        'start'
        , 'Configuration/TSconfig/Page/RTE/StartWiExternalPlugin.ts'
        , 'Start [1.0.0] RTE with additional plugins'
);

$item = [
    'LLL:EXT:start/Configuration/TCA/Overrides/Default/pages.xlf:layout.start.11'
    , '11'
    , ''
];

ExtensionManagementUtility::addTcaSelectItem(
        'pages'
        , 'layout'
        , $item
        , ''
        , ''
);

$item = [
    'LLL:EXT:start/Configuration/TCA/Overrides/Default/pages.xlf:layout.start.21'
    , '21'
    , ''
];

ExtensionManagementUtility::addTcaSelectItem(
        'pages'
        , 'layout'
        , $item
        , ''
        , ''
);
