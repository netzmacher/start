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
					// if.isTrue = $start.pages.siteLineBottom (here: {$start.pages.siteLineBottom})
        if =
        if {
          isTrue = {$start.pages.siteLineBottom}
        }
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
        stdWrap {
          wrap = <div class="siteLine siteLineBottom"><div class="row"><div class="columns"> |</div></div></div>
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
          wrap      = <div class="row"><div class="columns"><div class="siteLine siteLineTop startWoMarginLeftRight hide-for-small-only">|</div></div></div>
        }
      }
    }
  }
}