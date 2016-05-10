  // for proper comments only
start {
}
  // structure
start =
start {
    // for proper comments only
  structure {
  }
    // content
  structure =
  structure {
      // bottomLeft (4), bottomCenter (6), bottomRight (5), main (0), topLeft (1), topCenter (3), topRight (2)
    content =
    content {
        // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=3
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--contentbottom--><!--TYPO3SEARCH_begin--><section class="content contentbottom"><div class="row"><div class="columns"> |</div></div></section><!--TYPO3SEARCH_end--><!--/contentbottom-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomLeft = COA
      bottomLeft {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=4
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--bottomLeft--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/bottomLeft-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomCenter < start.structure.content.bottomLeft
      bottomCenter {
        20 {
          select {
            where = colPos=6
          }
          stdWrap {
            wrap      = <!--bottomCenter--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/bottomCenter-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomRight < start.structure.content.bottomLeft
      bottomRight {
        20 {
          select {
            where = colPos=5
          }
          stdWrap {
            wrap      = <!--bottomRight--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/bottomRight-->
          }
        }
      }
        // CONTENT, stdWrap
      left = COA
      left {
        20 < styles.content.get
        20 {
          select {
            where = colPos=1
          }
          slide = -1
        }
      }
        // CONTENT, stdWrap
      main = COA
      main {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=0
          }
        }
      }
        // CONTENT, stdWrap
      right = COA
      right {
        20 < styles.content.get
        20 {
          select {
            where = colPos=2
          }
          slide = -1
        }
      }
        // CONTENT, stdWrap
      topLeft = COA
      topLeft {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=1
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--topLeft--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/topLeft-->
          }
        }
      }
        // CONTENT, stdWrap
      topCenter < start.structure.content.topLeft
      topCenter {
        20 {
          select {
            where = colPos=3
          }
          stdWrap {
            wrap      = <!--topCenter--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/topCenter-->
          }
        }
      }
        // CONTENT, stdWrap
      topRight < start.structure.content.topLeft
      topRight {
        20 {
          select {
            where = colPos=2
          }
          stdWrap {
            wrap      = <!--topRight--><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--><!--/topRight-->
          }
        }
      }
    }
  }
}