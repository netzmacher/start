start {
    // for proper comments only
  lib {
  }
    // sidenav, sidenavFromDirs
  lib =
  lib {
    sidenav < tt_content.menu.20.default
    sidenav {
      stdWrap {
        prepend >
        outerWrap = <ul class="side-nav" role="navigation" title="Link List">|</ul>
      }
      1 {
        NO {
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          wrapItemAndSub = <li role="menuitem">|</li>
        }
        ACT < .NO
        ACT = 1
        ACT {
          wrapItemAndSub = <li role="menuitem" class="active">|</li>
        }
        ACTIFSUB < .NO
        ACTIFSUB = 1
        SPC = 1
        SPC {
          stdWrap {
            cObject = TEXT
            cObject {
              value = <hr />
            }
          }
          wrapItemAndSub = <li class="spc">|</li>
        }
      }
    }
    sidenavFromDirs < .sidenav
    sidenavFromDirs {
      special = directory
    }
  }
}

tt_content.menu.20 {
  startFoundationSideNav          < start.lib.sidenav
  startFoundationSideNavFromDirs  < start.lib.sidenavFromDirs
}