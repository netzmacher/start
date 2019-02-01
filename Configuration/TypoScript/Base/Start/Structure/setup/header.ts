  // for proper comments only
start {
}
start =
start {
    // for proper comments only
  structure {
  }
    // header
  structure =
  structure {
    // bottom (12), main (11), top (10)
    header =
    header {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        30 < styles.content.get
        30 {
          select {
            where = colPos=12
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--headerbottom--><section class="header headerbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headerbottom-->
          }
        }
      }
      main < start.structure.header.bottom
      // CONTENT, stdWrap
      main = COA
      main {
        30 {
          select {
            where = colPos=11
          }
          stdWrap {
            wrap      = <!--headermain--><section class="header headermain"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headermain-->
          }
        }
      }
      top < start.structure.header.bottom
			// CONTENT, stdWrap
      top = COA
      top {
        30 {
          select {
            where = colPos=10
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=10
                }
              }
            }
            wrap      = <!--headertop--><section class="header headertop"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headertop-->
          }
        }
      }
    }
  }
}