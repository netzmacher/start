temp.txt = TEXT
temp.txt {
  value = Drucken!
  if {
    value.data = GP:type
    equals = {$start.pages.print.typeNum}
  }
}

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
    // footer (21), header (11)
    print =
    print {
      footer = COA
      footer {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.print}
            where     = colPos=21
          }
          stdWrap {
            required  = 1
            wrap      = <!--footermain--><section class="footer footermain"><div class="row"><div class="columns"> |</div></div></section><!--/footermain-->
          }
        }
      }
      header = COA
      header {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            pidInList = {$start.pages.print}
            where     = colPos=11
          }
          stdWrap {
            required  = 1
            wrap      = <!--headermain--><section class="header headermain"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headermain-->
          }
        }
      }
    }
  }
}