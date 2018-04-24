[globalVar = LIT:tt_content = {$styles.content.shortcut.tables}]
	// condition meets, if TypoScript template FluidStyledContent is included. Internal: #t1827
  // Then $styles.content.shortcut.tables returns tt_content
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/TtContent/Fluid_Styled_Content/_setup.ts">
[else]
	// condition doesn't met, FluidStyledContent isn't included, CssStyledContent must be included.
  <INCLUDE_TYPOSCRIPT: source="FILE:EXT:start/Configuration/TypoScript/Base/TtContent/CSS_Styled_Content/setup.ts">
[global]