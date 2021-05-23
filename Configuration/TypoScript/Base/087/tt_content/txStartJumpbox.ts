tt_content {
	txStartJumpbox =< lib.contentElement
	txStartJumpbox {
		templateName = Jumpbox
		dataProcessing.1 = Netzmacher\Start\DataProcessing\FlexFormProcessor
		dataProcessing.1 {
			options {
				if.isTrue.field = pi_flexform
				fieldName = pi_flexform
			}
			as = content
		}
	}
}
