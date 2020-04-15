start {
    // for proper comments only
  gridelements {
  }
    // startCol06
  gridelements =
  gridelements {
    startCol06 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol06 {
    }
      // 6 columns: wrap, columns
    startCol06 =
    startCol06 {
			wrap < start.gridelements.startCol05.wrap
			columns < start.gridelements.startCol05.columns
      columns {
        4 {
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
        5 < .default
        5 {
          wrap {
            stdWrap {
              cObject {
                10 {
									10 {
										noTrimWrap  = | |-5|
									}
									20 {
										listNum = 5
									}
									30 {
										listNum = 5
									}
									40 {
										listNum = 5
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
										if.isTrue.field = flexform_classCol05
										10 {
											field = flexform_classCol05
										}
									}
									20 {
										if.isFalse.field = flexform_classCol05
									}
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject {
								10 {
									if.isTrue.field = flexform_classCol05
								}
								20 {
									if.isFalse.field = flexform_classCol05
								}
							}
						}
					}
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startCol06 < start.gridelements.startCol06