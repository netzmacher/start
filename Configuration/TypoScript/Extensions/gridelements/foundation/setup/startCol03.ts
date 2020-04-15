start {
    // for proper comments only
  gridelements {
  }
    // startCol03
  gridelements =
  gridelements {
    startCol03 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol03 {
    }
      // 3 columns: wrap, columns
    startCol03 =
    startCol03 {
			wrap < start.gridelements.startCol02.wrap
			columns < start.gridelements.startCol02.columns
      columns {
        1 {
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
        2 < .default
        2 {
          wrap {
            stdWrap {
              cObject {
                10 {
									10 {
										noTrimWrap  = | |-2|
									}
									20 {
										listNum = 2
									}
									30 {
										listNum = 2
									}
									40 {
										listNum = 2
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
										if.isTrue.field = flexform_classCol02
										10 {
											field = flexform_classCol02
										}
									}
									20 {
										if.isFalse.field = flexform_classCol02
									}
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject {
								10 {
									if.isTrue.field = flexform_classCol02
								}
								20 {
									if.isFalse.field = flexform_classCol02
								}
							}
						}
					}
        }
      }
    }
  }
}


tt_content.gridelements_pi1.20.10.setup.startCol03 < start.gridelements.startCol03