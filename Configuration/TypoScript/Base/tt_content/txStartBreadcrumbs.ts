tt_content.txStartBreadcrumbs = FLUIDTEMPLATE
tt_content.txStartBreadcrumbs {
		// if rootpage uid isn't current page uid
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
	templateName = Breadcrumbs
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
      special = rootline
      special {
        range = {$start.foundation.breadcrumbs.special.range}
      }
      includeNotInMenu = {$start.foundation.breadcrumbs.includeNotInMenu}
		}
	}
}