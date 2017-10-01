# ****************
# CType: menu
# ****************
tt_content.menu = COA
tt_content.menu {
	10 = < lib.stdheader

	20 = CASE
	20 {
		key.field = menu_type

		# "Menu of these pages"
		default = HMENU
		default {
			special = list
			special.value.field = pages
			stdWrap {
				prepend = COA
				prepend {
					stdWrap {
						if.isTrue.field = accessibility_bypass
					}
					10 = LOAD_REGISTER
					10 {
						accessibility_bypass_text = TEXT
						accessibility_bypass_text {
							field = accessibility_bypass_text
						}
					}
					20 = CONTENT
					20 {
						table = tt_content
						select {
							pidInList = this
							orderBy = sorting
							where {
								dataWrap = sorting>{field:sorting}
							}
							languageField = sys_language_uid
							max = 1
						}
						renderObj = TEXT
						renderObj {
							required = 1
							data = LLL:EXT:css_styled_content/Resources/Private/Language/locallang.xlf:menu.bypassNavigation
							override.data = register:accessibility_bypass_text
							trim = 1
							htmlSpecialChars = 1
							typolink {
								parameter {
									field = pid
								}
								section {
									field = uid
								}
							}
							wrap = <li class="csc-nav-bypass">|</li>
						}
					}
					30 = RESTORE_REGISTER
				}
				outerWrap = <ul class="csc-menu csc-menu-def">|</ul>
				required = 1
			}
			1 = TMENU
			1 {
				target < lib.parseTarget
				target =
				target.override = {$PAGE_TARGET}
				NO {
					stdWrap.htmlSpecialChars = 1
					wrapItemAndSub = <li>|</li>
					ATagTitle.field = description // title
				}
			}
		}
	}
	20.stdWrap {
		wrap {
			cObject = COA
			cObject {
				10 = TEXT
				10 {
					field = accessibility_title
					htmlSpecialChars = 1
					dataWrap = <map id="map{field:uid}" title="|">
					dataWrap {
						override = <map name="map{field:uid}" title="|">
						override {
							if {
								isFalse.data = TSFE:xhtmlDoctype
							}
						}
					}
				}

				20 = TEXT
				20 {
					value = |</map>
				}
			}
			if {
				isTrue {
					field = accessibility_title
				}
			}
		}
		editIcons = tt_content: menu_type, pages
		editIcons.iconTitle.data = LLL:EXT:css_styled_content/Resources/Private/Language/locallang.xlf:eIcon.menuSitemap

		prefixComment = 2 | Menu/Sitemap element:
	}
}