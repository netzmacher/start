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
        // 20
      lineBottom = COA
      lineBottom {
        if {
          isTrue = {$start.pages.siteLineBottom}
        }
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.siteLineBottom}
            //where     = colPos=21
          }
        }
        stdWrap {
          wrap = <div class="siteLine siteLineBottom"><div class="row"><div class="columns"> |</div></div></div>
        }
      }
        // lineTop
      lineTop = COA
      lineTop {
        if {
          isTrue = {$start.pages.siteLineTop}
        }
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.siteLineTop}
            //where     = colPos=21
          }
        }
        stdWrap {
          required  = 1
          wrap      = <div class="siteLine siteLineTop"><div class="row"><div class="columns"> |</div></div></div>
        }
      }
    }
  }
}