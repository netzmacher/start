start {
    // for proper comments only
  lib {
  }
    // thumbnails, thumbnailsFromDirs
  lib =
  lib {
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