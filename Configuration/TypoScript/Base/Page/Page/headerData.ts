page {
		// empty statement for proper comments only
	headerData {
	}
		// 333: start: RSS Alternate Link, if.isTrue = $start.pages.rss (here: {$start.pages.rss})
	headerData =
	headerData {
		333 = COA
		333 {
				// isTrue = {$start.pages.rss}
			if =
			if.isTrue = {$start.pages.rss}
			wrap = <link rel="alternate" type="application/rss+xml" title="Rss" href="|" />
			10 = TEXT
			10 {
				stdWrap {
					typolink {
						// The uid of the page with the RSS feed
						parameter		= {$start.pages.rss}
						returnLast	= url
					}
				}
			}
		}
	}
}