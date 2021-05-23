page {
		// empty statement for proper comments only
	headerData {
	}
		// EXT:start: 333
	headerData =
	headerData {
			// EXT:start RSS Alternate Link. 10, 20
		333 = COA
		333 {
				// if.isTrue = $start.pages.rss (here: {$start.pages.rss})
			10 = COA
			10 {
					// isTrue = {$start.pages.rss}
				if =
				if.isTrue = {$start.pages.rss}
				wrap = <link rel="alternate" type="application/rss+xml" title="{$start.pages.rss.tagtitle}" href="|" />
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
				// if.isTrue = $start.pages.rss (here: {$start.pages.rss2})
			20 = COA
			20 {
					// isTrue = {$start.pages.rss2}
				if =
				if.isTrue = {$start.pages.rss2}
				wrap = <link rel="alternate" type="application/rss+xml" title="{$start.pages.rss2.tagtitle}" href="|" />
				10 = TEXT
				10 {
					stdWrap {
						typolink {
							// The uid of the page with the RSS feed
							parameter		= {$start.pages.rss2}
							returnLast	= url
						}
					}
				}
			}
		}
	}
}