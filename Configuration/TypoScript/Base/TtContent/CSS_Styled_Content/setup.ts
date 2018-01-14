tt_content {
		// empty statement for proper comments only
	stdWrap {
	}
		// start: innerWrap
	stdWrap =
	stdWrap {
			// empty statement for proper comments only
		innerWrap {
		}
			// start: cObject
		innerWrap =
		innerWrap {
				// empty statement for proper comments only
			cObject {
			}
				// start: 86, 87, 88, 89. default.20.90.field = tx_start_additionalclass
			cObject = CASE
			cObject {
					// startImgCircle
				86 =< tt_content.stdWrap.innerWrap.cObject.default
				86.20.10.value = start startImgCircle
					// startWoPadding
				87 =< tt_content.stdWrap.innerWrap.cObject.default
				87.20.10.value = start startWoPadding
					// startWoPaddingLeft
				88 =< tt_content.stdWrap.innerWrap.cObject.default
				88.20.10.value = start startWoPaddingLeft
					// startWoPaddingRight
				89 =< tt_content.stdWrap.innerWrap.cObject.default
				89.20.10.value = start startWoPaddingRight
					// empty statement for proper comments only
				default {
				}
					// start: 20.90.field = tx_start_additionalclass
				default = COA
				default {
						// empty statement for proper comments only
					20 {
					}
						// start: 90.field = tx_start_additionalclass
					20 = COA
					20 {
							// for proper comments only
						90 {
						}
							// [start] 10: tx_start_additionalclass, 20: tx_start_additionalclassdefined
						90 = COA
						90 {
								// field = tx_start_additionalclass
							10 = TEXT
							10 {
								field = tx_start_additionalclass
								required = 1
								noTrimWrap = | ||
							}
								// field = tx_start_additionalclassdefined
							20 = TEXT
							20 {
								stdWrap.field = tx_start_additionalclassdefined
								stdWrap.split {
									token = ,
									cObjNum = 1
									1.current = 1
									1.noTrimWrap = | ||
									required = 1
								}
							}
						}
					}
				}
			}
		}
	}
}