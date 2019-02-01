start {
    // for proper comments only
  gridelements {
  }
    // start: 1 column ({$start.gridelement.col1})
  gridelements =
  gridelements {
    {$start.gridelement.col1} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.col1} {
    }
      // 1 column: wrap, columns
    {$start.gridelement.col1} =
    {$start.gridelement.col1} {
      wrap {
        stdWrap {
          cObject = COA
          cObject {
              // <div ...
            10 = TEXT
            10 {
              value = <div class="row
            }
              // class
            20 = TEXT
            20 {
              field       = flexform_class
              noTrimWrap  = | ||
              required    = 1
            }
              // ... /div>
            30 = TEXT
            30 {
              value = ">|</div>
            }
          }
        }
      }
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
                  noTrimWrap  = | ||
                  required    = 1
                }
              }
            }
            noTrimWrap = |<div class="columns|">|
          }
          wrap2 = |</div>
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.col1} < start.gridelements.{$start.gridelement.col1}