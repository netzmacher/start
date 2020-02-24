tt_content.txStartBreadcrumbs = FLUIDTEMPLATE
tt_content.txStartBreadcrumbs {
		// if rootpage uid isn't current page uid
	templateName = Breadcrumbs
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
			if =
			if {
				value {
						// rootpage uid
					data = leveluid:{$start.navigation.entryLevel}
				}
				equals {
						// current page uid
					data = page:uid
				}
				negate = 1
			}
			entryLevel = {$start.navigation.entryLevel}
      special = rootline
      special {
        range = {$start.foundation.breadcrumbs.special.range}
				//range = 0|-1
      }
      includeNotInMenu = {$start.foundation.breadcrumbs.includeNotInMenu}
		}
	}
}