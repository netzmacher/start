page {
		// empty statement for proper comments only
  includeCSS {
	}
		// startCssNewsletterPopupExitIntent (if.isTrue = "{$start.newsletterpopup.exitintent.css}")
  includeCSS =
  includeCSS {
			// if.isTrue = $start.newsletterpopup.exitintent.page (here: {$start.newsletterpopup.exitintent.css})
    startNewsletterPopupExitIntent	= {$start.newsletterpopup.exitintent.css}
		startNewsletterPopupExitIntent {
				// if.isTrue = $start.newsletterpopup.exitintent.page (here: {$start.newsletterpopup.exitintent.css})
			if = 
			if {
				isTrue = {$start.newsletterpopup.exitintent.page}
			}
		}
  }
}