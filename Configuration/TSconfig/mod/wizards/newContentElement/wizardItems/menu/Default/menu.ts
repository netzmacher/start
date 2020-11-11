mod.wizards.newContentElement.wizardItems.menu {
	elements {
		txStartTopNav {
			iconIdentifier = ext-start-topnav
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartTopNav
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartTopNav.description
			tt_content_defValues {
				 CType = txStartTopNav
				 header = TopNav
				 header_layout = 100
			}
		}
		txStartBreadcrumbs {
			iconIdentifier = ext-start-breadcrumbs
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartBreadcrumbs
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartBreadcrumbs.description
			tt_content_defValues {
				 CType = txStartBreadcrumbs
				 header = Breadcrumbs
				 header_layout = 100
			}
		}
		txStartSubNav {
			iconIdentifier = ext-start-subnav
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartSubNav
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartSubNav.description
			tt_content_defValues {
				 CType = txStartSubNav
				 header = SubNav
				 header_layout = 100
			}
		}
		txStartMenues {
			iconIdentifier = ext-start-menues
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.menu
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.menu.description
			tt_content_defValues {
				 CType = menu
				 header = Mainnavigation
				 header_layout = 100
				 menu_type = startFoundationTopBar
			}
		}
	}
}
mod.wizards.newContentElement.wizardItems.menu.show := addToList(menu)