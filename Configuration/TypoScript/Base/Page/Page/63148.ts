page {
		// empty statement for proper comments only
  63148 {
  }
    // start FLUIDTEMPLATES
  63148 = CASE
  63148 {
    key {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
    }
    default = TEXT
    default {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
      noTrimWrap {
        stdWrap {
          cObject = TEXT
          cObject {
            value (
              |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                The current backend layout "|" can't handled.<br />
                Please empty the TYPO3-frontend-cache.<br />
                If this hasn't any effect, please choose a proper backend layout. <br />
                This is a prompt of the extension Start TYPO3 Responsive! (start). 
              </div>|
)
            lang {
              de (
                |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                  Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden.<br />
                  Bitte leere den TYPO-Frontend-Cache.<br />
                  Wenn das nicht hilft, w&auml;hle bitte ein g&uuml;ltiges Backend-Layout.<br />
                  Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (start). 
                </div>|
)
            }
          }
        }
      }
    }
      // One column: content
    start__bronze_01 = FLUIDTEMPLATE
    start__bronze_01 {
      file = {$start.fluid.path.templates}bronze_01.html
#			  // 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/
#			templateRootPaths =
#			templateRootPaths {
#					10 = {$start.fluid.path.templates}
#			}
			  // 10 = {$start.fluid.path.layouts}
      layoutRootPaths = 
			layoutRootPaths {
					10 = {$start.fluid.path.layouts}
			}
				// 10 = {$start.fluid.path.partials}
      partialRootPaths =
      partialRootPaths {
        10 = {$start.fluid.path.partials}
      }
      variables {
      }
				// classColMainContentMain 
      settings =
      settings {
        classColMainContentMain =
      }
				// wrap = <!--[if lt IE 9]> ...
      stdWrap =
      stdWrap {
        wrap (
            <!--[if lt IE 9]>
              <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            |
)
      }
    }
      // Two columns: content | right
    start__bronze_02 < .start__bronze_01
    start__bronze_02 {
      file = {$start.fluid.path.templates}bronze_02.html
			templateName >
				// classColMainContentRight
      settings =
      settings {
        classColMainContentMain   >
        classColMainContentMain   = small-12 medium-8
        classColMainContentRight  = show-for-medium-up medium-4
      }
    }
      // Two columns: left | content
    start__bronze_03 < .start__bronze_01
    start__bronze_03 {
      file = {$start.fluid.path.templates}bronze_03.html
				// classColMainContentLeft
      settings =
      settings {
        classColMainContentMain >
        classColMainContentLeft = show-for-medium-up medium-4
        classColMainContentMain = small-12 medium-8
      }
    }
      // Three columns: left | content | right
    start__bronze_04 < .start__bronze_01
    start__bronze_04 {
      file = {$start.fluid.path.templates}bronze_04.html
				// classColMainContentLeft, classColMainContentRight
      settings =
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = show-for-medium-up medium-3
        classColMainContentMain   = small-12 medium-6
        classColMainContentRight  = show-for-medium-up medium-3
      }
    }
      // Four columns
    start__default < .start__bronze_01
    start__default {
      file = {$start.fluid.path.templates}default.html
    }
      // One column: content
    start__newsletter_01 = TEXT
    start__newsletter_01 {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
      noTrimWrap {
        stdWrap {
          cObject = TEXT
          cObject {
            value (
              |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                The current backend layout "|" can't handled. 
                If you like to use it, please include the static template "Start [8] +e-mail". 
                This is a prompt of the extension Start TYPO3 Responsive! (start). 
              </div>|
)
            lang {
              de (
                |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                  Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden. 
                  Wenn Du es verwenden möchtest, binde bitte das Static-Template "Start [8] +E-Mail" ein. 
                  Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (start).
                </div>|
)
            }
          }
        }
      }
    }
      // One column // #71476
    start__print_01 < .start__bronze_01
    start__print_01 {
      file = {$start.fluid.path.templates}print_01.html
    }
      // Two rows: header (left | center | right) | content
    start__silver_01 < .start__bronze_01
    start__silver_01 {
      file = {$start.fluid.path.templates}silver_01.html
      settings >
      settings {
        classColMainContentTopLeft      = small-12 medium-4 large-4
        classColMainContentTopCenter    = small-12 medium-4 large-4
        classColMainContentTopRight     = small-12 medium-4 large-4
        classColMainContentMain         = small-12
      }
    }
      // Three rows: header (left | center | right) | content | bottom (left | center | right)
    start__silver_02 < .start__bronze_02
    start__silver_02 {
      file = {$start.fluid.path.templates}silver_02.html
      settings >
      settings {
        classColMainContentTopLeft      = small-12 medium-4 large-4
        classColMainContentTopCenter    = small-12 medium-4 large-4
        classColMainContentTopRight     = small-12 medium-4 large-4
        classColMainContentMain         = small-12
        classColMainContentBottomLeft   = small-12 medium-4 large-4
        classColMainContentBottomCenter = small-12 medium-4 large-4
        classColMainContentBottomRight  = small-12 medium-4 large-4
      }
    }
      // Two rows: content | bottom (left | center | right)
    start__silver_03 < .start__bronze_03
    start__silver_03 {
      file = {$start.fluid.path.templates}silver_03.html
      settings >
      settings {
        classColMainContentMain         = small-12
        classColMainContentBottomLeft   = small-12 medium-4 large-4
        classColMainContentBottomCenter = small-12 medium-4 large-4
        classColMainContentBottomRight  = small-12 medium-4 large-4
      }
    }
      // One column
    start__simple_01 < .start__bronze_01
    start__simple_01 {
      file = {$start.fluid.path.templates}simple_01.html
    }
      // Two columns: content | right
    start__simple_02 < .start__bronze_02
    start__simple_02 {
      file = {$start.fluid.path.templates}simple_02.html
    }
      // Two columns: left | content
    start__simple_03 < .start__bronze_03
    start__simple_03 {
      file = {$start.fluid.path.templates}simple_03.html
    }
      // Three columns: left | content | right
    start__simple_04 < .start__bronze_04
    start__simple_04 {
      file = {$start.fluid.path.templates}simple_04.html
    }
  }
}