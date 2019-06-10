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
		// #i0224, 190404, dwildt
		//startRteCodesnippet = EXT:start/Resources/Public/CKeditor/4.11.3/Plugins/codesnippet/lib/highlight/styles/default.css
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
    startCssAWiIcon = {$start.foundation.files.css.aTagWiIcon}
    startCssAWiIcon {
				// if.isTrue = $start.css.a.wiIcon (here: {$start.css.a.wiIcon})
			if = 
			if {
				isTrue = {$start.css.a.wiIcon}
			}
		}
    startPowermail	= {$start.foundation.files.css.powermail}
    startTxnews			= EXT:start/Resources/Public/Css/Extensions/tx_news.css
  }
}