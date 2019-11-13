tt_content {
	txStartPagemedia = FILES
	txStartPagemedia {
		begin = 0
		maxItems = 1
		references {
			data = levelmedia:-1, slide
		}
		renderObj = COA
		renderObj {
			10 = IMAGE
			10 {
				file {
					crop.data = file:current:crop
					import {
						data = file:current:publicUrl
					}
					height = {$start.lib.pagemedia.height}
					width = {$start.lib.pagemedia.width}
				}
				stdWrap.typolink.parameter.data = file:current:link
			} 
		}
	} 
}
