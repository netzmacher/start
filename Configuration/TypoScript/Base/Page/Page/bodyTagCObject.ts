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
				// data = backend_layout_next_level || backend_layout
			10 = TEXT
			10 {
				data = levelfield:-2,backend_layout_next_level,slide
				override {
					field = backend_layout
				}
				required = 1
			}
				// data = layout
			20 = TEXT
			20 {
				data = levelfield:-2,layout,slide
				required = 1
				noTrimWrap = | layout-||
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