  // for proper comments only
start {
}
  // rules
start =
start {
    // for proper comments only
  rules {
  }
    // newsletterModal
  rules =
  rules {
			// true, if page newslettersubscription is set (here: {$start.pages.newslettersubscription}) AND if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
    newsletterModal =
    newsletterModal {
			value = 11
				// 10: page newslettersubscription. 20: newsletter popup (modal).
			equals =
			equals {
				stdWrap {
						// 10: page newslettersubscription. 20: newsletter popup (modal).
					cObject = COA
					cObject {
							// true, if page newslettersubscription is set (here: {$start.pages.newslettersubscription})
						10 = TEXT
						10 {
							value = 1
								// true, if page newslettersubscription is set (here: {$start.pages.newslettersubscription})
							if =
							if {
								isTrue = {$start.pages.newslettersubscription}
							}
						}
							// true, if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
						20 = TEXT
						20 {
							value = 1
								// true, if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
							if =
							if {
								isTrue = {$start.foundation.newsletter.modalEnabled}
							}
						}
					}
				}
			}
		}
  }
}