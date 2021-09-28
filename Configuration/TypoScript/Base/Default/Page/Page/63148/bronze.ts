page {
		// empty statement for proper comments only
  63148 {
  }
    // start__bronze[01..04]
  63148 = CASE
  63148 {
      // One column: content
    start__bronze_01 = FLUIDTEMPLATE
    start__bronze_01 {
			templateName = Bronze_01.html
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
        classCell								= {$start.foundation.grid.class.cell}
        classColMainContentMain =
        classRow								= {$start.foundation.grid.class.row}
        classRowPlusTop					= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain				= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom			= {$start.foundation.grid.class.rowPlusBottom}
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
      templateName = Bronze_02.html
				// classColMainContentRight
      settings =
      settings {
        classColMainContentMain   >
        classColMainContentMain   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
        classColMainContentRight  = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
      }
    }
    start__bronze_02_gcms < .start__bronze_01
    start__bronze_02_gcms {
      templateName = Bronze_02_gcms.html
				// classColMainContentRight
      settings =
      settings {
        classColMainContentMain   >
        classColMainContentMainGcms   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.mainGcms}
        classColMainContentRightGcms  = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.marginGcms}
      }
    }
      // Two columns: left | content
    start__bronze_03 < .start__bronze_01
    start__bronze_03 {
      templateName = Bronze_03.html
				// classColMainContentLeft
      settings =
      settings {
        classColMainContentMain >
        classColMainContentLeft = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
      }
    }
      // Three columns: left | content | right
    start__bronze_04 < .start__bronze_01
    start__bronze_04 {
      templateName = Bronze_04.html
				// classColMainContentLeft, classColMainContentRight
      settings =
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.right}
      }
    }
	}
}