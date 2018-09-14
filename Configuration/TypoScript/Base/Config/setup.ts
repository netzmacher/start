config {
  absRefPrefix                      = {$start.config.absRefPrefix}
  admPanel                          = {$start.config.admPanel}
  baseURL                           = {$start.config.baseURL}
  cache_clearAtMidnight             = {$start.config.cache_clearAtMidnight}
  compressCss                       = {$start.compress.css}
  compressJs                        = {$start.compress.jss}
  concatenateCss                    = {$start.concatenate.css}
  concatenateJs                     = {$start.concatenate.jss}
	contentObjectExceptionHandler     = {$start.config.contentObjectExceptionHandler}
	contentObjectExceptionHandler {
		errorMessage = {$start.config.contentObjectExceptionHandler.errorMessage}
	}
  disablePrefixComment              = {$start.config.disablePrefixComment}
  doctype                           = {$start.config.doctype}
  headerComment                     = {$start.config.headerComment}
  htmlTag_langKey                   = {$start.config.language.htmlTag_langKey}
  htmlTag_setParams                 = {$start.config.language.htmlTag_setParams}
  inlineStyle2TempFile              = {$start.config.inlineStyle2TempFile}
  language                          = {$start.config.language.language}
  locale_all                        = {$start.config.language.locale_all}
  pageTitleFirst                    = {$start.config.pageTitleFirst}
  prefixLocalAnchors                = {$start.config.prefixLocalAnchors}
  removeDefaultJS                   = {$start.config.removeDefaultJS}
  spamProtectEmailAddresses         = {$start.config.spamProtectEmailAddresses}
  spamProtectEmailAddresses_atSubst = {$start.config.spamProtectEmailAddresses_atSubst}
  sys_language_mode									= {$start.config.language.sys_language_mode}
  sys_language_overlay					  	= {$start.config.language.sys_language_overlay}
  sys_language_uid									= {$start.config.language.sys_language_uid}
  tx_realurl_enable                 = {$start.config.tx_realurl_enable}
  typolinkEnableLinksAcrossDomains  = {$start.config.typolinkEnableLinksAcrossDomains}
}

[globalString = ENV:HTTPS=on]
  config {
    baseURL = {$start.config.baseURLhttps}
  }
[global]
