tt_content {
	txStartJumboteaser =< lib.contentElement
	txStartJumboteaser {
		templateName = JumboTeaser
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