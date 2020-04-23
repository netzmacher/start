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
			lineBottom < start.lib.sitelineBottom
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