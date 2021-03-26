start {
    // for proper comments only
  gridelements {
  }
    // start: 2 columns (startCol02)
  gridelements =
  gridelements {
    startCol02 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol02 {
    }
      // 2 columns: wrap, columns
    startCol02 =
    startCol02 {
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
                  noTrimWrap  = | |-0|
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
                  noTrimWrap = | col-xs-||
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
                  noTrimWrap = | col-sm-||
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
                  noTrimWrap = | col-md-||
                  required = 1
                }
									// flexform_classCol00
								80 = TEXT
								80 {
									field = flexform_classCol00
									noTrimWrap = | ||
									required = 1
								}
                  // first
                99 = TEXT
                99 {
                  value       = first
                  noTrimWrap  = | ||
                }
              }
            }
            noTrimWrap = |<div class="columns|">|
          }
          wrap2 = |</div>
        }
        1 < .default
        1 {
          wrap {
            stdWrap {
              cObject {
                10 {
                  noTrimWrap  = | |-1|
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

tt_content.gridelements_pi1.20.10.setup.startCol02 < start.gridelements.startCol02