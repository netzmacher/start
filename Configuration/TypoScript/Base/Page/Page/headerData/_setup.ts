[extension.isLoaded('seo_dynamic_tag') == 0]
	// Should run from TYPO3 10.4. But isn't tested (dwildt, 200603)
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/Page/Page/headerData/332.title.ts">
[global]

[userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper::isNotLoaded('seo_dynamic_tag')]
	// Is running upto TYPO3 9.5
	// condition meets, if TypoScript template FluidStyledContent is included.
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/Page/Page/headerData/332.title.ts">
[END]

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/Page/Page/headerData/333.rss.ts">