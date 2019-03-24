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
			wrap < start.gridelements.{$start.gridelement.col1}.wrap
      columns {
        default {
          wrap {
            stdWrap {
              cObject = COA
              cObject {
                  // class
                10 = TEXT
                10 {
                  field       = flexform_class
                  noTrimWrap  = ||-0 |
                  required    = 1
                }
                  // small
                20 = TEXT
                20 {
                  field = flexform_columnssmall
                  listNum = 0
                  listNum {
                    splitChar = /
                  }
                  noTrimWrap = |col-xs-| |
                  required = 1
                }
                  // medium
                30 = TEXT
                30 {
                  field = flexform_columnsmedium
                  listNum = 0
                  listNum {
                    splitChar = /
                  }
                  noTrimWrap = |col-sm-| |
                  required = 1
                }
                  // large
                40 = TEXT
                40 {
                  field = flexform_columnslarge
                  listNum = 0
                  listNum {
                    splitChar = /
                  }
                  noTrimWrap = |col-md-| |
                  required = 1
                }
                  // first
                99 = TEXT
                99 {
                  value       = first
                  noTrimWrap  = || |
                }
              }
            }
            noTrimWrap = |<div class="columns |">|
          }
          wrap2 = |</div>
        }
        1 < .default
        1 {
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
                  noTrimWrap  = ||-2 |
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
                  noTrimWrap  = ||-3 |
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
                  noTrimWrap  = ||-4 |
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
                  noTrimWrap  = || |
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