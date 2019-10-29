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
						// <div class="row {field:flexform_class}">|</div>
          cObject = COA
          cObject {
							// <div class="row {field:flexform_class}">
						10 = COA
						10 {
								// value = row
							10 = TEXT
							10 {
								value = row
							}
								// field = flexform_class
							20 = TEXT
							20 {
									// isTrue.field = flexform_class
								field				= flexform_class
								required		= 1
								noTrimWrap	= | ||
							}
							wrap = <div class="|">
						}
							// value = |</div>
						20 = TEXT
						20 {
							value = |</div>
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
									// flexform_classCol00
								80 = TEXT
								80 {
									field = flexform_classCol00
									noTrimWrap = | ||
									required = 1
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