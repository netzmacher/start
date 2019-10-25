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
				10 {
					class {
						cObject {
							20 {
									// [start] 10: tx_start_additionalclass, 20: tx_start_additionalclassdefined
								1827 = COA								
								1827 {
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
	}
}