page {
		// empty statement for proper comments only
	headerData {
	}
		// EXT:start: 332
	headerData =
	headerData {
			// EXT:start: <title>...</title>
		332 = COA
		332 {
				// isTrue = $start.config.noPageTitle (here: {$start.config.noPageTitle})
			if =
			if {
				isTrue = {$start.config.noPageTitle}
			}
				// 10: Home, if ... 20: data = page: title, if ...
			10 = COA
			10 {
					// if page is the root page: Home
				10 = TEXT
				10 {
					if =
					if {
						value {
								// rootpage uid
							data = leveluid:{$start.navigation.entryLevel}
						}
						equals {
								// current page uid
							data = page:uid
						}
					}
					value = Home
					lang {
						de = Home
						en = Home
					}
				}
					// if page is not the root page: data = page: title
				20 = TEXT
				20 {
					if =
					if {
						value {
								// rootpage uid
							data = leveluid:{$start.navigation.entryLevel}
						}
						equals {
								// current page uid
							data = page:uid
						}
						negate = 1
					}
					data = page: title
				}
			}
				// data = leveltitle: 0
			20 = TEXT
			20 {
				data = leveltitle: 0
				noTrimWrap = | – ||
			}
			wrap = <title>|</title>
		}
	}
}