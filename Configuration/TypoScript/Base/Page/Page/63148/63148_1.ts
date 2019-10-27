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
              <div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                The current backend layout "|" can't handled.<br />
                Please empty the TYPO3-frontend-cache.<br />
								If the current backend layout is part of a different extension, may be a corresponding TypoScript template is missing.<br />
                If you can't solve the bug, please choose a proper backend layout. <br />
                This is a prompt of the extension Start TYPO3 Responsive! (EXT:start). 
              </div>
)
            lang {
              de (
                <div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                  Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden.<br />
                  Bitte leere den TYPO-Frontend-Cache.<br />
                  Ist das aktuelle Backend Layout eines einer anderen Erweiterung, fehlt eventuell ein entsprechendes TypoScript-Template.<br />
                  Wenn Du das Problem nicht beheben kann, w&auml;hle bitte ein g&uuml;ltiges Backend-Layout.<br />
                  Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (EXT:start). 
                </div>
)
              en (
								<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
									The current backend layout "|" can't handled.<br />
									Please empty the TYPO3-frontend-cache.<br />
									If the current backend layout is part of a different extension, may be a corresponding TypoScript template is missing.<br />
									If you can't solve the bug, please choose a proper backend layout. <br />
									This is a prompt of the extension Start TYPO3 Responsive! (EXT:start). 
								</div>
)
            }
          }
        }
      }
    }
      // Two rows: header (left | center | right) | content
      // Five rows: header || top || content || bottom || footer
    start__blue_01 < .start__bronze_02
    start__blue_01 {
      file = {$start.fluid.path.templates}blue_01.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopCenter    = small-12
        classColMainContentMain         = small-12
        classColMainContentBottomCenter = small-12
        classRow												= {$start.foundation.grid.class.row}
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}
      }
    }
      // Four rows: header || top || content || footer
    start__blue_02 < .start__blue_01
    start__blue_02 {
      file = {$start.fluid.path.templates}blue_02.html
      settings {
        classColMainContentBottomCenter >
      }
    }
      // Four rows: header || content || right || footer
    start__blue_03 < .start__blue_01
    start__blue_03 {
      file = {$start.fluid.path.templates}blue_03.html
      settings {
        classColMainContentTopCenter >
      }
    }
      // Five rows: header || top || left | content | right || bottom || footer
    start__blue_01_01_lr < .start__blue_01
    start__blue_01_01_lr {
      file = {$start.fluid.path.templates}blue_01_01_lr.html
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = small-12 medium-{$start.templates.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.templates.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.templates.grid.columns03.right}
      }
    }
      // Five rows: header || top || content | right || bottom || footer
    start__blue_01_02_r < .start__silver_07
    start__blue_01_02_r {
      file = {$start.fluid.path.templates}blue_01_02_r.html
      settings {
        classColMainContentLeft >
        classColMainContentRight = small-12 medium-{$start.templates.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.templates.grid.columns02.main}
      }
    }
      // Five rows: header || top || left | content || bottom || footer
    start__blue_01_03_l < .start__silver_07
    start__blue_01_03_l {
      file = {$start.fluid.path.templates}blue_01_03_l.html
      settings {
        classColMainContentRight >
        classColMainContentLeft = small-12 medium-{$start.templates.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.templates.grid.columns02.main}
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
				// classCell = {$start.foundation.grid.class.cell}, classColMainContentMain, classRow	= {$start.foundation.grid.class.row}
      settings =
      settings {
        classCell								= {$start.foundation.grid.class.cell}
        classColMainContentMain =
        classRow								= {$start.foundation.grid.class.row}
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
        classColMainContentMain   = small-12 medium-{$start.templates.grid.columns02.main}
        classColMainContentRight  = small-12 medium-{$start.templates.grid.columns02.margin}
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
        classColMainContentLeft = small-12 medium-{$start.templates.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.templates.grid.columns02.main}
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
        classColMainContentLeft   = small-12 medium-{$start.templates.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.templates.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.templates.grid.columns03.right}
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
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopLeft      = small-12 medium-4 large-4
        classColMainContentTopCenter    = small-12 medium-4 large-4
        classColMainContentTopRight     = small-12 medium-4 large-4
        classColMainContentMain         = small-12
        classRow												= {$start.foundation.grid.class.row}
      }
    }
      // Three rows: header (left | center | right) | content | bottom (left | center | right)
    start__silver_02 < .start__bronze_02
    start__silver_02 {
      file = {$start.fluid.path.templates}silver_02.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopLeft      = small-12 medium-4 large-4
        classColMainContentTopCenter    = small-12 medium-4 large-4
        classColMainContentTopRight     = small-12 medium-4 large-4
        classColMainContentMain         = small-12
        classColMainContentBottomLeft   = small-12 medium-4 large-4
        classColMainContentBottomCenter = small-12 medium-4 large-4
        classColMainContentBottomRight  = small-12 medium-4 large-4
        classRow												= {$start.foundation.grid.class.row}
      }
    }
      // Two rows: content | bottom (left | center | right)
    start__silver_03 < .start__bronze_03
    start__silver_03 {
      file = {$start.fluid.path.templates}silver_03.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentMain         = small-12
        classColMainContentBottomLeft   = small-12 medium-4 large-4
        classColMainContentBottomCenter = small-12 medium-4 large-4
        classColMainContentBottomRight  = small-12 medium-4 large-4
        classRow												= {$start.foundation.grid.class.row}
      }
    }
      // Five rows: header || top || content || bottom || footer
    start__silver_04 < .start__bronze_02
    start__silver_04 {
      file = {$start.fluid.path.templates}silver_04.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopCenter    = small-12
        classColMainContentMain         = small-12
        classColMainContentBottomCenter = small-12
        classRow												= {$start.foundation.grid.class.row}
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}
      }
    }
      // Four rows: header || top || content || footer
    start__silver_05 < .start__silver_04
    start__silver_05 {
      file = {$start.fluid.path.templates}silver_05.html
      settings {
        classColMainContentBottomCenter >
      }
    }
      // Four rows: header || content || right || footer
    start__silver_06 < .start__silver_04
    start__silver_06 {
      file = {$start.fluid.path.templates}silver_06.html
      settings {
        classColMainContentTopCenter >
      }
    }
      // Five rows: header || top || left | content | right || bottom || footer
    start__silver_07 < .start__silver_04
    start__silver_07 {
      file = {$start.fluid.path.templates}silver_07.html
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = small-12 medium-{$start.templates.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.templates.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.templates.grid.columns03.right}
      }
    }
      // Five rows: header || top || content | right || bottom || footer
    start__silver_08 < .start__silver_07
    start__silver_08 {
      file = {$start.fluid.path.templates}silver_08.html
      settings {
        classColMainContentLeft >
        classColMainContentRight = small-12 medium-{$start.templates.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.templates.grid.columns02.main}
      }
    }
      // Five rows: header || top || left | content || bottom || footer
    start__silver_09 < .start__silver_07
    start__silver_09 {
      file = {$start.fluid.path.templates}silver_09.html
      settings {
        classColMainContentRight >
        classColMainContentLeft = small-12 medium-{$start.templates.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.templates.grid.columns02.main}
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