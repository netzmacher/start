start {
  navigation {
		# cat=start - navigation//101; type=int; label= entryLevel:Defines at which level in the rootLine menues should start. Default is "0" which gives us a menu of the very first pages on the site. If the value is < 0, entryLevel is chosen from "behind" in the rootLine. Thus "-1" is a menu with items from the outermost level, "-2" is the level before the outermost... See: https://docs.typo3.org/typo3cms/TyposcriptReference/ContentObjects/Hmenu/Index.html#hmenu
		entryLevel = 0
	}
}