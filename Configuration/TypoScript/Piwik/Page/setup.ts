page {
		// empty statement for proper comments only
	jsInline {
	}
		// start: 1703150093 (piwik)
	jsInline =
	jsInline {
			// piwik if.isTrue = {$start.piwik.enabled}, url: {$start.piwik.url}, siteId: {$start.piwik.siteId}
		1703150093 = TEXT
		1703150093 {
				// if.isTrue = {$start.piwik.enabled}
			if =
			if {
				isTrue = {$start.piwik.enabled}
			}
				// url: {$start.piwik.url}, siteId: {$start.piwik.siteId}
			value (
				<!-- Piwik (added by Start TYPO3 Responsive) -->
					var _paq = _paq || [];
					_paq.push(['trackPageView']);
					_paq.push(['enableLinkTracking']);
					(function() {
						var u="//{$start.piwik.url}/";
						_paq.push(['setTrackerUrl', u+'piwik.php']);
						_paq.push(['setSiteId', '{$start.piwik.siteId}']);
						var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
						g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
					})();
				<!-- End Piwik Code -->
)

		}
	}
}