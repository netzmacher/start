// THIS FILE MUST CORRESPOND WITH
// EXT:t3foundation/Configuration/TypoScript/8.7/Extensions/FluidStyledContent/tt_content.stdWrap.innerWrap.cObject.ts

  // Empty statement for proper comments only
tt_content {
}
	// start: stdWrap.innerWrap.cObject = COA. <div class="{REGISTER:class}">|</div> or |
tt_content = CASE
tt_content {
		// Empty statement for proper comments only
	stdWrap {
	}
		// start: innerWrap.cObject = COA. <div class="{REGISTER:class}">|</div> or |
	stdWrap =
	stdWrap {
			// Empty statement for proper comments only
		innerWrap {
		}
			// start: cObject = COA. <div class="{REGISTER:class}">|</div> or |
		innerWrap =
		innerWrap {
				// Empty statement for proper comments only
			cObject {
			}
				// start: <div class="{REGISTER:class}">|</div> or |
			cObject = COA
			cObject {
					// class: start, other extensions. Internal: #t1827
				10 = LOAD_REGISTER
				10 {
						// cObject: start, other extensions
					class = 
					class {
						cObject = COA
						cObject {
							20 >
								// Array for other extensions
							20 = COA
							20 {
									// Start
								10 = COA
								10 {
									if.isTrue.field = tx_start_additionalclass // tx_start_additionalclassdefined
										// start: 90.field = tx_start_additionalclass
									20 = COA
									20 {
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
								}
									// Another extension
								20 = TEXT
								20 {
										// Prevent any output!
									if.isTrue = 0
									value = tx_anotherextension
									noTrimWrap = || |
								}
							}
						}
					}
				}
					// 10: <div class="{REGISTER:class}">|</div>, 20: |
				20 = COA
				20 {
						// if.isTrue.data = register:class: <div class="{REGISTER:class}">|</div>
					10 = COA
					10 {
							// isTrue.data = register:class
						if =
						if {
								// data = register:class
							isTrue =
							isTrue {
								data = register:class
							}
						}
							// <div
						10 = TEXT
						10 {
							value = <div 
						}
							// class="|"
						20 = COA
						20 {
							10 = TEXT
							10 {
								data = register:class
							}
								// empty statement for proper comments only
							stdWrap {
							}
								// start: class="|"
							stdWrap = 
							stdWrap {
								trim = 1
								noTrimWrap = | class="|"|
								required = 1
							}
						}
							// >|</div>
						30 = TEXT
						30 {
							value = ><!-- div-wrap by start - begin //-->|<!-- div-wrap by start - end //--></div>
						}
					}
						// negate if.isTrue.data = register:class: |
					20 = TEXT
					20 {
							// negate isTrue.data = register:class
						if =
						if {
								// data = register:class
							isTrue =
							isTrue {
								data = register:class
							}
							negate = 1
						}
						value = | 
					}
				}
			}
		}
	}
}