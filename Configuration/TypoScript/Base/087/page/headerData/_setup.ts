[userFunc = TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fluid_styled_content')] && [userFunc = TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('css_styled_content')]
	<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/087/page/headerData/63147.ts">
[global]

[userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper::isNotLoaded('seo_dynamic_tag')]
	// condition meets, if TypoScript template FluidStyledContent is included.
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/087/page/headerData/332.title.ts">
[END]