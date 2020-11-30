start {
  foundation {
    topbar {
      # cat=start - foundation - topbar*//100;  type=string;                 label= Name*:[OBLIGATE!] Your company name. I.e: Die Netzmacher. Will be overriden by corresponding page property. If both are empty – page property and this property, name won't displayed.
      name                = TYPO3 Start
      # cat=start - foundation - topbar*//101;  type=string;                 label= Title*:[OBLIGATE!] Title tag of the top bar name. I.e: TYPO3 agency
      title               = Start TYPO3 Responsive! (start)
      # cat=start - foundation - topbar*//201;  type=+int;                   label= Stop level:Show submenus up to this level. 0: no submenus. 1: First level submenus. 2: Submenus up to level 2, ...
      stoplevel						= 99
      # cat=start - foundation - topbar*//202;  type=+int;                   label= Crop:Maximum length of a menu item
      crop								= 40
      # cat=start - foundation - topbar*//301;  type=string;                 label= Icon label:The icon label is displayed in minimised menus.
      icon.label.default  = Menu
      # cat=start - foundation - topbar*//302;  type=string;                 label= Icon label (German):The icon label for minimised menus in German language.
      icon.label.de       = Menü
      # cat=start - foundation - topbar*//303;  type=options[contain-to-grid,contain-to-grid fixed,fixed,contain-to-grid vertical];  label= Top bar position: Full-browser width by default. To make the top bar stay fixed as you scroll, select "fixed". If you want your navigation to be set to your grid width, wrap it with "contain-to-grid". You may use fixed and contain-to-grid together.
      position            = contain-to-grid
      # cat=start - foundation - topbar*//304;  type=options[left,right];    label= Main menu position: left or right.
      section.position    = right
      # cat=start - foundation - topbar*//305;  type=options[true,false];    label= Mouse hover: Recommended. Top bar menus will open by a mouse hover, visitor doesn't need to click.
      is_hover            = true
      # cat=start - foundation - topbar*//306;  type=options[true,false];    label= Show parent link:Recommended. Will copy parent links into dropdowns for mobile navigation.
      mobile_show_parent_link = true
    }
  }
}

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Foundation/Start/Constants/Foundation/Topbar/searchform.ts">