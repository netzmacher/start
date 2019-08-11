start {
    // for proper comments only
  lib {
  }
    // thumbnails, thumbnailsFromDirs
  lib =
  lib {
    thumbnails < tt_content.menu.20.default
    thumbnails {
      stdWrap {
        prepend >
        outerWrap = <ul class="side-nav" role="navigation" title="Thumbnail Menu">|</ul>
      }
      1 >
      1 = GMENU
      1 {
        noBlur = 1
				// #i0252, 190811, ftrojahn, 1-/+
        //wrap = <ul class="inline-list">|</ul>
				stdWrap.outerWrap = <ul class="side-nav inline-list" role="menu" title="Link List">|</ul>
        NO = 1
        NO {
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          XXXaltImgResource {
          }
          10 = IMAGE
          10 {
            import = uploads/media/
            import {
              field = media
              listNum = {$start.foundation.thumbnails.no.listNum}
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
              listNum = {$start.foundation.thumbnails.ro.listNum}
            }
          }
        }
      }
    }
    thumbnails >
    thumbnails = HMENU
    thumbnails {
      #special = directory
      special = list
      special.value.field = pages
      1 = TMENU
      1 {
        wrap = {$start.foundation.thumbnails.wraps.menu}
        NO {
          doNotLinkIt = 1
          stdWrap {
              // image, caption, short
            cObject = COA
            cObject {
              10 = FILES
              10 {
                references {
                  fieldName = media
                  table     = pages
                }
                renderObj = IMAGE
                renderObj {
                  file {
                    width   = {$start.foundation.thumbnails.width}
                    height  = {$start.foundation.thumbnails.height}
                    maxW    = {$start.foundation.thumbnails.width}
                    maxH    = {$start.foundation.thumbnails.height}
                    import {
                      data = file:current:publicUrl
                    }
                  }
                  titleText {
                    cObject = COA
                    cObject {
                      field = title
                    }
                  }
                  altText < .titleText
                  imageLinkWrap = 1
                  imageLinkWrap {
                    enable = 1
                    typolink {
                      parameter {
                        field = uid
                      }
                    }
                  }
                }
                begin     = {$start.foundation.thumbnails.begin}
                maxItems  = {$start.foundation.thumbnails.maxItems}
                stdWrap {
                  wrap = {$start.foundation.thumbnails.wraps.menu.item.thumbnail}
                }
              }
                // caption: title
              20 = TEXT
              20 {
                if {
                  isTrue = {$start.foundation.thumbnails.enable.menu.item.caption}
                }
                field             = title
                htmlSpecialChars  = 1
                typolink {
                  parameter {
                    field = uid
                  }
                }
                wrap = {$start.foundation.thumbnails.wraps.menu.item.caption}
              }
                // short: abstract // description
              30 = TEXT
              30 {
                if {
                  isTrue = {$start.foundation.thumbnails.enable.menu.item.short}
                }
                field = abstract // description
                htmlSpecialChars = 1
                wrap = {$start.foundation.thumbnails.wraps.menu.item.short}
              }
            }
            wrap = {$start.foundation.thumbnails.wraps.menu.item}
          }
        }
      }
    }
    thumbnailsFromDirs < .thumbnails
    thumbnailsFromDirs {
      special = directory
    }
  }
}

tt_content.menu.20 {
  startThumbnails          < start.lib.thumbnails
  startThumbnailsFromDirs  < start.lib.thumbnailsFromDirs
}