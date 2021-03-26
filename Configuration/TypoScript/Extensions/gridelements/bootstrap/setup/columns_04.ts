start {
    // for proper comments only
  gridelements {
  }
    // start: 4 columns (startCol04)
  gridelements =
  gridelements {
    startCol04 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol04 {
    }
      // 4 columns: wrap, columns
    startCol04 =
    startCol04 {
			wrap < start.gridelements.{$start.gridelement.col3}.wrap
			columns < start.gridelements.{$start.gridelement.col3}.columns
      columns {
        2 {
          wrap {
            stdWrap {
              cObject {
									// last
                99 >
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
            }
          }
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startCol04 < start.gridelements.startCol04