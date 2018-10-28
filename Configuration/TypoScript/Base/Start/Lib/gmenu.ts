start {
    // for proper comments only
  lib {
  }
    // gmenu, gmenuFromDirs
  lib =
  lib {
    gmenu < tt_content.menu.20.default
    gmenu {
      stdWrap {
        prepend >
        outerWrap = <ul class="side-nav" role="navigation" title="Link List">|</ul>
      }
      1 >
      1 = GMENU
      1 {
        noBlur = 1
        wrap = <ul class="inline-list">|</ul>
        NO = 1
        NO {
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          altImgResource {
            import = uploads/media/
            import {
              field = media
              listNum = {$start.foundation.gmenu.no.listNum}
            }
          }
          stdWrap {
            htmlSpecialChars = 1
          }
          wrap = <li role="menuitem">|</li>
        }
          // 150901, dwildt: RO wird ausgeführt, aber in mouseover wird image von NO geschrieben!
        RO < .NO
        RO {
          altImgResource {
            import {
              listNum = {$start.foundation.gmenu.ro.listNum}
            }
          }
        }
      }
    }
    gmenuFromDirs < .gmenu
    gmenuFromDirs {
      special = directory
    }
  }
}

tt_content.menu.20 {
  startGmenu          < start.lib.gmenu
  startGmenuFromDirs  < start.lib.gmenuFromDirs
}