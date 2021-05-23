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
				// #i0253, 190811, ftrojahn, 1-/+
        //outerWrap = <ul class="side-nav" role="navigation" title="Link List">|</ul>
				outerWrap = <ul class="side-nav inline-list" role="menu" title="Link List">|</ul>
      }
      1 >
      1 = GMENU
      1 {
        noBlur = 1
				// #i0255, 190815, dwildt, 3-
#				// #i0252, 190811, ftrojahn, 1-/+
#        //wrap = <ul class="inline-list">|</ul>
#				stdWrap.outerWrap = <ul class="side-nav inline-list" role="menu" title="Link List">|</ul>
        NO = 1
        NO {
          ATagTitle {
            field = description // abstract // subtitle // title
          }
          altImgResource {
						import {
							cObject = FILES 
							cObject { 
								references { 
									table			= pages 
									uid.field = tsfe:id 
									fieldName = media 
								} 
								maxItems	= 1 
								begin			= {$start.foundation.gmenu.no.listNum}
								renderObj = IMG_RESOURCE 
								renderObj { 
									required = 1 
									file {
										import.data					= file:current:publicUrl 
										treatIdAsReference	= 1 
										width								= {$start.foundation.gmenu.image.width}
										height							= {$start.foundation.gmenu.image.height}
									} 
								} 
							} 
						} 
          }
          stdWrap {
            htmlSpecialChars = 1
          }
          wrap = <li role="menuitem">|</li>
        }
        CUR < .NO
        CUR = {$start.foundation.gmenu.cur.enabled}
        CUR {
          wrap = <li role="menuitem" class="active">|</li>
		      altImgResource.import.cObject.begin	= {$start.foundation.gmenu.cur.listNum}
        }
        CURIFSUB < .CUR
        RO < .NO
        RO = {$start.foundation.gmenu.ro.enabled}
        RO {
          wrap = <li role="menuitem" class="rollover">|</li>
		      altImgResource.import.cObject.begin	= {$start.foundation.gmenu.ro.listNum}
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