
mod.wizards.newContentElement.wizardItems.common {
	//header = Rotate
	elements {
		txStartPagemedia {
			iconIdentifier = ext-start-pagemedia
			title = Page Media
			description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartPagemedia.description
			tt_content_defValues {
				CType = txStartPagemedia
				header = PageMedia
				header_layout = 100
			}
		}
	}
	show := addToList(*)
}