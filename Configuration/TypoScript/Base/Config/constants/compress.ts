start {

  compress {
    # cat=start - compress css and jss//100; type=boolean; label= CSS:If set, CSS files will compressed and concatenated. These properties will enabled: config.compressCss, config.concatenateCss.
    css = 1
    # cat=start - compress css and jss//101; type=boolean; label= JSS:If set, JSS files will compressed. These properties will enabled: config.compressJs, config.concatenateJs. $TYPO3_CONF_VARS['FE']['compressionLevel'] must set to true or at least to 1.
    jss = 1
  }

}