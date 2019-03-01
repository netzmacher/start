page {
		// empty statement for proper comments only
	headerData {
	}
	headerData =
		// 341: org: RSS Alternate Link for news, if.isTrue = $start.pages.rss (here: {$start.pages.rss})
	headerData {
		341 = COA
		341 {
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