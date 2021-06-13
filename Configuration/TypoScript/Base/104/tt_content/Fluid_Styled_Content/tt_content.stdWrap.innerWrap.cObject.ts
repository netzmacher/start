// THIS FILE MUST CORRESPOND WITH
// EXT:t3foundation/Configuration/TypoScript/8.7/Extensions/FluidStyledContent/tt_content.stdWrap.innerWrap.cObject.ts

  // Empty statement for proper comments only
tt_content {
}
	// start: stdWrap.innerWrap.cObject = COA. <div class="{REGISTER:t3fClass}">|</div> or |
tt_content = CASE
tt_content {
		// Empty statement for proper comments only
	stdWrap {
	}
		// start: innerWrap.cObject = COA. <div class="{REGISTER:t3fClass}">|</div> or |
	stdWrap =
	stdWrap {
			// Empty statement for proper comments only
		innerWrap {
		}
			// start: cObject = COA. <div class="{REGISTER:t3fClass}">|</div> or |
		innerWrap =
		innerWrap {
				// Empty statement for proper comments only
			cObject {
			}
				// start: <div class="{REGISTER:t3fClass}">|</div> or |
			cObject = COA
			cObject {
					// t3fClass: start, other extensions. Internal: #t1827
				10 = LOAD_REGISTER
				10 {
						// cObject.20.10: EXT:start
					t3fClass = 
					t3fClass {
							// 20.10: EXT:start
						cObject = COA
						cObject {
								// 10: EXT:start
							20 = COA
							20 {
								10 >
									// EXT:start: tx_start_additionalclass, tx_start_additionalclassdefined, tx_start_classbackground, tx_start_classcontainer, tx_start_classeffect, tx_start_classform, tx_start_classimage, tx_start_classmargin, tx_start_classmargingrid, tx_start_classpanel,
								10 = COA
								10 {
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
										// field = tx_start_classbackground
									30 = TEXT
									30 {
										field = tx_start_classbackground
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classcontainer
									40 = TEXT
									40 {
										field = tx_start_classcontainer
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classeffect
									50 = TEXT
									50 {
										field = tx_start_classeffect
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classform
									60 = TEXT
									60 {
										field = tx_start_classform
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classimage
									70 = TEXT
									70 {
										field = tx_start_classimage
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classmargin
									80 = TEXT
									80 {
										field = tx_start_classmargin
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classmargingrid
									90 = TEXT
									90 {
										field = tx_start_classmargingrid
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classpanel
									100 = TEXT
									100 {
										field = tx_start_classpanel
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classshadow
									110 = TEXT
									110 {
										field = tx_start_classshadow
										required = 1
										split {
											token = ,
											cObjNum = 1
											1.current = 1
											1.noTrimWrap = | ||
											required = 1
										}
									}
										// field = tx_start_classtext
									120 = TEXT
									120 {
										field = tx_start_classtext
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
						}
					}
						// cObject.20.10: EXT:start
					t3fStyle = 
					t3fStyle {
							// 20.10: EXT:start
						cObject = COA
						cObject {
								// 10: EXT:start
							20 = COA
							20 {
								10 >
									// EXT:start
								10 = COA
								10 {
										// #cUid, .cUid, .cUid.panel { background-color:{tx_start_csscolor};color:{tx_start_csscolorbe}; }
									10 = COA
									10 {
											// isTrue.field = tx_start_csscolor // tx_start_csscolorbe
										if =
										if {
												// field = tx_start_csscolor // tx_start_csscolorbe
											isTrue =
											isTrue {
												field = tx_start_csscolor // tx_start_csscolorbe
											}
										}
											// #cUid, .cUid, .cUid.panel {
										10 = COA
										10 {
												// #cUid, {
											10 = TEXT
											10 {
												field				= uid
												noTrimWrap	= |#c| *, |
											}
												// .cUid, {
											20 = TEXT
											20 {
												field				= uid
												noTrimWrap	= |.c|, |
											}
												// .cUid.panel {
											30 = TEXT
											30 {
												field				= uid
												noTrimWrap	= |.c|.panel { |
											}
										}
											// color:{tx_start_csscolorbe};
										20 = TEXT
										20 {
											field			= tx_start_csscolor
											wrap			= color:|;
											required	= 1
										}
											// background-color:{tx_start_csscolor}
										30 = TEXT
										30 {
											field			= tx_start_csscolorbe
											wrap			= background-color:|;
											required	= 1
										}
											// }
										40 = TEXT
										40 {
											value				= }
											noTrimWrap	= | ||
										}
									}
										// #cUid a, #cUid .button { color:{tx_start_csscolorhref}; }
									20 = COA
									20 {
											// isTrue.field = tx_start_csscolorhref
										if =
										if {
												// field = tx_start_csscolorhref
											isTrue =
											isTrue {
												field = tx_start_csscolorhref
											}
										}
											// #cUid a, #cUid .button {
										10 = COA
										10 {
												// #cUid a,
											10 = TEXT
											10 {
												field				= uid
												noTrimWrap	= |#c| a, |
											}
												// #cUid .button {
											20 = TEXT
											20 {
												field				= uid
												noTrimWrap	= |#c| .button { |
											}
										}
											// color:{tx_start_csscolorhref};
										20 = TEXT
										20 {
											field			= tx_start_csscolorhref
											wrap			= color:|;
											required	= 1
										}
											// }
										40 = TEXT
										40 {
											value				= }
											noTrimWrap	= | ||
										}
									}
										// #cUid a:hover, #cUid .button:hover { color:{tx_start_csscolorhrefhover}; }
									30 = COA
									30 {
											// isTrue.field = tx_start_csscolorhrefhover
										if =
										if {
												// field = tx_start_csscolorhrefhover
											isTrue =
											isTrue {
												field = tx_start_csscolorhrefhover
											}
										}
											// #cUid a, #cUid .button {
										10 = COA
										10 {
												// #cUid a,
											10 = TEXT
											10 {
												field				= uid
												noTrimWrap	= |#c| a:hover, |
											}
												// #cUid .button {
											20 = TEXT
											20 {
												field				= uid
												noTrimWrap	= |#c| .button:hover { |
											}
										}
											// color:{tx_start_csscolorhrefhover};
										20 = TEXT
										20 {
											field			= tx_start_csscolorhrefhover
											wrap			= color:|;
											required	= 1
										}
											// }
										40 = TEXT
										40 {
											value				= }
											noTrimWrap	= | ||
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