
mod.wizards.newContentElement.wizardItems.common {
	//header = Rotate
	elements {
		txStartPagemedia {
			iconIdentifier = app-txStartPagemedia
			title = Page Media
			description = Include items of the page media field
			tt_content_defValues {
				CType = txStartPagemedia
				header = PageMedia
				header_layout = 100
			}
		}
	}
	show := addToList(*)
}