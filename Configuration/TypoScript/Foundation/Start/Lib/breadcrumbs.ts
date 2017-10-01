  // for proper comments only
start {
}
  // lib
start =
start {
    // for proper comments only
  lib {
  }
    // breadcrumbs
  lib =
  lib {
      // Display breadcrumbs, if current page isn't root page
    breadcrumbs = HMENU
    breadcrumbs {
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
      includeNotInMenu = {$start.foundation.breadcrumbs.includeNotInMenu}
      special = rootline
      special {
        range = {$start.foundation.breadcrumbs.special.range}
      }
      wrap = <nav class="breadcrumbs">|</nav>
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
    startFoundationBreadcrumbs < start.lib.breadcrumbs
  }
}

// #t1577, 170930, dwildt, +
#tt_content.startFoundationBreadcrumbs = COA
#tt_content.startFoundationBreadcrumbs {
#	10 = < lib.stdheader
#	20 < start.lib.breadcrumbs
#}
#[compatVersion = 7.6]
#	tt_content.menu {
#		20 {
#			startFoundationBreadcrumbs < start.lib.breadcrumbs
#		}
#	}
#	tt_content.startFoundationBreadcrumbs >
#[global]
