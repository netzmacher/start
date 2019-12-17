mod.wizards.newContentElement.wizardItems.menu {
	elements {
		txStartTopNav {
			iconIdentifier = app-starttopnav
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartTopNav
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartTopNav.description
			tt_content_defValues {
				 CType = txStartTopNav
				 header = TopNav
				 header_layout = 100
			}
		}
		txStartSubNav {
			iconIdentifier = app-startsubnav
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartSubNav
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.txStartSubNav.description
			tt_content_defValues {
				 CType = txStartSubNav
				 header = SubNav
				 header_layout = 100
			}
		}
		txStartMenues {
			iconIdentifier = app-startmenues
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