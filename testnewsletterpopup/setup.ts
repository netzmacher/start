page {
  includeJSFooter {
			// if.isTrue start.foundation.javascript.includeJS.startFastclick (here: {$start.foundation.javascript.includeJS.startFastclick})
    newsletterModal	= EXT:start/Resources/Public/JavaScript/Libs/start/newsletterModal.js
		jQueryCookie		= EXT:start/Resources/Public/JavaScript/Libs/jquery-cookie/1.4.1/jquery.cookie.js
	}
}

start.structure.content.main.11 = COA
start.structure.content.main.11 {
	10 = TEXT
	10 {
		value (

			<div id="newsletterModal" class="reveal-modal" data-expires="30" data-delay="10" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
				<div class="row">
					<div class="columns">
						<h1 id="modalTitle">Keine Neuigkeit und Veranstaltung versäumen?</h1>
					</div>
				</div>
				<div class="row">
					<div class="columns medium-6">
						<a href="index.php?id=9656" class="button expand newsletterModal_close">Newsletter abonnieren :)</a>
					</div>
					<div class="columns medium-6">
						<span class="button expand secondary newsletterModal_close">Ich bin nicht interessiert :(</span>
					</div>
				</div>
				<a class="close-reveal-modal newsletterModal_close" aria-label="Close">&#215;</a>
			</div>
			
)
	}
}