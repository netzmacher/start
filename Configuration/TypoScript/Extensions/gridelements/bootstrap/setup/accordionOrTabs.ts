  // for proper comments only
start {
}
  // gridelements
start =
start {
    // for proper comments only
  gridelements {
  }
    // start: accordion or tabs (startAccordion)
  gridelements =
  gridelements {
    startAccordion < lib.gridelements.defaultGridSetup
      // for proper comments only
    startAccordion {
    }
      // accordion or tabs: wrap, columns
    startAccordion =
    startAccordion {
			cObject = FLUIDTEMPLATE
			cObject {
				file = EXT:start/Resources/Private/Gridelements/Fluid/accordionOrTabs.html
			}
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startAccordion < start.gridelements.startAccordion