page {
		// empty statement for proper comments only
	2512 {
	}
		// EXT:start. 20: newsletter popup exit intent. 30: newsletter dialog on enter
	2512 = COA
	2512 {
			// if.isTrue = $start.newsletterpopup.exitintent.page (here: {$start.newsletterpopup.exitintent.page})
		if =
		if {
			isTrue = {$start.newsletterpopup.exitintent.page}
		}
		wrap (

			<div id="bio_ep_bg" class="bio_ep_bg"></div>
			<div id="bio_ep" class="bio_ep">
				|
				<div id="bio_ep_close" class="bio_ep_close">&#215;</div>
			</div>				
)
			// pidInList = {$start.newsletterpopup.exitintent.page}
		20 = CONTENT
		20 < styles.content.get
		20 {
			select {
				pidInList = {$start.newsletterpopup.exitintent.page}
				where     = colPos=0
			}
		}
			// row columns: p, if.isTrue $start.demo.enabled (here: {$start.demo.enabled})
		30 = TEXT
		30 {
			if =
			if {
				isTrue = {$start.demo.enabled}
			}
			wrap = <p style="background: orange;color: white;font-weight: bold;margin:1em 0;padding: 1em;text-align: center;">|</p>
			value = This is a demo only: no newsleter won't send.
			lang {
				de = Dies ist eine Demo: Es werden kein Newsletter versendet.
				en = This is a demo only: no newsleter won't send.
			}
		}
	}
}