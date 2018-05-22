start {
    // for proper comments only
  lib {
  }
    // gdpr_dsgvo
  lib =
  lib {
			// Link to the page with GDPR/DSGVO
    gdpr_dsgvo = TEXT
    gdpr_dsgvo {
			if {
				isTrue = {$start.pages.gdpr}
			}
			typolink {
				parameter = {$start.pages.gdpr}
			}
			//noTrimWrap = |Details zur Datenverarbeitung erfahren Sie hier: | |
			noTrimWrap {
				stdWrap {
					cObject = TEXT
					cObject {
						value = |Please take account of our | |
						lang {
							de = |Beachten Sie bitte unsere | |
							en = |Please take account of our | |
						}
					}
				}
			}
    }
  }
}