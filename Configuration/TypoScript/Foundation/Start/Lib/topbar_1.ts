start {
    // for proper comments only
  lib {
  }
    // topbar
  lib =
  lib {
        // 1, 2, 3, 4, stdWrap, wrap
    topbar = HMENU
    topbar {
      1 = TMENU
      1 {
        expAll    = 1
        collapse  = 0
        noBlur    = 1
        stdWrap {
          wrap {
              // ul, section
            cObject = COA
            cObject {
                // <ul>|</ul>
              10 = COA
              10 {
                  // li.name
                10 = TEXT
                10 {
                  value = {$start.foundation.topbar.name}
                  typolink {
                    parameter = {$start.pages.root}
                    title     = {$start.foundation.topbar.title}
                  }
                  wrap  = <li class="name"><h1>|</h1></li>
                }
                  // li.menu-icon
                20 = TEXT
                20 {
                  value = {$start.foundation.topbar.icon.label.default}
                  lang {
                    de = {$start.foundation.topbar.icon.label.de}
                    en = {$start.foundation.topbar.icon.label.default}
                  }
                  wrap  (
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon">
                      <a href="#"><span>|</span></a>
                    </li>
)
                }
                  // <ul>|</ul>
                wrap =
                wrap {
                  stdWrap {
                    cObject = TEXT
                    cObject {
                      value     = |
                      dataWrap  = <ul id="dropdown-{field:uid}" class="title-area">|</ul>
                    }
                  }
                }
              }
                // <section>|</section>
              20 = TEXT
              20 {
                value (
                  <section class="top-bar-section">
                    <ul class="{$start.foundation.topbar.section.position}">|</ul>
                  </section>
)
              }
            }
          }
        }
        NO = 1
        NO {
          ATagTitle {
            field = abstract // description // subtitle // keywords // title
          }
          allWrap = <li class="divider divider-first"></li><li class="page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="page-{elementUid}">|</li><li class="divider"></li> |*| <li class="page-{elementUid} last">|</li><li class="divider divider-last"></li>
          subst_elementUid = 1
          ATagParams {
            wrap = class="first level-0" |*| class="all level-0" |*| class="last level-0"
          }
          stdWrap {
            htmlSpecialChars = 1
          }
        }
        ACT < .NO
        ACT {
          allWrap = <li class="divider divider-first"></li><li class="active act page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="active act page-{elementUid}">|</li><li class="divider"></li> |*| <li class="active act page-{elementUid} last">|</li><li class="divider divider-last"></li>
        }
        ACTIFSUB < .NO
        ACTIFSUB {
          allWrap >
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="divider divider-first"></li><li class="active act page-{field:uid} first has-dropdown">| |*| <li class="active act page-{field:uid} has-dropdown">| |*| <li class="active act page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
        }
        CUR < .NO
        CUR {
          allWrap = <li class="divider divider-first"></li><li class="active cur page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="active cur page-{elementUid}">|</li><li class="divider"></li> |*| <li class="active cur page-{elementUid} last">|</li><li class="divider divider-last"></li>
        }
        CURIFSUB < .NO
        CURIFSUB {
          allWrap >
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="divider divider-first"></li><li class="active cur page-{field:uid} first has-dropdown">| |*| <li class="active cur page-{field:uid} has-dropdown">| |*| <li class="active cur page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
        }
        IFSUB < .NO
        IFSUB {
          allWrap >
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="divider divider-first"></li><li class="page-{field:uid} first has-dropdown">| |*| <li class="page-{field:uid} has-dropdown">| |*| <li class="page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
        }
      }
      2 < .1
      2 {
        stdWrap >
        stdWrap {
          dataWrap = <ul id="dropdown-{field:uid}" class="dropdown dropdown-{register:count_menuItems} page-{field:uid}">|</ul>
        }
        NO {
          ATagParams {
            wrap = class="level-1"
          }
          allWrap = <li class="page-{elementUid} first">|</li> |*| <li class="page-{elementUid}">|</li> |*| <li class="page-{elementUid} last">|</li>
        }
        ACT {
          ATagParams {
            wrap = class="level-1"
          }
          allWrap = <li class="active act page-{elementUid} first">|</li> |*| <li class="active act page-{elementUid}">|</li> |*| <li class="active act page-{elementUid} last">|</li>
        }
        ACTIFSUB {
          ATagParams {
            wrap = class="level-1"
          }
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="active act page-{field:uid} first has-dropdown">| |*| <li class="active act page-{field:uid} has-dropdown">| |*| <li class="active act page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li>
        }
        CUR {
          ATagParams {
            wrap = class="level-1"
          }
          allWrap = <li class="active cur page-{elementUid} first">|</li> |*| <li class="active cur page-{elementUid}">|</li> |*| <li class="active cur page-{elementUid} last">|</li>
        }
        CURIFSUB {
          ATagParams {
            wrap = class="level-1"
          }
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="active cur page-{field:uid} first has-dropdown">| |*| <li class="active cur page-{field:uid} has-dropdown">| |*| <li class="active cur page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li>
        }
        IFSUB {
          ATagParams {
            wrap = class="level-1"
          }
          before {
            cObject = TEXT
            cObject {
              dataWrap = <li class="page-{field:uid} first has-dropdown">| |*| <li class="page-{field:uid} has-dropdown">| |*| <li class="page-{field:uid} last has-dropdown">|
            }
          }
          wrapItemAndSub = |</li>
        }
      }
      3 < .2
      3 {
        NO {
          ATagParams {
            wrap = class="level-2"
          }
        }
        ACT {
          ATagParams {
            wrap = class="level-2"
          }
        }
        ACTIFSUB {
          ATagParams {
            wrap = class="level-2"
          }
        }
        CUR {
          ATagParams {
            wrap = class="level-2"
          }
        }
        CURIFSUB {
          ATagParams {
            wrap = class="level-2"
          }
        }
        IFSUB {
          ATagParams {
            wrap = class="level-2"
          }
        }
      }
      4 < .2
      4 {
        NO {
          ATagParams {
            wrap = class="level-3"
          }
        }
        ACT {
          ATagParams {
            wrap = class="level-3"
          }
        }
        ACTIFSUB {
          ATagParams {
            wrap = class="level-3"
          }
        }
        CUR {
          ATagParams {
            wrap = class="level-3"
          }
        }
        CURIFSUB {
          ATagParams {
            wrap = class="level-3"
          }
        }
        IFSUB {
          ATagParams {
            wrap = class="level-3"
          }
        }
      }
      5 < .2
      5 {
        NO {
          ATagParams {
            wrap = class="level-4"
          }
        }
        ACT {
          ATagParams {
            wrap = class="level-4"
          }
        }
        ACTIFSUB {
          ATagParams {
            wrap = class="level-4"
          }
        }
        CUR {
          ATagParams {
            wrap = class="level-4"
          }
        }
        CURIFSUB {
          ATagParams {
            wrap = class="level-4"
          }
        }
        IFSUB {
          ATagParams {
            wrap = class="level-4"
          }
        }
      }
      6 < .2
      6 {
        NO {
          ATagParams {
            wrap = class="level-5"
          }
        }
        ACT {
          ATagParams {
            wrap = class="level-5"
          }
        }
        ACTIFSUB {
          ATagParams {
            wrap = class="level-5"
          }
        }
        CUR {
          ATagParams {
            wrap = class="level-5"
          }
        }
        CURIFSUB {
          ATagParams {
            wrap = class="level-5"
          }
        }
        IFSUB {
          ATagParams {
            wrap = class="level-5"
          }
        }
      }
      stdWrap {
        if {
          isTrue = {$start.foundation.topbar.position}
        }
        wrap = <div class="{$start.foundation.topbar.position}">|</div>
      }
      wrap = <nav class="top-bar" data-topbar data-options="custom_back_text:false;is_hover:{$start.foundation.topbar.is_hover};mobile_show_parent_link:{$start.foundation.topbar.mobile_show_parent_link};">|</nav>
    }
  }
}

tt_content.menu.20 {
  startFoundationTopBar < start.lib.topbar
}