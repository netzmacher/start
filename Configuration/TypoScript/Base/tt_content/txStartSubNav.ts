tt_content.txStartSubNav = FLUIDTEMPLATE
tt_content.txStartSubNav {
	templateName = Sub
	templateRootPaths {
		10 = EXT:fluid_styled_content/Resources/Private/Templates/
		20 = {$start.fluid.path.navigation.templates}
		//10 = EXT:fluid_styled_content/Resources/Private/Layouts/
	}
	layoutRootPaths {
		10 = EXT:fluid_styled_content/Resources/Private/Layouts/
		20 = {$start.fluid.path.navigation.layouts}
	}
	partialRootPaths {
		0 = EXT:fluid_styled_content/Resources/Private/Partials/
		10 = {$start.fluid.path.navigation.partials}
	}
	dataProcessing {
		10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
		10 {
			special = directory
			special.value.field = pages
			dataProcessing {
				10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
				10 {
					 references.fieldName = media
				}
			}
			includeSpacer = 0
		}
	}
}