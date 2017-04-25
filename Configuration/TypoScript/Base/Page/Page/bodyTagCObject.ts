page = PAGE
page {
		// start: insertData, value
  XXXbodyTagCObject = TEXT
  XXXbodyTagCObject {
    insertData = 1
    value = <body id="bodyId-{TSFE:id}">
  }
		// start: insertData, value
  bodyTagCObject = COA
  bodyTagCObject {
		10 = TEXT
		10 {
			data = page:uid
			noTrimWrap = | id="bodyId-|"|
		}
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