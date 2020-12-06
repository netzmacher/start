page = PAGE
page {
		// start: id, class
  bodyTagCObject = COA
  bodyTagCObject {
			// id="bodyId-{page:uid}
		10 = TEXT
		10 {
			data = page:uid
			noTrimWrap = | id="bodyId-|" |
		}
			// class="{backend_layout} {layout}"
		20 = COA
		20 {
				// data = backend_layout_next_level || backend_layout, slide
			10 = TEXT
			10 {
				data = levelfield:-2,backend_layout_next_level,slide
				override {
					field = backend_layout
				}
				required = 1
			}
				// field = layout
			20 = TEXT
			20 {
				//data = levelfield:-2,layout,slide
				field = layout
				required = 1
				noTrimWrap = | layout-||
			}
				// data = tx_startgreen_ci_style
			30 = TEXT
			30 {
				data = levelfield:-1,tx_startgreen_ci_style,slide
				required = 1
				noTrimWrap = | ||
			}
			wrap {
				stdWrap {
					cObject = TEXT
					cObject {
						value = class="|"
					}
				}
			}
		}
		wrap = <body|>
  }

}