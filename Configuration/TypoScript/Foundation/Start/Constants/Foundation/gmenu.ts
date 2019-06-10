start {
  foundation {
    gmenu {
      # cat=start - foundation - gmenu//101;      type=string;	label= Image Height: height of the image in pixel. If an "c" is appended, cropping is enabled. 
      image.height	= 150c
      # cat=start - foundation - gmenu//101;      type=string;	label= Image width: width of the image in pixel. If an "c" is appended, cropping is enabled.
      image.width		= 150c
      # cat=start - foundation - gmenu//200;      type=int+;    label= NO listNum: position of the image in the list of images for the menu in the NO (normal) state
      no.listNum		= 0
      # cat=start - foundation - gmenu//300;      type=boolean;  label= Rollover enabled: enable the rollover thumbnail
      ro.enabled		= 0
      # cat=start - foundation - gmenu//301;      type=int+;    label= RO listNum: position of the image in the list of images for the menu in the RO (rollover) state
      ro.listNum		= 1
      # cat=start - foundation - gmenu//400;      type=boolean; label= Current enabled: enable the current thumbnail
      cur.enabled		= 0
      # cat=start - foundation - gmenu//401;      type=int+;    label= CUR listNum: position of the image in the list of images for the menu in the CUR (active) state
      cur.listNum		= 1
    }
	}
}