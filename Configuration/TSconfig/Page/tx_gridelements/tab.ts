tx_gridelements {
	setup {
		startTab {
			title				= LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startTab.title
			description = LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startTab.description
			flexformDS	= FILE:EXT:start/Configuration/FlexForm/startTab.xml
			icon				= EXT:start/Resources/Public/Icons/tx_gridelements/startTab.gif
			# integer; Colored frame. 0, 1 = red, 2 = green, 3 = blue
			frame						= 0
			# boolean;
			topLevelLayout	= 0
			config {
				colCount = 1
				rowCount = 1
				rows.1 {
					columns {
						1 {
							name = LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startTab.rows.1.columns.1.name
							colPos = 0
						}
					}
				}
			}
		}
	}
}
