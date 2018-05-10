start {
  foundation {
    breadcrumbs {
      # cat=start - foundation - breadcrumbs//100; type=boolean;          label= includeNotInMenu:Display a page title even it isn't visible in the menu
      includeNotInMenu = 0
      # cat=start - foundation - breadcrumbs//102; type=string;           label= range:range of the rootline menu. See: https://docs.typo3.org/typo3cms/TyposcriptReference/ContentObjects/Hmenu/Index.html#special-rootline
      special.range = 0|10
    }
	}
}