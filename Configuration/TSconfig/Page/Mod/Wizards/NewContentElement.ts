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
				txStartHeadlineimage{
					iconIdentifier = ext-start-headlineimage
					title = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartHeadlineimage.title
					description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartHeadlineimage.description
					tt_content_defValues {
						CType = txStartHeadlineimage
					}
				}
				txStartJumpbox{
					iconIdentifier = ext-start-jumpbox
					title = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartJumpbox.title
					description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartJumpbox.description
					tt_content_defValues {
						CType = txStartJumpbox
					}
				}
				txStartTeasercard{
					iconIdentifier = ext-start-teasercard
					title = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartTeasercard.title
					description = LLL:EXT:start/Resources/Private/Language/mod/wizards.xlf:txStartTeasercard.description
					tt_content_defValues {
						CType = txStartTeasercard
					}
				}
			}
			show := addToList('txStartJumboteaser')
			show := addToList('txStartTeasercard')
		}
	}
}

