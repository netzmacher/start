  // for proper comments only
start {
}
  // gridelements
start =
start {
    // for proper comments only
  gridelements {
  }
    // start: accordion or tabs ({$start.gridelement.accordionOrTabs})
  gridelements =
  gridelements {
    {$start.gridelement.accordionOrTabs} < lib.gridelements.defaultGridSetup
      // for proper comments only
    {$start.gridelement.accordionOrTabs} {
    }
      // accordion or tabs: wrap, columns
    {$start.gridelement.accordionOrTabs} =
    {$start.gridelement.accordionOrTabs} {
			cObject = FLUIDTEMPLATE
			cObject {
				file = EXT:start/Resources/Private/Gridelements/Fluid/tabs.html
			}
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.{$start.gridelement.accordionOrTabs} < start.gridelements.{$start.gridelement.accordionOrTabs}