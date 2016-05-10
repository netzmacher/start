  // for proper comments only
start {
}
start =
start {
    // for proper comments only
  structure {
  }
    // footer
  structure =
  structure {
    // bottom (22), main (21), top (20)
    footer =
    footer {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=22
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--footerbottom--><section class="footer footerbottom"><div class="row"><div class="columns"> |</div></div></section><!--/footerbottom-->
          }
        }
      }
      // CONTENT, stdWrap
      library = COA
      library {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.footer.library}
            where     = colPos=0
          }
          stdWrap {
            required  = 1
            wrap      = <!--footerlibrary--><section class="footerlibrary"><div class="row"><div class="columns no-pad-left no-pad-right"> |</div></div></section><!--/footerlibrary-->
          }
        }
      }
      main < start.structure.content.bottom
      main {
        20 {
          select {
            where = colPos=21
          }
          stdWrap {
            wrap      = <!--footermain--><section class="footer footermain"><div class="row"><div class="columns"> |</div></div></section><!--/footermain-->
            required  >
            wrap      >
          }
        }
      }
      // CONTENT, stdWrap
      top < start.structure.content.bottom
      top {
        20 {
          select {
            where = colPos=20
          }
          stdWrap {
            wrap      = <!--footertop--><section class="footer footertop"><div class="row"><div class="columns"> |</div></div></section><!--/footertop-->
          }
        }
      }
    }
  }
}