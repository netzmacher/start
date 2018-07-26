page {
 		// empty statement for proper comments only
  jsFooterInline {
	}
		// EXT:start: 2512
  jsFooterInline =
  jsFooterInline {
			// empty statement for proper comments only
		2512 {
		}
			// EXT:start: newsletter popup on exit intent
		2512 = TEXT
		2512 {
			value (

				/* EXT:start: page.jsFooterInline.2512 */
				$(document).ready(function () {
					bioEp.init({
						  cookieExp:   {$start.newsletterpopup.exitintent.js.cookieExp}
						, delay:       {$start.newsletterpopup.exitintent.js.delay}
						, showOnDelay: {$start.newsletterpopup.exitintent.js.showOnDelay}
					});
				});

)
				// if.isTrue = $start.newsletterpopup.exitintent.page (here: {$start.newsletterpopup.exitintent.page})
			if =
			if {
				isTrue = {$start.newsletterpopup.exitintent.page}
			}
		}
	}
}
