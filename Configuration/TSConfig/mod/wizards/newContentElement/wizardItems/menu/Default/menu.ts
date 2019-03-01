mod.wizards.newContentElement.wizardItems.menu {
	elements {
		menu {
			iconIdentifier = app-start
			title = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.menu
			description = LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:CType.menu.desription
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