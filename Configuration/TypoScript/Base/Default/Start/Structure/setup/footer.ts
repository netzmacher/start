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
        30 < styles.content.get
        30 {
          select {
            where = colPos=22
          }
          slide = {$start.fluid.path.be_layout.slide}
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
        30 < styles.content.get
        30 {
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
			main < start.lib.footer.main
      top < start.structure.content.bottom
      // CONTENT, stdWrap
      top = COA
      top {
        30 {
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