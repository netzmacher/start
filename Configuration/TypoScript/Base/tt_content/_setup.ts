<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/gridelements.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/image.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/menu.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/txStartPagemedia.ts">

[globalVar = LIT:tt_content = {$styles.content.shortcut.tables}] || [compatVersion = 9.5.0]
	// condition meets, if TypoScript template FluidStyledContent is included or TYPO3 version is equal or greater than 9.5.0. Internal: #t1827, #i0192, #i0259
  // Then $styles.content.shortcut.tables returns tt_content
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts">
[else]
	// condition doesn't met, FluidStyledContent isn't included, CssStyledContent must be included. Internal #i0192
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/CSS_Styled_Content/setup.ts">
[global]