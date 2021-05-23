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
							// stdWrap.cObject.value = |Which data we are storing, you would like to know here: | |
			noTrimWrap {
				stdWrap {
					cObject = TEXT
					cObject {
						value = |Which data we are storing, you would like to know here: | |
						lang {
							de = |Was wir speichern, erfahren Sie hier: | |
							en = |Which data we are storing, you would like to know here: | |
						}
					}
				}
			}
    }
  }
}