tt_content.txStartTopNav = FLUIDTEMPLATE
tt_content.txStartTopNav {
	templateName = Top
		// 10 = EXT:fluid_styled_content/Resources/Private/Templates/. 20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Navigation/. 30 = {$start.fluid.path.navigation.templates}
	templateRootPaths =
	templateRootPaths {
		10 = EXT:fluid_styled_content/Resources/Private/Templates/
		20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Navigation/
		30 = {$start.fluid.path.navigation.templates}
	}
		// 10 = EXT:fluid_styled_content/Resources/Private/Layouts/. 20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Navigation/. 30 = {$start.fluid.path.navigation.layouts}
	layoutRootPaths =
	layoutRootPaths {
		10 = EXT:fluid_styled_content/Resources/Private/Layouts/
		20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Navigation/
		30 = {$start.fluid.path.navigation.layouts}
	}
		// 10 = EXT:fluid_styled_content/Resources/Private/Partials/. 20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Navigation/. 30 = {$start.fluid.path.navigation.partials}
	partialRootPaths =
	partialRootPaths {
		10 = EXT:fluid_styled_content/Resources/Private/Partials/
		20 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Navigation/
		30 = {$start.fluid.path.navigation.partials}
	}
	dataProcessing {
		10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
		10 {
			special = directory
			special {
				value {
					field = pages
					ifEmpty {
						data = leveluid:{$start.navigation.entryLevel}
					}
				}
			}
			levels = 6
			expandAll = 1
			includeSpacer = 1
			dataProcessing {
				10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
				10 {
					 references.fieldName = media
				}
			}
		}
	}
	settings {
		topNavCrop									= {$start.foundation.topbar.crop}
		topNavIsHover								= {$start.foundation.topbar.is_hover}
		topNavHasSearchform					= {$start.foundation.topbar.searchform}
		topNavMobileShowParentLink	= {$start.foundation.topbar.mobile_show_parent_link}
		topNavPosition							= {$start.foundation.topbar.position}
      // #v1633, 211021, dwildt, +
//		topNavRootPid								= {$start.pages.root}
		topNavSearchformButton			= {$start.foundation.topbar.searchform.button}
		topNavStoplevel							= {$start.foundation.topbar.stoplevel}
	}
	variables {
      // #v1633, 211021, dwildt, +
//    topNavRootPid = CASE
//    topNavRootPid {
//      key {
//        data = levelfield:-1,tx_start_pages_root,slide
//      }
//        // inherit
//      default = TEXT
//      default {
//        data = levelfield:-1,tx_start_pages_root,slide
//          // Downwards compatibility
//        ifEmpty = {$start.pages.root}
//      }
//        // no page
//      -1 = TEXT
//      -1 {
//        value = 
//      }
//        // devider
//      - < .1
//    }
			// li.menu-icon
		topNavMenuIcon = TEXT
		topNavMenuIcon {
			value = {$start.foundation.topbar.icon.label.default}
			lang {
				de = {$start.foundation.topbar.icon.label.de}
				en = {$start.foundation.topbar.icon.label.default}
			}
			wrap = <a href="#"><span>|</span></a>
		}
			// <h1>|</h1> (topbar name) if is true $start.foundation.topbar.name (here: {$start.foundation.topbar.name})
		topNavLabel = TEXT
		topNavLabel {
				// if is true $start.foundation.topbar.name (here: {$start.foundation.topbar.name})
			if =
			if {
				isTrue = {$start.foundation.topbar.name}
			}
			data = levelfield:-1, tx_start_foundation_topbar_name, slide
			ifEmpty = {$start.foundation.topbar.name}
			typolink {
				parameter {
					cObject = COA
					cObject {
							// URL
              // #v1633, 211021, dwildt, +
            10 = CASE
            10 {
                // data = levelfield:-1,tx_start_pages_root,slide
              key = 
              key {
                data = levelfield:-1,tx_start_pages_root,slide
              }
                // inherit. data = levelfield:-1,tx_start_pages_root,slide
              default = TEXT
              default {
                data = levelfield:-1,tx_start_pages_root,slide
                  // Downwards compatibility
                ifEmpty = {$start.pages.root}
                ifEmpty {
                   ifEmpty = TEXT
                   ifEmpty {
                     data = leveluid:0
                  }
                }
                noTrimWrap = || |
              }
                // no page. value = 
              -1 = TEXT
              -1 {
                value = 
              }
                // devider
              - < .1
            }
							// target
						20 = TEXT
						20 {
							value = -
							noTrimWrap = || |
						}
							// class
						30 = TEXT
						30 {
							value = -
							noTrimWrap = |"|" |
						}
							// title
						40 = TEXT
						40 {
							// #i0094, 170315, dwildt, ~
							data = levelfield:-1, tx_start_foundation_topbar_title, slide
							ifEmpty = {$start.foundation.topbar.title}
							wrap = "|"
						}
					}
				}
			}
			wrap = <h1>|</h1>
		}
			// #i0323, 200423, dwildt, 1+
		topNavSectionPosition	= TEXT
		topNavSectionPosition {
			value = {$start.foundation.topbar.section.position}
		}
	}
}