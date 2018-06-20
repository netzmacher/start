page {
		// empty statement for proper comments only
  includeCSS {
	}
		// startNormalize, startFoundation, startStart, startCssAWiIcon (if.isTrue = "{$start.css.a.wiIcon}")
  includeCSS =
  includeCSS {
    startNormalize  = {$start.foundation.files.css.normalize}
    startFoundation = {$start.foundation.files.css.foundation}
    startStart			= {$start.foundation.files.css.basic}
			// if.isTrue = $start.css.a.wiIcon (here: {$start.foundation.css.a.wiIcon})
    startCssAWiIcon = {$start.foundation.files.css.aTagWiIcon}
    startCssAWiIcon {
				// if.isTrue = $start.css.a.wiIcon (here: {$start.foundation.css.a.wiIcon})
			if = 
			if {
				isTrue = {$start.foundation.css.a.wiIcon}
			}
		}
  }
		// empty statement for proper comments only
  includeJS {
	}
		// startModernizr (if.isTrue = "{$start.foundation.javascript.includeJS.startModernizr}")
  includeJS =
  includeJS {
    startModernizr = {$start.foundation.files.javascript.modernizr}
    startModernizr {
				// if.isTrue start.foundation.javascript.includeJS.startModernizr (here: {$start.foundation.javascript.includeJS.startModernizr})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startModernizr}
			}
    }
  }
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
			// true, if page newslettersubscription is set (here: {$start.pages.newslettersubscription}) AND if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
    startJQueryCookie = {$start.foundation.files.javascript.jqueryCookie}
    startJQueryCookie {
			if < start.rules.newsletterModal 
    }
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
		// empty statement for proper comments only
  includeJSFooterlibs {
	}
		// startJquery (if.isTrue = "{$start.foundation.javascript.includeJS.startJquery}")
  includeJSFooterlibs =
  includeJSFooterlibs {
			// if.isTrue start.foundation.javascript.includeJS.startJquery (here: {$start.foundation.javascript.includeJS.startJquery})
    startJquery = {$start.foundation.files.javascript.jquery}
    startJquery {
				// if.isTrue start.foundation.javascript.includeJS.startJquery (here: {$start.foundation.javascript.includeJS.startJquery})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startJquery}
			}
      forceOnTop = 1
    }
  }
}

  // #71476
startPrint {
		// empty statement for proper comments only
  includeCSS {
	}
		// startNormalize, startFoundation, startStart, startCssAWiIcon (if.isTrue = "{$start.css.a.wiIcon}")
  includeCSS =
  includeCSS {
    startNormalize  = {$start.foundation.files.css.normalize}
    startFoundation = {$start.foundation.files.css.foundation}
    startStart			= {$start.foundation.files.css.basic}
    startCssAWiIcon = {$start.foundation.files.css.aTagWiIcon}
    startCssAWiIcon {
				// if.isTrue = $start.css.a.wiIcon (here: {$start.css.a.wiIcon})
			if = 
			if {
				isTrue = {$start.css.a.wiIcon}
			}
		}
  }
		// empty statement for proper comments only
  includeJS {
	}
		// startModernizr (if.isTrue = "{$start.foundation.javascript.includeJS.startModernizr}")
  includeJS =
  includeJS {
    startModernizr = {$start.foundation.files.javascript.modernizr}
    startModernizr {
				// if.isTrue start.foundation.javascript.includeJS.startModernizr (here: {$start.foundation.javascript.includeJS.startModernizr})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startModernizr}
			}
    }
  }
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
		// empty statement for proper comments only
  includeJSFooterlibs {
	}
		// startJquery (if.isTrue = "{$start.foundation.javascript.includeJS.startJquery}")
  includeJSFooterlibs =
  includeJSFooterlibs {
			// if.isTrue start.foundation.javascript.includeJS.startJquery (here: {$start.foundation.javascript.includeJS.startJquery})
    startJquery = {$start.foundation.files.javascript.jquery}
    startJquery {
				// if.isTrue start.foundation.javascript.includeJS.startJquery (here: {$start.foundation.javascript.includeJS.startJquery})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startJquery}
			}
      forceOnTop = 1
    }
  }
}