start {
    // for proper comments only
  gridelements {
  }
    // start: 6 columns ({$start.gridelement.col6})
  gridelements =
  gridelements {
    {$start.gridelement.col6} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.col6} {
    }
      // 6 columns: wrap, columns
    {$start.gridelement.col6} =
    {$start.gridelement.col6} {
			wrap < start.gridelements.{$start.gridelement.col5}.wrap
			columns < start.gridelements.{$start.gridelement.col5}.columns
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
									80 >
										// flexform_classCol05
									80 = TEXT
									80 {
										field = flexform_classCol05
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

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.col6} < start.gridelements.{$start.gridelement.col6}