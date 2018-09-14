start {
  config {
	  language {
			# cat=start - config - language//200; type=string;  label= Language:Example for German: de
			language                          = en
			# cat=start - config - language//201; type=string;  label= Language HTML:HTML tag language keyExample for German: de
			htmlTag_langKey                   = en
			# cat=start - config - language//202; type=string;  label= HTML params:HTML parameter
			htmlTag_setParams                 = lang="en" class="no-js"
			# cat=start - config - language//203; type=string;  label= Locale all:Example for German: de_DE.UTF-8
			locale_all                        = en_GB.UTF-8
			# cat=start - config - language//702; type=options[,content_fallback,ignore,strict]; label= Mode:See @ https://docs.typo3.org/typo3cms/FrontendLocalizationGuide/LocalizationModes/Index.html
			sys_language_mode								  = content_fallback
			# cat=start - config - language//702; type=options[0,1,hideNonTranslated]; label= Overlay:System Language Overlay. 0 = Just fetch records from the selected language, no overlay will happen. 1 = Fetch records from the default language and overlay them with translations, if a record is not translated the default language will be used. hideNonTranslated = Fetch records from the default language and overlay them with translations. If some record is not translated it will not be shown. See @ https://docs.typo3.org/typo3cms/TyposcriptReference/Setup/Config/#sys-language-overlay
			sys_language_overlay							= 1
			# cat=start - config - language//703; type=int; label= Uid:System Language Uid 
			sys_language_uid									= 0
	  }
  }
}