start {
  foundation {
    breadcrumbs {
      # cat=start - foundation - breadcrumbs//100; type=boolean;          label= includeNotInMenu:Display a page title even it isn't visible in the menu
      includeNotInMenu = 0
      # cat=start - foundation - breadcrumbs//101; type=string;           label= entryLevel:Defines at which level in the rootLine the menu should start. Default is "0" which gives us a menu of the very first pages on the site. If the value is < 0, entryLevel is chosen from "behind" in the rootLine. Thus "-1" is a menu with items from the outermost level, "-2" is the level before the outermost... See: https://docs.typo3.org/typo3cms/TyposcriptReference/ContentObjects/Hmenu/Index.html#hmenu
      entryLevel = 0
      # cat=start - foundation - breadcrumbs//102; type=string;           label= range:range of the rootline menu. See: https://docs.typo3.org/typo3cms/TyposcriptReference/ContentObjects/Hmenu/Index.html#special-rootline
      special.range = 0|10
    }
    gmenu {
      # cat=start - foundation - gmenu//100;      type=int+;              label= listNum NO: position of the image in the list of images for the menu in the NO (normal) state
      no.listNum = 0
      # cat=start - foundation - gmenu//101;      type=int+;              label= listNum RO: position of the image in the list of images for the menu in the RO (rollover) state
      ro.listNum = 1
    }
    iconbar {
      # cat=start - foundation - iconbar//100;    type=string;            label= Class: HTML class of the icon-bar
      class = icon-bar vertical five-up
      # cat=start - foundation - iconbar//200;    type=int+;              label= listNum NO: position of the image in the list of images for the menu in the NO (normal) state
      no.listNum = 0
      # cat=start - foundation - iconbar//201;    type=int+;              label= listNum RO: position of the image in the list of images for the menu in the RO (rollover) state
      ro.listNum = 1
    }
	}
}