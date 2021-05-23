lib {
	contentElement {
			// empty statement for proper comments only
		settings {
		}
			// EXT:start
		settings =
		settings {
				// empty statement for proper comments only
			start {
			}
				// image
			start =
			start {
					// empty statement for proper comments only
				image {
				}
					// breakpoint
				image =
				image {
						// empty statement for proper comments only
					breakpoint {
					}
						// desktop, smartphone, tablet
					breakpoint =
					breakpoint {
						desktop			= {$start.responsive.image.breakpoint.desktop}
						smartphone	= {$start.responsive.image.breakpoint.smartphone}
						tablet			= {$start.responsive.image.breakpoint.tablet}
					}
				}
			}
		}
	}
}