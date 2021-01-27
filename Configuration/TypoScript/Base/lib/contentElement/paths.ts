	// empty statement for proper comment only
lib {
}
  // start: contentElement
lib =
lib {
		// empty statement for proper comment only
	contentElement {
	}
		// start: templateRootPaths, partialRootPaths, layoutRootPaths
	contentElement = FLUIDTEMPLATE
	contentElement {
			// empty statement for proper comment only
		templateRootPaths {
		}
			// start: 177 (clearingthumbs), 207 (Jumboteaser), 227 (Teasercard), 237 (Headlineimage), 247 (Jumpbox)
		templateRootPaths =
		templateRootPaths {
				// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs}): EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Templates/
			177 = 
			177 {
					// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
				cObject = TEXT
				cObject {
						// isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
					if =
					if {
						isTrue = {$start.templates.image.foundation.clearingthumbs}
					}
					value = EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Template/
				}
			}
			207 = EXT:start/Resources/Private/Templates/FluidStyledContent/Jumboteaser/
			// #342 Container, 201119, fbostroem
			227 = EXT:start/Resources/Private/Templates/FluidStyledContent/Teasercard/
			237 = EXT:start/Resources/Private/Templates/FluidStyledContent/Headlineimage/
			247 = EXT:start/Resources/Private/Templates/FluidStyledContent/Jumpbox/
		}
			// empty statement for proper comment only
		partialRootPaths {
		}
			// start: 177 (clearingthumbs), 207 (Jumboteaser)
		partialRootPaths =
		partialRootPaths {
			170 = 
			170 {
				cObject = TEXT
				cObject {
					if =
					if {
						isTrue =
						isTrue {
							cObject = USER
							cObject {
								userFunc = Netzmacher\Start\Userfunc\IfUserfunc->enableResponsiveimages
							}
						}
					}
					value = EXT:start/Resources/Private/Partials/Responsiveimage/
				}
			}
				// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs}): EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Partials/
			177 = 
			177 {
					// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
				cObject = TEXT
				cObject {
						// isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
					if =
					if {
						isTrue = {$start.templates.image.foundation.clearingthumbs}
					}
					value = EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Partials/
				}
			}
			207 = EXT:start/Resources/Private/Partials/FluidStyledContent/
		}
			// empty statement for proper comment only
		layoutRootPaths {
		}
			// start: 177 (clearingthumbs), 207 (Jumboteaser)
		layoutRootPaths =
		layoutRootPaths {
				// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs}): EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Layout/
			177 = 
			177 {
					// if.isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
				cObject = TEXT
				cObject {
						// isTrue = {start.templates.image.foundation.clearingthumbs} (here: {$start.templates.image.foundation.clearingthumbs})
					if =
					if {
						isTrue = {$start.templates.image.foundation.clearingthumbs}
					}
					value = EXT:start/Resources/Private/Templates/FluidStyledContent/Foundation/Layouts/
				}
			}
			207 = EXT:start/Resources/Private/Layout/FluidStyledContent/Jumboteaser/
			237 = EXT:start/Resources/Private/Layout/FluidStyledContent/Headlineteaser
		}
	}
}
