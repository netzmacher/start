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
						// <div class="{field:flexform_class}"><div class="row">|</div></div>
          cObject = COA
          cObject {
							// if.isTrue.field = flexform_class: <div class="{field:flexform_class}">
            10 = TEXT
            10 {
								// isTrue.field = flexform_class
							if =
							if {
									// field = flexform_class
								isTrue = 
								isTrue {
									field = flexform_class
								}
							}
							field   = flexform_class
              wrap		= <div class="|">
            }
							// <div class="row
						20 = TEXT
						20 {
							value = <div class="row">|<div>
						}
							// if.isTruefield = flexform_class: </div>
            30 = TEXT
            30 {
								// isTrue.field = flexform_class
							if =
							if {
									// field = flexform_class
								isTrue = 
								isTrue {
									field = flexform_class
								}
							}
              value = </div>
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