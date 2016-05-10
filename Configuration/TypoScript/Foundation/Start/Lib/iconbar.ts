start {
    // for proper comments only
  lib {
  }
    // iconbar, iconbarFromDirs
  lib =
  lib {
    iconbar < tt_content.menu.20.default
    iconbar {
      stdWrap {
        prepend >
        outerWrap = <div class="{$start.foundation.iconbar.class}" role="navigation">|</div>
      }
      1 >
      1 = GMENU
      1 {
        noBlur = 1
        #wrap = |
        NO = 1
        NO {
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          altImgResource {
            import = uploads/media/
            import {
              field = media
              listNum = {$start.foundation.iconbar.no.listNum}
            }
          }
          stdWrap {
            htmlSpecialChars = 1
          }
          #wrap = |
          ATagParams {
            wrap = class="first item" role="menuitem"|*| class="item" role="menuitem" |*| class="last item" role="menuitem"
          }
        }
          // 150901, dwildt: RO wird ausgeführt, aber in mouseover wird image von NO geschrieben!
        RO < .NO
        RO {
          altImgResource {
            import {
              listNum = {$start.foundation.iconbar.ro.listNum}
            }
          }
        }
      }
    }
    iconbarFromDirs < .iconbar
    iconbarFromDirs {
      special = directory
    }
  }
}

tt_content.menu.20 {
  startFoundationIconbar          < start.lib.iconbar
  startFoundationIconbarFromDirs  < start.lib.iconbarFromDirs
}