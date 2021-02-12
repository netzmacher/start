page {
		// empty statement for proper comments only
  includeCSS {
	}
		// startNormalize, startFoundation, startStart, startCssAWiIcon (if.isTrue = "{$start.css.a.wiIcon}"), startDataCeColumns
  includeCSS =
  includeCSS {
    startNormalize			= {$start.foundation.files.css.normalize}
    startFoundationApp	= {$start.foundation.files.css.foundation}
    startStart					= {$start.foundation.files.css.basic}
    startCssArrow				= {$start.foundation.files.css.arrow}
			// if.isTrue = $start.css.a.wiIcon (here: {$start.foundation.css.a.wiIcon})
    startCssAWiIcon			= {$start.foundation.files.css.aTagWiIcon}
    startCssAWiIcon {
				// if.isTrue = $start.css.a.wiIcon (here: {$start.foundation.css.a.wiIcon})
			if = 
			if {
				isTrue = {$start.foundation.css.a.wiIcon}
			}
		}
    startDataCeColumns	= {$start.foundation.files.css.dataCeColumns}
    startFoundation			= EXT:start/Resources/Public/Css/Extensions/foundation.css
    startMegamenu				= {$start.foundation.files.css.megamenu}
		// #i0224, 190404, dwildt
		//startRteCodesnippet = EXT:start/Resources/Public/CKeditor/4.11.3/Plugins/codesnippet/lib/highlight/styles/default.css
    startPowermail			= {$start.foundation.files.css.powermail}
			// if ExtensionWrapper->isLoadedPowermail()
    startPowermail {
				// if.isTrue  ExtensionWrapper->isLoadedPowermail()
			if =
			if {
					// isTrue  ExtensionWrapper->isLoadedPowermail()
				isTrue =
				isTrue {
						// userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper->isLoadedPowermail
					cObject = USER
					cObject {
						userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper->isLoadedPowermail
					}
				}
			}
	  }
    startTxnews					= EXT:start/Resources/Public/Css/Extensions/tx_news.css
			// if ExtensionWrapper->isLoadedTxnews()
    startTxnews {
				// if.isTrue  ExtensionWrapper->isLoadedTxnews()
			if =
			if {
					// isTrue  ExtensionWrapper->isLoadedTxnews()
				isTrue =
				isTrue {
						// userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper->isLoadedTxnews
					cObject = USER
					cObject {
						userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper->isLoadedTxnews
					}
				}
			}
	  }
  }
}