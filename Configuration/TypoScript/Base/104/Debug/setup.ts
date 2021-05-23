[getTSFE().isBackendUserLoggedIn() && (request.getQueryParams()['debug']) == 1]
	// Next line has relevance for EXT:min. If EXT:min isn't installed next line doesn't matter
	plugin.tx_min.tinysource.enable = 0
	config {
		linkVars := addToList(debug(1))
		compressCss = 0
		concatenateCss = 0
		compressJs = 0
		concatenateJs = 0
		contentObjectExceptionHandler = 0
	}
[global]