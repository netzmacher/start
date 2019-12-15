  // for proper comments only
start {
}
  // lib
start =
start {
    // for proper comments only
  lib {
  }
    // languageWithText
  lib =
  lib {
      // Display languageWithText, if current page isn't root page
    languageWithText = COA
    languageWithText {
			20 = HMENU
			20 {
					special = language
					special.value = 0,1,2
					special.normalWhenNoLanguage = 0
					wrap =
					1 = TMENU
					1 {
							noBlur = 1
							NO = 1
							NO {
									doNotLinkIt = 1
									linkWrap = <li>|</li>
									stdWrap.override = English || Deutsch || Dansk
									stdWrap {
											typolink {
													parameter.data = page:uid
													additionalParams = &L=0 || &L=1 || &L=2
													ATagParams = hreflang="en-GB" || hreflang="de-DE" || hreflang="da-DK"
													addQueryString = 1
													addQueryString.exclude = L,id,no_cache
													addQueryString.method = GET
													no_cache = 0
											}
									}
							}
							ACT < .NO
							ACT.linkWrap = <li class="active">|</li>
							USERDEF1 < .NO
							USERDEF1 {
									linkWrap = <li class="text-muted">|</li>
									stdWrap.typolink >
							}
							USERDEF2 < .ACT
							USERDEF2 {
									linkWrap = <li class="text-muted">|</li>
									stdWrap.typolink >
							}
					}
			}
			wrap = <ul id="language_menu" class="language-menu">|</ul>
    }
  }
}

// #t1577, 170930, dwildt, -
tt_content.menu {
  20 {
    startFoundationLanguageWithText < start.lib.languageWithText
  }
}