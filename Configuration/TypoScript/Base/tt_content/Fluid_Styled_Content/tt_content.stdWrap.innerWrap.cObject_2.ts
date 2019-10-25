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
					// empty statement for proper comments only
				default {
				}
					// start: 20.90.field = tx_start_additionalclass
				default = COA
				default {
					if.isTrue.field = tx_start_additionalclass // tx_start_additionalclassdefined
					10 = TEXT
					10 {
						value = <div id="c{field:uid}"
						insertData = 1
					}
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
								field = tx_start_additionalclassdefined
								required = 1
								split {
									token = ,
									cObjNum = 1
									1.current = 1
									1.noTrimWrap = | ||
									required = 1
								}
							}
						}
							// wrap.stdWrap.cObject.value = style="|"
						wrap =
						wrap {
							stdWrap =
							stdWrap {
								cObject = TEXT
								cObject {
									value = style="|"
									noTrimWrap = | ||
								}
							}
						}
					}
					30 = TEXT
					30 {
						value = >|</div>
					}
				}
			}
		}
	}
}