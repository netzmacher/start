  // for proper comments only
start {
}
  // lib
start =
start {
    // for proper comments only
  lib {
  }
    // languageWithIcons
  lib =
  lib {
      // Display languageWithIcons, if current page isn't root page
    languageWithIcons = HMENU
    languageWithIcons {
        // if rootpage uid isn't current page uid
      if =
      if {
        value {
            // rootpage uid
          data = leveluid:{$start.navigation.entryLevel}
        }
        equals {
            // current page uid
          data = page:uid
        }
        negate = 1
      }
      includeNotInMenu = {$start.foundation.languageWithIcons.includeNotInMenu}
      special = rootline
      special {
        range = {$start.foundation.languageWithIcons.special.range}
      }
      wrap = <nav class="languageWithIcons">|</nav>
      1 = TMENU
      1 {
        noBlur = 1
        NO = 1
        NO {
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
    startFoundationLanguageWithIcons < start.lib.languageWithIcons
  }
}