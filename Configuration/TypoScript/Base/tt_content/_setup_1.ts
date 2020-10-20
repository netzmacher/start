<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/gridelements.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/image.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/menu.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartBreadcrumbs.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartSubNav.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartTopNav.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartPagemedia.ts">

[extension.isLoaded('css_styled_content') == 1] || [userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper::isLoaded('css_styled_content')]
	// First part should run upto TYPO3 9.5, second part from TYPO3 10.4
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/CSS_Styled_Content/_setup.ts">
[global]

[extension.isLoaded('fluid_styled_content') == 1] || [userFunc = Netzmacher\Start\Userfunc\ExtensionWrapper::isLoaded('fluid_styled_content')]
	// First part should run upto TYPO3 9.5, second part from TYPO3 10.4
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts">
[global]
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts">
