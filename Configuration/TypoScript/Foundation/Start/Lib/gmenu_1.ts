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
        noBlur          = 1
        wrap            = <ul class="inline-list">|</ul>
        XXXapplyTotalH     = 10
        XXXuseLargestItemX = 1
        XXXuseLargestItemY = 1
        NO = 1
        NO {
          XXXATagTitle {
            field = description // abstract // subtitle // title
          }
          XXXXY        = [20.w]+10,[20.h]+4
          XXXbackColor = #ffcc99
          10 = IMAGE
          10 {
            file = typo3conf/ext/start/Resources/Public/Images/BackendLayouts/start_bronze_01.gif
          }
          XXX11 = FILE
          XXX11 {
            import = uploads/media/
            import {
              field = media
              XXXlistNum = {$start.ntalente.lib.gmenu.no.listNum}
              listNum = 0
            }
          }
          XXX20 = FILES
          XXX20 {
            references {
              table = pages
              data  = levelmedia:-1, slide
            }
            renderObj = COA
            renderObj {
              10 = IMAGE
              10 {
                file {
                  import {
                    data = file:current:publicUrl
                  }
                  XXXheight = {$myConst.dims.header_image.maxH}
                  XXXwidth = {$myConst.dims.header_image.maxW}
                }
                XXXstdWrap.typolink.parameter.data = file:current:link
                XXXstdWrap {
                  typolink {
                    parameter = {$myConst.pages.root}
                    title     = {$myConst.words.title_tag_rootpage}
                  }
                }
              }
            }
            begin = 0
            maxItems = 1
          }
          30 = TEXT
          30 {
            field = title
          }
          XXXstdWrap {
            htmlSpecialChars = 1
          }
          allWrap = <li role="menuitem">|</li>
        }
          // 150901, dwildt: RO wird ausgeführt, aber in mouseover wird image von NO geschrieben!
        RO < .NO
        RO {
          XXX10 {
            import {
              listNum = {$start.ntalente.lib.gmenu.ro.listNum}
            }
          }
        }
      }
      1 >
      1 = GMENU
      1 {
        NO = 1
        NO {
          ATagParams = class=""
          xxx5 = IMAGE
          xxx5 {
            file {
              import = uploads/media/
              import.data = levelmedia:-1,slide
              import.treatIdAsReference = 1
              import.listNum = 0
            }
          }
          10 = IMAGE
          10 {
            file {
              import.data = levelfield : -1, media, slide
              treatIdAsReference = 1
              import.listNum = 0
            }
          }
          xxx20 = FILES
          xxx20 {
            references {
              table = pages
              data  = levelmedia:-1, slide
            }
            renderObj = COA
            renderObj {
              10 = IMAGE
              10 {
                file {
                  import {
                    data = file:current:publicUrl
                  }
                }
              }
            }
            xxxbegin = 0
            xxxmaxItems = 1
          }
        }
        # rollhover
        RO < .NO
        RO = 1
        RO{
          ATagParams = class=""
          5 {
            file {
              import.listNum = 1
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