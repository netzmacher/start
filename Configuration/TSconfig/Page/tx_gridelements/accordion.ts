tx_gridelements {
	setup {
		startAccordion {
			title				= LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startAccordion.title
			description = LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startAccordion.description
			flexformDS	= FILE:EXT:start/Configuration/FlexForm/startAccordion.xml
			icon				= EXT:start/Resources/Public/Icons/tx_gridelements/startAccordion.gif
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
							name = LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.tsconf.startAccordion.rows.1.columns.1.name
							colPos = 0
						}
					}
				}
			}
		}
	}
}
