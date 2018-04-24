  // for proper comments only
start {
}
  // structure
start =
start {
    // for proper comments only
  structure {
  }
    // site
  structure =
  structure {
      // lineBottom, lineTop
    site =
    site {
        // 20: if.isTrue = $start.pages.siteLineBottom (here: {$start.pages.siteLineBottom})
      lineBottom = COA
      lineBottom {
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
					value = Dies ist eine Website mit <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a>. Einem kostenlosen TYPO3-Template.
					lang {
						de = Dies ist eine Website mit <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a> Einem kostenlosen TYPO3-Template.
						en = This is a Website based on <a href="http://start-typo3-responsive.de/" class="external-link-new-window" title="start-typo3-responsive.de" data-htmlarea-external="1">Start TYPO3 Responsive!</a> A TYPO3-Template without any fees.
					}
					wrap = <p class="copyright text-center">|</p>
        }

        stdWrap {
          wrap = <div class="siteLineBottom"><div class="row siteLine"><div class="columns"> |</div></div></div>
        }
      }
        // 20: if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
      lineTop = COA
      lineTop {
					// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
        if =
        if {
          isTrue = {$start.pages.siteLineTop}
        }
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.siteLineTop}
            //where     = colPos=21
          }
						// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
					stdWrap =
					stdWrap {
							// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
						if =
						if {
							isTrue = {$start.pages.siteLineTop}
						}
					}
        }
        stdWrap {
          required  = 1
          wrap      = <div class="siteLineTop hide-for-small-only"><div class="row siteLine"><div class="columns">|</div></div></div>
        }
      }
    }
  }
}