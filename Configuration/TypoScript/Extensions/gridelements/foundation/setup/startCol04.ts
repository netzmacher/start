start {
    // for proper comments only
  gridelements {
  }
    // startCol04
  gridelements =
  gridelements {
    startCol04 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol04 {
    }
      // 4 columns: wrap, columns
    startCol04 =
    startCol04 {
			wrap < start.gridelements.startCol03.wrap
			columns < start.gridelements.startCol03.columns
      columns {
        2 {
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
        3 < .default
        3 {
          wrap {
            stdWrap {
              cObject {
                10 {
									10 {
										noTrimWrap  = | |-3|
									}
									20 {
										listNum = 3
									}
									30 {
										listNum = 3
									}
									40 {
										listNum = 3
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
										if.isTrue.field = flexform_classCol03
										10 {
											field = flexform_classCol03
										}
									}
									20 {
										if.isFalse.field = flexform_classCol03
									}
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject {
								10 {
									if.isTrue.field = flexform_classCol03
								}
								20 {
									if.isFalse.field = flexform_classCol03
								}
							}
						}
					}
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startCol04 < start.gridelements.startCol04