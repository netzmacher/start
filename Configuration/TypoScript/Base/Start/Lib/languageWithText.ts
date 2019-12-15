	// https://docs.typo3.org/m/typo3/guide-frontendlocalization/master/en-us/LanguageMenu/Index.html
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
				special.value = {$start.lib.language.uids}
				special.normalWhenNoLanguage = 0
				wrap =
				1 = TMENU
				1 {
					noBlur = 1
					NO = 1
					NO {
						doNotLinkIt = 1
						linkWrap = <li>|</li>
						stdWrap {
							override = {$start.lib.language.items}
							typolink {
								parameter.data = page:uid
								additionalParams = {$start.lib.language.additionalParams}
								ATagParams = {$start.lib.language.ATagParams}
								addQueryString = 1
								addQueryString.exclude = L,id,no_cache
								addQueryString.method = GET
								no_cache = 0
							}
						}
					}
					ACT < .NO
					ACT {
						linkWrap = <li class="active">|</li>
						stdWrap.typolink >
					}
					USERDEF1 < .NO
					USERDEF1 {
						linkWrap = <li class="text-muted">|</li>
						//stdWrap.typolink >
					}
					USERDEF2 < .ACT
					USERDEF2 {
						linkWrap = <li class="active text-muted">|</li>
						stdWrap.typolink >
					}
				}
			}
			wrap = {$start.lib.language.wrap}
    }
  }
}

tt_content.menu {
  20 {
    startLanguageWithText < start.lib.languageWithText
  }
}