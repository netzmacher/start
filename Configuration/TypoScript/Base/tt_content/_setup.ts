<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/image.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/menu.ts">

[globalVar = LIT:tt_content = {$styles.content.shortcut.tables}]
	// condition meets, if TypoScript template FluidStyledContent is included. Internal: #t1827, #i0192
  // Then $styles.content.shortcut.tables returns tt_content
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/Fluid_Styled_Content/_setup.ts">
[else]
	// condition doesn't met, FluidStyledContent isn't included, CssStyledContent must be included. Intrnal #i0192
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/tt_content/CSS_Styled_Content/setup.ts">
[global]