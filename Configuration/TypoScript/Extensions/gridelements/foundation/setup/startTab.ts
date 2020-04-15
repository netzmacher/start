  // for proper comments only
start {
}
  // gridelements
start =
start {
    // for proper comments only
  gridelements {
  }
    // start: accordion or tabs (startTab)
  gridelements =
  gridelements {
    startTab < lib.gridelements.defaultGridSetup
      // for proper comments only
    startTab {
    }
      // accordion or tabs: wrap, columns
    startTab =
    startTab {
			cObject = FLUIDTEMPLATE
			cObject {
				file = EXT:start/Resources/Private/Gridelements/Fluid/startTab.html
			}
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startTab < start.gridelements.startTab