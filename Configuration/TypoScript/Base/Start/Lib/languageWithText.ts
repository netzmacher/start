  // for proper comments only
start {
}
  // lib
start =
start {
    // for proper comments only
  lib {
  }
    // languageWithText
  lib =
  lib {
      // Display languageWithText, if current page isn't root page
    languageWithText = HMENU
    languageWithText {
      special = language
      special {
        value = 0,1,2
      }
      wrap = <nav class="languageWithText">|</nav>
      1 = TMENU
      1 {
        noBlur = 1
        NO = 1
        NO {
					value = de || en || fr
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          allWrap = |
          stdWrap {
            htmlSpecialChars = 1
          }
        }
        CUR < .NO
        CUR = 1
        CUR {
          ATagParams = class="current"
        }
      }
    }
  }
}

// #t1577, 170930, dwildt, -
tt_content.menu {
  20 {
    startFoundationLanguageWithText < start.lib.languageWithText
  }
}