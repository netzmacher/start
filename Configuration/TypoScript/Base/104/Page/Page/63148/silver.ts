page {
		// empty statement for proper comments only
  63148 {
  }
    // start FLUIDTEMPLATES
  63148 = CASE
  63148 {
      // Two rows: header (left | center | right) | content
    start__silver_01 < .start__bronze_01
    start__silver_01 {
			templateName = Silver_01.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentTopLeft      = small-12 medium-4 large-4
        classColMainContentTopCenter    = small-12 medium-4 large-4
        classColMainContentTopRight     = small-12 medium-4 large-4
        classColMainContentMain         = small-12
        classRow												= {$start.foundation.grid.class.row}
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}
      }
    }
      // Three rows: header (left | center | right) | content | bottom (left | center | right)
    start__silver_02 < .start__bronze_02
    start__silver_02 {
      templateName = Silver_02.html
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
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}
      }
    }
      // Two rows: content | bottom (left | center | right)
    start__silver_03 < .start__bronze_03
    start__silver_03 {
      templateName = Silver_03.html
      settings >
      settings {
        classCell												= {$start.foundation.grid.class.cell}
        classColMainContentMain         = small-12
        classColMainContentBottomLeft   = small-12 medium-4 large-4
        classColMainContentBottomCenter = small-12 medium-4 large-4
        classColMainContentBottomRight  = small-12 medium-4 large-4
        classRow												= {$start.foundation.grid.class.row}
        classRowPlusTop									= {$start.foundation.grid.class.rowPlusTop}
        classRowPlusMain								= {$start.foundation.grid.class.rowPlusMain}
        classRowPlusBottom							= {$start.foundation.grid.class.rowPlusBottom}
      }
    }
      // Five rows: header || top || content || bottom || footer
    start__silver_04 < .start__bronze_02
    start__silver_04 {
      templateName = Silver_04.html
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
      templateName = Silver_05.html
      settings {
        classColMainContentBottomCenter >
      }
    }
      // Four rows: header || content || right || footer
    start__silver_06 < .start__silver_04
    start__silver_06 {
      templateName = Silver_06.html
      settings {
        classColMainContentTopCenter >
      }
    }
      // Five rows: header || top || left | content | right || bottom || footer
    start__silver_07 < .start__silver_04
    start__silver_07 {
      templateName = Silver_07.html
      settings {
        classColMainContentMain   >
        classColMainContentLeft   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.left}
        classColMainContentMain   = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.main}
        classColMainContentRight  = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns03.right}
      }
    }
      // Five rows: header || top || content | right || bottom || footer
    start__silver_08 < .start__silver_07
    start__silver_08 {
      templateName = Silver_08.html
      settings {
        classColMainContentLeft >
        classColMainContentRight = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
      }
    }
      // Five rows: header || top || left | content || bottom || footer
    start__silver_09 < .start__silver_07
    start__silver_09 {
      templateName = Silver_09.html
      settings {
        classColMainContentRight >
        classColMainContentLeft = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.margin}
        classColMainContentMain = small-12 medium-{$start.fluid.path.be_layout.settings.grid.columns02.main}
      }
    }
  }
}