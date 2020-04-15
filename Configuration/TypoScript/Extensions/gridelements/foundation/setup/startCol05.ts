start {
    // for proper comments only
  gridelements {
  }
    // startCol05
  gridelements =
  gridelements {
    startCol05 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol05 {
    }
      // 5 columns: wrap, columns
    startCol05 =
    startCol05 {
			wrap < start.gridelements.startCol04.wrap
			columns < start.gridelements.startCol04.columns
      columns {
        3 {
          wrap {
            stdWrap {
              cObject {
                10 {
										// last
									99 >
								}
              }
            }
          }
        }
        4 < .default
        4 {
          wrap {
            stdWrap {
              cObject {
                10 {
									10 {
										noTrimWrap  = | |-4|
									}
									20 {
										listNum = 4
									}
									30 {
										listNum = 4
									}
									40 {
										listNum = 4
									}
										// last
									99 = TEXT
									99 {
										value       = last
										noTrimWrap  = | ||
									}
								}
								20 {
									10 {
										if.isTrue.field = flexform_classCol04
										10 {
											field = flexform_classCol04
										}
									}
									20 {
										if.isFalse.field = flexform_classCol04
									}
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject {
								10 {
									if.isTrue.field = flexform_classCol04
								}
								20 {
									if.isFalse.field = flexform_classCol04
								}
							}
						}
					}
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startCol05 < start.gridelements.startCol05