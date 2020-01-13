start {
    // for proper comments only
  lib {
  }
    // topbar
  lib =
  lib {
			// <div ...><nav ...>HMENU, Searchform</nav></div>
    topbar = COA
    topbar {
				// <div class="{$start.foundation.topbar.position}"><nav ... >
			10 = COA
			10 {
					// <div class="{$start.foundation.topbar.position}"> if is true $start.foundation.topbar.position (here: {$start.foundation.topbar.position})
				10 = TEXT
				10 {
						// if is true $start.foundation.topbar.position (here: {$start.foundation.topbar.position})
					if = 
					if {
						isTrue = {$start.foundation.topbar.position}
					}
					value = <div class="{$start.foundation.topbar.position}">
				}
					// <nav class="top-bar" data-topbar data-options="custom_back_text:false;is_hover:{$start.foundation.topbar.is_hover}; ... >
				20 = TEXT
				20 {
					value = <nav class="top-bar" data-topbar data-options="custom_back_text:false;is_hover:{$start.foundation.topbar.is_hover};mobile_show_parent_link:{$start.foundation.topbar.mobile_show_parent_link};">
				}
			}
				// HMENU: 1, 2, 3, 4, 5, 6, wrap. Searchform.
			20 = COA
			20 {
					// HMENU: 1, 2, 3, 4, 5, 6, wrap
				10 = HMENU
				10 {
						// ul, section
					1 = TMENU
					1 {
						expAll    = 1
						collapse  = 0
						noBlur    = 1
							// ul, section
						stdWrap =
						stdWrap {
							wrap {
									// ul, section
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
												wrap = <h1>|</h1>
											}
											wrap  = <li class="name">|</li>
										}
											// li.menu-icon
										20 = TEXT
										20 {
											value = {$start.foundation.topbar.icon.label.default}
											lang {
												de = {$start.foundation.topbar.icon.label.de}
												en = {$start.foundation.topbar.icon.label.default}
											}
											wrap  (
												<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
												<li class="toggle-topbar menu-icon">
													<a href="#"><span>|</span></a>
												</li>
)
										}
											// <ul>|</ul>
										wrap =
										wrap {
											stdWrap {
												cObject = TEXT
												cObject {
													value     = |
													dataWrap  = <ul id="dropdown-{field:uid}" class="title-area">|</ul>
												}
											}
										}
									}
										// <section>|</section>
									20 = TEXT
									20 {
										value (
											<section class="top-bar-section">
												<ul class="{$start.foundation.topbar.section.position}">|</ul>
											</section>
)
									}
								}
							}
						}
						NO = 1
						NO {
							// #i0297, 201013, dwildt, 3-
#							ATagTitle {
#								field = abstract // description // subtitle // keywords // title
#							}
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
									dataWrap = <li class="divider divider-first"></li><li class="active act page-{field:uid} first has-dropdown">| |*| <li class="active act page-{field:uid} has-dropdown">| |*| <li class="active act page-{field:uid} last has-dropdown">|
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
									dataWrap = <li class="divider divider-first"></li><li class="active cur page-{field:uid} first has-dropdown">| |*| <li class="active cur page-{field:uid} has-dropdown">| |*| <li class="active cur page-{field:uid} last has-dropdown">|
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
									dataWrap = <li class="divider divider-first"></li><li class="page-{field:uid} first has-dropdown">| |*| <li class="page-{field:uid} has-dropdown">| |*| <li class="page-{field:uid} last has-dropdown">|
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
							dataWrap = <ul id="dropdown-{field:uid}" class="dropdown dropdown-{register:count_menuItems} page-{field:uid}">|</ul>
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
									dataWrap = <li class="active act page-{field:uid} first has-dropdown">| |*| <li class="active act page-{field:uid} has-dropdown">| |*| <li class="active act page-{field:uid} last has-dropdown">|
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
									dataWrap = <li class="active cur page-{field:uid} first has-dropdown">| |*| <li class="active cur page-{field:uid} has-dropdown">| |*| <li class="active cur page-{field:uid} last has-dropdown">|
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
									dataWrap = <li class="page-{field:uid} first has-dropdown">| |*| <li class="page-{field:uid} has-dropdown">| |*| <li class="page-{field:uid} last has-dropdown">|
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
					// Searchform, if is true start.foundation.topbar.searchform (here: {$start.foundation.topbar.searchform})
				20 = TEXT
				20 {
						// if is true start.foundation.topbar.searchform (here: {$start.foundation.topbar.searchform})
					if =
					if {
						isTrue = {$start.foundation.topbar.searchform}
					}
					value (
						<ul class="{$start.foundation.topbar.searchform.position} pad-left pad-right">
							<li class="has-form">
								<form action="index.php?id={$start.foundation.topbar.searchform.pid}&amp;no_cache=1" method="{$start.foundation.topbar.searchform.method}">
									<input type="hidden" name="no_cache" value="1">
									<div class="row collapse">
										<div class="large-8 small-9 columns">
											<input type="text" name="{$start.foundation.topbar.searchform.param}" placeholder="{$start.foundation.topbar.searchform.placeholder}">
											<input type="hidden" name="{$start.foundation.topbar.searchform.action.param}" value="{$start.foundation.topbar.searchform.action.value}">
											<input type="hidden" name="{$start.foundation.topbar.searchform.controller.param}" value="{$start.foundation.topbar.searchform.controller.value}">
										</div>
										<div class="large-4 small-3 columns">
											<button class="tiny expand hidesubmit" role="button">
												{$start.foundation.topbar.searchform.button}
											</button>
										</div>
									</div>
								</form>
							</li>
						</ul>
)
				}
			}
				// </nav></div>
			30 = COA
			30 {
					// </nav>
				10 = TEXT
				10 {
					value = </nav>
				}
					// </div> if is true $start.foundation.topbar.position (here: {$start.foundation.topbar.position})
				20 = TEXT
				20 {
						// if is true $start.foundation.topbar.position (here: {$start.foundation.topbar.position})
					if =
					if {
						isTrue = {$start.foundation.topbar.position}
					}
					value = </div>
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