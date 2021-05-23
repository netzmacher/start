page {
		// EXT:start: 101
	jsFooterInline =
	jsFooterInline {
			// EXT:start: Trigger for the first tab of the tabs-containers
		101 = TEXT
		101 {
			if.isTrue.data = register:startTabIsLoaded
			value (
				$(document).ready(function () {
					setTimeout(function () {
						$('.tab-title:first-child a').trigger('click')
					}, 1);
				});
)
		}
	}
}