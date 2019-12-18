page {
		// empty statement for proper comments only
  includeJSFooter {
	}
		// startFastclick, startFoundation, startFoundationClearing, startFoundationWhatInput, startFoundationInit, startJQueryCookie, startNewsletterModal, startBootstrapForFoundation
  includeJSFooter =
  includeJSFooter {
			// if.isTrue start.foundation.javascript.includeJS.startFastclick (here: {$start.foundation.javascript.includeJS.startFastclick})
    startFastclick          = {$start.foundation.files.javascript.fastclick}
    startFastclick {
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFastclick}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
    startFoundation         = {$start.foundation.files.javascript.foundation}
    startFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundation}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
    startFoundationClearing = {$start.foundation.files.javascript.clearing}
    startFoundationClearing {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationClearing}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationWhatInput (here: {$start.foundation.javascript.includeJS.startFoundationWhatInput})
    startFoundationWhatInput     = {$start.foundation.files.javascript.whatinput}
    startFoundationWhatInput {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationWhatInput (here: {$start.foundation.javascript.includeJS.startFoundationWhatInput})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationWhatInput}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
    startFoundationInit     = {$start.foundation.files.javascript.init}
    startFoundationInit {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationInit}
			}
    }
			// true, if page newslettersubscription is set (here: {$start.newsletterpopup.enter.page}) AND if newsletter popup (modal) is enabled (here: {$start.newsletterpopup.enter.modalEnabled})
    startJQueryCookie = {$start.foundation.files.javascript.jqueryCookie}
    startJQueryCookie {
			if < start.rules.newsletterModal 
    }
    startMegamenu = {$start.foundation.files.javascript.megamenu}
			// true, if page newslettersubscription is set (here: {$start.pages.newslettersubscription}) AND if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
    startNewsletterModal = {$start.foundation.files.javascript.newsletterModal}
    startNewsletterModal {
			if < start.rules.newsletterModal 
    }
			// if.isTrue start.foundation.javascript.includeJS.startBootstrapForFoundation (here: {$start.foundation.javascript.includeJS.startBootstrapForFoundation})
    startBootstrapForFoundation     = {$start.foundation.files.javascript.bootstrap}
    startBootstrapForFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startBootstrapForFoundation (here: {$start.foundation.javascript.includeJS.startBootstrapForFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startBootstrapForFoundation}
			}
    }
  }
}

  // #71476
startPrint {
		// empty statement for proper comments only
  includeJSFooter {
	}
		// startFastclick, startFoundation, startFoundationClearing, startFoundationWhatInput, startFoundationInit, startBootstrapForFoundation
  includeJSFooter =
  includeJSFooter {
			// if.isTrue start.foundation.javascript.includeJS.startFastclick (here: {$start.foundation.javascript.includeJS.startFastclick})
    startFastclick          = {$start.foundation.files.javascript.fastclick}
    startFastclick {
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFastclick}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
    startFoundation         = {$start.foundation.files.javascript.foundation}
    startFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundation}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
    startFoundationClearing = {$start.foundation.files.javascript.clearing}
    startFoundationClearing {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationClearing}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationWhatInput (here: {$start.foundation.javascript.includeJS.startFoundationWhatInput})
    startFoundationWhatInput     = {$start.foundation.files.javascript.whatinput}
    startFoundationWhatInput {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationWhatInput (here: {$start.foundation.javascript.includeJS.startFoundationWhatInput})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationWhatInput}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
    startFoundationInit     = {$start.foundation.files.javascript.init}
    startFoundationInit {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationInit}
			}
    }
			// if.isTrue start.foundation.javascript.includeJS.startBootstrapForFoundation (here: {$start.foundation.javascript.includeJS.startBootstrapForFoundation})
    startBootstrapForFoundation     = {$start.foundation.files.javascript.bootstrap}
    startBootstrapForFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startBootstrapForFoundation (here: {$start.foundation.javascript.includeJS.startBootstrapForFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startBootstrapForFoundation}
			}
    }
  }
}