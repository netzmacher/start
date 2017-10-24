start {

  config {
    # cat=start - config*//100; type=string;  label= absRefPrefix:If this value is set, then all relative links in TypoScript are prepended with this string. Prefixing all links with a "/" results in absolute link paths: /. Prefixing all links with the path to a subdirectory: /some-subsite/. Prefixing all links with a URI scheme: http://example.com/.
    absRefPrefix                      =
    # cat=start - config*//101; type=boolean; label= Admin Panel:Display the admin panel in the frontend for a logged in backend user
    admPanel                          = 1
    # cat=start - config*//102; type=string;  label= Base URL*:*Obligate! Your base URL with ending slash. Example: http://die-netzmacher.de/
    baseURL                           =
    # cat=start - config*//103; type=string;  label= Base URL for https*:*Obligate! Your base URL with ending slash. Example: https://die-netzmacher.de/
    baseURLhttps                      = Please configure TypoScript Constant start.config.baseURLhttps
    # cat=start - config*//105; type=boolean;  label= contentObjectExceptionHandler:Disable it, if you like to see error prompts for content objects instead of an exception handling. Error prompts will cached. Please enable exception handling after the debugging.
    contentObjectExceptionHandler     = 1
		contentObjectExceptionHandler {
	    # cat=start - config*//106; type=string;  label= contentObjectExceptionHandler prompt:Error message in case of exception handling
			errorMessage = Oops an error occurred. Code: %s. If you like to know more, please disable the ContentObjectExceptionHandler @ Constant Editor > category [START - CONFIG]
		}
    # cat=start - config*//107; type=options[html5,none,xhtml_11,xhtml_basic,xhtml_frames,xhtml+rdfa_10,xhtml_strict,xhtml_trans];  label= Document type:html5 for the HTML5 doctype. none for no doctype at all. xhtml_11 for the XHTML 1.1 doctype. xhtml_basic for the XHTML basic doctype. xhtml_frames for the XHTML 1.0 Frameset doctype. xhtml_strict for the XHTML 1.0 Strict doctype. xhtml+rdfa_10 for the XHTML+RDFa 1.0 doctype. xhtml_trans for the XHTML 1.0 Transitional doctype.
    doctype                           = html5
    # cat=start - config*//108; type=boolean; label= Clear cache at midnight:Obligated, if your are using calender items.
    cache_clearAtMidnight             = 0
    # cat=start - config*//109; type=string;  label= Header comment:The content is added before the "TYPO3 Content Management Framework" comment in the <head> section of the page. Use this to insert a note like that "Programmed by My-Agency".
    headerComment                     = Development by http://die-netzmacher.de: responsive TYPO3.
    # cat=start - config*//110; type=boolean; label= Pagetitle first:TYPO3 by default prints a HTML title tag in the format "website: page title". If pageTitleFirst is set (and if the page title is printed), then the page title will be printed IN FRONT OF the template title. So it will look like "page title: website".
    pageTitleFirst                    = 0
    # cat=start - config*//301; type=boolean; label= Real URL:
    tx_realurl_enable = 0
    # cat=start - config*//302; type=boolean; label= Enable links across domains:This option enables to create links across domains using current domain's linking scheme. This option implies "config.typolinkCheckRootline=1", which will be activated automatically. Setting value of "config. typolinkCheckRootline" inside TS template will have no effect.
    typolinkEnableLinksAcrossDomains = 0
    # cat=start - config*//402; type=options[all,cached,output]; label= Prefix local anchors:Recommended: all. If set to one of the keywords, the content will have all local anchors in links prefixed with the path of the script. Basically this means that <a href="#"> will be transformed to <a href="path/path/script?params#">. This procedure is necessary if the <base> tag is set (e.g. if the "realurl" extension is used to produce speaking URLs). See property "config.baseURL". all: The content is always processed before it is possibly stored in cache (or not stored in cache). cached: The content is only processed, if the page will be put into the cache. output: The content is processed just before it is echoed out.
    prefixLocalAnchors                = all
    # cat=start - config*//403; type=boolean; label= Disable prefix comment:If set, the stdWrap property "prefixComment" will be disabled, thus preventing any revealing and space-consuming comments in the HTML source code.
    disablePrefixComment              = 1
    # cat=start - config*//501; type=options[0,1,external]; label= Remove default JS:If set, the default JavaScript in the header will be removed. The default JavaScript is the blurLink function and browser detection variables. Special case: If the value is "external", then the default JavaScript is written to a temporary file and included from that file. See "inlineStyle2TempFile" below.
    removeDefaultJS                   = external
    # cat=start - config*//502; type=boolean; label= inlineStyle2TempFile:If set, the inline styles TYPO3 controls in the core are written to a file, typo3temp/stylesheet_[hashstring].css, and the header will only contain the link to the stylesheet. The file hash is based solely on the content of the styles.
    inlineStyle2TempFile              = 1
    # cat=start - config*//601; type=int;     label=Protect e-mail:If set, then all email addresses in typolinks will be encrypted so spam bots cannot detect them. Range from -10 to 10.
    spamProtectEmailAddresses         = -3
    # cat=start - config*//602; type=string; label= Substitute @:Substitute label for the at-sign (@).
    spamProtectEmailAddresses_atSubst = @<span style="display:none;">remove-this.</span>
  }

}