start {
  foundation {
    breadcrumbs {
      # cat=start - foundation - breadcrumbs//100; type=boolean;            label= includeNotInMenu:Display a page title even it isn't visible in the menu
      includeNotInMenu = 0
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