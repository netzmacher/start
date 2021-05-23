tt_content.txStartSubNav = FLUIDTEMPLATE
tt_content.txStartSubNav {
	templateName = Sub
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