<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/gridelements.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/image.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/menu.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartBreadcrumbs.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartJumboteaser.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartSubNav.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartTopNav.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartPagemedia.ts">

	// Is running from TYPO3 10.4 (#t5081)
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts" condition="extension.isLoaded('fluid_styled_content') == 1">
[userFunc = TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fluid_styled_content')]
	// Is running upto TYPO3 9.5 (#t5081)
	// condition meets, if TypoScript template FluidStyledContent is included. Internal: #t1827, #i0192, #i0265
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts">
[global]

[userFunc = TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('css_styled_content')]
	// condition doesn't met, FluidStyledContent isn't included, CssStyledContent must be included. Internal #i0192, #i0265
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/CSS_Styled_Content/_setup.ts">
[global]
