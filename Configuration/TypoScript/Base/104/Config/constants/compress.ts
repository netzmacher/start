start {

  compress {
    # cat=start - compress css and jss//100; type=boolean; label= CSS:If set, CSS files will compressed. This property will enabled: config.compressCss. $TYPO3_CONF_VARS['FE']['compressionLevel'] must set to true or at least to 1.
    css = 0
    # cat=start - compress css and jss//101; type=boolean; label= JSS:If set, JSS files will compressed. This property will enabled: config.compressJs. $TYPO3_CONF_VARS['FE']['compressionLevel'] must set to true or at least to 1.
    jss = 0
  }

}