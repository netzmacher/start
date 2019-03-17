tt_content.gridelements_pi1 {
		// empty statement for proper comments only
	10 {
	}
		// EXT:start: field = header
	10 = TEXT
	10 {
			// if header_layout != 100
		if =
		if {
			value.field = header_layout
			equals = 100
			negate = 1
		}
		field = header
			// <hX>|</hX>. X depends on header_layout
		wrap =
		wrap {
				// cObject.key.field = header_layout
			stdWrap =
			stdWrap {
				cObject = CASE
				cObject {
					key {
						field = header_layout
					}
						// <h2>|</h2>
					default = TEXT
					default {
						value = <h2>|</h2>
					}
						// <h1>|</h1>
					1 = TEXT
					1 {
						value = <h1>|</h1>
					}
						// <h2>|</h2>
					2 = TEXT
					2 {
						value = <h2>|</h2>
					}
						// <h3>|</h3>
					3 = TEXT
					3 {
						value = <h3>|</h3>
					}
						// <h4>|</h4>
					4 = TEXT
					4 {
						value = <h4>|</h4>
					}
						// <h5>|</h5>
					5 = TEXT
					5 {
						value = <h5>|</h5>
					}
						// <h6>|</h6>
					6 = TEXT
					6 {
						value = <h6>|</h6>
					}
				}
			}
		}
	}
}