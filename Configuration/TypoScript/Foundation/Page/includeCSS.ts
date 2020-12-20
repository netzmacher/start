page {
		// empty statement for proper comments only
  includeCSS {
	}
		// startNormalize, startFoundation, startStart, startCssAWiIcon (if.isTrue = "{$start.css.a.wiIcon}"), startDataCeColumns
  includeCSS =
  includeCSS {
    startNormalize			= {$start.foundation.files.css.normalize}
    startFoundation			= {$start.foundation.files.css.foundation}
    startStart					= {$start.foundation.files.css.basic}
    startCssArrow		= {$start.foundation.files.css.arrow}
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
    startMegamenu				= {$start.foundation.files.css.megamenu}
		// #i0224, 190404, dwildt
		//startRteCodesnippet = EXT:start/Resources/Public/CKeditor/4.11.3/Plugins/codesnippet/lib/highlight/styles/default.css
    startPowermail			= {$start.foundation.files.css.powermail}
    startTxnews					= EXT:start/Resources/Public/Css/Extensions/tx_news.css
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
    startCssArrow		= {$start.foundation.files.css.arrow}
			// if.isTrue = $start.css.a.wiIcon (here: {$start.css.a.wiIcon})
    startCssAWiIcon = {$start.foundation.files.css.aTagWiIcon}
    startCssAWiIcon {
			if = 
			if {
				isTrue = {$start.css.a.wiIcon}
			}
		}
    startMegamenu		= {$start.foundation.files.css.megamenu}
    startPowermail	= {$start.foundation.files.css.powermail}
    startTxnews			= EXT:start/Resources/Public/Css/Extensions/tx_news.css
  }
}