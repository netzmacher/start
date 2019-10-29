start {
    // for proper comments only
  gridelements {
  }
    // start: 5 columns ({$start.gridelement.col5})
  gridelements =
  gridelements {
    {$start.gridelement.col5} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.col5} {
    }
      // 5 columns: wrap, columns
    {$start.gridelement.col5} =
    {$start.gridelement.col5} {
			wrap < start.gridelements.{$start.gridelement.col4}.wrap
			columns < start.gridelements.{$start.gridelement.col4}.columns
      columns {
        3 {
          wrap {
            stdWrap {
              cObject {
									// last
                99 >
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
            }
          }
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.col5} < start.gridelements.{$start.gridelement.col5}