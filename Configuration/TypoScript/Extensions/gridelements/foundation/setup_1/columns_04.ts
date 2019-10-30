start {
    // for proper comments only
  gridelements {
  }
    // start: 4 columns ({$start.gridelement.col4})
  gridelements =
  gridelements {
    {$start.gridelement.col4} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.col4} {
    }
      // 4 columns: wrap, columns
    {$start.gridelement.col4} =
    {$start.gridelement.col4} {
			wrap < start.gridelements.{$start.gridelement.col3}.wrap
			columns < start.gridelements.{$start.gridelement.col3}.columns
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
									80 >
										// flexform_classCol03
									80 = TEXT
									80 {
										field = flexform_classCol03
										noTrimWrap = | ||
										required = 1
									}
										// last
									99 = TEXT
									99 {
										value       = last
										noTrimWrap  = | ||
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

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.col4} < start.gridelements.{$start.gridelement.col4}