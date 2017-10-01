config {
  absRefPrefix                      = {$start.config.absRefPrefix}
  admPanel                          = {$start.config.admPanel}
  baseURL                           = {$start.config.baseURL}
  cache_clearAtMidnight             = {$start.config.cache_clearAtMidnight}
  compressCss                       = {$start.compress.css}
  compressJs                        = {$start.compress.jss}
  concatenateCss                    = {$start.compress.css}
  concatenateJs                     = {$start.compress.jss}
	contentObjectExceptionHandler     = {$start.config.contentObjectExceptionHandler}
	contentObjectExceptionHandler {
		errorMessage = {$start.config.contentObjectExceptionHandler.errorMessage}
	}
  disablePrefixComment              = {$start.config.disablePrefixComment}
  doctype                           = {$start.config.doctype}
  headerComment                     = {$start.config.headerComment}
  htmlTag_langKey                   = {$start.config.htmlTag_langKey}
  htmlTag_setParams                 = {$start.config.htmlTag_setParams}
  inlineStyle2TempFile              = {$start.config.inlineStyle2TempFile}
  language                          = {$start.config.language}
  locale_all                        = {$start.config.locale_all}
  pageTitleFirst                    = {$start.config.pageTitleFirst}
  prefixLocalAnchors                = {$start.config.prefixLocalAnchors}
  removeDefaultJS                   = {$start.config.removeDefaultJS}
  spamProtectEmailAddresses         = {$start.config.spamProtectEmailAddresses}
  spamProtectEmailAddresses_atSubst = {$start.config.spamProtectEmailAddresses_atSubst}
  tx_realurl_enable                 = {$start.config.tx_realurl_enable}
  typolinkEnableLinksAcrossDomains  = {$start.config.typolinkEnableLinksAcrossDomains}
}

[globalString = ENV:HTTPS=on]
  config {
    baseURL = {$start.config.baseURLhttps}
  }
[global]