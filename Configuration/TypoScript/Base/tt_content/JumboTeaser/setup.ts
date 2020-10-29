lib.contentElement {
	templateRootPaths.207 = EXT:start/Resources/Private/Templates/FluidStyledContent/JumboTeaser/
	partialRootPaths.207 = EXT:start/Resources/Private/Partials/FluidStyledContent/JumboTeaser/
	layoutRootPaths.207 = EXT:start/Resources/Private/Layout/FluidStyledContent/JumboTeaser/

}
page.includeCSS.jumboteaser = EXT:start/Resources/Public/Css/JumboTeaser.css
tt_content {
	start_jumboteaser =< lib.contentElement
	start_jumboteaser {
		templateName = JumboTeaser
		dataProcessing.1 = Netzmacher\Start\DataProcessing\FlexFormProcessor
		dataProcessing.1{
			options {
				if.isTrue.field = pi_flexform
				fieldName = pi_flexform
			}
			as = content
		}
		dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
		dataProcessing.10{
			references{
				table = tt_content
				fieldName = image
			}
			as = images
		}
	}
}
