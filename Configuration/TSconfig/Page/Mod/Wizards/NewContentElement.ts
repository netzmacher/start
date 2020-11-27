mod.wizards {
	newContentElement.wizardItems {
		common {
			elements {
				txStartJumboteaser{
					iconIdentifier = ext-start-jumboteaser
					title = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartJumboteaser.title
					description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartJumboteaser.description
					tt_content_defValues {
						CType = txStartJumboteaser
					}
				}
				txStartTeaserCard{
					iconIdentifier = ext-start-teasercard
					title = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartTeaserCard.title
					description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartTeaserCard.description
					tt_content_defValues {
						CType = txStartTeaserCard
					}
				}
			}
			show := addToList('txStartJumboteaser')
			show := addToList('txStartTeaserCard')
		}
	}
}

