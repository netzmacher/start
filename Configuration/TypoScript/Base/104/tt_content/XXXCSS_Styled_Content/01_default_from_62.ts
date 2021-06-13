tt_content {
		// empty statement for proper comments only
	stdWrap {
	}
		// start: innerWrap from css_styled_content TYPO3 6.2
	stdWrap =
	stdWrap {
			// empty statement for proper comments only
		innerWrap {
		}
			// start: cObject from css_styled_content TYPO3 6.2
		innerWrap =
		innerWrap {
				// start: default from css_styled_content TYPO3 6.2
			cObject = CASE
			cObject {
				key.field = section_frame

					// start: 10, 20, 30 from css_styled_content TYPO3 6.2
				default = COA
				default {
					10 = TEXT
					10 {
						cObject = CASE
						cObject {
							key.field = CType

							default = TEXT
							default {
								value = <div id="c{field:uid}"
							}

							div = TEXT
							div {
								value = <div
							}

							menu < .default
							menu {
								override = <nav id="c{field:uid}"
								override {
									if {
										value = html5
										equals.data = TSFE:config|config|doctype
									}
								}
							}
						}
						insertData = 1
					}

					20 = COA
					20 {
						# Create default class for content
						10 = TEXT
						10 {
							value = csc-default
							required = 1
							noTrimWrap = || |
						}
						# Create class for space before content
						20 = USER
						20 {
							userFunc = TYPO3\CMS\CssStyledContent\Controller\CssStyledContentController->renderSpace
							space = before
							constant = {$content.spaceBefore}
							classStdWrap {
								noTrimWrap = |csc-space-before-| |
							}
						}
						# Create class for space after content
						30 = USER
						30 {
							userFunc = TYPO3\CMS\CssStyledContent\Controller\CssStyledContentController->renderSpace
							space = after
							constant = {$content.spaceAfter}
							classStdWrap {
								noTrimWrap = |csc-space-after-| |
							}
						}
						stdWrap {
							trim = 1
							noTrimWrap = | class="|"|
							required = 1
						}
					}

					30 = TEXT
					30 {
						cObject = CASE
						cObject {
							key.field = CType

							default = TEXT
							default {
								value = >|</div>
							}

							menu < .default
							menu {
								override = >|</nav>
								override {
									if {
										value = html5
										equals.data = TSFE:config|config|doctype
									}
								}
							}
						}
					}
				}
			}
		}
	}
}