start {
  gridelements {
    {$start.gridelement.col3} {
      columns {
        default {
          wrap {
            stdWrap {
              cObject {
                10 {
                  noTrimWrap  = ||-1 |
                }
                20 {
                  listNum = 1
                }
                30 {
                  listNum = 1
                }
                40 {
                  listNum = 1
                }
              }
            }
          }
        }
        1 {
          wrap {
            stdWrap {
              cObject {
                10 {
                  noTrimWrap  = ||-0 |
                }
                20 {
                  listNum = 0
                }
                30 {
                  listNum = 0
                }
                40 {
                  listNum = 0
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
