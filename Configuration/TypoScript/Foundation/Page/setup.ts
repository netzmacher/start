page {
  includeCSS {
    startNormalize  = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/css/normalize.css
    startFoundation = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/css/foundation.min.css
    startStart			= EXT:start/Resources/Public/Css/basic.css
  }
  includeJSlibs {
    startModernizr = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/modernizr.js
    startModernizr {
				// if.isTrue start.foundation.javascript.includeJS.startModernizr (here: {$start.foundation.javascript.includeJS.startModernizr})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startModernizr}
			}
    }
  }
  includeJSFooter {
    startFastclick          = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/fastclick.js
    startFastclick {
				// if.isTrue start.foundation.javascript.includeJS.startFastclick (here: {$start.foundation.javascript.includeJS.startFastclick})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFastclick}
			}
    }
    startFoundation         = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/foundation.min.js
    startFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundation}
			}
    }
    startFoundationClearing = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/foundation/foundation.clearing.js
    startFoundationClearing {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationClearing}
			}
    }
    startFoundationInit     = EXT:start/Resources/Public/JavaScript/Libs/foundationInit.js
    startFoundationInit {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationInit}
			}
    }
  }
  includeJSFooterlibs {
    startJquery = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/jquery.js
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
  includeCSS {
    startNormalize  = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/css/normalize.css
    startFoundation = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/css/foundation.min.css
  }
  includeJSlibs {
    startModernizr = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/modernizr.js
    startModernizr {
				// if.isTrue start.foundation.javascript.includeJS.startModernizr (here: {$start.foundation.javascript.includeJS.startModernizr})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startModernizr}
			}
    }
  }
  includeJSFooter {
    startFastclick          = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/fastclick.js
    startFastclick {
				// if.isTrue start.foundation.javascript.includeJS.startFastclick (here: {$start.foundation.javascript.includeJS.startFastclick})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFastclick}
			}
    }
    startFoundation         = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/foundation.min.js
    startFoundation {
				// if.isTrue start.foundation.javascript.includeJS.startFoundation (here: {$start.foundation.javascript.includeJS.startFoundation})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundation}
			}
    }
    startFoundationClearing = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/foundation/foundation.clearing.js
    startFoundationClearing {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationClearing (here: {$start.foundation.javascript.includeJS.startFoundationClearing})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationClearing}
			}
    }
    startFoundationInit     = EXT:start/Resources/Public/JavaScript/Libs/foundationInit.js
    startFoundationInit {
				// if.isTrue start.foundation.javascript.includeJS.startFoundationInit (here: {$start.foundation.javascript.includeJS.startFoundationInit})
			if =
			if {
				isTrue = {$start.foundation.javascript.includeJS.startFoundationInit}
			}
    }
  }
  includeJSFooterlibs {
    startJquery = EXT:start/Resources/Public/JavaScript/Libs/Foundation-5.5.3/js/vendor/jquery.js
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