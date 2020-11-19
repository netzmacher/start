tt_content {
	txStartTeaserCard =< lib.contentElement
	txStartTeaserCard {
		templateName = TeaserCard
		dataProcessing.1 = Netzmacher\Start\DataProcessing\FlexFormProcessor
		dataProcessing.1 {
			options {
				if.isTrue.field = pi_flexform
				fieldName = pi_flexform
			}
			as = content
		}
		dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
		dataProcessing.10 {
			references{
				table = tt_content
				fieldName = image
			}
			as = images
		}
	}
}
/*
page.includeJS.flipTimer = EXT:start/Resources/Public/JavaScript/Libs/start/flipclock.js
page.includeCSS.flipTimer = EXT:start/Resources/Public/Css/flipclock.css
*/
