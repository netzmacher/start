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
	}
}