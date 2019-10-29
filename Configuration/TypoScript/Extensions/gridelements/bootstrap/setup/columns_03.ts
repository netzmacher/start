start {
    // for proper comments only
  gridelements {
  }
    // start: 3 columns ({$start.gridelement.col3})
  gridelements =
  gridelements {
    {$start.gridelement.col3} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.col3} {
    }
      // 3 columns: wrap, columns
    {$start.gridelement.col3} =
    {$start.gridelement.col3} {
			wrap < start.gridelements.{$start.gridelement.col2}.wrap
			columns < start.gridelements.{$start.gridelement.col2}.columns
      columns {
        1 {
          wrap {
            stdWrap {
              cObject {
									// last
                99 >
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
            }
          }
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.col3} < start.gridelements.{$start.gridelement.col3}