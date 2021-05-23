start {
  config {
	  language {
			# cat=start - config - language//100; type=options[,content_fallback,ignore,strict]; label= Mode:See @ https://docs.typo3.org/typo3cms/FrontendLocalizationGuide/LocalizationModes/Index.html
			sys_language_mode								  = content_fallback
			# cat=start - config - language//101; type=options[0,1,hideNonTranslated]; label= Overlay:System Language Overlay. 0 = Just fetch records from the selected language, no overlay will happen. 1 = Fetch records from the default language and overlay them with translations, if a record is not translated the default language will be used. hideNonTranslated = Fetch records from the default language and overlay them with translations. If some record is not translated it will not be shown. See @ https://docs.typo3.org/typo3cms/TyposcriptReference/Setup/Config/#sys-language-overlay
			sys_language_overlay							= 1
	  }
  }
}