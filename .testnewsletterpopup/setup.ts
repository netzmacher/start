start.structure.content.main.11 = COA
start.structure.content.main.11 {
		// wrap modal: div ...
		wrap (

			<div id="newsletterModal" class="reveal-modal" data-expires="30" data-delay="10" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
				|
				<a class="close-reveal-modal newsletterModal_close" aria-label="Close">&#215;</a>
			</div>
			
)
		// row columns: h1
	10 = TEXT
	10 {
		wrap (

				<div class="row">
					<div class="columns">
						<h1>|</h1>
					</div>
				</div>
			
)
		value = Don't miss neither events nor latest news?
		lang {
			de = Keine Neuigkeit und Veranstaltung versäumen?
			en = Don't miss neither events nor latest news?
		}
	}
		// row columns: buttons
	20 = COA
	20 {
		wrap (

			<div class="row">
				|
			</div>

)
			// columns medium-6: newsletter subcription
		10 = COA
		10 {
			wrap (

					<div class="columns medium-6">
						|
					</div>

)
			20 = TEXT
			20 {
				value = Subscribe to our newsletter :)
				lang {
					de = Newsletter abonnieren :)
					en = Subscribe to our newsletter :)
				}
				typolink {
					ATagParams	= class="button expand newsletterModal_close"
					parameter		= {$start.pages.newslettersubscription}
				}
			}
		}
			// columns medium-6: no thanks
		20 = TEXT
		20 {
			wrap (

				<div class="columns medium-6">
					<span class="button expand secondary newsletterModal_close">|</span>
				</div>

)
			value = No thanks, I'm not interested :(
			lang {
				de = Nein danke, ich bin nicht interessiert :(
				en = No thanks, I'm not interested :(
			}
		}
	}
}