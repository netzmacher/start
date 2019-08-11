start {
  foundation {
    thumbnails {
      # cat=start - foundation - thumbnails//100;      type=int+;              label= begin: position of the image in the list of images
      begin     = 0
      # cat=start - foundation - thumbnails//101;      type=int+;              label= max items: number of maximum items
      maxItems  = 1
      # cat=start - foundation - thumbnails//200;      type=string;            label= height: height of the image in pixel. If an "c" is appended, cropping is enabled.
      height    = 100c
      # cat=start - foundation - thumbnails//201;      type=string;            label= width: width of the image in pixel. If an "c" is appended, cropping is enabled.
      width     = 100c
      # cat=start - foundation - thumbnails//301;      type=string;            label= wrap menu: wrap the menu
      wraps.menu     = <ul class="inline-list" role="menu">|</ul>
      # cat=start - foundation - thumbnails//302;      type=string;            label= wrap menu item: wrap the menu item
      wraps.menu.item     = <li role="menuitem">|</li>
      # cat=start - foundation - thumbnails//303;      type=string;            label= wrap thumbnail: wrap the thumbnail of the menu item
      wraps.menu.item.thumbnail     = <div class="thumbnail">|</div>
      # cat=start - foundation - thumbnails//304;      type=string;            label= wrap caption: wrap the caption of the menu item thumbnail
      wraps.menu.item.caption     = <div class="caption">|</div>
      # cat=start - foundation - thumbnails//305;      type=string;            label= wrap short: wrap the short of the menu item
      wraps.menu.item.short     = <div class="short">|</div>
      # cat=start - foundation - thumbnails//404;      type=booelan;           label= enable caption: enable the caption of the menu item thumbnail
      enable.menu.item.caption  = 1
      # cat=start - foundation - thumbnails//405;      type=boolean;           label= enable short: enable the short of the menu item
      enable.menu.item.short    = 1
    }
  }
}