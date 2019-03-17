page = PAGE
page {
		// start: id, class
  bodyTagCObject = COA
  bodyTagCObject {
			// id="bodyId-{page:uid}
		10 = TEXT
		10 {
			data = page:uid
			noTrimWrap = | id="bodyId-|"|
		}
			// class="{backend_layout}"
		20 = TEXT
		20 {
			data = levelfield:-2,backend_layout_next_level,slide
			override {
				field = backend_layout
			}
			noTrimWrap = | class="|"|
		}
		wrap = <body|>
  }

}