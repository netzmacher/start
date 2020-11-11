page {
		// empty statement for proper comments only
  63148 {
  }
    // start FLUIDTEMPLATES
  63148 = CASE
  63148 {
      // top | MAIN | bottom
    start__blue_01 = FLUIDTEMPLATE
    start__blue_01 {
			templateName = Blue_01
				// 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Be_layout/, 20 = {$start.fluid.path.be_layout.layouts}
      layoutRootPaths = 
			layoutRootPaths {
				10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Be_layout/
				20 = {$start.fluid.path.be_layout.layouts}
			}
        // 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Be_layout/, 20 = {$start.fluid.path.be_layout.partials}
      partialRootPaths =
      partialRootPaths {
        10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Be_layout/
        20 = {$start.fluid.path.be_layout.partials}
      }
				// 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Be_layout/, 20 = {$start.fluid.path.be_layout.templates}
			templateRootPaths =
			templateRootPaths {
				10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Be_layout/
				20 = {$start.fluid.path.be_layout.templates}
			}
      variables {
      }
				// classCell = {$start.foundation.grid.class.cell}, classColMainContentMain, classRow	= {$start.foundation.grid.class.row}
      settings =
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopCenter    = small-12
        classColMainContentMain         = small-12
        classColMainContentBottomCenter = small-12
        classRow												= {$start.foundation.grid.class.row}
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop} {$start.foundation.grid.class.rowPlusStage}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}  {$start.foundation.grid.class.rowPlusStage}
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
      // Four rows: header || top || content || footer
    start__blue_02 < .start__blue_01
    start__blue_02 {
      templateName = Blue_02.html
#      settings {
#        classColMainContentBottomCenter >
#      }
    }
      // Four rows: header || content || bottom || footer
    start__blue_03 < .start__blue_01
    start__blue_03 {
      templateName = Blue_03.html
#      settings {
#        classColMainContentTopCenter >
#      }
    }
      // Four rows: header || content || footer
    start__blue_05 < .start__blue_01
    start__blue_05 {
      templateName = Blue_05.html
#      settings {
#        classColMainContentTopCenter >
#      }
    }
      // Five rows: header || top || left | content | right || bottom || footer
    start__blue_01_01_lr < .start__blue_01
    start__blue_01_01_lr {
      templateName = Blue_01_01_lr.html
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.right}
      }
    }
      // Five rows: header || top || content | right || bottom || footer
    start__blue_01_02_r < .start__blue_01_01_lr
    start__blue_01_02_r {
      templateName = Blue_01_02_r.html
      settings {
        classColMainContentLeft >
        classColMainContentRight = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
      }
    }
      // Five rows: header || top || left | content || bottom || footer
    start__blue_01_03_l < .start__blue_01_01_lr
    start__blue_01_03_l {
      templateName = Blue_01_03_l.html
      settings {
        classColMainContentRight >
        classColMainContentLeft = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
      }
    }
      // top | MAIN | bottom
    start__blue_04 < .start__blue_01
    start__blue_04 {
      templateName = Blue_04.html
      settings {
        classRowPlusMain	= {$start.foundation.grid.class.rowPlusMainFullWidth}
      }
    }
  }
}