start {
    // for proper comments only
  lib {
  }
    // topbar
  lib =
  lib {
		topbar >
			// 10: title-bar. 20: top-bar.
    topbar = COA
    topbar {
				// title-bar
			10 = TEXT
			10 {
				value = {$start.foundation.topbar.icon.label.default}
				lang {
					de = {$start.foundation.topbar.icon.label.de}
					en = {$start.foundation.topbar.icon.label.default}
				}
				wrap  (
					<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
						<button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
						<div class="title-bar-title">|</div>
					</div>
)
			}
				// top-bar
			20 = COA
			20 {
				wrap = <div class="top-bar" id="responsive-menu">|</div>
					// left
				10 = COA
				10 {
					wrap = <div class="top-bar-left">|</div>
						// ul dropdown menu
					10 = COA
					10 {
							// <ul>|</ul>
						wrap =
						wrap {
							stdWrap {
								cObject = TEXT
								cObject {
									value     = |
									dataWrap	= <ul id="dropdown-{field:uid}" class="dropdown menu" data-dropdown-menu>|</ul>
								}
							}
						}

							// HMENU: 1, 2, 3, 4, 5, 6, wrap
						10 = HMENU
						10 {
								// ul
							1 = TMENU
							1 {
								expAll    = 1
								collapse  = 0
								noBlur    = 1
									// ul, section
								stdWrap =
								stdWrap {
									wrap {
											// ul
										cObject = COA
										cObject {
												// <ul>|</ul>
											10 = COA
											10 {
													// li.name (topbar name)
												10 = COA
												10 {
														// <h1>|</h1> (topbar name) if is true $start.foundation.topbar.name (here: {$start.foundation.topbar.name})
													10 = TEXT
													10 {
															// if is true $start.foundation.topbar.name (here: {$start.foundation.topbar.name})
														if =
														if {
															isTrue = {$start.foundation.topbar.name}
														}
														// #i0094, 170315, dwildt, ~
														data = levelfield:-1, tx_start_foundation_topbar_name, slide
														ifEmpty = {$start.foundation.topbar.name}
														typolink {
															parameter {
																cObject = COA
																cObject {
																		// URL
																	10 = TEXT
																	10 {
																		data = leveluid:0
																		noTrimWrap = || |
																	}
																		// target
																	20 = TEXT
																	20 {
																		value = -
																		noTrimWrap = || |
																	}
																		// class
																	30 = TEXT
																	30 {
																		value = -
																		noTrimWrap = |"|" |
																	}
																		// title
																	40 = TEXT
																	40 {
																		// #i0094, 170315, dwildt, ~
																		data = levelfield:-1, tx_start_foundation_topbar_title, slide
																		ifEmpty = {$start.foundation.topbar.title}
																		wrap = "|"
																	}
																}
															}
														}
													}
													wrap  = <li class="menu-text">|</li>
												}
											}
										}
									}
								}
								NO = 1
								NO {
									ATagTitle {
										field = abstract // description // subtitle // keywords // title
									}
									allWrap = <li class="divider divider-first"></li><li class="page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="page-{elementUid}">|</li><li class="divider"></li> |*| <li class="page-{elementUid} last">|</li><li class="divider divider-last"></li>
									subst_elementUid = 1
									ATagParams {
										wrap = class="first level-0" |*| class="all level-0" |*| class="last level-0"
									}
									stdWrap {
										htmlSpecialChars = 1
									}
								}
								ACT < .NO
								ACT {
									allWrap = <li class="divider divider-first"></li><li class="active act page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="active act page-{elementUid}">|</li><li class="divider"></li> |*| <li class="active act page-{elementUid} last">|</li><li class="divider divider-last"></li>
								}
								ACTIFSUB < .NO
								ACTIFSUB {
									allWrap >
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="divider divider-first"></li><li class="active act page-{field:uid} first has-submenu">| |*| <li class="active act page-{field:uid} has-submenu">| |*| <li class="active act page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
								}
								CUR < .NO
								CUR {
									allWrap = <li class="divider divider-first"></li><li class="active cur page-{elementUid} first">|</li><li class="divider"></li> |*| <li class="active cur page-{elementUid}">|</li><li class="divider"></li> |*| <li class="active cur page-{elementUid} last">|</li><li class="divider divider-last"></li>
								}
								CURIFSUB < .NO
								CURIFSUB {
									allWrap >
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="divider divider-first"></li><li class="active cur page-{field:uid} first has-submenu">| |*| <li class="active cur page-{field:uid} has-submenu">| |*| <li class="active cur page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
								}
								IFSUB < .NO
								IFSUB {
									allWrap >
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="divider divider-first"></li><li class="page-{field:uid} first has-submenu">| |*| <li class="page-{field:uid} has-submenu">| |*| <li class="page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li><li class="divider"></li> |*| |</li><li class="divider"></li> |*| |</li><li class="divider divider-last"></li>
								}
								SPC = 1
								SPC {
									allWrap = <li class="divider divider-first"></li><li class="separator first">|</li><li class="divider"></li> |*| <li class="separator">|</li><li class="divider"></li> |*| <li class="separator last">|</li><li class="divider divider-last"></li>
									stdWrap {
										htmlSpecialChars = 1
									}
								}
							}
							2 < .1
							2 {
								stdWrap >
								stdWrap {
									dataWrap = <ul id="submenu-{field:uid}" class="submenu submenu-{register:count_menuItems} menu vertical page-{field:uid}">|</ul>
								}
								NO {
									ATagParams {
										wrap = class="level-1"
									}
									allWrap = <li class="page-{elementUid} first">|</li> |*| <li class="page-{elementUid}">|</li> |*| <li class="page-{elementUid} last">|</li>
								}
								ACT {
									ATagParams {
										wrap = class="level-1"
									}
									allWrap = <li class="active act page-{elementUid} first">|</li> |*| <li class="active act page-{elementUid}">|</li> |*| <li class="active act page-{elementUid} last">|</li>
								}
								ACTIFSUB {
									ATagParams {
										wrap = class="level-1"
									}
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="active act page-{field:uid} first has-submenu">| |*| <li class="active act page-{field:uid} has-submenu">| |*| <li class="active act page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li>
								}
								CUR {
									ATagParams {
										wrap = class="level-1"
									}
									allWrap = <li class="active cur page-{elementUid} first">|</li> |*| <li class="active cur page-{elementUid}">|</li> |*| <li class="active cur page-{elementUid} last">|</li>
								}
								CURIFSUB {
									ATagParams {
										wrap = class="level-1"
									}
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="active cur page-{field:uid} first has-submenu">| |*| <li class="active cur page-{field:uid} has-submenu">| |*| <li class="active cur page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li>
								}
								IFSUB {
									ATagParams {
										wrap = class="level-1"
									}
									before {
										cObject = TEXT
										cObject {
											dataWrap = <li class="page-{field:uid} first has-submenu">| |*| <li class="page-{field:uid} has-submenu">| |*| <li class="page-{field:uid} last has-submenu">|
										}
									}
									wrapItemAndSub = |</li>
								}
							}
							3 < .2
							3 {
								NO {
									ATagParams {
										wrap = class="level-2"
									}
								}
								ACT {
									ATagParams {
										wrap = class="level-2"
									}
								}
								ACTIFSUB {
									ATagParams {
										wrap = class="level-2"
									}
								}
								CUR {
									ATagParams {
										wrap = class="level-2"
									}
								}
								CURIFSUB {
									ATagParams {
										wrap = class="level-2"
									}
								}
								IFSUB {
									ATagParams {
										wrap = class="level-2"
									}
								}
							}
							4 < .2
							4 {
								NO {
									ATagParams {
										wrap = class="level-3"
									}
								}
								ACT {
									ATagParams {
										wrap = class="level-3"
									}
								}
								ACTIFSUB {
									ATagParams {
										wrap = class="level-3"
									}
								}
								CUR {
									ATagParams {
										wrap = class="level-3"
									}
								}
								CURIFSUB {
									ATagParams {
										wrap = class="level-3"
									}
								}
								IFSUB {
									ATagParams {
										wrap = class="level-3"
									}
								}
							}
							5 < .2
							5 {
								NO {
									ATagParams {
										wrap = class="level-4"
									}
								}
								ACT {
									ATagParams {
										wrap = class="level-4"
									}
								}
								ACTIFSUB {
									ATagParams {
										wrap = class="level-4"
									}
								}
								CUR {
									ATagParams {
										wrap = class="level-4"
									}
								}
								CURIFSUB {
									ATagParams {
										wrap = class="level-4"
									}
								}
								IFSUB {
									ATagParams {
										wrap = class="level-4"
									}
								}
							}
							6 < .2
							6 {
								NO {
									ATagParams {
										wrap = class="level-5"
									}
								}
								ACT {
									ATagParams {
										wrap = class="level-5"
									}
								}
								ACTIFSUB {
									ATagParams {
										wrap = class="level-5"
									}
								}
								CUR {
									ATagParams {
										wrap = class="level-5"
									}
								}
								CURIFSUB {
									ATagParams {
										wrap = class="level-5"
									}
								}
								IFSUB {
									ATagParams {
										wrap = class="level-5"
									}
								}
							}
							special = directory
							special {
								value {
									field = pages											
									ifEmpty {
										data = leveluid:{$start.navigation.entryLevel}
									}
								}
							}
						}
					}
				}
					// right
				20 = COA
				20 {
					wrap = <div class="top-bar-right">|</div>
						// Searchform, if is true start.foundation.topbar.searchform (here: {$start.foundation.topbar.searchform})
					10 = TEXT
					10 {
							// if is true start.foundation.topbar.searchform (here: {$start.foundation.topbar.searchform})
						if =
						if {
							isTrue = {$start.foundation.topbar.searchform}
						}
						value (

							<form action="index.php?id={$start.foundation.topbar.searchform.pid}&amp;no_cache=1" method="{$start.foundation.topbar.searchform.method}">
								<input type="hidden" name="no_cache" value="1">
								<input type="hidden" name="{$start.foundation.topbar.searchform.action.param}" value="{$start.foundation.topbar.searchform.action.value}">
								<input type="hidden" name="{$start.foundation.topbar.searchform.controller.param}" value="{$start.foundation.topbar.searchform.controller.value}">
								<ul class="menu">
									<li>
										<input type="search" name="{$start.foundation.topbar.searchform.param}" placeholder="{$start.foundation.topbar.searchform.placeholder}">
									</li>
									<li>
										<button type="button" class="button">
											{$start.foundation.topbar.searchform.button}
										</button>
									</li>
								</ul>
							</form>
)
					}
				}
			}
    }
  }
}

tt_content.menu {
  20 {
    startFoundationTopBar < start.lib.topbar
  }
}
// #t1577, 170930, dwildt, +
#[compatVersion = 8.7]
#	tt_content.menu {
#		20 {
#			startFoundationTopBar >
#		}
#	}
#	tt_content.startFoundationTopBar = COA
#	tt_content.startFoundationTopBar {
#		10 = < lib.stdheader
#		20 < start.lib.topbar
#	}
#[global]