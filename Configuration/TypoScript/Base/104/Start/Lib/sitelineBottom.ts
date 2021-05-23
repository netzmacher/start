start {
    // for proper comments only
  lib {
  }
    // sitelineBottom
  lib =
  lib {				
			// 20: if.isTrue = $start.pages.siteLineBottom (here: {$start.pages.siteLineBottom})
		sitelineBottom = COA
		sitelineBottom {
			20 < styles.content.get
			20 {
				select {
					pidInList = {$start.pages.siteLineBottom}
					//where     = colPos=21
				}
					// if.isTrue = $start.pages.siteLineBottom (here: {$start.pages.siteLineBottom})
				stdWrap =
				stdWrap {
						// if.isTrue = $start.pages.siteLineBottom (here: {$start.pages.siteLineBottom})
					if =
					if {
						isTrue = {$start.pages.siteLineBottom}
					}
				}
			}
				// (c) Start TYPO3 Responsive!
			30 = TEXT
			30 {
				value = Dies ist eine Website mit <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a>. Einem kostenlosen TYPO3-Template. TYPO3 und sein Logo sind Marken der TYPO3 Association.
				lang {
					de = Dies ist eine Website mit <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a> Einem kostenlosen TYPO3-Template. TYPO3 und sein Logo sind Marken der TYPO3 Association.
					en = This is a Website based on <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a> A TYPO3-Template without any fees. TYPO3 and its logo are trademarks of the TYPO3 Association.
				}
				wrap = <p class="copyright text-center">|</p>
			}

			stdWrap {
				wrap = <div class="siteLineBottom"><div class="row siteLine"><div class="columns"> |</div></div></div>
			}
		}
	}
}	